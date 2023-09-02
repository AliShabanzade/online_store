<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $carts = Cart::where('user_id', $user->id)->get();

        $order = Order::factory(1)->create([
            'user_id'=>$user->id
        ]);

        foreach ($carts as $cart) {
            OrderItem::factory()->create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'qty' => $cart->qty,
                'price' => $cart->product->price * $cart->qty
            ]);
            $cart->delete();
        }
    }
}
