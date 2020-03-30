<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $news = News::with('category')
            ->latest()
            ->paginate(10);

        return view('admin.index', compact('news'));
    }
}
