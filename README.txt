# TalentPlus simple API-serving microservice

> A simple API-serving microservice application which requires authentication for creating posts. The content can also be seeded by using Faker. [tags:api,post,talentplus,laravel-api,laravel-9]


### Table of Contents
* Getting Started
* Prerequisites
* Installing
* Running a test
* Testing your open-news-article-api
* Contributing
* Author
* Deployment
* Built With
* License



## Getting Started

> These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.


### Prerequisites

> What things you need to install the software and how to install them
* A computer (desktop or laptop), ofcourse.
* What your system architecture is. (32-bit or 64-bit).
* Apache local development server.
* A web browser.
* A Laravel installation.


### Installing

> Steps to get the development env running.

You should find out what system architecture your device is. You can find out from your machine. Mine is:

```
Windows 7 Ultimate, RAM 3GB, Processor Intel(R) Core Duo T2600 2.16GHz, 32-bit Operating System.
```

I found out by, turning the computer on, clicking Windows button on the Taskbar and right-clicking on 'Computer'. An information box with the above info pops out.
* The most vital info is:
```
'32-bit Operating System'.
```

NOTE:	The above vital info implies we should only install softwares designed for such systems. Otherwise, the software won't work.

Next, you need to download and install any of the following Apache local server softwares: XAMPP, WAMP or AMPPS. I installed AMPPS. You can find AMPPS at: https://ampps.com/download.
Download and install the version compatible with your system.

```
I installed the one ideal for a '32-bit Operating System' which is AMPPS Version 3.8. This version has Apache, MySQL, PHP, Perl and Python integrated.
```

I assume you have a web browser installed. If not download and install any of:

```
Mozilla Firefox, Google Chrome, Safari or UC browser.
```

You'll find the database tables in 'SOURCE' folder of open-news-article-api. Import the database to your development or production server database.

> If you're testing on a web server, remember to change your database settings in 'open-news-article-api/.env' to the web server's settings

```
DB_DATABASE=api_project
DB_USERNAME=secureuser
DB_PASSWORD=SecurePassworD
```


## Running a test

> Development or local server:
To view a list of news articles
```
http://localhost/repositories/open-news-article-api/public/api/news
```

> Production or web server:
To view a list of news articles
```
http://your-domain/repositories/open-news-article-api/public/api/news/23
```


### Testing your open-news-article-api

> List of news articles
This test shows a paginated list of news articles. 
To view a list of news articles:
```
http://localhost/repositories/open-news-article-api/public/api/news
```

> View of a news article
This test shows a news article. 
To view a news article with id of 23:
```
http://localhost/repositories/open-news-article-api/public/api/news
```

> NOTICE:	You can test further by following the routes defined in the application. You can find the routes at:
```
open-news-article/routes/api.php
```


## Deployment

It will be most convenient and safe to deploy the application to a live server using FileZilla. FileZilla is an FTP client.


## Built With

* [Laravel 5](https://laravel.com/5.8/docs/) - The web framework used.
* [Faker](https://github.com/fzaninotto/Faker) - Used to generate dummy content.
* [Postman](https://getpostman.com/) - Used to test dummy-content API.


## Contributing

Please read [CONTRIBUTING.md](https://github.com/aowasiu/open-news-article-api/CONTRIBUTING.md) for details on code of conduct, and the process for submitting pull requests to us.


## Author

* **Wasiu Adisa** - *Initial work* - [aowasiu](https://github.com/wasiuadisa)

---

## Support

Reach out to me at one of the following places!

- Website at <a href="http://www.wasiuadisa.com/contact" target="_blank">`wasiuadisa.com/contact`</a>
- LinkedIn at <a href="https://www.linkedin.com/in/wasiu-adisa" target="_blank">`@linkedin`</a>
- Facebook at <a href="https://web.facebook.com/AdisaWasiuOlayemi" target="_blank">`@facebook`</a>
- YahooMail at <a href="https://yahoomail.com" target="_blank">`aowasiu@yahoo.com`</a>

---


## License

This project is licensed under the GNU Ver 3 License - see the [LICENSE.md](LICENSE.md) file for details

