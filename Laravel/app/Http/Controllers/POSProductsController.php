<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSProductsController extends Controller
{
    public function food_beverage() {
        return view('pos.category.food_beverage');
    }
    public function beauty_health() {
        return view('pos.category.beauty_health');
    }
    public function home_care() {
        return view('pos.category.home_care');
    }
    public function baby_kid() {
        return view('pos.category.baby_kid');
    }
}
