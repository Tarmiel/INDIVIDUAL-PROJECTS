const express = require('express');

const app = express();

app.get('/',(request,response) => {
    return response.json({
        evento: 'Semana Omnisctack 11.0',
        user: 'Lulcao'
    })
});









app.listen(3333);