<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Category::class, 5)->create();
        // factory(Product::class, 100)->create();
        // factory(ProductImage::class, 200)->create();


        // Colección para 5 categorías y 100 productos nuevos.
        $categories = factory(Category::class, 5)->create();
        $categories->each(function ($category){ 
                $products = factory(Product::class, 20)->make();
                $category->products()->saveMany($products);

                // Creación de imagenes para los productos.
                $products ->each(function ($p){
                    $images = factory(ProductImage::class, 5)->make();
                    $p->images()->saveMany($images);
                });
            });

        

        // Colección para 3 usuarios nuevos.
        // $users = factory(App\User::class, 3)
        //     ->create()
        //     ->each(function ($user){
        //         $user->posts()->save(factory(App\Post::class)->make());
        //     });
    }
}
