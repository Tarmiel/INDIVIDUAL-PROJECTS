import './App.css';

import React from 'react';

import Primeiro from './components/basicos/First';
import SecondComponent from './components/basicos/SecondComParametro';
import ComFilhos from './components/basicos/ComFilhos';
import Card from './components/layout/Card';
import Repeticao from './components/basicos/Repeat';
import Condicional from './components/basicos/Condicional';
import CondicionalIf from './components/basicos/CondicionalIf';
import Pai from './components/comunicacao/direta/Pai';
import Super from './components/comunicacao/indireta/Super';
import Input from './components/form/Input';
import Contador from './components/contador/Contador';
import Mega from './components/mega/Mega';

export default props =>
    <div className="App">

        <Card titulo="01 - Primeiro Componente" color="#FA6900">
            <Primeiro/>
        </Card>

        <Card titulo="02 - Segundo Componente" color="#E94C6F">
            <SecondComponent titulo="Segundo componente" subtitulo="Ai q odyo" />
        </Card>
        
        <Card titulo="03 - Terceiro Componente" color="#008BBA">
            <ComFilhos>
                <ul>
                    <li>Ana</li>
                    <li>Lucas</li>
                    <li>Samara</li>
                </ul>
            </ComFilhos>
        </Card>

        <Card titulo="04 - Quarto Componente" color="#663FFE">
            <Repeticao/>
        </Card>

        <Card titulo="05 - Condicional v1" color="#E63928" >
            <Condicional numero={10} />
        </Card>

        <Card titulo="06 - Condicional v2" color="#FEB03F">
            <CondicionalIf numero={11} />
        </Card>

        <Card titulo="07 - Comunicação Direta" color="#9ad3bc">
            <Pai sobrenome="Rodrigues" />
        </Card>

        <Card titulo="08 - Comunicação Indireta" color="#8f384d">
            <Super/>
        </Card>

        <Card titulo="09 - Input" color="#ea2c62">
            <Input/>
        </Card>

        <Card titulo="10 - Contador" color="#52057b">
            <Contador />
        </Card>

        <Card titulo="11 - Mega" color="#52057b">
            <Mega qtdNumeros={8} />
        </Card>

    </div>