@extends('layouts.user')
@section('title') Compras - Astral Shop @endsection
@section('content')
    <section class="flex-1 flex flex-col bg-gray-300 p-5">
        <div class="flex-1 flex flex-col lg:mx-64">
            <div class="my-2">
                <h2 class="font-semibold text-3xl">Compras</h2>
            </div>
            @if($orders->count() > 0)
                @foreach($orders as $order)
                    <div class="bg-white flex lg:flex-row flex-col shadow p-5">
                        <div class="flex-1">
                            <div>
                                <h3 class="font-semibold text-xl {{$order->status == "Pendiente" ? 'text-red-500' : 'text-indigo-500'}}">{{$order->status}}</h3>
                                <p class="text-gray-600">{{ date('d-m-Y', strtotime($order->created_at))}}</p>
                            </div>
                            @foreach($order->products as $product)
                                <div class="flex lg:flex-row flex-col">
                                    <div class="lg:w-1/4 w-full">
                                        @if($product->images->count() > 0)
                                            <a href="{{route('products.show', $product->id)}}">
                                                <img class="h-32 w-full" src="{{$product->images[0]->url}}" alt="">
                                            </a>
                                        @else
                                            <a href="{{route('products.show', $product->id)}}"
                                               class="h-32 bg-yellow-500 flex justify-center items-center">
                                                <svg class="fill-current text-yellow-700 h-16 " id="Layer_1"
                                                     height="512"
                                                     viewBox="0 0 511.936 511.936" width="512"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m511.936 113.803h-123.983c6.502-10.123 10.292-22.146 10.292-35.045 0-35.866-29.179-65.045-65.045-65.045-32.288 0-60.749 16.681-77.231 41.873-16.483-25.193-44.944-41.873-77.231-41.873-35.866 0-65.045 29.179-65.045 65.045 0 12.899 3.79 24.922 10.292 35.045h-123.985v124.6h30.851v259.82h450.234v-259.82h30.851zm-178.737-70.091c19.324 0 35.045 15.721 35.045 35.045s-15.721 35.045-35.045 35.045h-62.231v-7.859c0-34.314 27.917-62.231 62.231-62.231zm-131.419 164.691h-54.045c2.05-30.952 24.526-56.394 54.045-62.944zm78.375-64.6v155.644l-24.188-19.042-24.188 19.042v-155.644zm-136.464-65.046c0-19.324 15.721-35.045 35.045-35.045 34.314 0 62.231 27.917 62.231 62.231v7.859h-62.231c-19.324.001-35.045-15.72-35.045-35.045zm-113.691 65.046h115.771c-16.438 16.86-26.941 39.529-28.095 64.6h-87.676zm117.042 157.374v59.414h-28.956v-59.414l14.479-12.626zm304.043 167.046h-390.234v-229.82h56.714v23.424l-29.479 25.708v103.057h88.956v-103.058l-29.478-25.708v-23.424h54.216v122.843l54.188-42.66 54.188 42.66v-122.842h140.93v229.82zm30.851-324.42v64.6h-171.78v-64.6z"/>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <ul class="p-2">
                                            <li class="font-semibold text-lg">
                                                <a href="{{route('products.show', $product->id)}}">
                                                    {{$product->title}}
                                                </a>
                                            </li>
                                            <li class="text-gray-700">
                                                ${{$product->pivot->total}} x {{$product->pivot->quantity}} unidades
                                            </li>
                                            <li class="text-gray-700">Total: ${{$order->total}} <span
                                                    class="text-sm text-gray-600">(IVA incluido)</span></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="lg:w-1/5 w-full flex lg:justify-end justify-center items-center">
                            <a class="text-blue-500 hover:text-blue-600" href="{{route('orders.show', $order->id)}}">
                                Ver detalles
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="flex flex-1 flex-col justify-center items-center bg-white shadow">
                    <svg class="fill-current h-32 w-32 mb-5 text-gray-700" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 330 330" xml:space="preserve">
                        <path id="XMLID_86_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165c90.981,0,165-74.019,165-165S255.982,0,165,0z M165,300
                            C90.561,300,30,239.44,30,165S90.561,30,165,30c74.439,0,135,60.561,135,135S239.439,300,165,300z"/>
                        <path id="XMLID_89_" d="M164.999,179.823C164.998,179.823,165,179.823,164.999,179.823c-23.238,0-45.087,9.05-61.518,25.482
                            c-5.858,5.857-5.858,15.355,0,21.213c2.929,2.929,6.768,4.394,10.607,4.394s7.678-1.465,10.606-4.394
                            c10.766-10.766,25.08-16.694,40.305-16.694c15.225,0,29.539,5.929,40.305,16.694c5.857,5.857,15.355,5.857,21.213,0
                            c5.858-5.857,5.858-15.355,0-21.213C210.085,188.873,188.238,179.823,164.999,179.823z"/>
                        <path id="XMLID_90_" d="M115.14,147.14c3.73-3.72,5.86-8.88,5.86-14.14s-2.13-10.42-5.86-14.141C111.42,115.14,106.26,113,101,113
                            c-5.27,0-10.42,2.14-14.14,5.859C83.14,122.58,81,127.74,81,133s2.14,10.42,5.86,14.14c3.72,3.72,8.88,5.86,14.14,5.86
                            C106.26,153,111.42,150.86,115.14,147.14z"/>
                        <path id="XMLID_91_" d="M229,113c-5.27,0-10.42,2.14-14.14,5.859C211.13,122.58,209,127.74,209,133s2.13,10.42,5.86,14.14
                            c3.72,3.72,8.88,5.86,14.14,5.86c5.26,0,10.42-2.141,14.14-5.86c3.73-3.72,5.86-8.88,5.86-14.14s-2.13-10.42-5.86-14.141
                            C239.42,115.14,234.26,113,229,113z"/>
                    </svg>
                    <h2 class="text-3xl text-center text-gray-700">Aun no has hecho compras.</h2>
                </div>
            @endif
        </div>
    </section>
@endsection
