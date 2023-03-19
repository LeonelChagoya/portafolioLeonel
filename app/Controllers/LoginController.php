<?php
namespace App\Controllers;
use CodeIgniter\Controller;
Use App\Models\LoginModel;



class LoginController extends Controller
{
    protected $login;
    protected $request;

    public function __construct()
    {
        $this->login = new LoginModel();
        $this-> request = \Config\Services::request();
    }

    public function index()
    {
        $mensaje = session('mensaje');
        return view('login',["mensaje"=> $mensaje]);
    }

    public function testUsuario()
    {
        $data = $this->login->findAll();
        return json_encode($data);
    }

    //funcion leer los datos ingresados en el formulario de login
    public function postLogin(){
        try {
            //code...
            $json = $this->request-> getJSON();      
            $usuario = $insert['usuario'] = $json->usuario;
            $password = $insert['password'] = $json->password;
            $Usuario = new LoginModel();
            $datosUsuario = $Usuario -> obtenerUsuario(['usuario' => $usuario]);
            if(count($datosUsuario) > 0 && password_verify($password, 
            $datosUsuario[0]['password'])
            ){
               $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "type" => $datosUsuario[0]['type']
               ];
              
               $session = session();
               $session ->set($data);
               $response['success'] = true;
               return  json_encode($response);
            

            }else{
                $response['message'] = "password o usario incorrecto";
                return json_encode($response);
            }
                

        } catch (\Throwable $th) {
            //throw $th;
            $response['success'] = false;
            $response['message'] = $th -> getMessage();
            return json_encode($response);
        }
    }

    public function salir(){
        $session = session();
        $session -> destroy();
        return redirect('/');
    }
   
}
