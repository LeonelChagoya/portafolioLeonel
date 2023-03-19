<?php
namespace App\Controllers;

use CodeIgniter\Controller;
Use App\Models\CustomerModel;

class CustomerController extends Controller
{

    protected $customer;
    protected $request;

    public function __construct()
    {
        $this->customer = new CustomerModel();
        $this-> request = \Config\Services::request();
    }

    public function index()
    {
        return view('customer');
    }

    public function test()
    {
        $data = $this->customer->findAll();
        return json_encode($data);
    }

    //se crea un nuevo cliente
    public function create(){
        try {
            //code...
            $json = $this->request-> getJSON();
            $insert['name'] = $json->name;
            $insert['email'] = $json->email;
            $insert['phone'] = $json->phone;
            $insert['address'] = $json->address;
            $res = $this -> customer -> insert($insert);
            $response['success'] = true;
            $response['message'] = "Successful save";
            return json_encode($response);

        } catch (\Throwable $th) {
            //throw $th;
            $response['success'] = false;
            $response['message'] = $th -> getMessage();
            return json_encode($response);
        }
    }

    //se trae los datos del cliente con el id especificada

    public function get($id){
        try {
            $data = $this->customer->find($id);
            if($data){
               
                $response['data'] = $data;
                $response ['success'] = true;
                $response['message'] = "Successful load";
            }
            else{
                $response['success'] = false;
                $response['message'] = "Not found data";
            }

            return json_encode($response);
        } catch (\Throwable $th) {
            //throw $th;
            $response['success'] = false;
            $response['message']= $th->getMessage();
            return json_encode($response);
        }
    }

    // edita el cliente con el id solicitada
  public function update($id)
  {
      try {
        $json = $this->request->getJSON();
        $update['name'] = $json->name;
        $update['email'] = $json->email;
        $update['phone'] = $json->phone;
        $update['address'] = $json->address;
        $res = $this->customer->update($id,$update);
        $response['success'] = true;
        $response['message'] = "Successful update";
        return json_encode($response);
      } catch (\Exception $e) {
        $response['success'] = false;
        $response['message'] = $e->getMessage();
        return json_encode($response);
      }
  }
   // eliminar usario de la base de datos
   public function delete($id)
   {
     try {
       // $res = $this->customer->where("id",$id)->delete();
       $res = $this->customer->delete($id);
           $response['res'] = $res;
           $response['success'] = true;
           $response['message'] = "Successful delete";
           return json_encode($response);
     }
     catch (\Exception $e) {
       $response['success'] = false;
       $response['message'] = $e->getMessage();
       return json_encode($response);
     } 
   }


}
