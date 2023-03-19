const LOGIN_API_BASEURL = "http://localhost:8080/api/login";

class LoginServices{

    postLogin(usuario){
        return fetch(LOGIN_API_BASEURL+'/'+'postLogin',{
            method:'POST',
            headers:{
                "Content-Type":"application/json",
            },
            body: JSON.stringify(usuario)
        })

    }
}
export default new LoginServices();