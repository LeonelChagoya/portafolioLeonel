
const CUSTOMER_API_BASEURL = "http://localhost:8080/api/customer";

class CustomerServices{
    getCustomer(){      
        return fetch(CUSTOMER_API_BASEURL + '/' +'test')   
    }
    createCustomer(customer){
        return fetch(CUSTOMER_API_BASEURL+ '/' +'create', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(customer)
        })
    }
    getCutosmerById(customerId){
        return fetch(CUSTOMER_API_BASEURL+'/'+'get'+'/'+customerId)
    }
    updateCustomer(customerId,customer){
        return fetch(CUSTOMER_API_BASEURL+'/'+'update'+'/'+customerId,{
            method: 'PUT',
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(customer)
     })

    }

    deleteCustomer(customerId){
        return fetch(CUSTOMER_API_BASEURL+'/'+'delete'+'/'+customerId, {
            method: 'DELETE',
      })
    }
    
}
export default new CustomerServices();