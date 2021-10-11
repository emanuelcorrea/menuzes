<li id="{{ $section['id'] }}">
    <a href="{{ url("admin/section/show/{$section['id']}") }}" class="flex flex-row justify-between group hover:bg-pink-cherie hover:bg-opacity-20 px-5 py-4 cursor-pointer shadow-sm">
        <div class="flex flex-row items-center">
            <i class="far fa-image py-5 px-12 bg-pink-cherie text-white rounded-sm mr-4 text-2xl"></i>
            <div>
                <h3 class="text-gray-900">{{ $section['name'] }}</h3>
                <p class="text-sm">{{ count($section->sectionItems) }} {{ count($section->sectionItems) > 1 ? 'pratos' : 'prato' }}</p>
            </div>
        </div>
        <div class="flex flex-row items-center gap-x-4 font-normal text-sm">
            <button class="w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie hover:text-bg-pink-600 group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white transition duration-200 ease">
                <span>Editar</span>
            </button>
            <button class="w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie hover:text-bg-pink-600 group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white transition duration-200 ease">
                <i class="far fa-eye-slash pe-1"></i>
                <span>Ocultar</span>
            </button>
            <button class="w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie hover:text-bg-pink-600 group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white transition duration-200 ease">
                <i class="far fa-trash-alt pe-1"></i>
                <span>Remover</span>
            </button>
        </div>
    </a>
</li>
