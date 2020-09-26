import express from 'express';
import cors from 'cors';
import routes from './routes';

const app = express();

app.use(express.json());

// GET : BUSCAR OU LISTAR UMA INFORMAÇÃO
// POST : CRIAR ALGUMA NOVA INFORMAÇÃO
// PUT : ATUALIZAR UMA INFORMAÇÃO EXISTENTE
// DELETE : DELETAR UMA INFORMAÇÃO EXISTENTE

// CORPO (Request Body) : DADOS PARA CRIAÇÃO OU ATUALIZAÇÃO DE UM REGISTRO
// Route Params :  IDENTIFICAR QUAL RECURSO EU QUERO ATUALIZAR OU DELETAR =: /users/:id
// Query Params : PAGINAÇÃO, FILTROS, ORDENAÇÃO

app.use(routes);

// localhost:3333
app.listen(3333);