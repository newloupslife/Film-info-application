Film-info-application
=====================

Simple application that does the work as an information center about the movies.
All copies of information about the film are stored in the database.
It is possible to remove existing ones and add new ones.

Require
=====================

For this project you need:
--------------------------
### MySQL server: 

$ sudo apt-get install mysql-server
-----------------------------------
### MySQL-client:

$ sudo apt-get install mysql-client
-----------------------------------
### PHP-MySQL:

$ sudo apt-get install php7.2-mysql
-----------------------------------
### PHP-local-server (i used XAMPP)

Download and install: https://www.apachefriends.org/ru/download.html

### Some IDE (I used PhpStorm)


Usage
=====================
  1. Pull project to your rep
  2. Need to change permissions on the folder where the project be located 
    (i used xampp so my project must be at /opt/lampp/htdocs path.
     But i created link on it and it was at PhpstormProjects dir.)
  
      $ sudo chmod 777 -R /opt/lampp/htdocs
      
  3. Need to download dump of DATABASE
   
     $ mysql -u <user-name> -p <db-name> < /path/to/dump.sql
  
  4. Turn on the PHP-local-server (xampp)
  5. Open your browser and put in address bar
      
      http://localhost/<dir-name where project is>

Copyright (c) 2019, Uchkin Oleksandr
