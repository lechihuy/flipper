<?php

use App\Models\Category;
use App\Models\Product;

if (! function_exists('primary_menu')) {
    function primary_menu() {
        return Category::parents();
    }
}

if (! function_exists('pinned_product')) {
    function pinned_product() {
        return Product::where('is_pinned', 1)->first();
    }
}