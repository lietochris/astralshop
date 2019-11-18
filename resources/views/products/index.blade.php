@extends('layouts.user')
@section('title')
    Astral shop | Productos
@endsection
@section('content')
    <section class="flex-1 flex flex-row">
        <div class="lg:w-1/6 hidden bg-white lg:flex flex-col">
            <div class="p-2">
                <h2 class="font-semibold text-2xl">{{$search}}</h2>
                <span class="text-gray-600">{{$products->total()}} resultados</span>
            </div>
            <div class="p-2">
                <h2 class="font-semibold text-2xl">Categorias</h2>
                <ul class="list-disc mx-5 text-gray-700">
                    @foreach($categories as $category)
                        <li><a class="text-gray-600" href="{{route('products.index', ['category' => $category->name])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="flex-1 flex flex-col bg-gray-200 py-5 lg:px-20 ">
            @foreach($products as $product)
                <div class="max-w-sm w-full lg:max-w-full lg:flex mb-1">
                    @if ($product->images->count())
                        <a href="{{route('products.show', $product->id)}}"
                           class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                           style="background-image: url('{{$product->images[0]->url}}')">
                        </a>
                    @else
                        <a href="{{route('products.show', $product->id)}}"
                           class="h-48 lg:h-auto lg:w-48 bg-yellow-500 flex justify-center items-center">
                            <svg class="fill-current text-yellow-700 h-32 " id="Layer_1" height="512"
                                 viewBox="0 0 511.936 511.936" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m511.936 113.803h-123.983c6.502-10.123 10.292-22.146 10.292-35.045 0-35.866-29.179-65.045-65.045-65.045-32.288 0-60.749 16.681-77.231 41.873-16.483-25.193-44.944-41.873-77.231-41.873-35.866 0-65.045 29.179-65.045 65.045 0 12.899 3.79 24.922 10.292 35.045h-123.985v124.6h30.851v259.82h450.234v-259.82h30.851zm-178.737-70.091c19.324 0 35.045 15.721 35.045 35.045s-15.721 35.045-35.045 35.045h-62.231v-7.859c0-34.314 27.917-62.231 62.231-62.231zm-131.419 164.691h-54.045c2.05-30.952 24.526-56.394 54.045-62.944zm78.375-64.6v155.644l-24.188-19.042-24.188 19.042v-155.644zm-136.464-65.046c0-19.324 15.721-35.045 35.045-35.045 34.314 0 62.231 27.917 62.231 62.231v7.859h-62.231c-19.324.001-35.045-15.72-35.045-35.045zm-113.691 65.046h115.771c-16.438 16.86-26.941 39.529-28.095 64.6h-87.676zm117.042 157.374v59.414h-28.956v-59.414l14.479-12.626zm304.043 167.046h-390.234v-229.82h56.714v23.424l-29.479 25.708v103.057h88.956v-103.058l-29.478-25.708v-23.424h54.216v122.843l54.188-42.66 54.188 42.66v-122.842h140.93v229.82zm30.851-324.42v64.6h-171.78v-64.6z"/>
                            </svg>
                        </a>
                    @endif

                    <div
                        class="w-full border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <a href="{{route('products.show', $product->id)}}"
                               class="text-gray-900 font-bold text-xl mb-2">
                                {{$product->title}}
                            </a>
                            <p class="text-gray-700 text-2xl font-semibold">
                                ${{$product->price}}
                                @if($product->discount > 0)
                                    <span
                                        class="text-sm text-green-500">{{$product->discount * pow(10,2)}}% Descuento</span>
                                @endif
                            </p>
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm">
                                <p class="text-gray-600 leading-none">{{$product->stock}} Disponibles</p>
                                @foreach($product->categories as $category)
                                    <a href="{{route('products.index', ['category' => $category->name])}}"
                                       class="inline-block bg-gray-200 rounded-full px-3 py-1 mt-2 text-sm font-semibold text-gray-700 mr-2">#{{$category->name}}</a>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $products->links() }}

        </div>
    </section>
@endsection
