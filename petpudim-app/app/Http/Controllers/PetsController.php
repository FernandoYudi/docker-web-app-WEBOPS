<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\StorePetRequest;

class PetsController extends Controller
{

    protected $model;

    public function __construct(Pet $pet){

        $this->model = $pet;

    }

    public function index(Request $request){

        // $search = $request->search;

        // $pets = $this->model
        //                     ->getPets(
        //                                 search: $request->search
        //                               );
        // return view('pets.index', compact('pets'));
        

        $search = request('search');

        if($search){
            $pets = Pet::where('raca', 'like', '%'.$search.'%')
                    ->orWhere('cidade', 'like', '%'.$search.'%')
                    ->orWhere('estado', 'like', '%'.$search.'%')
                    ->orWhere('especie', 'like', '%'.$search.'%')
                    ->orWhere('name', 'like', '%'.$search.'%')
                    ->get();
        }else{
            $pets = Pet::all();
        }

        return view('pets.index', ['pets' => $pets, 'search' => $search]);
    }

    // public function filtro(Request $request){
    //     $search = request('search');
    //     if($request->castracao == null){
    //         $request->castracao = 0;
    //     }
    //     $pets = Pet::where('castracao', $request->castracao)
    //         ->orWhere('sexo', $request->sexo)
    //         ->orWhere('tamanho', $request->tamanho)
    //         ->get();

    //     return view('pets.index', ['pets' => $pets, 'search' => $search]);
    // }

    public function create(){
        return view('pets.adicionar');
    }

    public function editPets($id){

        if (!$pet = Pet::find($id))
        return redirect()->route('login');

        return view('pets.editar', compact('pets'));
    }

    public function delete($id){
        $pet = Pet::find($id);
        if($pet->image_local != null){
            $file = $pet->image_local;
            Storage::deleteDirectory(public_path($file));
        }
        $pet->delete();

        return redirect()->route('usuario.showUser');
    }

    public function store(StorePetRequest $request){
        $pet = new Pet;
        $id_user = Auth::user()->id;

        $pet->name = $request->name;
        $pet->cidade = $request->cidade;
        $pet->estado = $request->estado;
        $pet->raca = $request->raca;
        $pet->idade = $request->idade;
        $pet->sexo = $request->sexo;
        $pet->tamanho = $request->tamanho;
        $pet->castracao = $request->castracao;
        $pet->bio = $request->bio;
        $pet->especie = $request->especie;
        $pet->user_id = $id_user;
        
        if($request->castracao == null){
            $pet->castracao = 0; 
        }
        if($request->hasFile('image')){
            $requestImage = $request->image;
            
            $pet->image_nome = $requestImage->getClientOriginalName();
            $pet->image_local = md5($requestImage->getClientOriginalName() . strtotime("now"));

            $arqFinal = "image/". $pet->image_local . "/" . $pet->image_nome;
            Storage::disk('public')->put($arqFinal, file_get_contents($request->file('image')));
        }
        
        $pet->save();

        return redirect()->route('usuario.showUser');
    }

    public function show(Pet $pet){
        return view('pets.show', [
            'pet' => $pet
        ]);
    }

    public function update(Request $request, $id){

        if (!$pet = Pet::find($id))
        return redirect()->route('login');
    
        $pet->update([
            'name' => $request['name'],
            'raca' => $request['raca'],
            'cidade' => $request['cidade'],
            'estado' => $request['estado'],
            'idade' => $request['idade'],
            'sexo' => $request['sexo'],
            'especie' => $request['especie'],
            'tamanho' => $request['tamanho'],
            'castrado' => $request['castrado'],
            'bio' => $request['bio'],
        ]);
    
        if($request->hasFile('image')){
            Storage::deleteDirectory($pet->image_local);
            $requestImage = $request->image;
            
            $pet->image_nome = $requestImage->getClientOriginalName();
            $pet->image_local = md5($requestImage->getClientOriginalName() . strtotime("now"));
    
            $arqFinal = "image/". $pet->image_local . "/" . $pet->image_nome;
            Storage::disk('public')->put($arqFinal, file_get_contents($request->file('image')));
        }
    
        $data = $request->only('name', 'email');
    
        if ($request->password)
            Hash::make($request['password']);
    
        $pet->update($data);
    
        return redirect()->route('usuario.showUser', compact('user'));
        dd($request->all());
    }

}
