# PHP-VueJS_CRUD
>PHP and Vue.js CRUD Single page application (SPA)
## Table of Contents
  - [Demo](#demo)
  - [Screenshots](#screenshots)
  - [Technologies](#technologies)
  - [Setup](#setup)
  - [Config project](#config-project)
  - [License](#license)

## Demo
Here is a working live demo: [Basic PHP Vue](https://salty-waters-86856.herokuapp.com/)
## Screenshots
Example web application page
### Home page
![](screenshots/home.png)

## Technologies
Project is created with:
- [php >= 7](https://www.php.net/)
- [Bootstrap 5](https://V5.getbootstrap.com/)
- [Vue.js](https://vuejs.org/)
- [Axios](https://github.com/axios/axios)


## Setup
To clone this project, you need [Git](https://git-scm.com) to install on your computer. command line below:

```zsh
# Clone this repository
$ git clone https://github.com/Bongkot-Kladklaen/PHP-VueJS_CRUD.git

# Go into the repository
$ cd PHP-VueJS_CRUD
```
## Config project
1. Create database and table :

    Open project `PHP-VueJS_CRUD` find folder: `database>database.sql` and Import file sql to database server for you
2. Config connect database server : 

    Open project `PHP-VueJS_CRUD` find folder: `config>config.php` to config: hostname, username, password, database
 
    ```php
        # Config database connect
        define('DB_HOST', 'localhost');         // hostname
        define('DB_USER', 'root');              // username
        define('DB_PASS', 'root');              // password
        define('DB_NAME', 'php-vue');           // database
    ```

## License
[MIT](LICENSE)
