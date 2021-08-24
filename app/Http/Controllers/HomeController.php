<?php

namespace App\Http\Controllers;

use App\Models\NewsSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function news_section()
    {
        $news = NewsSection::all()->sortByDesc('date');
        $news_pagination = array(
            ['type' => 5, 'size' => ['width' => 255, 'height' => 345]],
            ['type' => 1, 'size' => ['width' => 255, 'height' => 120]],
            ['type' => 4, 'size' => ['width' => 255, 'height' => 340]],
            ['type' => 3, 'size' => ['width' => 255, 'height' => 330]],
            ['type' => 2, 'size' => ['width' => 255, 'height' => 140]],
            ['type' => 1, 'size' => ['width' => 255, 'height' => 120]],
            ['type' => 2, 'size' => ['width' => 255, 'height' => 140]]
        );
        return view('home', compact('news', 'news_pagination'));
    }
}
