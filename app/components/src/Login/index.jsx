import React, { Component } from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import Navbar from '../components/Navbarl.jsx';
import FormLogin from './FormLogin.jsx';

export default class App extends Component {
  render() {
    return (
      <BrowserRouter>
        <FormLogin/>
        </BrowserRouter>
    )
  }
}

createRoot(document.getElementById('main-login')).render(<App/>);