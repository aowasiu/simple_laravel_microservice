# TalentPlus simple API-serving microservice

> A simple API-serving microservice application which requires authentication for creating posts. The content can also be seeded by using Faker. [tags:api,post,talentplus,laravel-api,laravel-9]


## Table of Contents
* Getting Started
* Prerequisites
* Installing XAMPP
* Installing Git
* Installing Composer
* Cloning repo
* Seeding the database
* Testing your simple_laravel_microservice
* Built With
* Author
* Support
* Version
* License


## Getting Started

> These instructions will get you a copy of the project up and running on your local 	machine for development and testing purposes.


### Prerequisites

> What things you need to clone the software.

* An Internet-connected computer (desktop or laptop), ofcourse.
* Apache local development server.
* A web browser


### Installing XAMPP

> Steps to install XAMPP on your computer.

You'll need a PHP development environment package/software installed. E.g. XAMPP or WAMPS, to mention a few. I installed XAMPP. You can find XAMPP to download and install at the address:
```
https://www.apachefriends.org/download.html
```

In case your computer is Linux or Mac, there's a version for each. Also, you'll see links for up to three versions of PHP, as at May 25th, 2021:
```
XAMPP for Windows versions 7.4.29 (PHP 7.4.29), 8.0.19 (PHP 8.0.19) and 8.1.6 (PHP 8.1.6)
XAMPP for Linux versions 7.4.29 (PHP 7.4.29), 8.0.19 (PHP 8.0.19) and 8.1.6 (PHP 8.1.6)
XAMPP for OS X versions 7.4.29 (PHP 7.4.29), 8.0.19 (PHP 8.0.19) and 8.1.6 (PHP 8.1.6)
```


I installed XAMPP for Windows versions 7.4.29 (PHP 7.4.29), 8.0.19 (PHP 8.0.19) and 8.1.6 (PHP 8.1.6).


Launch XAMPP and its control panel.


### Installing Composer

> You'll need to install Composer. Composer is a package manager that's equivalent to Node JS package manager, NPM (Node Package Manager). COmposer can be found, downloaded from:
```
https://getcomposer.org/download
```


Click on the link: 'Composer-Setup.exe'. Download and run the file.


Install the downloaded Composer executable.


### Installing XAMPP

> If you don't have Git, download and install it from the official page.


Open Windows folder and navigate to 'C:\xampp\htdocs'


I assume you have a web browser installed. If not download and install any between:

```
Mozilla Firefox, Google Chrome, Safari or UC browser.
```


## Clone repo

> To clone the repository by launching your terminal or command-line editor, navigate to the live folder for XAMPP projects. It will be "htdocs" folder in "C:\xampp\". WWhile in the terminal, navigate to the folder with the command:
cd C:\xampp\htdocs


Clone the repo by running the command:
```
git clone https://github.com/aowasiu/simple_laravel_microservice
```


> If you check your terminal, your location will be at "C:\xampp\htdocs". Before installing the depenedencies for each folder, first, change into:
```
cd C:\xampp\htdocs\simple_laravel_microservice\talentplus_frontend
```

Install the dependencies for this folder by running this command in terminal:
```
composer install
```

Change into the second folder by running the command:
```
cd C:\xampp\htdocs\simple_laravel_microservice\talentplus_backend

```

Run the command for installing dependencies for this folder too:
```
composer install
```


> Remember to change your database settings in "simple_laravel_microservice/.env" to the web server's settings. This is not mandatory, though. You can use whatever setting appeals to you. As long as the settings match your XAMPP installation's.

```
DB_DATABASE=simple_laravel_microservice
DB_USERNAME=admin
DB_PASSWORD=2RrvB1QYEDSRnXA
```


> Create the database tables by running the command:
```
php artisan migrate
```


## Seeding the database

> You should change into the clone application's folder for housing the seeding logic. That is, "talentplus_backend". So change into the following location:
cd C:\xampp\htdocs\simple_laravel_microservice\talentplus_backend


Now run the command for seeding the database:
php artisan db: seed


## Running a test

> Development or local server:
To view a list of TALENT PLUS posts, run this URL in your web browser
```
http://localhost/simple_laravel_microservice/talentplus_frontend/public
```

> NOTICE:	You can test further by following the routes defined in the application. You can find the routes at:
```
simple_laravel_microservice/routes/api.php
```


## Built With

* [Laravel 9](https://laravel.com/9.x/docs/) - The web framework used.
* [Faker](https://github.com/fzaninotto/Faker) - Used to generate dummy content. Integrated by default into Laravel 9.
* [Postman](https://getpostman.com/) - Used to test dummy-content API.


### Author

* **Wasiu Adisa** - *Initial work* - [aowasiu](https://github.com/wasiuadisa)

---

### Support

Reach out to me at one of the following places!

- LinkedIn at <a href="https://www.linkedin.com/in/wasiu-adisa" target="_blank">`@linkedin`</a>
- Facebook at <a href="https://web.facebook.com/AdisaWasiuOlayemi" target="_blank">`@facebook`</a>
- Gmail at <a href="https://gmail.com" target="_blank">`aowasiu@gmail.com`</a>

---


### Version

1.0.0


### License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
