@extends('layouts.user')
@section('title')
    {{$product->title}} en Astral Shop
@endsection
@section('content')
    <section class="bg-gray-200 px-5 pt-2 flex">
        <a class="font-semibold text-gray-500" href="{{ route('products.index') }}">Regresar</a>
    </section>
    <section class="flex-1 flex flex-col p-5 bg-gray-200">
        <div class="flex-1 bg-white flex lg:flex-row flex-col shadow">
            <div class="w-full max-w-5xl bg-white ">

            @if($product->images->count() > 0)
                <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($product->images as $image)
                                <div class="swiper-slide">
                                    <img class="lg:h-full" src="{{$image->url}}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                @else
                    <div class="w-full h-full bg-gray-400 justify-center items-center flex">
                        <span class="text-3xl text-gray-500">Sin Fotos para mostrar</span>
                    </div>
                @endif
            </div>
            <div class="lg:w-1/4 w-full shadow bg-white flex flex-col ">
                <div class="p-5">
                    <h1 class="text-3xl font-semibold">{{$product->title}}</h1>
                </div>
                <div class="px-5">
                    <p class="text-2xl">${{$product->price}}
                        @if($product->discount > 0)
                            <span
                                class="text-sm text-green-500">{{$product->discount * pow(10,2)}}% Descuento</span>
                        @endif
                    </p>
                    @if($product->stock > 0)
                        <span class="text-sm text-gray-600">Stock Disponible</span>
                    @else
                        <span class="text-sm text-red-500">Sin disponibilidad</span>
                    @endif

                </div>
                <div class="p-5">
                    <p>{{$product->description}}</p>
                </div>
                <div class="p-5">
                    @if($product->stock > 0)
                        <form method="post" action="{{route('buy.showConfirmForm')}}">
                            @csrf
                            <div class="flex flex-row justify-center items-center">
                                <div class="flex-1 flex justify-center items-center">
                                    <input name="quantity" value="1"
                                           class="shadow w-full appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                           type="number" placeholder="Cantidad" min="1" max="{{$product->stock}}">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                </div>
                                <div class="flex-1">
                                    <p class="text-center text-gray-600">({{$product->stock}} Unidades)</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="bg-indigo-500 hover:bg-indigo-600 px-4 py-2 w-full rounded shadow text-white font-semibold"
                                    type="submit">Comprar
                                </button>
                            </div>
                        </form>
                    @else
                        <p class="text-gray-500 text-center">Proximamente habrá más</p>
                    @endif
                    @foreach($product->categories as $category)
                        <a href="{{route('products.index', ['category' => $category->name])}}"
                           class="inline-block bg-gray-200 rounded-full px-3 py-1 mt-2 text-sm font-semibold text-gray-700 mr-2">#{{$category->name}}</a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <section class="flex-1 flex flex-col p-5 bg-gray-200">
        <div class="flex-1 bg-white p-5 flex flex-col">
            <div class="my-5">
                <h2 class="font-semibold text-2xl">Comentarios</h2>
            </div>
            <div>
                <ul>
                    @foreach($product->commentaries as $commentary)
                        <li class="px-4 py-2 bg-gray-200">{{$commentary->comment}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
