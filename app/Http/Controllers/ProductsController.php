<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $jsonPath = public_path() . '/json/products.json';
        $productsJson = json_decode(file_get_contents($jsonPath), true);
        $products = collect($productsJson['products']);

        /* *
         * Imperative Solution
         */
        $totalCost = 0;

        // Loop over every product
        foreach ($products as $product) {
            $productType = $product['product_type'];

            // If product type is Lamp or Wallet
            if ($productType == 'Lamp' || $productType == 'Wallet') {
                // Loop over the variants and calculate cost
                foreach ($product['variants'] as $productVariant) {
                    $totalCost += $productVariant['price'];
                }
            }
        }

        /**
         * Declarative Solution
         */

        return view('products.index', compact('totalCost'));
    }
}
