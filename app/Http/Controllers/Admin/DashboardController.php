<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clipping;
use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Illuminate\View\View;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totals = [
            'services' => Service::query()->count(),
            'projects' => Project::query()->count(),
            'clients' => Client::query()->count(),
            'clippings' => Clipping::query()->count(),
            'statistics' => Statistic::query()->count(),
        ];

        $recentProjects = Project::query()
            ->latest()
            ->limit(5)
            ->get();

        $recentClippings = Clipping::query()
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact(
            'totals',
            'recentProjects',
            'recentClippings',
        ));
    }
}