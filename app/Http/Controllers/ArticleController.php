<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // Méthode pour afficher la liste des articles
    public function index()
    {
        // Récupérer tous les articles (ou appliquer une pagination si nécessaire)
        $articles = Article::all();

        // Retourner la vue 'articles.index' avec la liste des articles
        return view('articles.index', ['articles' => $articles]);
    }

    // Méthode pour afficher les détails d'un article
    public function show($id)
    {
        // Trouver l'article avec l'ID fourni ou renvoyer une erreur 404 si l'article n'existe pas
        $article = Article::findOrFail($id);

        // Retourner la vue 'articles.show' avec les détails de l'article
        return view('articles.show', ['article' => $article]);
    }
}
