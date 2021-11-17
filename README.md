# API for Post
## How to run this API : 
### First of all, download the repository with the command :
##### > `git clone git@github.com:ludovicrochur/testTaqt *name_your_repo*`  
### And then follow these commands :  
##### > `cd *name_your_repo*/`  
##### > `composer install`
### At this point, in your .env, you have the database configured on mysql with the user root and the db_name named testTaqt. You can change it and follow these commands :  
##### > `php bin/console doctrine:database:create` or ` symfony console d:d:c` (only if you have symfony-CLI)
##### > `php bin/console doctrine:migrations:migrate` or ` symfony console d:m:m` (only if you have symfony-CLI)
##### > `php bin/console doctrine:fixtures:load` or ` symfony console d:f:l` (only if you have symfony-CLI)
  
#### At this point, you have a database named *name_your_repo* with some data into it. Let's now see how you can exploit its.  
##### Run > `php -S localhost:8000 -t public` or `symfony server:start`  
##### Try the API on [Postman by downloading it](https://www.postman.com/downloads/) or use the chrome extension. You can also find many API testing tools like [Insomnia REST](https://insomnia.rest/) for example.
