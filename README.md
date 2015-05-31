# Milton
#### An online course-finding tool for everyone
<sup>Curent version: 1.0.0</sup>

## Project currently "abandoned"  
I mean this was a school project all along so once we had what we needed for a presentation all active development kinda screeched to a halt.  
Version 1.0.0 is full of hard-coded nonsense and the application isn't in a fully functional state, so don't expect to actually be able to use this, sorry.

***
## Installing
### Prerequisites
* Functional LAMP (Linux, Apache, MySQL, PHP) installation, or your platform's equivalent (Windows users can install [WampServer](http://www.wampserver.com/en/)).

### Setup
* Clone the repository or download and extract the .zip to your web root, and set up a VirtualHost if you wish (shouldn't be required).
* In MySQL, create a databse for the application. You can name it whatever you want. In the terminal this can be done with:
```
$ mysql -u [username] -p
mysql> CREATE DATABASE [db_name];
```
The MySQL username is usually "root" by default, use that if you're unsure.
* Open the sql/ subdirectory and setup the database structure with:
```
$ mysql -u [username] -p [db_name] < db_setup.sql
```
This creates all needed tables in the database and adds an administrator user.

The application should now be up and running. To access it, simply open `http://localhost/milton` in your browser (this may vary depending on if you have VirtualHosts set up or placed the application in a different directory).
