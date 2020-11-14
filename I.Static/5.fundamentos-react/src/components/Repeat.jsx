import React from 'react';

import produtos from '../data/products';

export default props => {

    function getProdutosLi(){
        return produtos.map(prod => {
            return <li key={prod.id}>
                    {prod.id},{prod.name},{prod.price}
                </li>
        })
    }

    return (
        <div>
            <h2>Repetição</h2>
            <ul>
                {getProdutosLi()}
            </ul>
        </div>
    )
}
