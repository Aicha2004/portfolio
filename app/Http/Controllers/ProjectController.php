<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
{
    // Récupérer tous les éléments du portfolio
    $portfolios = Portfolio::all(); // Vous pouvez personnaliser la requête si nécessaire

    // Passer la variable à la vue
    return view('portfolio.index', compact('portfolios')); // Utilisez le même nom que celui que vous utilisez dans la vue
}
}



