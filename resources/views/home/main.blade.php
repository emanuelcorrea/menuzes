@extends('layout.app', [ 'title' => 'Menus'])

@section('content')
    <main class="mx-auto flex flex-col items-center pt-16 h-screen bg-gradient-to-b from-pink-cherie to-pink-700">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" width="140" alt="Logo">
        </div>
        <p class="text-white text-center mt-10 font-poppins px-4 mb-6">Olá, seja bem-vind@! Acesse os nossos menus disponíveis abaixo!</p>
        <nav class="w-full px-6 lg:px-64">
            <ul>
                @foreach($sections as $section)
                    <li>
                        <a href="#" class="shadow-md py-6 bg-white text-center font-poppins mb-4 block focus:bg-pink-cherie focus:text-white transition duration-200 ease-in focus:shadow-xl">
                            {{ $section['name'] }}
                        </a>
                    </li>
                @endforeach
{{--                <li>--}}
{{--                    <a href="#" class="shadow-md py-6 bg-white text-center font-poppins mb-4 block focus:bg-pink-cherie focus:text-white transition duration-200 ease-in focus:shadow-xl">Belo Horizonte</a>--}}
{{--                </li>--}}
            </ul>
        </nav>
    </main>
@endsection
