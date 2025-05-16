<?php

namespace App\Helpers;

use Firebase\JWT\JWT; //paquete para codificar y decodificar tokens
use App\Models\User; //modelo User
use DomainException; //paquete para exepciones
use Firebase\JWT\Key; //clase Key
use UnexpectedValueException; //paquete para exepciones

class JwtAuth
{
    public $key;

    public function __construct()
    {
        $this->key = 'esta-es-una-clave-super-secreta-99bb7766';   //se creá la llave
    }
}