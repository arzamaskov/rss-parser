<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

/**
 * MainController
 *
 */
class MainController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }
}
