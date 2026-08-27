<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {
        $category = $request->input('category');

        $projects = Project::query()
            ->where('is_active', true)
            ->when(
                $category,
                fn ($query) => $query->where('category', $category)
            )
            ->orderBy('sort_order')
            ->orderByDesc('year')
            ->orderBy('title')
            ->get();

        $categories = Project::query()
            ->where('is_active', true)
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('pages.projetos.index', compact(
            'projects',
            'categories',
            'category',
        ));
    }

    public function show(Project $project): View
    {
        abort_unless($project->is_active, 404);

        $relatedProjects = Project::query()
            ->where('is_active', true)
            ->whereKeyNot($project->id)
            ->where('category', $project->category)
            ->orderBy('sort_order')
            ->limit(3)
            ->get();

        return view('pages.projetos.show', compact(
            'project',
            'relatedProjects',
        ));
    }
}