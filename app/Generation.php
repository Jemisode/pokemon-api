<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    protected $fillable = ["name", "total_pokemon"];

    public function pokemons()
    {
        return $this->hasMany(Pokemon::class);
    }
}
