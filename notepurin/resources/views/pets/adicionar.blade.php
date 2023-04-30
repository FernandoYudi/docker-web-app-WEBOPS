@extends('layouts.appNonMain')

@section('content')

<div class="flex justify-center w-9/12 mt-10">
    <div>
        <h1 class="text-5xl font-bold mt-0 mb-6 text-purple-200">CADASTRO PET</h1>
    </div>
    
    <br>
    <form action="/pets" method="post" class="w-9/12" enctype="multipart/form-data">
        @csrf
            <div class="form-group mb-6 ">
                <label><h4>Foto de Perfil</h4></label>
                <input for="image" type="file" class="form-control-file" name="image" id="image" required>
            </div>
            <div class="form-group mb-6 ">
                <label class="form-label inline-block mb-2 text-gray-700">Nome: </label>
                <input name="name" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        @error('name')
                        <div class="block w-full text-purple-200">{{$message}}</div>
                        @enderror
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">Cidade: </label>
                    <input name="cidade" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        @error('cidade')
                        <div class="block w-full text-purple-200">{{$message}}</div>
                        @enderror
                </div>
                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">UF: </label>
                    <input name="estado" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        @error('estado')
                        <div class="block w-full text-purple-200">{{$message}}</div>
                        @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">Idade: </label>
                    <input name="idade" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        @error('idade')
                        <div class="block w-full text-purple-200">{{$message}}</div>
                        @enderror
                </div>
                <div class="form-group mb-6">
                   
                </div>
            </div>
            <div class="form-group mb-6">
                <label  class="form-label inline-block mb-2 text-gray-700">Espécie: </label>
                <select class="form-control mb-2
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="especie">
                    <option disabled value="" selected></option>
                    <option value="Coelho">Coelho</option>
                    <option value="Gato">Gato</option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Rato">Rato</option>
                    <option value="Hamster">Hamster</option>
                  </select>
                  @error('especie')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror

            <div class="form-group mb-6">
                <label class="form-label inline-block mb-2 text-gray-700">Raça: </label>
                <input name="raca" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        @error('raca')
                        <div class="block w-full text-purple-200">{{$message}}</div>
                        @enderror
            </div>
            <div class="grid grid-cols-2 gap-4 mb-5">
                <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Sexo: </h6>

                    <div class="form-check form-check-inline ml-3 mb-2">
                        <input class="form-check-input" type="radio" name="sexo" value="F" id="femaleGender"
                        value="option1" checked />
                        <label class="form-check-label" for="femaleGender">Fêmea</label>
                    </div>
                    <div class="form-check form-check-inline ml-3">
                        <input class="form-check-input" type="radio" name="sexo" value="M" id="maleGender"
                        value="option2" />
                        <label class="form-check-label" for="maleGender">Macho</label>
                    </div>
                    @error('sexo')
                    <div class="block w-full text-purple-200">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Tamanho: </h6>

                    <div class="form-check form-check-inline ml-3 mb-2">
                        <input class="form-check-input" type="radio" name="tamanho" id="adulto"
                        value="A" checked />
                        <label class="form-check-label" for="adulto">Adulto</label>
                    </div>
                
                    <div class="form-check form-check-inline ml-3">
                        <input class="form-check-input" type="radio" name="tamanho" id="filhote"
                        value="F" />
                        <label class="form-check-label" for="filhote">Filhote</label>
                    </div>
                    @error('tamanho')
                    <div class="block w-full text-purple-200">{{$message}}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-group mb-6">
                <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Bio: </label>
                <textarea name="bio"
                class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="3"
                ></textarea>
                @error('bio')
                <div class="block w-full text-purple-200">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group form-check text-center mb-6">
                <input type="checkbox"
                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="exampleCheck25" name="castracao" value="1">
                <label class="form-check-label inline-block text-gray-800" for="exampleCheck25">Castrado</label>
                @error('castracao')
                <div class="block w-full text-purple-200">{{$message}}</div>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4 ml-40">
                <div class="flex-auto"> 
                    <button type="button" 
                            class=" 
                            inline-block abso
                            px-6 py-2.5 bg-gray-200 
                            text-white font-medium text-m 
                            leading-tight uppercase rounded shadow-md 
                            hover:bg-gray-100 hover:shadow-lg 
                            focus:bg-gray-100 focus:shadow-lg 
                            focus:outline-none focus:ring-0 
                            active:bg-gray-100 active:shadow-lg 
                            transition duration-150 ease-in-out">
                            Cancelar
                        </button>
                </div>
                <div class="flex-auto"> 
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
                            Cadastrar
                    </button>
                </div>
            </div>
    </form>
</div>
@endsection
