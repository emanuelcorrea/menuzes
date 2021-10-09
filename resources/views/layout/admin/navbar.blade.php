<nav class="h-screen w-64 bg-pink-500 shadow-md">
    <div class="w-full py-2 flex justify-center cursor-pointer bg-pink-600">
        <img src="{{ asset('images/logo.png') }}" width="100">
    </div>
    <p class="m-4 ml-3 font-semibold text-xs text-gray-100">USUÁRIO</p>
    <div class="py-3 px-3 my-4 flex flex-row bg-pink-400">
        <img class="rounded-full w-10 h-10" src="http://dashboard.dracherie.com.br/sgi/view/sgi/geral/upload/139_perfil.jpg">
        <div class="flex flex-col text-white pl-2">
            <p class="text-sm">Emanuel da Silva Corrêa</p>
            <span class="text-xs text-pink-200">emanuel.correa@dracherie.com.br</span>
        </div>
    </div>
    <p class="mb-4 ml-3 font-semibold text-xs text-gray-100">GESTÃO</p>
    <ul class="flex flex-col">
        <li class="flex flex-row text-white bg-pink-600 hover:bg-opacity-50 font-medium cursor-pointer">
            <div class="py-3 px-4 flex flex-row justify-between items-center w-full">
                <div class="flex flex-row items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <p class="pl-2 text-sm">Home</p>
                </div>
            </div>
        </li>
        <li class="flex flex-col group text-white mb-4 bg-pink-600 cursor-pointer hover:text-pink-300">
            <div class="py-3 px-4 flex flex-row justify-between items-center w-full group-hover:bg-opacity-50">
                <div class="flex flex-row items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <p class="pl-2 text-sm">Cardápios</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div class="submenu top-0">
                <ul>
                    <li class="py-3 pl-10 hover:text-white text-sm">Listar Cardápios</li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
