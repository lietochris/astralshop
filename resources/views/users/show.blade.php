@extends('layouts.user')
@section('title') Mis datos @endsection
@section('content')
    <section class="flex-1 flex flex-col bg-gray-300 p-5">
        <div class="flex-1 flex flex-col lg:mx-64">
            <div class="my-2">
                <h2 class="font-semibold text-3xl">Mis datos</h2>
            </div>
            <div class="my-2">
                <h3 class="text-xl font-semibold my-2">Datos de cuenta</h3>
                <div class="bg-white shadow flex flex-row">
                    <div class="p-3 w-1/4 border-r text-gray-700">Correo electronico</div>
                    <div class="p-3 flex-1 text-gray-700">{{$user->email}}</div>
                </div>
            </div>

            <div class="my-2">
                <h3 class="text-xl font-semibold my-2">Datos personales</h3>
                <div class="bg-white shadow flex flex-row">
                    <div class="p-3 w-1/4 border-r text-gray-700">Nombre y apellidos</div>
                    <div class="p-3 flex-1 text-gray-700">{{$user->name}} {{$user->last_name}}</div>
                </div>
            </div>

            <div class="my-2">
                <h3 class="text-xl font-semibold my-2">Direcciones</h3>

                <div class="bg-white shadow flex flex-col">
                    @foreach($user->addresses as $address)
                        <div class="p-3 border-b">
                            <ul>
                                <li class="font-semibold text-gray-800">{{$address->street}}</li>
                                <li class="text-gray-700">{{$address->zipcode}}</li>
                                <li class="text-gray-700">{{$address->suburb}}</li>
                                <li class="text-gray-700">{{$address->state}} - {{$address->town}}</li>
                                <li class="text-gray-700">Tel: {{$address->phone}}</li>
                                <li class="text-gray-700">{{$address->additional_directions}}</li>
                            </ul>
                        </div>
                    @endforeach
                    <div class="p-5">
                        <a class="text-indigo-500 hover:text-indigo-600" href="{{route('addresses.create')}}">Agregar domicilio</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
