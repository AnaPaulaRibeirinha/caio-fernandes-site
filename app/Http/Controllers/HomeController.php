<?php

namespace App\Http\Controllers;

use App\Models\Clipping;
use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Illuminate\View\View;
use App\Models\Client;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = Service::query()
            ->active()
            ->featured()
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        $statistics = Statistic::query()
            ->active()
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        $projects = Project::query()
            ->active()
            ->featured()
            ->orderBy('sort_order')
            ->latest('year')
            ->limit(3)
            ->get();

        $clippings = Clipping::query()
            ->active()
            ->featured()
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();
        
        $clients = Client::query()
            ->where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('pages.home', compact(
            'services',
            'statistics',
            'projects',
            'clippings',
            'clients',
        ));
    }
}