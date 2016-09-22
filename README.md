php4dvd
=======

php4dvd is a small yet powerful, php/mysql powered movie database.

Features
=======

* Search IMDb.com for movie information
* and store this detailed information (like directors, actors, poster, language...)
* More information per movie like personal notes, if you own or have seen the movie, loaned it out, etc...
* Add covers to your movies
* Powerful and quick search function
* User login
* Multiple languages
* Very configurable, easy to use
* Layout is based on a template which you can easily adjust

License
=======

This file is part of php4dvd.

php4dvd is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

php4dvd is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with php4dvd. If not, see <http://www.gnu.org/licenses/>.

Requirements
=======

- Apache 2
- PHP 5.3.7+
- GD2 library to be able to upload (and resize) covers
- PDO library
- PDO driver for MySQL/MariaDB

Installation
=======
1. Upload all the files to your website
   (ex. http://www.yoursite.com/php4dvd).
2. Open the website and the installer will show up.
3. Follow installer steps.
4. Manually remove the install/ directory.
5. Log into php4dvd using the username: admin, password: admin.
	
Upgrade
=======
1. Delete all files and folders except:
```
config/config.php
config/version.inc.php
movies/*
movies/covers/*
```
2. Upload all the files to your website
   (ex. http://www.yoursite.com/php4dvd).
3. Open the website and the installer will show up.
4. Follow installer steps.
5. Manually remove the install/ directory.
6. Log into php4dvd using the username: <your-username>, password: <your-password>.

Configuration
=======
    
###PHP

You will find all configurable options inside config/config.default.php,
all of which can be set in your config/config.php file. 
By default, guest users can't view your movie collection. If you want guest
users to view your collection, set the 'guestview' variable to true in
config/config.php after installation or upgrade.

###GD2

In order to be able to upload and resize covers, you need the GD2 library.

###Access

Try to run the website, but if the site failes opening with a 'Internal 
Server Error', adjust the .htaccess file in the root of the site.
Try to remove the Options line by placing a # at the beginning of the line.
Otherwise remove the <Files> section. These settings might fail because of
the permissions of your webserver.

###Pretty/clean/friendly URLs

Activate inside config/config.default.php or config/config.php and read
the instructions inside .htaccess.
    
Templates
=======

This site can be customized by adding your own template. Take a look at the
tpl/default/ directory and copy this directory to your own tpl directory.
Now you can adjust the config/config.php to your template. Check all 
template files and try to adjust them to your own whishes.
If you just want to change the color, please check config/config.defaults.php
for available skins.
    
Thanks to
=======

Thanks to cyberolf. He originally created php4dvd.
https://sourceforge.net/projects/php4dvd/

Thanks to morphias0. He wrote the first automatic installer/upgrade script 
and came up with some extra features.
 
Thanks to Izzy from IzzySoft. He wrote the imdb php class to be able to 
search for movies at IMDb.com. Big shoutout to Tom for continuing his work:
https://github.com/tboothman/imdbphp
