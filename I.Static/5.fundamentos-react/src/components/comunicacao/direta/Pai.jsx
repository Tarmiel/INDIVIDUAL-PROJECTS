import React from 'react';

import Filho from './Filho';

export default props =>
    <div>
        <Filho {...props}>Joao</Filho>
        <Filho sobrenome={props.sobrenome}>Lucas</Filho>
        <Filho sobrenome="Oliveira">Maria</Filho>
    </div>