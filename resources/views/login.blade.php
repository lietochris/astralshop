<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Astral shop | login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<main class="min-h-screen flex flex-col">
    <nav class="flex bg-yellow-400 items-center justify-between flex-wrap p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current text-yellow-900 h-12 w-12 mr-2" width="54" height="54"
                 viewBox="0 0 512 512.00016" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m501.183594 424.746094c-12.792969-32.53125-36.699219-72.609375-69.15625-115.953125 5.105468-16.984375 7.792968-34.757813 7.792968-52.769531 0-101.371094-82.472656-183.839844-183.84375-183.839844-17.980468 0-35.78125 2.640625-52.832031 7.746094-43.125-32.285157-83.003906-56.105469-115.453125-68.941407-36.78125-14.550781-62.703125-14.652343-77.050781-.304687-13.957031 13.957031-21.144531 46.90625 23.855469 124.628906 28.613281 49.425781 72.117187 105.757812 124.328125 161.304688h-23.082031c-4.140626 0-7.5 3.359374-7.5 7.5 0 4.140624 3.359374 7.5 7.5 7.5h37.410156c4.453125 4.582031 8.953125 9.160156 13.511718 13.71875 35.5 35.5 71.882813 67.808593 107.082032 95.289062-12.332032 2.816406-24.984375 4.242188-37.769532 4.242188-93.101562 0-168.84375-75.742188-168.84375-168.84375 0-4.140626.152344-8.328126.449219-12.445313.300781-4.132813-2.804687-7.722656-6.933593-8.023437-4.117188-.296876-7.726563 2.804687-8.023438 6.9375-.328125 4.476562-.492188 9.03125-.492188 13.53125 0 101.375 82.472657 183.84375 183.84375 183.84375 17.992188 0 35.757813-2.597657 52.832032-7.714844 23.511718 17.601562 46.351562 32.890625 67.878906 45.355468 44.699219 25.875 74.582031 34.496094 94.566406 34.492188 14.765625 0 24.128906-4.707031 30.058594-10.636719 14.289062-14.289062 14.246094-40.066406-.128906-76.617187zm-76.539063-176.222656h-24.386719c-12.976562 0-23.53125 10.558593-23.53125 23.53125 0 12.976562 10.558594 23.53125 23.53125 23.53125h19.824219c-7.789062 32.171874-24.941406 61.765624-49.621093 84.542968-3.042969 2.808594-3.234376 7.554688-.425782 10.597656 1.476563 1.601563 3.492188 2.414063 5.511719 2.414063 1.820313 0 3.644531-.65625 5.085937-1.988281 10.289063-9.496094 19.367188-20.085938 27.140626-31.496094 20.484374 37.117188 21.59375 57.042969 15.234374 63.402344-6.835937 6.835937-29.480468 5.054687-72.523437-20.453125-40.351563-23.910157-87.6875-62.195313-133.292969-107.796875-10.371094-10.375-20.359375-20.835938-29.890625-31.285156h76.121094c12.707031 0 24.65625-4.949219 33.644531-13.933594l8.582032-8.585938c6.15625-6.15625 14.335937-9.542968 23.039062-9.542968h94.339844c.820312 5.605468 1.363281 11.296874 1.617187 17.0625zm-.003906 15c-.257813 5.730468-.808594 11.425781-1.644531 17.0625h-22.738282c-4.703124 0-8.53125-3.828126-8.53125-8.53125 0-4.703126 3.828126-8.53125 8.53125-8.53125zm-168.664063-176.34375c79.480469 0 146.296876 55.207031 164.152344 129.28125h-91.441406c-12.707031 0-24.65625 4.949218-33.644531 13.9375l-8.585938 8.582031c-6.152343 6.15625-14.332031 9.542969-23.035156 9.542969h-89.496094c-24.726562-28.390626-45.726562-56.3125-61.320312-81.703126 14.507812-23.261718 34.5625-42.789062 58.246093-56.644531 25.71875-15.042969 55.152344-22.996093 85.125-22.996093zm-151.824218 65.164062c-20.464844-37.109375-21.542969-57.019531-15.207032-63.351562 6.34375-6.347657 26.257813-5.253907 63.355469 15.210937-18.867187 12.914063-35.234375 29.273437-48.148437 48.140625zm386.554687 338.414062c-14.050781 14.046876-53.863281 4.242188-106.503906-26.230468-56.878906-32.929688-123.265625-86.128906-186.933594-149.796875s-116.867187-130.054688-149.796875-186.933594c-30.472656-52.636719-40.277344-92.453125-26.230468-106.503906 16.328124-16.324219 73.382812-2.226563 164.847656 64.671875-6.574219 2.699218-12.996094 5.789062-19.230469 9.25-31.03125-18.089844-70.496094-34.855469-88.519531-16.828125-18.496094 18.496093-.339844 59.570312 18.152344 90.773437 24.535156 41.402344 63.632812 89.789063 110.097656 136.25 46.460937 46.464844 94.851562 85.566406 136.25 110.097656 21.980468 13.027344 48.859375 25.890626 69.292968 25.886719 8.574219 0 16.019532-2.265625 21.484376-7.730469 18.019531-18.023437 1.285156-57.457031-16.871094-88.589843 3.445312-6.234375 6.539062-12.652344 9.242187-19.234375 66.945313 91.523437 81.019531 148.617187 64.71875 164.917968zm0 0"/>
                <path
                    d="m191.851562 215.429688h40.078126c12.976562 0 23.53125-10.554688 23.53125-23.53125 0-12.972657-10.558594-23.53125-23.53125-23.53125-4.140626 0-7.5 3.359374-7.5 7.5 0 4.144531 3.359374 7.5 7.5 7.5 4.703124 0 8.53125 3.828124 8.53125 8.53125 0 4.707031-3.828126 8.53125-8.53125 8.53125h-40.078126c-4.703124 0-8.53125-3.828126-8.53125-8.53125 0-4.703126 3.828126-8.53125 8.53125-8.53125h8.015626c4.140624 0 7.5-3.355469 7.5-7.5 0-4.140626-3.359376-7.5-7.5-7.5h-8.015626c-12.976562 0-23.53125 10.558593-23.53125 23.53125 0 12.976562 10.554688 23.53125 23.53125 23.53125zm0 0"/>
                <path
                    d="m255.976562 151.304688h40.078126c4.140624 0 7.5-3.359376 7.5-7.5 0-4.140626-3.359376-7.5-7.5-7.5h-40.078126c-4.140624 0-7.5 3.359374-7.5 7.5 0 4.140624 3.359376 7.5 7.5 7.5zm0 0"/>
                <path
                    d="m320.101562 296.617188h-24.046874c-4.140626 0-7.5 3.359374-7.5 7.5 0 4.144531 3.359374 7.5 7.5 7.5h24.046874c4.140626 0 7.5-3.355469 7.5-7.5 0-4.140626-3.359374-7.5-7.5-7.5zm0 0"/>
            </svg>
            <a href="{{route('index')}}" class="font-semibold text-xl text-yellow-900 tracking-tight">Astral Shop</a>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        </div>
    </nav>
    <div class="flex-1 flex bg-yellow-400">

    </div>
    <div class="flex-1 bg-gray-100 flex justify-center ">
        <div class="lg:w-1/3 w-full lg:px-0 px-3 absolute" style="transform: translate(0,-10rem)">
            <form action="{{route('login')}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Correo electronico
                    </label>
                    <input name="email"
                        class="shadow appearance-none border {{$errors->has('email') ? 'border-red-500': ''}} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Correo electronico">
                    @if($errors->has('email'))
                        <p class="text-red-500 text-xs italic">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Contraseña
                    </label>
                    <input name="password"
                        class="shadow appearance-none border {{$errors->has('password') ? 'border-red-500': ''}} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="******************">
                    @if($errors->has('password'))
                        <p class="text-red-500 text-xs italic">{{$errors->first('password')}}</p>
                    @endif
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Entrar
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{route('register')}}">
                       Registarse
                    </a>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>