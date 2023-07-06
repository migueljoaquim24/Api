# Sistema de Gerenciamento de Tarefas (API)

Este é um sistema de gerenciamento de tarefas simples desenvolvido usando Laravel. Ele fornece uma API para realizar operações básicas de criação, leitura, atualização e exclusão (CRUD) de tarefas.


## Uso

1. Inicie o servidor de desenvolvimento executando o comando `php artisan serve`.
2. Use uma ferramenta de testes de API, como o Postman ou o Insomnia, para enviar requisições para a API.
3. As rotas disponíveis são as seguintes:

   - `GET /api/tasks`: Lista todas as tarefas.
   - `GET /api/tasks/id`: Obtém os detalhes de uma tarefa específica.
   - `POST /api/tasks`: Cria uma nova tarefa. Requisição com o corpo (em JSON):
     ```json
     {
       "title": "Título da Tarefa",
       "description": "Descrição da Tarefa",
       "status": true or false
     }
     ```
   - `PUT /api/tasks/id`: Atualiza os dados de uma tarefa existente. Requisição com o corpo (em JSON):
     ```json
     {
       "title": "Novo Título",
       "description": "Nova Descrição",
       "status": true or false
     }
     ```
   - `DELETE /api/tasks/id`: Exclui uma tarefa.


