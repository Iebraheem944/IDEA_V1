<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        dd(":)");
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }
        return abort(404);
    }
}
