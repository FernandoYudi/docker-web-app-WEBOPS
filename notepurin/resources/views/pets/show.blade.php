@extends('layouts.appNonMain')

@section('content')

            <div class="flex justify-center">
                <div class="bg-white inline h-56 grid grid-cols-2 content-start">
                    <img class="w-52 h-52 rounded-full"
                            src="https://i.natgeofe.com/n/4f5aaece-3300-41a4-b2a8-ed2708a0a27c/domestic-dog_thumb_4x3.jpg" alt="Rounded avatar" />
                    
               
                    
                    <div class="mx-8">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Nome: {{$pet->name}}</h5>
                        <p class="text-gray-700 text-base mb-2">Idade: {{$pet->idade}}</p>
                        <p class="text-gray-700 text-base mb-2">Raça: {{$pet->raca}}</p>
                        <p class="text-gray-700 text-base mb-2">Castração: {{$pet->castracao}}</p>
                        <p class="text-gray-700 text-base mb-2">Localização: {{$pet->estado}} - {{$pet->cidade}}</p>
                        <p class="text-gray-600 text-xs mb-2">Last updated 3 mins ago</p>
                        <div class="flex-auto"> 
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
                            Chat</button>
                        </div>
                    </div>
                </div>
            </div>


@endsection
