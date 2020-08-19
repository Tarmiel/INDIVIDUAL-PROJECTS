import React from 'react';

import whatsappIcon from '../../assets/images/icons/whatsapp.svg';

import './styles.css';

function TeacherItem(){
    return(
        <article className="teacher-item">

            <header>
                <img src="https://avatars1.githubusercontent.com/u/47931473?s=460&u=41b0315681e6ea91cf57e73f2ab0d98a6ae00cc5&v=4" alt="Lucas Mesquita"/>
                <div>
                    <strong>Lucas Mesquitaa</strong>
                    <span>Matemática II</span>
                </div>
            </header>

            <p>Entusiasta das melhores tecnologias de química avançada.
                <br/>
                Apaixonado pro explodir coisas
            </p>

            <footer>
                <p>Preço/hora 
                    <strong> R$ 80,00</strong>
                </p>
                <button>
                    <img src={whatsappIcon} alt="Whatsapp"/>
                    Entrar em contato
                </button>
            </footer>

        </article>
    )
}

export default TeacherItem;