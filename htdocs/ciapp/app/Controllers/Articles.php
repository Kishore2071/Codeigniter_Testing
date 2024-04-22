<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index(): string
    {

        $model = new ArticleModel();

        $data = $model->findAll();

        return view("Articles/index.php", ["articles" => $data]);

    }

    public function show($id)
    {
        $model = new ArticleModel();
        $article = $model->find($id);
        // dd($article);
        return view("Articles/show.php", ["article" => $article]);

    }

    public function new()
    {
        return view("Articles/new");
    }

    public function create()
    {
            
    }

}
