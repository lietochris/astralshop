<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Admin user
        DB::table('users')->insert([
            'name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // The database is populated
        factory(App\User::class, 9)->create();
        factory(App\Address::class, 10)->create();
        $products = factory(App\Product::class, 10)->create();
        factory(App\Image::class, 10)->create();
        factory(App\Category::class, 10)->create();
        $comments = factory(App\Comment::class, 10)->create();
        factory(App\Payout::class, 10)->create();
        $orders = factory(App\Order::class, 10)->create();

        App\Product::all()->each(function ($product) use ($orders) {
            $product->orders()->attach(
                $orders->random(rand(1, 10))->pluck('id')->toArray(),
                [
                    'quantity' => 5,
                    'total' => $product->price * 5
                ]
            );
        });

        App\Product::all()->each(function ($product) use ($comments) {
            $product->categories()->attach(
                $comments->random(rand(1, 10))->pluck('id')->toArray()
            );
        });
    }
}
