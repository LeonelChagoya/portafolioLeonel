import React, { Component, useEffect, useState } from 'react'; 
import CustomerServices from '../services/CustomerServices.js';
import Loading from "../components/Loading.jsx";
import { Link } from 'react-router-dom';
export default function List() {
  const[customers, setCustomers] = useState([]);
  const [isLoading, setIsLoading] = useState(true);

  useEffect(()=>{
    CustomerServices.getCustomer()
    .then((response) => response.json())
    .then((res)=>{
      setCustomers(res)
      setIsLoading(false);
    })
  },[]);


  const deleteCustomer = (id) => {
    CustomerServices.deleteCustomer(id)
    .then((response) => response.json())
    .then(res => {
        setCustomers(customers.filter( customer=> customer.id !== id));
    });
}


  if (isLoading) {
    return (
     <Loading/>
    );
  }



  return (
    <section>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            {
              customers.map(customer =>
                <tr key={customer.id}>
                  <td scope="row">{customer.id}</td>
                  <td>{customer.name}</td>
                  <td>{customer.email}</td>
                  <td>{customer.address}</td>
                  <td>{customer.phone}</td>
                  <td>
                  <Link class="btn btn-outline-info" to={"/customer/edit/"+customer.id}>Edit</Link>
                  <button onClick={() => deleteCustomer(customer.id)} className="btn btn-danger">Delete</button>
              </td>

                </tr>
                )
            }

            
            

          </tbody>
        </table>
      </section>
  )
}

  
     
 