<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pruebas(Request $request){
        return "Accion de puebas de UserController";
    }
    public function registro(Request $request) {
        return "Accion de registro de usuario";

        /*  //Recoger datos del usuario por post
        $json = $request->input('json', null);
        $params = json_decode($json); //objeto
        $params_aray = json_decode($json, true);

        if (!empty($params) && ($params_aray)) {
            //Limpiar datos
            $params_aray = array_map('trim', $params_aray);
            //validar datos
            $validate = \Validator::make($params_aray, [
                'nombre' => 'required|alpha|unique:users', //comprobar si el usuario existe
                'contraseña' => 'required',
                'rol' => 'required'
            ]);

            if ($validate->fails()) {
                //validacion fallada
                $data = array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => 'El usuario no se creo correctamente',
                    'errors' => $validate->errors()
                );
            } else {
                //Validacion pasada
                //cifrar la contraseña

                $pwd = hash('sha256', $params->contraseña);

                //crear el usuario

                $user = new User();
                $user->nombre = $params_aray['nombre'];
                $user->contraseña = $pwd;
                $user->rol = $params_aray['rol'];

                //Guardar el usuario
                $user->save();

                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'El usuario  se creo correctamente',
                    'user' => $user
                );
            }
        } else {
            $data = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'El usuario no se creo correctamente',
            );
        }
        return response()->json($data, $data['code']);*/
    }

    public function login(Request $request) {
        return "Accion de login de usuario";
       /* $jwtAuth = new \JWTAuth;

        //Recibir el post

        $json = $request->input('json', null);
        $params = json_decode($json);
        $params_array = json_decode($json, true);

        //Validar esos datos

        $validate = \Validator::make($params_array, [
            'nombre' => 'required|alpha',
            'contraseña' => 'required'
        ]);

        if ($validate->fails()) {
            //validacion fallada
            $signup = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'El usuario no se ha podido identificar',
                'errors' => $validate->errors()
            );
        } else {

            //cifrar la contraseña

            $pwd = hash('sha256', $params->contraseña);

            //devolver token o datos

            $signup = $jwtAuth->signup($params->nombre, $pwd);

            if (!empty($params->getToken)) {
                $signup = $jwtAuth->signup($params->nombre, $pwd, true);
            }
        }

        return response()->json($signup, 200);*/
    }
}
