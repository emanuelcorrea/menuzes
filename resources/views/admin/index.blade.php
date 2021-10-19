@extends('admin.main', ['title' => 'Atualizar Seção'])

@section('main-content')
    <div class="title w-full bg-white relative h-16 flex justify-center items-center shadow-sm mb-4 rounded-l-lg">
        <h1 class="font-poppins text-xl">Menu</h1>
    </div>
    <div class="rounded-sm shadow-sm">
        <div class="w-full flex flex-col px-5 py-4 bg-white font-poppins border">
            <div class="flex flex-row justify-between items-center text-sm sm:text-base">
                <h2>Seções no menu</h2>
                <button id="section-add" type="button" class="primary-button">
                    <i class="fas fa-plus pr-2"></i>
                    <span>Adicionar Seção</span>
                </button>
            </div>
        </div>
        <div class="w-full bg-white">
            <ul>
                @if (count($sections))
                    @foreach($sections as $section)
                        <x-section :section=$section />
                    @endforeach
                @else
                    <li class="flex items-center justify-center py-10 border border-t-0 text-sm text-gray-500">Não há seções criadas para o menu.</li>
                @endif
            </ul>
        </div>
    </div>
@endsection
