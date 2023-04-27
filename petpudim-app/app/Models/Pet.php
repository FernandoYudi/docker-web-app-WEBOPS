<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\User;


class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setNameAttribute($value){
        $this->attributes['name'] = Str::camel($value);
    }

    public function getNameAttribute($value)
    {
        return Str::kebab($value);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPets(string|null $search = null){
        $pet = $this->where(function ($query) use ($search) {
            if($search){
                $pets = Pet::where('raca', 'like', '%'.$search.'%')
                        ->orWhere('cidade', 'like', '%'.$search.'%')
                        ->orWhere('estado', 'like', '%'.$search.'%')
                        ->orWhere('especie', 'like', '%'.$search.'%')
                        ->orWhere('name', 'like', '%'.$search.'%')
                        ->get();
            }else{
                $pet = Pet::all();
            }
        })
        ->paginate(6);
        return $pet;
    }

}
