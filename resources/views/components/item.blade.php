<li class="item" id="{{ $item['item_id'] }}" data-id="{{ $item['item_id'] }}" data-name="{{ $item['name'] }}" data-price="{{ $item['price'] }}" data-description="{{ $item['description'] }}" data-active="{{ $item['active'] }}" data-image-path="{{ $item['image_path'] }}">
    <div class="flex flex-row justify-between group hover:bg-pink-cherie hover:bg-opacity-20 shadow-sm" style="height: 94px;">
        <h4 class="w-20 flex items-center justify-center">{{ $item['item_id'] }}</h4>
        <div class="item-thumbnail flex flex-row items-center flex-1">
            @if ($item['image_path'])
                <div class="mr-4 h-full bg-center bg-cover w-[150px] bg-pink-cherie" style="background-image: url('{{ $item['image_path'] }}');"></div>
            @else
                <i class="far fa-image h-full flex items-center justify-center bg-pink-cherie text-white mr-4 text-2xl w-[150px]"></i>
            @endif
            <div class="flex flex-col gap-y-1 justify-start ">
                <h3 class="text-gray-900 text-md">{{ $item['name'] }}</h3>
                <p class="text-sm font-medium -mt-1">R$ @php echo str_replace('.', ',', number_format($item['price'], 2)); @endphp </p>
                @if ($item['description'])
                    <p class="text-xs font-normal text-gray-600">{{ $item['description'] }}</p>
                @endif
            </div>
        </div>
        <div class="sm:flex flex-row items-center gap-x-4 font-normal text-sm px-5 py-6">
            <button class="item-edit secundary-button">
                <span>Editar</span>
            </button>
            <button class="item-visible secundary-button">
                @if ($item['active'])
                    <i class="far fa-eye-slash pe-1"></i>
                    <span>Ocultar</span>
                @else
                    <i class="far fa-eye"></i>  
                    <span>Exibir</span>
                @endif
            </button>
            <button class="item-destroy secundary-button">
                <i class="far fa-trash-alt pe-1"></i>
                <span>Remover</span>
            </button>
        </div>
    </div>
</li>
