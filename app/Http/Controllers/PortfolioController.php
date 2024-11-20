<?php
namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // To show the list of portfolio items
    public function index()
{
    // Récupérer tous les éléments du portfolio
    $portfolios = Portfolio::all(); // Vous pouvez aussi personnaliser la requête si nécessaire

    // Passer la variable à la vue
    return view('portfolio.index', compact('portfolios')); // Utilisez le même nom que celui que vous utilisez dans la vue
}

    // To show the details of a single portfolio item
    public function details($id)
{
    // Récupérer le portfolio par ID
    $portfolio = Portfolio::find($id);

    // Vérifier si le portfolio existe
    if (!$portfolio) {
        abort(404); // Si le portfolio n'existe pas, afficher une erreur 404
    }

    // Passer la variable à la vue
    return view('portfolio.details', compact('portfolio'));
}
}




