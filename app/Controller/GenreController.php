<?php

namespace App\Controller;

use App\Models\Genre;

class GenreController extends BaseController
{
    public function index()
    {
        $genres = new Genre();

        return $this->renderView('genres', [
            'genres' => $genres->findAll()
        ]);
    }
}