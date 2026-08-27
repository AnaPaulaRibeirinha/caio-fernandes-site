<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreClientRequest;
use App\Http\Requests\Admin\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->input('search'));
        $status = $request->input('status');

        $clients = Client::query()
            ->when($search, function ($query) use ($search) {
                $query->where(
                    'name',
                    'like',
                    "%{$search}%"
                );
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
            ->orderBy('name')
            ->paginate(12)
            ->withQueryString();

        return view('admin.clients.index', compact(
            'clients',
            'search',
            'status',
        ));
    }

    public function create(): View
    {
        return view('admin.clients.create');
    }

    public function store(
        StoreClientRequest $request
    ): RedirectResponse {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request
                ->file('logo')
                ->store('clients', 'public');
        }

        $data['is_featured'] =
            $request->boolean('is_featured');

        $data['is_active'] =
            $request->boolean('is_active');

        Client::create($data);

        return redirect()
            ->route('admin.clients.index')
            ->with('success', 'Cliente cadastrado com sucesso.');
    }

    public function edit(Client $client): View
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(
        UpdateClientRequest $request,
        Client $client
    ): RedirectResponse {
        $data = $request->validated();

        if (
            $request->boolean('remove_logo')
            && !$request->hasFile('logo')
        ) {
            $this->deleteLogo($client->logo);
            $data['logo'] = null;
        }

        if ($request->hasFile('logo')) {
            $this->deleteLogo($client->logo);

            $data['logo'] = $request
                ->file('logo')
                ->store('clients', 'public');
        }

        unset($data['remove_logo']);

        $data['is_featured'] =
            $request->boolean('is_featured');

        $data['is_active'] =
            $request->boolean('is_active');

        $client->update($data);

        return redirect()
            ->route('admin.clients.index')
            ->with('success', 'Cliente atualizado com sucesso.');
    }

    public function destroy(Client $client): RedirectResponse
    {
        $this->deleteLogo($client->logo);

        $client->delete();

        return redirect()
            ->route('admin.clients.index')
            ->with('success', 'Cliente removido com sucesso.');
    }

    private function deleteLogo(?string $logo): void
    {
        if (!$logo) {
            return;
        }

        if (Storage::disk('public')->exists($logo)) {
            Storage::disk('public')->delete($logo);
        }
    }
}