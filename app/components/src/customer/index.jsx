'use strict';
import React, { Component } from 'react';
import { createRoot } from 'react-dom/client'
import Nav from './Nav';

import Form from './Form';
import List from './List';
import Edit from './Edit';

import { BrowserRouter as Router,Routes, Route} from 'react-router-dom';

export default class  Main extends Component {
  render() {
    return (
      <Router>
      <main> 
  
        <Nav/>
        <Routes>
          <Route path='/customer/index' element={<List/>} />
          <Route path='/customer/form' element={<Form />} />
          <Route path='/customer/edit/:id' element={<Edit/>} />
        </Routes>
      </main>
      </Router>
      

      
    )
  }
}

//for <div id = "main-customer"> </div>
createRoot(document.getElementById('main-customer')).render(<Main/>);