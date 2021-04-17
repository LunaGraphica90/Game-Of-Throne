<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Character extends Model
{

    public function getTitle(){
        return Title::where('id', $this->id_title)->first()->name;
    }

    public function getMother(){
        return Character::where('id', $this->mother_id)->first()->first_name;

    }

    public function getFather(){
        return Character::where('id', $this->father_id)->first()->first_name;
    }

    public function getHouse(){
        return $this->belongsToMany(House::class, 'house_has_characters', 'character', 'house');
    }




}
