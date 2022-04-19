<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // 追加
use Auth; // 追加

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = User::find(Auth::id())->books;
        return view('home', ['books' => $books]);
    }
}
