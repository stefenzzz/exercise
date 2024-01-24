<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return <<<HTML
            <form method="POST" action="/skills-training-3/public/home">
                <input type="submit">
            </forM>
        HTML;
    }
    public function store()
    {
        return 'hello';
    }
}