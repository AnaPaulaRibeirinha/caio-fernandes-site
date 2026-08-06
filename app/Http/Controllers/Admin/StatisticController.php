<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStatisticRequest;
use App\Http\Requests\Admin\UpdateStatisticRequest;
use App\Models\Statistic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatisticController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->input('search'));
        $status = $request->input('status');

        $statistics = Statistic::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('value', 'like', "%{$search}%")
                        ->orWhere('label', 'like', "%{$search}%");
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
            ->orderBy('id')
            ->paginate(10)
            ->withQueryString();

        return view('admin.statistics.index', compact(
            'statistics',
            'search',
            'status',
        ));
    }

    public function create(): View
    {
        return view('admin.statistics.create');
    }

    public function store(
        StoreStatisticRequest $request
    ): RedirectResponse {
        Statistic::query()->create(
            $this->prepareData($request->validated())
        );

        return redirect()
            ->route('admin.statistics.index')
            ->with('success', 'Indicador cadastrado com sucesso.');
    }

    public function edit(Statistic $statistic): View
    {
        return view('admin.statistics.edit', compact('statistic'));
    }

    public function update(
        UpdateStatisticRequest $request,
        Statistic $statistic
    ): RedirectResponse {
        $statistic->update(
            $this->prepareData($request->validated())
        );

        return redirect()
            ->route('admin.statistics.index')
            ->with('success', 'Indicador atualizado com sucesso.');
    }

    public function destroy(Statistic $statistic): RedirectResponse
    {
        $statistic->delete();

        return redirect()
            ->route('admin.statistics.index')
            ->with('success', 'Indicador removido com sucesso.');
    }

    private function prepareData(array $data): array
    {
        $data['value'] = trim($data['value']);
        $data['label'] = trim($data['label']);

        $data['is_active'] =
            (bool) ($data['is_active'] ?? false);

        return $data;
    }
}