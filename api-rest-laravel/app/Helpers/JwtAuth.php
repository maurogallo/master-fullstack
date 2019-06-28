<?php
namespace App\Helpers;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;
use App\User;

class JwtAuth
{

    public $key;

    public function __construct()
    {

        $this->key = 'esto_es_una_clave_super_secreta-99887766';
    }


    public function signup($email, $password, $getToken = null)
    {
        // Buscar si existe el usuario con sus credenciales
        $user = User::where([
            'email' => $email,
            'password' => $password
        ])->first();




        // Comprobar si son correctas(objeto)

        $signup = false;

        if (is_object($user)) {
            $signup = true;
        }
        // Generar el token con los datos de usuario identificado

        if ($signup) {
            $token = array(
                'sub'       =>      $user->id,
                'email'     =>      $user->email,
                'name'      =>      $user->name,
                'surname'   =>      $user->surname,
                'iat'       =>      time(),
                'exp'       =>      time() + (7 * 24 * 60 * 60)

            );

            $jwt = JWT::encode($token, $this->key, 'HS256');

            $decoded = JWT::decode($jwt, $this->key, ['HS256']);

            // Devolver los datos decodificados o el token, en función de un parametro

            if (is_null($getToken)) {

                $data = $jwt;
            } else {
                $data = $decoded;
            }
        } else {
            $data = array(
                'status' => 'error',
                'mensagge' => 'Login incorrecto.'
            );
        }


        return $data;
    }
}
