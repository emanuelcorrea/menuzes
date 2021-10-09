@extends('layout.app', ['title' => 'Login'])

@section('content')
    <main class="mx-auto flex flex-col items-center pt-16 h-screen bg-gradient-to-b from-pink-cherie to-pink-700">
        <div class="logo mt-20 mb-8">
            <img src="{{ asset('images/logo.png') }}" width="140" alt="Logo">
        </div>
        <p class="text-white text-center px-4 mb-4 font-poppins text-sm">Informe as credenciais de login nos campos abaixo:</p>
        <form class="w-full h-full px-6 xl:w-96 sm:px-0" method="GET" action="{{ url('admin')  }}">
            @csrf

            <div class="flex flex-col gap-y-4 mb-5">
                <div class="relative block">
                    <input type="text" class="
                    block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-pink-400 rounded-2xl
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-pink-400 focus:ring-pink-400 text-gray-700
                    py-5 px-4 placeholder-gray-500 shadow-md w-full pl-12 peer" placeholder="E-mail" required>
                    <i class="far fa-envelope inline-table absolute inset-y-5 text-xl inset-x-4 text-gray-600 peer-focus:text-pink-600"></i>
                </div>
                <div class="relative block">
                    <input type="password" class="
                    block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-pink-400 rounded-2xl
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-pink-400 focus:ring-pink-400 text-gray-700
                    py-5 px-4 placeholder-gray-500 shadow-md w-full pl-12" placeholder="Senha" required>
                    <i class="fas fa-lock inline-table absolute inset-y-5 text-xl inset-x-4 text-gray-600"></i>
                </div>
            </div>

            <input type="submit" class="
                w-full py-5 mt-6 rounded-xl bg-pink-cherie font-medium text-gray-50 shadow-md
                focus:text-white cursor-pointer hover:bg-pink-700 hover:shadow-xl
                transition ease-in duration-100" value="Entrar">
        </form>
    </main>
@endsection
