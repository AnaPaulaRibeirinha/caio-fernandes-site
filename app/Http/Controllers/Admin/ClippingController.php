<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreClippingRequest;
use App\Http\Requests\Admin\UpdateClippingRequest;
use App\Models\Clipping;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ClippingController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->input('search'));
        $status = $request->input('status');
        $featured = $request->input('featured');

        $clippings = Clipping::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('title', 'like', "%{$search}%")
                        ->orWhere('source', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%");
                });
            })
            ->when(
                $status === 'active',
                fn ($query) => $query->where('is_active', true)
            )
            ->when(
                $status === 'inactive',
                fn ($query) => $query->where('is_active', false)
            )
            ->when(
                $featured === 'yes',
                fn ($query) => $query->where('is_featured', true)
            )
            ->when(
                $featured === 'no',
                fn ($query) => $query->where('is_featured', false)
            )
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(10)
            ->withQueryString();

        return view('admin.clippings.index', compact(
            'clippings',
            'search',
            'status',
            'featured',
        ));
    }

    public function create(): View
    {
        return view('admin.clippings.create');
    }

    public function store(
        StoreClippingRequest $request
    ): RedirectResponse {
        $data = $this->prepareData($request->validated());

        if ($request->hasFile('image')) {
            $path = $request
                ->file('image')
                ->store('clippings', 'public');

            $data['image'] = 'storage/' . $path;
        }

        Clipping::query()->create($data);

        return redirect()
            ->route('admin.clippings.index')
            ->with('success', 'Publicação cadastrada com sucesso.');
    }

    public function edit(Clipping $clipping): View
    {
        return view('admin.clippings.edit', compact('clipping'));
    }

    public function update(
        UpdateClippingRequest $request,
        Clipping $clipping
    ): RedirectResponse {
        $data = $this->prepareData(
            $request->validated(),
            $clipping
        );

        if (
            $request->boolean('remove_image')
            && !$request->hasFile('image')
        ) {
            $this->deleteImage($clipping->image);
            $data['image'] = null;
        }

        if ($request->hasFile('image')) {
            $this->deleteImage($clipping->image);

            $path = $request
                ->file('image')
                ->store('clippings', 'public');

            $data['image'] = 'storage/' . $path;
        }

        unset($data['remove_image']);

        $clipping->update($data);

        return redirect()
            ->route('admin.clippings.index')
            ->with('success', 'Publicação atualizada com sucesso.');
    }

    public function destroy(Clipping $clipping): RedirectResponse
    {
        $this->deleteImage($clipping->image);

        $clipping->delete();

        return redirect()
            ->route('admin.clippings.index')
            ->with('success', 'Publicação removida com sucesso.');
    }

    private function prepareData(
        array $data,
        ?Clipping $clipping = null
    ): array {
        $baseSlug = !empty($data['slug'])
            ? Str::slug($data['slug'])
            : Str::slug($data['title']);

        $data['slug'] = $this->generateUniqueSlug(
            $baseSlug,
            $clipping?->id
        );

        $data['source'] = !empty($data['source'])
            ? trim($data['source'])
            : null;

        $data['external_url'] = !empty($data['external_url'])
            ? trim($data['external_url'])
            : null;

        $data['published_at'] = !empty($data['published_at'])
            ? $data['published_at']
            : null;

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
            Clipping::query()
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

    private function deleteImage(?string $image): void
    {
        if (!$image) {
            return;
        }

        /*
         * Imagens da pasta public/assets são permanentes.
         * Só apagamos uploads salvos em public/storage.
         */
        if (!Str::startsWith($image, 'storage/')) {
            return;
        }

        $storagePath = Str::after($image, 'storage/');

        if (Storage::disk('public')->exists($storagePath)) {
            Storage::disk('public')->delete($storagePath);
        }
    }
}