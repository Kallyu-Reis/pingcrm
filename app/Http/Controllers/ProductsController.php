<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ProductsController extends Controller
{
    public function index(Organization $organization) 
    {
        return Inertia::render('Products/Index', [
            'products' => DB::table('products')->orderBy('id')->paginate(10)
        ]);
    }
}
