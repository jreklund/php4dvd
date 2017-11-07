php4dvd 3.X
=======

php4dvd is a small yet powerful, php/mysql powered movie database.

Features
=======

- Add movie information from IMDb.com
  - (directors, actors, poster, language...)
- Keeps track on what movies you watched, bought or loaned out to a friend
- Add covers/posters to your movies
- What do you think about a movie? Write it down in personal notes
- Search function (title, year, plot)
  - Age rating: filter by age (Parental Guidance/MPAA)
  - Filter by: categories, format, movie, tv, seen, own, favourite
  - Sort it by: name, year, rating, format, added, loaned out
  - Results: limit amount of movies shown
  - Layouts: choose between five different display layouts
- Multi-user (admin, editor, guest)
- Multiple languages
- Very configurable, easy to use
- Editable templates using Smarty (no PHP knowledge is required)
- SEO Friendly URL
- Automatic YouTube trailers

Requirements
=======

- Apache 2.2+
- PHP 5.3.7+
- MySQL 5.0+
- GD2 library to be able to upload (and resize) covers
- PDO library
  - PDO driver for MySQL/MariaDB
- cURL

Recommendations
=======

- Apache 2.4+ / Nginx
- PHP 7+
- MySQL 5.6+ / MariaDB 10.0+ 
- YouTube Data API key
  - Minimum Apache 2.4
  - Minimum PHP 5.5.0

Installation
=======
1. [Download](https://github.com/jreklund/php4dvd/archive/master.zip) and unzip php4dvd package if you haven't already.
2. Create a database for php4dvd on your web server, as well as a MySQL (or MariaDB) user who has all privileges for accessing and modifying it.
3. Upload the php4dvd files to the desired location on your web server:
   - (e.g. http://www.yoursite.com/php4dvd).
4. Run the php4dvd installation script by accessing the URL in a web browser. 
5. Manually remove the install/ directory.
6. Log into php4dvd using the username: admin, password: admin.
	
Upgrade
=======
Delete all files and folders except:
```
config/config.php
config/version.inc.php
movies/*
movies/covers/*
```
v3.1.1 or older: You will need to change your `$settings["defaultlanguage"]` inside `config.php`
```
$settings["defaultlanguage"] = "en"; // English
$settings["defaultlanguage"] = "nl"; // Nederlands
$settings["defaultlanguage"] = "sv"; // Swedish
$settings["defaultlanguage"] = "pl"; // Polish
```
2. [Download](https://github.com/jreklund/php4dvd/archive/master.zip) and unzip php4dvd package if you haven't already.
3. Upload the php4dvd files to the desired location on your web server:
   - (e.g. http://www.yoursite.com/php4dvd).
4. Run the php4dvd installation script by accessing the URL in a web browser.
5. Manually remove the install/ directory.
6. Log into php4dvd using your username/password.
7. Empty your browser's cache or force refresh with CTRL+F5 (Win), Ctrl+Shift+R (Win/Linux) or Command+Shift+R (Mac).

Screenshots
=======

<img src="docs/screenshots/login.jpeg" alt="Login" width="45%"> <img src="docs/screenshots/collection.jpeg" alt="Movie collection" width="45%"> 
<img src="docs/screenshots/search.jpeg" alt="Search" width="45%"> <img src="docs/screenshots/movie.jpeg" alt="Movie" width="45%"> 
<img src="docs/screenshots/trailer.jpeg" alt="Movie trailer" width="45%"> <img src="docs/screenshots/addmovie.jpeg" alt="Add movies" width="45%"> 
<img src="docs/screenshots/imdb.jpeg" alt="Search from IMDb" width="45%"> <img src="docs/screenshots/users.jpeg" alt="Users" width="45%"> 

Configuration / FAQ
=======

You will find all configurable options inside `config/config.default.php`,
all of which can be set in your `config/config.php` file. 
By default, guest users can't view your movie collection. If you want guest
users to view your collection, set the `guestview` variable to `true` in
`config/config.php` after installation or upgrade.

### SEO Friendly URL (pretty_url)

Activate inside `config/config.default.php` or `config/config.php` and read
the instructions inside .htaccess.

### Age rating / Parental Guidance / MPAA

Activate inside `config/parental.guidance.php` or `config/config.php` and read
the instructions inside `config/parental.guidance.php`.

### Configure languages
#### Tell IMDb which is the preferred language (e.g. en-US, de-DE, pt-BR)
Sometimes IMDb gets unsure that the specified language are correct, if you only specify your unique language and territory code (de-DE). In the example below, you can find that we have chosen to include `de-DE (German, Germany)`, `de (German)` and `en (English)`. If IMDb can’t find anything matching German, Germany, you will get German results instead or English if there are no German translation.
```
$settings["imdbphp"]["langauge"] = 'de-DE,de,en';
```
Please use The Unicode Consortium [Langugage-Territory Information](http://www.unicode.org/cldr/charts/latest/supplemental/language_territory_information.html) database for finding your unique language and territory code.

| Langauge | Code | Territory   | Code |
| -------- | ---- | ----------- | ---- |
| German   | de   | Germany {O} | DE   |

After you have found your unique language and territory code you will need to combine them. Start with language code (de), add a separator (-) and at last your territory code (DE); `de-DE`. Now include your language code (de); `de-DE,de`. And the last step add English (en); `de-DE,de,en`.

#### Change geolocation
Sometimes your server aren't located in your preferred area (language), so you can use another ip address (e.g. a public proxy), for tricking IMDb geolocation system.
There are some movies/TV Series that have the English translation in "World-wide" and the only way to retrieve them is an US/UK IP-address.
```
$settings["imdbphp"]["ip_address"] = '';
```

### Keyboard shortcuts
- CTRL+F, CMD+F or F3
  - Focus search field
- DELETE (in search field)
  - Removes text in search field
- END (in search field)
  - Reset everything (except: sort by, results per page and layout)

### Internal Server Error

Try to run the website, but if the site failes opening with a `Internal 
Server Error`, adjust the .htaccess file in the root of the site.
Try to remove the Options line by placing a # at the beginning of the line.
Otherwise remove the `<Files>` section. These settings might fail because of
the permissions of your webserver.

### SSL certificate problem: unable to get local issuer certificate
Visible as ERROR 500 in your browser when adding movie/tv posters from IMDb.
#### Windows
1. [Download cacert.pem](https://curl.haxx.se/docs/caextract.html).  
2. Store it somewhere on your server.  
`C:\php\extras\ssl\cacert.pem`  
3. Open your php.ini and add the following under `[curl]`.  
`curl.cainfo = "C:\php\extras\ssl\cacert.pem"`  
4. Restart your web server.

#### Linux
I recommend that you update your local `ca-bundle.crt` or `ca-certificates.crt` file for your whole system.  
There are different best practices depending on OS. Google is your best bet, for finding the safest way.  

You can also use a local `cacert.pem` like in Windows.  
```
/etc/ssl/certs/cacert.pem  
curl.cainfo = "/etc/ssl/certs/cacert.pem"
```
    
Templates
=======

You can customize your site by adding your own template. Take a look at the
`tpl/default/` directory and copy this directory to your own tpl directory.
Now you can adjust the `config/config.php` to your new template. Check all 
template files and try to adjust them to your own whishes.

If you just want to change the color, please check `config/config.defaults.php` for available skins.
    
Thanks to
=======

Thanks to cyberolf. He originally created [php4dvd](https://sourceforge.net/projects/php4dvd/).

Thanks to morphias0. He wrote the first automatic installer/upgrade script 
and came up with some extra features.
 
Thanks to Izzy from [IzzySoft](http://projects.izzysoft.de/trac/imdbphp). He wrote the imdbphp class to be able to 
search for movies at IMDb.com. Big shoutout to [Tom](https://github.com/tboothman/imdbphp) for continuing his work.

### Libraries

#### HTML/CSS/JavaScript
  - [AdminLTE](https://almsaeedstudio.com/)
    - [Bootstrap](http://getbootstrap.com/)
	  - [jQuery](https://jquery.com/)
	  - [HTML5 Shiv](https://github.com/aFarkas/html5shiv)
	  - [Respond.js](https://github.com/scottjehl/Respond)
	- [Font Awesome](http://fontawesome.io/)
  - [bootstrap-slider](https://github.com/seiyria/bootstrap-slider)
  - [Bootstrap 3 Typeahead](https://github.com/bassjobsen/Bootstrap-3-Typeahead)
  - [JavaScript Cookie](https://github.com/js-cookie/js-cookie)
  - [jQuery Validation Plugin](https://jqueryvalidation.org/)
  - [Lazy Load Plugin for jQuery](https://www.appelsiini.net/projects/lazyload)
  - [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/)
  
#### PHP
  - [BulletProof](https://github.com/samayo/bulletproof)
  - [imdbphp](https://github.com/tboothman/imdbphp)
  - [password_compat](https://github.com/ircmaxell/password_compat)
  - [random_compat](https://github.com/paragonie/random_compat)
  - [RedBeanPHP](http://www.redbeanphp.com/)
  - [Smarty](http://www.smarty.net/)

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
