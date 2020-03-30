<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $news = News::with('category')
            ->where('is_active', true)
            ->ByCategory($request->has('category_id_filter') ? $request->get('category_id_filter') : false)
            ->latest()
            ->paginate(5)
            ->appends([
                'category_id_filter' => $request->get('category_id_filter')
            ]);
        $categories = Category::all();

        return view('welcome', compact('news', 'categories'));
    }
}
