@extends('layouts.user')
@section('title') Confirmar compra @endsection
@section('content')
    <section class="flex-1 flex flex-col bg-gray-300 p-5">
        <div class="flex-1 flex flex-col lg:mx-64">
            <div class="my-2">
                <h2 class="font-semibold text-3xl">Confirmar compra</h2>
            </div>
            <div class="bg-white flex flex-col shadow p-5">
                <div>

                    <div class="flex lg:flex-row flex-col border-b pb-4">

                        <div class="w-1/4">
                            @if($product->images->count() > 0)
                                <img class="w-full" src="{{$product->images[0]->url}}" alt="">
                            @endif
                        </div>
                        <div class="flex-1 flex items-center">
                            <ul class="p-2">
                                <li class="font-semibold text-lg">{{$product->title}}</li>
                                <li class="text-gray-700">${{$subtotal}} x {{$quantity}} unidades</li>
                                <li class="text-gray-700">Total: ${{$total}} <span class="text-sm text-gray-600">(IVA incluido)</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <form id="confirm" method="post" action="{{route('buy')}}">
                    @csrf
                    {{-- Separator --}}
                    <div class="flex lg:flex-row">
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Dirección de envio
                            </label>
                            <select name="address_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                @foreach(auth()->user()->addresses as $address)
                                    <option value="{{$address->id}}">{{$address->street}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Separator --}}
                    <div class="flex lg:flex-row flex-col">
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Forma de pago
                            </label>
                            <select name="payout_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                @foreach($payouts as $payout)
                                    <option value="{{$payout->id}}">{{$payout->name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="quantity" value="{{$quantity}}">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                        </div>
                    </div>

                </form>
            </div>
            <div class="my-5 inline-flex">
                <button class="px-6 mx-1 py-4 bg-indigo-500 hover:bg-indigo-600 font-semibold text-white shadow"
                        form="confirm" type="submit">Confirmar compra
                </button>
                <a href="{{ url()->previous() }}"
                   class="px-6 mx-1 py-4 text-indigo-500 hover:text-indigo-600 font-semibold">Cancelar</a>
            </div>
        </div>
    </section>
@endsection
