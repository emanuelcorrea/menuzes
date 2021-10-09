@extends('layout.app', ['title' => $title ])

@section('extra')
    <style>
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="relative flex flex-row justify-between h-screen w-screen">
        @include('layout.admin.navbar')

        <main class="flex-1">
            <header class="absolute inset-y-0 h-14 bg-white w-full border-b-2 border-gray-100 shadow-xs">

            </header>
            <div class="main-content w-full min-h-screen bg-gray-100 pb-4">
                @yield('main-content')
            </div>
        </main>
    </div>
@endsection
