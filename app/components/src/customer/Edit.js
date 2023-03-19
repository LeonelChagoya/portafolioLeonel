
import { useNavigate, useParams } from 'react-router-dom';
import React, { useEffect, useState } from 'react'
import CustomerServices from '../services/CustomerServices';

export default function Edit() {

    const { id } = useParams();
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [phone, setPhone] = useState(0);
    const [address, setAddress] = useState("");
    const navigate = useNavigate();

    useEffect(() => {
        CustomerServices.getCutosmerById(id)
            .then((res) => res.json())
            .then((res) => (
                setName(res.data.name),
                setEmail(res.data.email),
                setPhone(res.data.phone),
                setAddress(res.data.address)
            
                ))
    }, [id]);
  
    const updateCustomer = (e) => {
        e.preventDefault();
     
        let customer = {
            name, email, phone, address
        };

        if (customer.name != "") {
            console.log('customer=>' + JSON.stringify(customer));
            CustomerServices.updateCustomer(id,customer)
                .then(res => res.json())
                .then(res => {
                    navigate(`/customer/index`);
                    console.log(res);
                })
        }
    }
  
    const changeName = (event) => { setName(event.target.value); }
    const changeEmail = (event) => { setEmail(event.target.value) }
    const changePhone = (event) => { setPhone(event.target.value) }
    const changeAddress = (event) => { setAddress(event.target.value) }

    return (
        <div>
            <h1>customer {id}</h1>
            <div className="row">
                <div className="col-md-6 mb-3">
                    <label htmlFor="firstName">Name customer</label>
                    <input type="text" class="form-control" placeholder="Name"
                        value={name} onChange={changeName}
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label htmlFor="email">Email</label>
                    <input type="email" class="form-control" placeholder="you@example.com"
                        value={email} onChange={changeEmail}
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label htmlFor="address">Address</label>
                    <input type="text" class="form-control" placeholder="1234 Main St"
                        value={address} onChange={changeAddress}
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label htmlFor="phone">Phone </label>
                    <input type="text" class="form-control" placeholder="123467890"
                        value={phone} onChange={changePhone}
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <button class="btn btn-primary btn-block" type="submit"
                        onClick={updateCustomer}
                    >Save</button>
                </div>
            </div>
        </div>
    )


}
