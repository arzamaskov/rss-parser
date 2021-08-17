<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * MainController.
 */
class MainController extends Controller
{
    /**
     * index.
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }

    public function parse(Request $request)
    {
        $param = [
            'url' => $request['url'],
        ];
        return view('index', $param);
    }
}
