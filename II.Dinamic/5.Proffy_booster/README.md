
<h1 align="center">Next Level Week 2.0 Booster - Proffy</h1>

![Proffy](https://github.com/Tarmiel/WS.apps/blob/master/II.Dinamic/5.Proffy_booster/web/src/assets/images/cont.png)

### :computer:Sobre o Projeto:
Proffy é uma plataforma online feita para auxiliar na conexão entre estudantes e professores.
### :rocket:Tecnologias:

- Typescript
- React.js
- Node.js
- React Native( using Expo )

### :unlock:Rodando a aplicação

```bash
# Clone este repositório
$ git clone https://github.com/Tarmiel/WS.apps/tree/master/II.Dinamic/5.Proffy_booster

# Acesse a pasta do projeto no seu terminal/cmd
$ cd 5.Proffy_booster

# Para instalar todas as dependências do projeto -> web/server/mobile
$ npm install or yarn install

# <Server> para rodar o banco de dados
$ npm run knex:migrate 

# Execute as aplicações com 
$ npm start or yarn start

# A aplicação front-end será aberta na porta:3000 - acesse http://localhost:3000

# A aplicação back-end será aberta na porta:3333 - acesse http://localhost:3333
# Rotas da aplicação( using insomnia ):
- Listagem de professores: GET /classes
- Criação de professor: POST /classes
- Quantidade de conexões: GET /connections
- Criação de uma conexão: POST /connections

# Para a aplicação mobile utilize o Expo
```

![Ecoleta](https://repository-images.githubusercontent.com/284814831/8cae6a00-d769-11ea-998b-bdc878327c43)
