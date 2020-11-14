import './App.css';

import React from 'react';

import Primeiro from './components/First';
import SecondComponent from './components/SecondComParametro';
import ComFilhos from './components/ComFilhos';
import Card from './components/layout/Card';
import Repeticao from './components/Repeat';
import Condicional from './components/Condicional';
import CondicionalIf from './components/CondicionalIf';

export default props =>
    <div className="App">
        <Card titulo="01 - Primeiro Componente" >
            <Primeiro/>
        </Card>
        <Card titulo="02 - Segundo Componente" >
            <SecondComponent titulo="Segundo componente" subtitulo="Ai q odyo" />
        </Card>
        <Card titulo="03 - Terceiro Componente" >
            <ComFilhos>
                <ul>
                    <li>Ana</li>
                    <li>Lucas</li>
                    <li>Samara</li>
                </ul>
            </ComFilhos>
        </Card>
        <Card titulo="04 - Quarto Componente" >
            <Repeticao/>
        </Card>
        <Card titulo="05 - Condicional v1" >
            <Condicional numero={10} />
        </Card>
        <Card titulo="06 - Condicional v2" >
            <CondicionalIf numero={11} />
        </Card>

        {/* <ComFilhos>
            <ul>
                <li>Ana</li>
                <li>Lucas</li>
                <li>Samara</li>
            </ul>
        </ComFilhos>
        <Primeiro/>
        <SecondComponent titulo="Esse é o titulo" subtitulo="Esse é o subtitulo" /> */}
    </div>