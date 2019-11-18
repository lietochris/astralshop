<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Order;
use App\Payout;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addCart(Request $request)
    {

    }

    public function showConfirmForm(Request $request)
    {
        $product = Product::find($request->product_id);
        $payouts = Payout::all();

        $subtotal = $request->quantity * $product->price;
        $tax = 0.15 * $subtotal;
        $discount = $product->discount * $subtotal;
        $total = ($subtotal + $tax) - $discount;

        return view('orders.confirm_buy', [
            'product' => $product,
            'payouts' => $payouts,
            'quantity' => $request->quantity,
            'subtotal' => $subtotal,
            'total' => $total,
            'tax' => $tax,
            'discount' => $discount
        ]);
    }

    /**
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function confirm_buy(Request $request)
    {
        //Find the product object to attach
        $product = Product::find($request->product_id);

        //Calculate variables
        $total = $request->quantity * $product->price;
        $tax = 0.15 * $total;
        $discount = $product->discount * $total;

        // Create the order
        $order = Order::create([
            'user_id' => Auth::id(),
            'payout_id' => $request->payout_id,
            'address_id' => $request->address_id,
            'status' => "Pagado",
            'total' => (($tax + $total) - $discount)
        ]);

        // Attach the many to many relationship
        $order->products()->attach($product, [
            'quantity' => $request->quantity,
            'total' => $total
        ]);

        $product->stock = $product->stock - $request->quantity;
        $product->save();

        return redirect(route('products.show', $product->id));
    }
}
