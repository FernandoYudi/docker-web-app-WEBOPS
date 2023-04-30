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
                 
                <div></div>
            </div>
        </nav>
        
    </header>
    
    <body>
        <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4 justify-center">
            @yield('content')
        </div>

      
    </body>

    
</html>