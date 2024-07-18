# Sistema de Controle de Clientes e Placas de Carro

Este projeto consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro, utilizando PHP, Laravel, PostgreSQL, Docker e Docker Compose.

## Estrutura do Banco de Dados

A base de dados possui os seguintes campos:

- ID
- Nome
- Telefone
- CPF
- Placa do Carro

## Endpoints da API REST

A API REST contém os seguintes endpoints:

- `POST /api/cliente` - Cadastro de novo cliente
- `PUT /api/cliente/{id}` - Edição de um cliente já existente
- `DELETE /api/cliente/{id}` - Remoção de um cliente existente
- `GET /api/cliente/{id}` - Consulta de dados de um cliente
- `GET /api/consulta/final-placa/{numero}` - Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado

## Pré-requisitos

- Docker
- Docker Compose

## Configuração e Execução

### Passo 1: Clonar o Repositório

Clone este repositório em sua máquina local:

```bash
git clone <URL_DO_SEU_REPOSITORIO>
cd <NOME_DO_REPOSITORIO>
```

### Passo 2: Subir os Containers
Suba os containers com o seguinte comando:

```bash
docker-compose up -d
```

### Passo 3: Instalar Dependências
Entre no container da aplicação e instale as dependências do Laravel:

```bash
docker-compose exec app bash
composer install
```

### Passo 4: Configurar o Banco de Dados
Copie o arquivo .env.example para .env e ajuste as configurações do banco de dados conforme necessário.

Gere a chave da aplicação:

```bash
php artisan key:generate
Passo 5: Executar as Migrações
```

Execute as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

### Passo 6: Iniciar o Servidor
Inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve --host=0.0.0.0
```b
A API estará disponível em http://localhost:8000.
