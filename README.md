# Goals_and_Resolutions
This is a simple CMS with basic CRUD functions, made by procedural PHP.

About:
This is a small project that I did using procedural PHP. 
It a simple CMS (Content Management System). 
We have the basic create, read, update and delete (CRUD) functions and an extra counting function. 
This was a fun little project to work on. 
I hope to improve more in the future.

Database:
Since this is a CRUD based web-app, a database is used to store the data. 
I used phpmyadmin in my local host and MySQL was used to perform all the data manipulation between the UI and database. 
The database structure is given below.

Database name: goals_and_resolutions.
Table name: goals_table.

SQL for table: 
CREATE TABLE `goals_and_resolutions`. ( `goals_id` INT(11) NOT NULL AUTO_INCREMENT , `goals` TEXT NOT NULL , `date` VARCHAR(50) NOT NULL , PRIMARY KEY (`goals_id`)) ENGINE = InnoDB;

UI & UX:
The UI (User Interface) was created from scratch. 
No external framework was used. 
As for the UX (User Experience), I made it pretty obvious and self-explanatory what this web-app is about. 
I think that a better UX is more important than a fancy UI, which is hard to understand. 
I also think avoiding unnecessary animations is a better thing to do than stacking up a lot of useless or unrelated animations. 
Only thing that does is raise confusion.
