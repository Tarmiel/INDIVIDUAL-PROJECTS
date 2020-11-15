import React from 'react';
import If from './if';

export default props =>{
    return(
        <div>
            <h2>O numero {props.numero} é: </h2>
            <If test={ props.numero%2===0}>
                <span>Par</span>
            </If>
            <If test={props.numero%2===1}>
                <span>impar</span>
            </If>
        </div>
    )
}