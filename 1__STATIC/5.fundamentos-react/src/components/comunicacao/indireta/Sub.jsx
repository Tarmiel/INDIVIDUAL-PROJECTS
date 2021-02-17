import React from 'react';

const Sub = (props) =>
    <div>
        <button onClick={()=>{
            props.onClicar(Math.random())
        }}
        >Alterar</button>
    </div>

export default Sub