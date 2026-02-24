# Atividade de Rotas e Blade - Laravel
Aluna: Samela Farias

Curso: Análise e Desenvolvimento de Sistemas (ADS) 

Disciplina: Programação Web I 

Instituição: IFCE - Campus Boa Viagem 

## Objetivo
* Estrutura MVC: Organização do fluxo entre Rotas, Controllers e Views.
* Rotas Nomeadas: Uso de ->name() para facilitar a manutenção de links.
* Agrupamento de Rotas: Utilização de Route::prefix('app')->group().
* Controllers: Criação de controladores para gerenciar a lógica das páginas.
* Blade Template Engine: Uso de @extends, @section, @include, @if e @foreach.
* Parâmetros na URL: Manipulação de dados obrigatórios e opcionais via rota.

## Como executar
#### 1. Clonar o repositório
```
git clone https://github.com/Samelafarias/atividade-rotas-mvc.git
```
#### 2. Caminho até pasta do projeto
```
cd atividade-rotas-mvc
```
#### 3. Instalar as dependências
```
composer install
```
#### 4. Configurar o ambiente
```
cp .env.example .env
php artisan key:generate
```
#### 5. Executar o servidor local
```
php artisan serve
```
#### Abrir no navegador `http:\\localhost:8000`
