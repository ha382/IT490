import React, { Component } from 'react';

import './App.css';
import { Layout, Header, Navigation, Drawer, Content } from 'react-mdl';

class App extends Component {
  render(){
    return (
      
      <div className='demo' style={{height: '300px', position: 'relative'}}>
      
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"></link>
        <Layout fixedHeader fixedDrawer>
          <Header title="Milestone 2">
          
          {/*}
          <Navigation>
                <a href="/">Link</a>
                <a href="/">Linwk</a>
                <a href="/">Link</a>
          </Navigation>
        */}

          </Header>
          <Drawer title="Milestone 2">
              <Navigation>
                  <a href="/">Login</a>
                  <a href="/">Register</a>
                  <a href="/">Dashboard</a>
                  <a href="/">Logout</a>
              </Navigation>
          </Drawer>
          <Content />
      </Layout>
  </div>


    );






  }

}

export default App;
