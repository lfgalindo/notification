# Notification

Projeto elaborado utilizando o framework Laravel para estudo de SOLID.

# Sobre

SOLID são os seguintes cinco princípios da programação orientada a objetos:

<b>1- Single Responsiblity Principle</b>
Este projeto segue este princípio pois cada classe tem uma resposabilidade única.

<b>2- Open-Closed Principle</b>
Neste projeto este princípio é utilizado por utilizar as interfaces e suas implementações. Por exemplo:

-   Os Controllers não se relacionam diretamente com as Models, temos uma interface de Repositórios entre essas duas camadas.
-   A facade Http do Laravel não é utilizada diretamente.

<b>3- Liskov Substitution Principle</b>
Aplicado na interface "PersonRepository" que extende a interface "AllDB"

<b>4- Interface Segregation Principle</b>
Todos os métodos implementados por meio de uma inteface são necessários.

<b>5- Dependency Inversion Principle</b>
Com exceção dos objetos próprios as injeções de dependencia foram feitas com abstrações.

## Requisitos

-   **[PHP](https://www.php.net/)** instalado (testado com a v8.0.5).
-   **[Git](https://git-scm.com/)** instalado.
-   **[Composer](https://getcomposer.org/)** instalado.

## Instalação

Para instalar e utilizar este projeto basta seguir os seguintes passos:

1. Clone o repositório:</br>
   `git clone https://github.com/lfgalindo/notification`

2. Entre na pasta do projeto, crie um arquivo _.env_ e configure um banco de dados:</br>
   `cd notification && cp .env.example .env`

3. Se for usar o sqlite (sugerido), crie o banco:</br>
   `touch ./database/database.sqlite`

4. Instale as dependências utilizando o composer:</br>
   `composer install`

5. Utilizando o artisanm, gere a key e crie as tabelas do banco de dados:</br>
   `php artisan key:generate && php artisan migrate`

6. Execute o projeto:</br>
   `php artisan serve`

7. Concluído!!!

## Autor

[Luiz Felipe Magalhães Galindo](https://github.com/lfgalindo) <<lfgalindo@live.com>>
