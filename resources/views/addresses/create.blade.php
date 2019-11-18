@extends('layouts.user')
@section('title') Agrega un domicilio @endsection
@section('content')
    <section class="flex-1 flex flex-col bg-gray-300 p-5">
        <div class="flex-1 flex flex-col lg:mx-64">
            <div class="my-2">
                <h2 class="font-semibold text-3xl">Agrega un domicilio</h2>
            </div>
            <div class="bg-white flex flex-col shadow p-5">
                <form id="addresses" method="post" action="{{route('addresses.store')}}">
                    @csrf

                    {{-- Separator --}}
                    <div class="flex lg:flex-row">
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Calle
                            </label>
                            <input name="street" value="{{ old('street') }}"
                                   class="{{$errors->has('street') ? 'border-red-500': ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text">
                            @if($errors->has('street'))
                                <p class="text-red-500 text-xs italic">{{$errors->first('street')}}</p>
                            @endif
                        </div>
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Código postal
                            </label>
                            <input name="zipcode" value="{{ old('zipcode') }}"
                                   class="{{$errors->has('zipcode') ? 'border-red-500': ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text">
                            @if($errors->has('zipcode'))
                                <p class="text-red-500 text-xs italic">{{$errors->first('zipcode')}}</p>
                            @endif
                        </div>
                    </div>

                    {{-- Separator --}}
                    <div class="flex lg:flex-row flex-col">
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Estado
                            </label>
                            <input name="state" value="{{ old('state') }}"
                                   class="{{$errors->has('state') ? 'border-red-500': ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text">
                            @if($errors->has('state'))
                                <p class="text-red-500 text-xs italic">{{$errors->first('state')}}</p>
                            @endif
                        </div>
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Delegación / Municipio
                            </label>
                            <input name="town" value="{{ old('town') }}"
                                   class="{{$errors->has('town') ? 'border-red-500': ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text">
                            @if($errors->has('town'))
                                <p class="text-red-500 text-xs italic">{{$errors->first('town')}}</p>
                            @endif
                        </div>
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Colonia
                            </label>
                            <input name="suburb" value="{{ old('suburb') }}"
                                   class="{{$errors->has('suburb') ? 'border-red-500': ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text">
                            @if($errors->has('suburb'))
                                <p class="text-red-500 text-xs italic">{{$errors->first('suburb')}}</p>
                            @endif
                        </div>
                    </div>

                    <div class="flex lg:flex-row">
                        <div class="flex-1 p-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Telefono
                            </label>
                            <input name="phone" value="{{ old('phone') }}"
                                   class="{{$errors->has('phone') ? 'border-red-500': ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   type="text">
                            @if($errors->has('phone'))
                                <p class="text-red-500 text-xs italic">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                    </div>

                    {{-- Optional --}}
                    <div class="flex lg:flex-row">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Datos adicionales (opcional)
                            </label>
                            <textarea name="additional_directions" rows="6" cols="100"
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="my-5 inline-flex">
              <button class="px-6 mx-1 py-4 bg-indigo-500 hover:bg-indigo-600 font-semibold text-white shadow" form="addresses" type="submit">Guardar</button>
              <a href="{{ url()->previous() }}" class="px-6 mx-1 py-4 text-indigo-500 hover:text-indigo-600 font-semibold">Cancelar</a>
            </div>
        </div>
    </section>
@endsection
