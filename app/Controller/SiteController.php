<?php

namespace App\Controller;

class SiteController extends BaseController
{
    public function about()
    {
        return $this->renderView('simple', [
            'title' => 'About page',
            'content' => 'This is an about page!'
        ]);
    }

    public function contact()
    {
        return $this->renderView('simple', [
            'title' => 'Contact page',
            'content' => 'Contact us!'
        ]);
    }
}