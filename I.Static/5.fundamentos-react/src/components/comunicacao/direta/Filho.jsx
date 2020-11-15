import React from 'react';

export default props =>
    <div>
        <h3>Componente Filho</h3>
        <h4>{props.children} - {props.sobrenome}</h4>
    </div>