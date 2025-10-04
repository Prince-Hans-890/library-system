<?php
namespace Controllers;

use Core\Http\Request;
use Core\Http\Response;

class BookController
{
    public function catalog(Request $request)
    {
        return new Response(view('books/catalog', [
            'title' => 'Catalog',
        ]));
    }
}
