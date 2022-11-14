<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Shop;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        $shops = Shop::all();
        $categories = Category::all();
        return view('index', ['areas' => $areas, 'shops' => $shops, 'categories' => $categories, 'input' => '']);
    }
}
