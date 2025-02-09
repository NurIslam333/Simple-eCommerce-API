<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $category1 = Category::firstOrCreate(['name' => 'men\'s clothing']);
        $category2 = Category::firstOrCreate(['name' => 'jewelery']);
        $category3 = Category::firstOrCreate(['name' => 'electronics']);

        Product::create([
            'title' => 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops',
            'description' => 'Your perfect pack for everyday use...',
            'price' => 109.95,
            'category_id' => $category1->id,
            'image' => 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg',
            'rating_rate' => 3.9,
            'rating_count' => 120
        ]);

        Product::create([
            'title' => 'Mens Casual Premium Slim Fit T-Shirts',
            'description' => 'Slim-fitting style, contrast raglan long sleeve...',
            'price' => 22.3,
            'category_id' => $category1->id,
            'image' => 'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg',
            'rating_rate' => 4.1,
            'rating_count' => 259
        ]);

        Product::create([
            'title' => 'Mens Cotton Jacket',
            'description' => 'Great outerwear jackets for Spring/Autumn/Winter...',
            'price' => 55.99,
            'category_id' => $category1->id,
            'image' => 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg',
            'rating_rate' => 4.7,
            'rating_count' => 500
        ]);

        Product::create([
            'title' => 'John Hardy Women\'s Legends Naga Gold & Silver Dragon Station Chain Bracelet',
            'description' => 'From our Legends Collection...',
            'price' => 695,
            'category_id' => $category2->id,
            'image' => 'https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg',
            'rating_rate' => 4.6,
            'rating_count' => 400
        ]);

        Product::create([
            'title' => 'Solid Gold Petite Micropave ',
            'description' => 'Satisfaction Guaranteed. Return or exchange any order within 30 days...',
            'price' => 168,
            'category_id' => $category2->id,
            'image' => 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg',
            'rating_rate' => 3.9,
            'rating_count' => 70
        ]);

        Product::create([
            'title' => 'White Gold Plated Princess',
            'description' => 'Classic Created Wedding Engagement Solitaire Diamond Promise Ring for Her...',
            'price' => 9.99,
            'category_id' => $category2->id,
            'image' => 'https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg',
            'rating_rate' => 3.0,
            'rating_count' => 400
        ]);

        Product::create([
            'title' => 'WD 2TB Elements Portable External Hard Drive - USB 3.0',
            'description' => 'USB 3.0 and USB 2.0 Compatibility...',
            'price' => 64,
            'category_id' => $category3->id,
            'image' => 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg',
            'rating_rate' => 4.3,
            'rating_count' => 500
        ]);
    }
}
