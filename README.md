# Vanya Sark-Geissler Project 21430060

Read Me - documentation for project ALTERNATIVELY open READ-ME.html (with screenshots)



This project application requires an XAMPP server with PHP 8.0 and MySQL

This can be download and installed via the url: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html).
1. Choose the correct operating system, and then Version 8.0.18 / PHP 8.0.18 
    or 
    Version 8.1.5 / PHP 8.1.5 will also work.

2. When XAMPP is installed and XAMPP Manager launched, click into the "manage servers" tab and click the button "START ALL", this will start the required servers.

When all servers show status "Running", click welcome tab.

In the welcome tab, click "Open Application Folder". This will open xamppfiles directory. Open the folder named "htdocs", remove the content, and drag all of the files from the usb drive into "htdocs".

3. A database in phpMyAdmin will need to be created for the application to work. By clicking "Go to Application" an error message will show. In XAMPP manager, click "Go to Application", this will open up localhost in the web browser, add to the end of localhost "/phpmyadmin/" e.g. "http://localhost/phpmyadmin/" if an account hasn't been made, create a user and password to access phpmyadmin. In the main dashboard of phpmyadmin, click into the "Import" tab

under "File to import:" click browse/choose file

Please find on the usb or in "htdocs" folder an SQL file "db3_21430060.sql" choose this file. 
Scroll down to the bottom of the page and click "GO". This has now created a database called "db3_21430060" containing a table called "user" with dummy data for the project. A success message should show.

The application can now be run. url: [http://localhost/app/](http://localhost/app/).

Sign in details are:
username: root
password: vanyaproject

Or create a new account




the cloud server application config.

For this project I setup an ec2 on aws and the app works on there, 
the ip address is: [http://13.48.48.60/login](http://13.48.48.60/login)
the domain name attached is: [http://piktopik.com](http://piktopik.com)

sign in details:
username: root
password: vanyaproject

once logged in, the app is: [http://13.48.48.60/vdb]
the phpmyadmin login is different!! 
phpmyadmin is the db part of vdb, so it is [http://13.48.48.60/vdb/db] this is show all in one in /vdb 

phpmyadmin login in details:
username: root
password: macbookproM1 

*** the password is case sensitive with only uppercase M




Project created by Vanya Sark-Geissler