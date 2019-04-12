# MemberAccess
   ##Description.
      -This is the web application containing of information about Company member(i.e, Firstname, Middlename, Lastname, title, genderof the member, Email address, phone number, occupation, house number of every member of the system )
      - User(member) of the system are able to sign in, deleting the member from the application, update the   application...
      - User can create his profile in the begginning before sign up then using some credetial from table to Sign up...


#Database and user interface
   ##Mysql and apache2 Server Configuration
      ##Ubuntu/ Linux User
       1.Change Root Directory of your project from  to your choise directory.
             -Go to `/etc/apache2/sites-available/default-ssl.conf` then change `/var/www/html` to you
             choise directory for easy access.
             - Go to /etc/apache2/apache2.conf then configure your directory to available in apache server.
              i.e change your root directory in apache configuration file 
              ><Directory /var/www/> to your new root directory ><Directory /home/desktop/myrepo/>
            -Then in your browser, load localhost or 127.0.0.1 the apache will load the file from your new       directory     
         2.Go to `/etc/php/7.x/conf.d/msqlini` then copy `extension=mysqli.so`
           Then past or enable php-mysql extension (extension=mysqli.so) in /etc/php/7.x.x/php.ini
           then Restart Mysql server..
           then your LAMP is already setup, yo can move data from UI to Database
      Tip:
        In Mysql server use >SET PASSWORD FOR 'root'@'localhost' = PASSWORD('mypass'); to change my root password.
   


   ##Window User.
      1.Download XAMPP server then install it after that start XAMPP 
        Start Apache and mysql server in XAMPP
      2. Open your Browser then search localhost or 127.0.0.1 then it will show up XAMPP page. At the right     upper corner there it phpMyAdmin button click it. It will bring you to phpMyAdmin page, Now you are    ready to go, from there yo can Create Database, tables And see your databese
      Note:
      PhpMyAdmin is interface where you can see and access your databases.. 
       



#Mysql Queries used in this project:
  ##Terminal:
   $ sudo -uroot -p  then enter your mysql password.
 
  ##Queries:
  `create database Company;`
  `use Company;`
 ``` create table Member (
     MemberID INT NOT NULL AUTO_INCREMENT,
     FirstName VARCHAR(100) NOT NULL,
     MiddleName VARCHAR(100) NOT NULL,
     LastName  VARCHAR(100) NOT NULL,
     Title  VARCHAR(100),
     Gender VARCHAR(6),
     Email  VARCHAR(100),
     PhoneNo INT(11),
     Occupation  VARCHAR(100),
     HouseNo   INT(11),
     password  INT(11)  NOT NULL
     );```

#XAMPP:
   In phpMyAdmin After Create database, then select the database you create then click SQL in then navigation Bar, then paste Create table query above, then it will create the similar table for you..