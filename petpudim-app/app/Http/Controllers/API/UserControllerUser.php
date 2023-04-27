<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StorePasswordRequest;
use App\Http\Requests\registerAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserControllerUser extends Controller
{
    protected $model;

    public function __construct(User $user){

        $this->model = $user;

    }

    // public function index(Request $request){

        // $users = User::all(); Mostra todos os usuários
        // $users = User::where('name', 'LIKE',"%{$request->search}")->get(); Uma forma de pesquisa
        // $search = $request->search;
        // $users = $this->model
        //                     ->getUsers(
        //                                 search: $request->search
        //                               );

        // dd($users);  *DD utilizado para debug*
    //     return view('usuario.index', compact('users'));
    // }

    public function show($id){
        $user = User::find($id);

        $pets = Pet::where('user_id', $user->id)
                ->get();

        return view('usuario.users',['pets' => $pets,'user' => $user]);
    }
        

    public function showUser(){

        $user = Auth::user(); // Retorna o usuario logado na sessão
        $id = Auth::id(); // Retorna o ID do usuario logado na sessão
        $pets = Pet::where('user_id', $user->id)
                ->get();

        if (!$user = $this->model->find($id)){
            return redirect()->route('login');
        }
        //dd($pets->id);
        // dd('users.showUser', $id);
        return view('usuario.showUser',['pets' => $pets,'user' => $user]);
    }

    public function create(){
        return view('usuario.registerUser');
    }

    public function registerUser(registerAuth $request){

           $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'cidade' => $request['cidade'],
            'estado' => $request['estado'],
            'telefone' => $request['telefone'],
            'instagram' => $request['instagram'],
            'bio' => $request['bio'],
            ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json([
        //         'access_token' => $token,
        //         'token_type' => 'Bearer',
        // ]);

        return redirect()->route('pets.index');
    }

    public function editUser($id){

        if (!$user = $this->model->find($id))
            return redirect()->route('pets.index');

        return view ('usuario.editUser', compact('user'));
    }

  public function update(StorePasswordRequest $request, $id){

    if (!$user = User::find($id))
    return redirect()->route('login');

    $user->update([
        'name' => $request['name'],
        'email' => $request['email'],
        'cidade' => $request['cidade'],
        'estado' => $request['estado'],
        'telefone' => $request['telefone'],
        'instagram' => $request['instagram'],
        'bio' => $request['bio'],
    ]);

    if($request->hasFile('image')){
        Storage::deleteDirectory($user->image_local);
        $requestImage = $request->image;
        
        $user->image_nome = $requestImage->getClientOriginalName();
        $user->image_local = md5($requestImage->getClientOriginalName() . strtotime("now"));

        $arqFinal = "photo/". $user->image_local . "/" . $user->image_nome;
        Storage::disk('public')->put($arqFinal, file_get_contents($request->file('image')));
    }

    $data = $request->only('name', 'email');

    if ($request->password)
        Hash::make($request['password']);

    $user->update($data);

    return redirect()->route('usuario.showUser', compact('user'));
    dd($request->all());
}

    // public function delete($id){
    //     if (!$user = User::find($id))
    //     return redirect()->route('users.index');

    //     $user->delete();

    //     return redirect()->route('users.index');
    // }
// }

}