<?php
  namespace App\Helpers;

  use Firebase\JWT\JWT;
  use Iluminate\Support\Facades\DB;
  use App\User;

  class JwtAuth{

    public function signup(){
      return 'Metodo de la clase jwtauth';
    }
    //Buscar si exite el usuario con sus credenciales 
    //Coomprobar si son correctos (objetos)
    //Generar el token con los datos del usuario identificado
    //Devolver los datos decodificado o el token en funcion de un parametro 
  }


?>