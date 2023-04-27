<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Pet Pudim</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

    <header>
        <nav class="bg-purple-200 text-white align-middle" x-data="{navbarOpen:false}">
            <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4 justify-between">
                <div class="w-full mt-2 lg:inline-flex lg:w-auto lg:mt-0"
                    :class="{'hidden':!navbarOpen,'flex':navbarOpen}"
                    >
    
                    <ul class="flex flex-col w-full space-y-2  lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-2">
    
                        <li class="relative"
                            @mouseleave="dropdownOpen = false"
                            x-data="{dropdownOpen:false}">

                            <button href="#" class=
                                            "flex outline-none focus:outline-none 
                                                px-4 py-2 font-medium text-white 
                                                rounded-md  
                                                mt-3
                                                hover:bg-purple-100" 
                                                @mouseover="dropdownOpen = !dropdownOpen"
                                                >
                                                <svg xmlns="http://www.w3.org/2000/svg" 
                                                    class="icon icon-tabler icon-tabler-menu-2" 
                                                    width="24" height="24" viewBox="0 0 24 24" 
                                                    stroke-width="2" stroke="currentColor" fill="none" 
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    @mouseover="dropdownOpen = !dropdownOpen"
                                                    @mouseleave="dropdownOpen = !dropdownOpen">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                    </path>
                                                    <line x1="4" y1="6" x2="20" y2="6"></line>
                                                    <line x1="4" y1="12" x2="20" y2="12"></line>
                                                    <line x1="4" y1="18" x2="20" y2="18"></line>
                                                </svg>
                                                {{-- x-on:click="dropdownOpen = !dropdownOpen" --}}
                            </button>
    
                            <div class=" 
                                        left-0 p-2 mt-1 
                                        bg-white rounded-md 
                                        shadow lg:absolute"
                                        :class="{'hidden':!dropdownOpen,'flex flex-col':dropdownOpen}"
                                        >
                                        
    
                                <ul class="space-y-2 lg:w-48">
                                    <li class="">
                                    <a href="{{route('pets.index')}}" class="flex p-2 font-medium 
                                    text-gray-600 rounded-md  
                                    hover:bg-gray-100 hover:text-black">
                                    Home   
                                    </a>
                                    </li>
                                    <li class="space-y-2 lg:w-48">
                                    <a href="{{route('usuario.showUser')}}" class="flex p-2 font-medium 
                                    text-gray-600 rounded-md  
                                    hover:bg-gray-100 hover:text-black">
                                    Profile
                                    </a>
                                    </li>
                                    <li class="space-y-2 lg:w-48">
                                        <form action="{{route('logout')}}" method="POST" class="flex p-2 font-medium 
                                            text-gray-600 rounded-md  
                                            hover:bg-gray-100 hover:text-black">
                                            @csrf
                                            <button type="submit" class="">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <a href="{{route('pets.index')}}" class="inline-flex 
                            mt-2
                            p-2 text-2xl font-bold 
                            uppercase tracking-wider">PET PUDIM
                    </a> 
                </div>
                 
            
                <div class="mt-2 w-2/5">
                    <div class="input-group relative flex flex-wrap items-stretch mb-4">
                        <div class="inline-block w-4/5"> 
                            <form action="/pets" method="GET" class="">
                                <input type="text" id="search" name="search" class="h-10 form-control relative flex-auto min-w-0 block w-full px-3 py-2 text-base text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-purple-100 focus:outline-none" placeholder="Buscar Pet..." aria-label="Search" aria-describedby="button-addon2">
                            </form>
                        </div>
                        <div class="inline-block">
                            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen" class="btn h-10 w-10 py-2 px-2 bg-purple-100 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-purple-50 hover:shadow-lg focus:bg-purple-50  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-100 active:shadow-lg transition duration-150 ease-in-out flex" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="14" cy="6" r="2"></circle>
                                        <line x1="4" y1="6" x2="12" y2="6"></line>
                                        <line x1="16" y1="6" x2="20" y2="6"></line>
                                        <circle cx="8" cy="12" r="2"></circle>
                                        <line x1="4" y1="12" x2="6" y2="12"></line>
                                        <line x1="10" y1="12" x2="20" y2="12"></line>
                                        <circle cx="17" cy="18" r="2"></circle>
                                        <line x1="4" y1="18" x2="15" y2="18"></line>
                                        <line x1="19" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                </button> 

                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" 
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" 
                                            x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                        ></div>

                                        <div x-cloak x-show="modelOpen" 
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                        >
                                            <div class="flex items-center justify-end space-x-4">
                                                <button @click="modelOpen = false" class="text-purple-200 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                                        <path d="M10 10l4 4m0 -4l-4 4"></path>
                                                    </svg>
                                                </button>
                                            </div>


                                            <form method="POST" action="/pets">
                                                @csrf
                                                    <div class="grid grid-cols-2 gap-4 mb-5 text-black">
                                                        <div class="col-md-6 mb-4">

                                                            <h6 class="mb-2 pb-1">Sexo: </h6>

                                                            <div class="form-check form-check-inline ml-3 mb-2">
                                                                <input class="form-check-input" type="radio" name="sexo" id="femaleGender"
                                                                value="F"/>
                                                                <label class="form-check-label" for="femaleGender">Female</label>
                                                            </div>
                                                            <div class="form-check form-check-inline ml-3">
                                                                <input class="form-check-input" type="radio" name="sexo" id="maleGender"
                                                                value="M"  checked/>
                                                                <label class="form-check-label" for="maleGender">Male</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 mb-4">

                                                            <h6 class="mb-2 pb-1">Tamanho: </h6>

                                                            <div class="form-check form-check-inline ml-3 mb-2">
                                                                <input class="form-check-input" type="radio" name="tamanho" id="adulto"
                                                                value="A"/>
                                                                <label class="form-check-label" for="adulto">Adulto</label>
                                                            </div>
                                                        
                                                            <div class="form-check form-check-inline ml-3">
                                                                <input class="form-check-input" type="radio" name="tamanho" id="filhote"
                                                                value="F" checked/>
                                                                <label class="form-check-label" for="filhote">Filhote</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group form-check text-center mb-6">
                                                        <input type="checkbox"
                                                            name="castrado"
                                                            value="1"
                                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                                            id="exampleCheck25">
                                                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck25">Castrado</label>
                                                    </div>
                                                    <div class="flex justify-end"> 
                                                        <button class=" 
                                                                    inline-block abso
                                                                    px-6 py-2.5 bg-green-600 
                                                                    text-white font-medium text-m 
                                                                    leading-tight uppercase rounded shadow-md 
                                                                    hover:bg-green-700 hover:shadow-lg 
                                                                    focus:bg-green-700 focus:shadow-lg 
                                                                    focus:outline-none focus:ring-0 
                                                                    active:bg-green-800 active:shadow-lg 
                                                                    transition duration-150 ease-in-out" type="submit">
                                                                    Pesquisar
                                                        </button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div></div>
            </div>
        </nav>
        @if($search)
            <div class="flex justify-center mt-2">Pesquisando por: {{$search}}</div>
        @endif
    </header>
    
    
    <body>
        <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4 justify-center">
            @yield('content')
        </div>

    </body>

    
</html>