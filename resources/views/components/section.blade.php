<li id="{{ $section['id'] }}" class="section flex border border-t-0 flex-row items-center justify-between" data-id="{{ $section['id'] }}" data-name="{{ $section['name'] }}" data-description="{{ $section['description'] }}" data-active="{{ $section['active'] }}">
    <a href="{{ url("admin/section/{$section['id']}") }}" class="flex flex-1 flex-row justify-between group sm:hover:bg-pink-cherie sm:hover:bg-opacity-20 px-5 py-4 cursor-pointer shadow-sm items-center">
        <div class="flex flex-row items-center">
            <i class="far fa-image h-[72px] w-[120px] flex items-center justify-center bg-pink-cherie text-white rounded-sm mr-4 shadow-sm text-2xl"></i>
            <div>
                <h3 class="text-gray-900">{{ $section['name'] }}</h3>
                <p class="text-sm">{{ count($section->sectionItems) }} {{ count($section->sectionItems) > 1 || count($section->sectionItems) == 0 ? 'pratos' : 'prato' }}</p>
            </div>
        </div>
        <div class="sm:hidden relative inline-block text-left">
            <button type="button" class="section-options w-full rounded-md border border-gray-50 p-2 bg-white text-sm font-medium text-gray-700 focus:outline-none focus:text-pink-cherie focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-pink-cherie" id="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </button>
            <div class="hidden option-modal z-10 transition ease duration-100 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <ul>
                    <li class="text-gray-700 px-4 py-3 text-sm flex flex-row items-center gap-x-2"
                        data-section-modal="modal-section-edit">Editar</li>
                    <li class="text-gray-700 px-4 py-3 text-sm flex flex-row items-center gap-x-2"
                        data-section-modal="modal-section-visible">
                        <i class="far fa-eye-slash pe-1 w-4 text-center"></i>
                        <span>Ocultar</span>
                    </li>
                    <li class="text-gray-700 px-4 py-3 text-sm flex flex-row items-center gap-x-2"
                        data-section-modal="modal-section-destroy">
                        <i class="far fa-trash-alt pe-1 w-4 text-center"></i>
                        <span>Remover</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden sm:flex flex-row items-center gap-x-4 font-normal text-sm">
            <button class="section-edit w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white focus:ring-2 focus:ring-offset-2 focus:ring-pink-cherie transition duration-200 ease">
                <span>Editar</span>
            </button>
            <button class="section-visible w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white focus:ring-2 focus:ring-offset-2 focus:ring-pink-cherie transition duration-200 ease" id="section-visible"
                data-modal-function="visible">
                @if ($section['active'])
                    <i class="far fa-eye-slash pe-1"></i>
                    <span>Ocultar</span>
                @else
                    <i class="far fa-eye"></i>  
                    <span>Exibir</span>
                @endif
            </button>
            <button class="section-destroy w-28 px-16 py-2.5 rounded-3xl text-pink-cherie bg-white hover:text-white hover:bg-pink-cherie group-hover:shadow-sm z-10 flex flex-row justify-center items-center gap-x-2 focus:bg-pink-cherie focus:text-white focus:ring-2 focus:ring-offset-2 focus:ring-pink-cherie transition duration-200 ease" id="section-remove"
                data-modal-function="destroy">
                <i class="far fa-trash-alt pe-1"></i>
                <span>Remover</span>
            </button>
        </div>
    </a>
</li>
