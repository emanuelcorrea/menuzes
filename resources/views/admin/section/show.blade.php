@extends('admin.main', ['title' => 'Bebidas'])

@section('main-content')
    <div class="rounded-sm shadow-sm">
        <div class="w-full flex flex-row bg-white font-poppins border">
            <a href="{{ url('admin') }}" class="w-20 flex items-center justify-center bg-white transition duration-200 ease hover:bg-pink-600 hover:text-white cursor-pointer">
                <i class="fas fa-long-arrow-alt-left text-xl"></i>
            </a>
            <div class="flex-1 px-5 py-4 flex flex-row justify-between items-center">
                <h2>Bebidas</h2>
                <div class="flex flex-row items-center cursor-pointer rounded-3xl bg-pink-cherie text-white py-2.5 px-8 shadow-md transition duration-200 ease hover:bg-opacity-80">
                    <i class="fas fa-plus pr-2"></i>
                    <span>Adicionar Prato</span>
                </div>
            </div>
        </div>
        <div class="w-full bg-white">
            <ul>
                @foreach($items as $item)
                    <x-item :item=$item />
                @endforeach
            </ul>
        </div>
    </div>
@endsection
