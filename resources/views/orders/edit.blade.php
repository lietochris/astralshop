@extends('layouts.user')
@section('title') Compras - Astral Shop @endsection
@section('content')
    <section class="flex-1 flex flex-col bg-gray-300 p-5">
        <div class="flex-1 flex flex-col lg:mx-64">
            <div class="my-2">
                <h2 class="font-semibold text-3xl">Compras</h2>
            </div>
            @foreach($orders as $order)
                <div class="bg-white flex flex-row shadow p-5">
                    <div class="flex-1">
                        <div>
                            <h3 class="font-semibold text-xl {{$order->status == "Pendiente" ? 'text-red-500' : 'text-indigo-500'}}">{{$order->status}}</h3>
                            <p class="text-gray-600">{{ date('d-m-Y', strtotime($order->created_at))}}</p>
                        </div>
                        <div>
                            <p>Total de productos: {{$order->products->count()}}</p>
                        </div>
                        @if($order->status == "Pagado")
                            <div>
                                <p>Pagado con: {{$order->payout->name}}</p>
                            </div>
                        @endif
                        <div>
                            <ul>
                                @foreach($order->products as $product)
                                    <li>{{$product->title}} - {{$product->pivot->quantity}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="flex-1 flex justify-end items-center">
                        <a class="text-blue-500 hover:text-blue-600" href="{{route('orders.show', $order->id)}}">
                            Ver detalles
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
