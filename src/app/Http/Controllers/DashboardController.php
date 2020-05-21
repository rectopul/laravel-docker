<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Customization;
use App\Models\Product;
use App\Models\Option;
use App\Models\ProductCustomization;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $types = Type::all();
        //dd($types);
        return view('pages.dashboard.dashboard', compact('types'));
    }
}
