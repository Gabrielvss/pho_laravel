<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){

       return (object) [
            "nome" => "Gabriel",
            "telefone" => "988173297"
        ];

    }
}
