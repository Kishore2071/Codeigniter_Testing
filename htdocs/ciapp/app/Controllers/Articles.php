<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index(): string
    {

        // $db = db_connect();

        // $db->listTables();

        // $data = [
        //     ["title" => "One","content" => "The First"],
        //     ["title" => "Two","content" => "Some Content"]
        // ];

        $model = new ArticleModel();

        $data = $model->findAll();

        return view("Articles/index.php", ["articles" => $data]);

    }
}
