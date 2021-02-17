import React from 'react';

import {Link, useHistory} from 'react-router-dom';
import {FiArrowLeft } from "react-icons/fi";

import HappyLogo from '../images/LogoSorriso.svg';

import '../styles/components/sidebar.css';

export default function Sidebar(){
    const {goBack} = useHistory();
    
    return (
        <aside className="app-sidebar">
        <Link to='/'>
          <img src={HappyLogo} alt="Happy"/>
        </Link>
  
          <footer>
            <button type="button" onClick={goBack}>
              <FiArrowLeft size={24} color="#FFF" />
            </button>
          </footer>
        </aside>
    );
}