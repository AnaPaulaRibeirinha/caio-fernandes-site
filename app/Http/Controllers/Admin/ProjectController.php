<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProjectRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->input('search'));
        $status = $request->input('status');
        $category = $request->input('category');

        $categories = Project::query()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        $projects = Project::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('title', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%")
                        ->orWhere(
                            'short_description',
                            'like',
                            "%{$search}%"
                        );
                });
            })
            ->when(
                $category,
                fn ($query) => $query->where('category', $category)
            )
            ->when(
                $status === 'active',
                fn ($query) => $query->where('is_active', true)
            )
            ->when(
                $status === 'inactive',
                fn ($query) => $query->where('is_active', false)
            )
            ->orderBy('sort_order')
            ->orderByDesc('year')
            ->orderBy('title')
            ->paginate(10)
            ->withQueryString();

        return view('admin.projects.index', compact(
            'projects',
            'categories',
            'search',
            'status',
            'category',
        ));
    }

    public function create(): View
    {
        return view('admin.projects.create');
    }

    public function store(
        StoreProjectRequest $request
    ): RedirectResponse {
        $data = $this->prepareData($request->validated());

        if ($request->hasFile('cover_image')) {
            $path = $request
                ->file('cover_image')
                ->store('projects', 'public');

            $data['cover_image'] = 'storage/' . $path;
        }

        Project::query()->create($data);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Projeto cadastrado com sucesso.');
    }

    public function edit(Project $project): View
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(
        UpdateProjectRequest $request,
        Project $project
    ): RedirectResponse {
        $data = $this->prepareData(
            $request->validated(),
            $project
        );

        if (
            $request->boolean('remove_cover_image')
            && !$request->hasFile('cover_image')
        ) {
            $this->deleteCoverImage($project->cover_image);
            $data['cover_image'] = null;
        }

        if ($request->hasFile('cover_image')) {
            $this->deleteCoverImage($project->cover_image);

            $path = $request
                ->file('cover_image')
                ->store('projects', 'public');

            $data['cover_image'] = 'storage/' . $path;
        }

        unset($data['remove_cover_image']);

        $project->update($data);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Projeto atualizado com sucesso.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        $this->deleteCoverImage($project->cover_image);

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Projeto removido com sucesso.');
    }

    private function prepareData(
        array $data,
        ?Project $project = null
    ): array {
        $baseSlug = !empty($data['slug'])
            ? Str::slug($data['slug'])
            : Str::slug($data['title']);

        $data['slug'] = $this->generateUniqueSlug(
            $baseSlug,
            $project?->id
        );

        $data['is_featured'] =
            (bool) ($data['is_featured'] ?? false);

        $data['is_active'] =
            (bool) ($data['is_active'] ?? false);

        return $data;
    }

    private function generateUniqueSlug(
        string $baseSlug,
        ?int $ignoreId = null
    ): string {
        $slug = $baseSlug;
        $counter = 2;

        while (
            Project::query()
                ->when(
                    $ignoreId,
                    fn ($query) => $query->whereKeyNot($ignoreId)
                )
                ->where('slug', $slug)
                ->exists()
        ) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }

    private function deleteCoverImage(?string $coverImage): void
    {
        if (!$coverImage) {
            return;
        }

        /*
         * Não remove as imagens estáticas usadas inicialmente pelo seeder.
         * Somente arquivos que estão dentro de public/storage.
         */
        if (!Str::startsWith($coverImage, 'storage/')) {
            return;
        }

        $storagePath = Str::after($coverImage, 'storage/');

        if (Storage::disk('public')->exists($storagePath)) {
            Storage::disk('public')->delete($storagePath);
        }
    }
}