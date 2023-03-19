
import React, { useState } from 'react'
import { useNavigate } from 'react-router-dom';
import LoginServices from '../services/LoginServices'

export default function FormLogin() {
    const[usuario, setUsuario] = useState("");
    const[password, setPassword] = useState("");
    const navigate = useNavigate();
    
    const verificarUsuario = (e) =>{
        e.preventDefault();
        let usuarioLogin = {
            usuario,password
        };
        if(usuarioLogin.usuario || usuarioLogin.password !=""){
            LoginServices.postLogin(usuarioLogin)
            .then(res =>res.json())
            .then(res => 
               { if(res.success === true){
               location.href = "http://localhost:8080/customer";
                }
            else{
                console.log(res);

            }}
                
                )
        };

    }

    const changeUsuario = (event) =>{
        setUsuario(event.target.value);
    }

    const changePassword = (event) =>{
        setPassword(event.target.value);
    }


  return (
    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Usuario</label>
      <input type="text" class="form-control" id="usuario"  placeholder="Enter your user"
      value={usuario} onChange={changeUsuario}
      />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
      value={password} onChange={changePassword}
      />
    </div>
    <button type="submit" class="btn btn-primary" onClick={verificarUsuario}>Submit</button>
  </form>
  )
}

