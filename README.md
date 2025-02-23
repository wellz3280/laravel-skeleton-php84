# Laravel Skeleton PHP 8.4

![Coding Standards](https://github.com/autodocdev/wfs/actions/workflows/coding-standards.yml/badge.svg)
![Static Analysis](https://github.com/autodocdev/wfs/actions/workflows/static-analysis.yml/badge.svg)
![Tests](https://github.com/autodocdev/wfs/actions/workflows/tests.yml/badge.svg)

## Introdução
Esqueleto laravel para novos projetos com PHP 8.4

* [Documentação Open API](https://autodoc.atlassian.net/l/c/VEwmdqd1)
* [Arquitetura do projeto](https://autodoc.atlassian.net/l/c/rsMEFmo1)
* [Requisitos](#requisitos)
* [Como contribuir](#como-contribuir)
* [Ambiente de desenvolvimento](#ambiente-de-desenvolvimento)

## Requisitos

* PHP 8.1
* docker
* docker-compose

## Como contribuir

Para contribuir com o projeto basta seguir os seguintes passos.

### Novo recurso

* Criar um branch a partir do branch develop
* Desenvolver o recurso
* Criar testes de unidade/integração
* Validar o PHP Codesniffer
* Fazer o push do branch que foi desenvolvido
* Abrir uma pull request para o branch develop

#### Hotfix

* Criar um branch a partir do branch main
* Desenvolver o recurso
* Criar testes de unidade/integração
* Validar o PHP CodeSnifferhah
* Fazer o push do branch que foi desenvolvido
* Abrir uma pull request para o branch main
* Abrir uma pull request para o branch develop

## Ambiente de desenvolvimento

Para executar o projeto em seu ambiente local, basta clonar o projeto
em sua maquina local.

```sh
git clone git@github.com:autodocdev/laravel-skeleton-php8.4.git
```

Criar arquivo `.env` a partir do arqyuivo de exemplo `.env.example`.

```sh
cp .env.example .env
```

Instalar depedências do projetos.

```sh
composer install
```

Iniciar todos os containers a partir do `docker-compose.yml`.

```sh
docker-compose up -d
```

Após todos os passos acima, o projeto vai esta executando no
endereço abaixo.

``` http://localhost:8080/v1 ```
