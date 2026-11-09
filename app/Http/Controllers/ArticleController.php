<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    private array $articles = [
        1 => ["title" => "Article 1", "content" => "Content for article 1"],
        2 => ["title" => "Article 2", "content" => "Content for article 2"],
        3 => ["title" => "Article 3", "content" => "Content for article 3"],
        4 => ["title" => "Article 4", "content" => "Content for article 4"],
        5 => ["title" => "Article 5", "content" => "Content for article 5"],
        6 => ["title" => "Article 6", "content" => "Content for article 6"],
    ];

    public function index()
    {
        return view('welcome', ['articles' => $this->articles]);
    }
}