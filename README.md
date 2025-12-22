# Projeto CRUD de Tarefas (Laravel)

Este projeto é um **CRUD simples de tarefas** desenvolvido com **Laravel**, com o objetivo principal de **fixar conceitos fundamentais do framework** e entender o fluxo completo de uma aplicação MVC na prática.

## 🎯 Objetivo do Projeto

O foco deste projeto **não é apenas criar funcionalidades**, mas **aprender como o Laravel funciona por trás**, passando por:

* Rotas
* Controllers
* Models (Eloquent ORM)
* Migrations
* Views com Blade
* Operações CRUD (Create, Read, Update, Delete)

Tudo foi construído passo a passo, sem pular etapas, para reforçar o aprendizado.

## 🛠️ Tecnologias Utilizadas

* **PHP 8.x**
* **Laravel 12**
* **Blade** (Template Engine)
* **MySQL / MariaDB** (ou SQLite para testes)
* **HTML5**
* **CSS básico**

## 📌 Funcionalidades

* Criar tarefas
* Listar tarefas
* Editar tarefas
* Excluir tarefas

Cada funcionalidade segue o padrão MVC do Laravel.

## 🗂️ Estrutura do Projeto (conceitual)

* `routes/web.php` → definição das rotas
* `app/Http/Controllers/TaskController.php` → lógica da aplicação
* `app/Models/Task.php` → modelo Eloquent
* `database/migrations` → estrutura do banco de dados
* `resources/views/tasks` → views Blade

## 🔁 Fluxo da Aplicação (em cadeia)

1. O usuário acessa uma rota
2. A rota chama um método do Controller
3. O Controller se comunica com o Model
4. O Model acessa o banco de dados
5. O Controller retorna uma View Blade
6. A View exibe os dados ao usuário

Esse fluxo foi seguido em todas as operações do CRUD.

## 🧠 Aprendizados Reforçados

* Escopo de variáveis no Blade (`@foreach`)
* Uso correto de rotas RESTful
* Comunicação entre Controller e View
* Organização de código seguindo boas práticas
* Importância de erros para aprendizado (debugging)

## 🚀 Como Executar o Projeto

```bash
# Clonar o repositório
git clone <url-do-repositorio>

# Entrar no projeto
cd nome-do-projeto

# Instalar dependências
composer install

# Copiar arquivo de ambiente
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate

# Configurar o banco no .env

# Rodar as migrations
php artisan migrate

# Iniciar o servidor
php artisan serve
```

Acesse:

```
http://127.0.0.1:8000
```

## 📚 Observação Importante

Este projeto faz parte do meu **processo de aprendizado em Laravel**.
O código prioriza **clareza e entendimento**, não otimizações avançadas.

---

✍️ Desenvolvido por Braz para estudo e prática com Laravel.
