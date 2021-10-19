@extends('layout.app', ['title' => $title ])

@section('extra')
    <style>
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="relative flex flex-col sm:flex-row justify-between h-screen w-screen">
        @include('layout.admin.navbar')

        <main class="flex-1 bg-gray-100">
            <header class="absolute inset-y-0 h-14 sm:bg-white w-full border-b-2 border-gray-100 shadow-xs">

            </header>
            <div class="main-content w-full min-h-screen pb-4 px-3 sm:px-0 pt-2 sm:pt-0">
                @yield('main-content')
            </div>
        </main>
    </div>
    <script src="{{ mix('js/admin.js') }}"></script>
@endsection
