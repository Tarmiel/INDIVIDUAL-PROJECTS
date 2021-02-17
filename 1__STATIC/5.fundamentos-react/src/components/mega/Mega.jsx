import React, { useState } from 'react';

const Mega = props =>{

    const [numeros, setNumeros] = useState(Array(props.qtdNumeros).fill(0))

    function gerarNumerosNãoContido(array){
        const min = 1
        const max = 60
        const num = parseInt(Math.random() * ( max - min)) + min
        return array.includes(num) ? gerarNumerosNãoContido(array) : num
    }

    function gerarNumeros(){
        const novoArray = Array(props.qtdNumeros)
            .fill(0)
            .reduce(a => [...a, gerarNumerosNãoContido(a)], [])
            .sort((a,b) => a-b)

        setNumeros(novoArray)
    }

    return(
        <div>
            <h3>Mega</h3>
            <h4>{numeros.join(' ')}</h4>
            <button onClick={gerarNumeros}>Gerar</button>
        </div>
    )

}
export default Mega