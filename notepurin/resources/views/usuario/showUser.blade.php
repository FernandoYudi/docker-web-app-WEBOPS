@extends('layouts.appNonMain')

@section('content')

        <!-- component -->
<div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4 justify-center
            container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4 justify-center
            bg-slate-200 w-full mb-6 shadow-lg rounded-xl mt-16">
    <div class="px-6">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex justify-center">
                <div class="relative">
                    @if($user->image_local == null)
                    <img src="https://icon-library.com/images/default-profile-icon/default-profile-icon-24.jpg" 
                         class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                    @else
                    <img src="{{ asset('/storage/photo/'.$user->image_local.'/'.$user->image_nome) }}" 
                         class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                    @endif
                </div>
            </div>
            <div class="w-full text-center mt-20">
                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                    {{-- <div class="p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">3,360</span>
                        <span class="text-sm text-slate-400">Photos</span>
                    </div>
                    <div class="p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">2,454</span>
                        <span class="text-sm text-slate-400">Followers</span>
                    </div>

                    <div class="p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">564</span>
                        <span class="text-sm text-slate-400">Following</span>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{{$user->name}}</h3>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>{{$user->estado}}, {{$user->cidade}}
            </div>
        </div>
        <div class="text-center mt-5 grid grid-cols-2 gap-2">
            <div>
                <button onclick="navigator.clipboard.writeText({{$user->telefone}});
                    alert('Número copado')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                        </svg>
                    </button>
            </div>
            <div class="form-group mb-6 ml-6">
                    <a target="_blank" href="https://www.instagram.com/{{$user->instagram}}" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                            <circle cx="12" cy="12" r="3"></circle>
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                        </svg>
                    </a>
            </div>
        </div>
        <div class="mt-3 py-6 text-center">
            
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <p class="font-light leading-relaxed text-slate-600 mb-4">{{$user->bio}}</p>
                    <a href="{{route('usuario.editUser', $user->id)}}"type="button" 
                        class=" 
                        inline-block abso
                        px-6 py-2.5 bg-blue-600 
                        text-white font-medium text-xs 
                        leading-tight uppercase rounded shadow-md 
                        hover:bg-blue-700 hover:shadow-lg 
                        focus:bg-blue-700 focus:shadow-lg 
                        focus:outline-none focus:ring-0 
                        active:bg-blue-800 active:shadow-lg 
                        transition duration-150 ease-in-out">
                        Editar</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="w-full flex justify-end align-center">
        <a href="{{route('pets.create')}}"
            type="button" 
            class=" inline-block 
            px-6 py-2.5 bg-green-600 
            text-white font-medium text-xs 
            leading-tight uppercase rounded shadow-md 
            hover:bg-green-700 hover:shadow-lg 
            focus:bg-green-700 focus:shadow-lg 
            focus:outline-none focus:ring-0 
            active:bg-green-800 active:shadow-lg 
            transition duration-150 ease-in-out">Cadastrar Pet
        </a>
    </div>
    <br><br>
    @foreach ($pets as $pet)
        <tr>
            <td>
                <div class="flex justify-center py-8">
                    
                    <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
                        
                        <img class=" 
                                w-full h-96 md:h-auto object-cover 
                                md:w-48 rounded-t-lg md:rounded-none
                                md:rounded-l-lg" 
                                src="{{ asset('/storage/image/'.$pet->image_local.'/'.$pet->image_nome) }}" alt="" />
                        
                        <div class="p-6 flex flex-col justify-start">
                            
                                
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Nome: {{$pet->name}}</h5>
                        <p class="text-gray-700 text-base mb-2">Sexo: {{$pet->sexo}}</p>
                        @if($pet->tamanho == 'A')
                        <p class="text-gray-700 text-base mb-2">Tamanho: Adulto</p>
                        @else
                        <p class="text-gray-700 text-base mb-2">Tamanho: Filhote</p>
                        @endif
                        <p class="text-gray-700 text-base mb-2">Espécie: {{$pet->especie}}</p>
                        @if($pet->castracao == 0)
                        <p class="text-gray-700 text-base mb-2">Castração: Não Castrado</p>
                        @else
                        <p class="text-gray-700 text-base mb-2">Castração: Castrado</p>
                        @endif
                        <p class="text-gray-700 text-base mb-2">Localização: {{$pet->estado}} - {{$pet->cidade}}</p>
                        </div>

                        <div class="space-x-4">
                                <a href="{{route('pets.editar', $pet->id)}}" type="button" class="text-purple-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                        <path d="M16 5l3 3"></path>
                                    </svg>
                                </a>
                            
                            <a href="{{ route('pets.delete', $pet->id) }}" class="">
                                <button class="text-purple-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="4" y1="7" x2="20" y2="7"></line>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
</div>
    
    
@endsection
