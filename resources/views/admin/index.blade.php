@extends('admin.main', ['title' => 'Atualizar Seção'])

@section('main-content')
    <div class="title w-full bg-white relative h-16 flex justify-center items-center shadow-sm mb-4 rounded-l-lg">
        <h1 class="font-poppins text-xl">Menu</h1>
    </div>
    <div class="rounded-sm shadow-sm">
        <div class="w-full flex flex-col px-5 py-4 bg-white font-poppins border">
            <div class="flex flex-row justify-between items-center">
                <h2>Seções no menu</h2>
                <div class="flex flex-row items-center cursor-pointer rounded-3xl bg-pink-cherie text-white py-2.5 px-8 shadow-md transition duration-200 ease hover:bg-opacity-80">
                    <i class="fas fa-plus pr-2"></i>
                    <span>Adicionar Seção</span>
                </div>
            </div>
        </div>
        <div class="w-full bg-white">
            <ul>
                @foreach($sections as $section)
                    <x-section :section=$section />
                @endforeach
            </ul>
        </div>
    </div>
@endsection
