# Sistema de Gerenciamento de Tarefas (API)

Este é um sistema de gerenciamento de tarefas simples desenvolvido usando Laravel. Ele fornece uma API para realizar operações básicas de criação, leitura, atualização e exclusão (CRUD) de tarefas.

# Vídeo 
<a>https://youtu.be/Ny18wAd3bNE<a>


## Uso

1. Inicie o servidor de desenvolvimento executando o comando `php artisan serve`.
2. Use uma ferramenta de testes de API, como o Postman ou o Insomnia, para enviar requisições para a API.
3. As rotas disponíveis são as seguintes:
   <br>
   utilizando a url que você escolheu no caso foi a automatica do localserver
   http://localhost:8000

   - `GET  http://localhost:8000/api/tasks`: Lista todas as tarefas.
   - `GET  http://localhost:8000/api/tasks/id`: Obtém os detalhes de uma tarefa específica.
   - `POST  http://localhost:8000/api/tasks`: Cria uma nova tarefa. Requisição com o corpo (em JSON):
     ```json
     {
       "title": "Título da Tarefa",
       "description": "Descrição da Tarefa",
       "status": "true or false"
     }
     ```
   - `PUT  http://localhost:8000/api/tasks/id`: Atualiza os dados de uma tarefa existente. Requisição com o corpo (em JSON):
     ```json
     {
       "title": "Novo Título",
       "description": "Nova Descrição",
       "status": "true or false"
     }
     ```
   - `DELETE  http://localhost:8000/api/tasks/id`: Exclui uma tarefa.


