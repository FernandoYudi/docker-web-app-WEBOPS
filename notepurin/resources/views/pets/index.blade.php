@extends('layouts.app')

@section('content')

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
                    <div class="flex-auto"> 
                      <a href="{{route('usuario.users', $pet->user_id)}}" class="">
                        <button type="button" 
                        class=" 
                        inline-block abso
                        px-6 py-2.5 bg-green-600 
                        text-white font-medium text-xs 
                        leading-tight uppercase rounded shadow-md 
                        hover:bg-green-700 hover:shadow-lg 
                        focus:bg-green-700 focus:shadow-lg 
                        focus:outline-none focus:ring-0 
                        active:bg-green-800 active:shadow-lg 
                        transition duration-150 ease-in-out">
                        Perfil</button></div>
                      </a>
                        
                  </div>
                </div>
              </div>
        </td>
    </tr>

    @endforeach

    
  </div>

    
@endsection
