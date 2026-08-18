<?php

namespace App\Http\Controllers;

use App\Models\Clipping;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClippingController extends Controller
{
    public function index(Request $request): View
    {
        $type = $request->input('type');

        $clippings = Clipping::query()
            ->active()
            ->when(
                $type,
                fn ($query) => $query->where('type', $type)
            )
            ->orderByDesc('published_at')
            ->orderBy('sort_order')
            ->paginate(9)
            ->withQueryString();

        return view('pages.clipping.index', compact(
            'clippings',
            'type',
        ));
    }
}