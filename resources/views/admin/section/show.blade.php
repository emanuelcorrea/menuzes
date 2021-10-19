@extends('admin.main', ['title' => $section['name']])

@section('main-content')
    <div class="rounded-sm shadow-sm" data-section-id="{{ $section['id'] }}">
        <div class="w-full flex flex-row bg-white font-poppins border">
            <a href="{{ url('admin') }}" class="w-20 flex items-center justify-center bg-white transition duration-200 ease hover:bg-pink-600 hover:text-white cursor-pointer">
                <i class="fas fa-long-arrow-alt-left text-xl"></i>
            </a>
            <div class="flex-1 px-5 py-4 flex flex-row justify-between items-center">
                <h2>{{ $section['name'] }}</h2>
                <button id="item-add" class="primary-button">
                    <i class="fas fa-plus pr-2"></i>
                    <span>Adicionar Prato</span>
                </button>
            </div>
        </div>
        <div class="w-full bg-white">
            <ul>
                @if(count($section->sectionItems))
                    @foreach($section->sectionItems as $item)
                        <x-item :item=$item />
                    @endforeach
                @else
                    <li class="flex items-center justify-center py-10 border border-t-0 text-sm text-gray-500">Não há itens criados para o menu.</li>
                @endif
            </ul>
        </div>
    </div>
    {{-- <x-modal.item-add :section=$section />
    <x-modal.item-edit />
    <x-modal.item-visible />
    <x-modal.item-destroy /> --}}
@endsection
