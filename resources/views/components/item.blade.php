<li id="{{ $item['item_id'] }}">
    <div class="flex flex-row justify-between group hover:bg-pink-cherie hover:bg-opacity-20 shadow-sm" style="height: 94px;">
        <h4 class="w-20 flex items-center justify-center">{{ $item['item_id'] }}</h4>
        <div class="flex flex-row items-center flex-1">
            @if ($item['image_path'])
                <div class="mr-4 h-full bg-center bg-cover" style="background-image: url('{{ $item['image_path'] }}'); width: 150px"></div>
            @else
                <i class="far fa-image h-full flex items-center justify-center bg-pink-cherie text-white mr-4 text-2xl"
                style="width: 150px"></i>
            @endif
            <div>
                <h3 class="text-gray-900 mb-1 text-md">{{ $item['name'] }}</h3>
                <p class="text-sm font-medium">R$ @php echo str_replace('.', ',', number_format($item['price'], 2)); @endphp </p>
            </div>
        </div>
        <div class="flex flex-row items-center gap-x-4 font-normal text-sm px-5 py-6">
            <button class="w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie hover:text-bg-pink-600 group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white transition duration-200 ease"
                data-micromodal-trigger="modal-item-edit">
                <span>Editar</span>
            </button>
            <button class="w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie hover:text-bg-pink-600 group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white transition duration-200 ease"
                data-micromodal-trigger="modal-item-visible">
                <i class="far fa-eye-slash pe-1"></i>
                <span>Ocultar</span>
            </button>
            <button class="w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie hover:text-bg-pink-600 group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white transition duration-200 ease"
                data-micromodal-trigger="modal-item-remove">
                <i class="far fa-trash-alt pe-1"></i>
                <span>Remover</span>
            </button>
        </div>
    </div>
</li>
