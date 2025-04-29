<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = [
            'food-beverage' => [
                'Biscuit',
                'Chips',
                'Soft Drink',
                'Mineral Water',
                'Energy Drink'
            ],
            'beauty-health' => [
                'Shampoo',
                'Soap',
                'Toothpaste',
                'Face Cream',
                'Body Lotion'
            ],
            'home-care' => [
                'Detergent',
                'Dish Soap',
                'Floor Cleaner',
                'Tissue',
                'Air Freshener'
            ],
            'baby-kid' => [
                'Diapers',
                'Baby Wipes',
                'Baby Shampoo',
                'Baby Food',
                'Baby Bottle'
            ]
        ];

        return view('products', compact('categories'));
    }
}