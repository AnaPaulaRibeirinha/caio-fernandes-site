<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->input('search'));
        $status = $request->input('status');

        $services = Service::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('title', 'like', "%{$search}%")
                        ->orWhere(
                            'short_description',
                            'like',
                            "%{$search}%"
                        );
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
            ->orderBy('sort_order')
            ->orderBy('title')
            ->paginate(10)
            ->withQueryString();

        return view('admin.services.index', compact(
            'services',
            'search',
            'status',
        ));
    }

    public function create(): View
    {
        return view('admin.services.create');
    }

    public function store(
        StoreServiceRequest $request
    ): RedirectResponse {
        $data = $this->prepareData($request->validated());

        Service::query()->create($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Serviço cadastrado com sucesso.');
    }

    public function edit(Service $service): View
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(
        UpdateServiceRequest $request,
        Service $service
    ): RedirectResponse {
        $data = $this->prepareData(
            $request->validated(),
            $service
        );

        $service->update($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Serviço atualizado com sucesso.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Serviço removido com sucesso.');
    }

    private function prepareData(
        array $data,
        ?Service $service = null
    ): array {
        $baseSlug = $data['slug']
            ? Str::slug($data['slug'])
            : Str::slug($data['title']);

        $data['slug'] = $this->generateUniqueSlug(
            $baseSlug,
            $service?->id
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
            Service::query()
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
}