import React from 'react';

import PageHeader from '../../components/PageHeader'

import whatsappIcon from '../../assets/images/icons/whatsapp.svg';

import './styles.css';

function TeacherList(){
    return (
        <div id="page-teacher-list" className="container">
            <PageHeader title="Estes são os proffys disponíveis.">

                <form id="search-teachers">

                    <div className="input-block">
                        <label htmlFor="subject">Matéria</label>
                        <input type="text" name="" id="subject"/>
                    </div>
                    <div className="input-block">
                        <label htmlFor="week_day">Dia da semana</label>
                        <input type="text" name="" id="week_day"/>
                    </div>
                    <div className="input-block">
                        <label htmlFor="time">Hora</label>
                        <input type="text" name="" id="time"/>
                    </div>

                </form>

            </PageHeader>   

            <main>
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
            </main>

        </div>
    )
}

export default TeacherList;