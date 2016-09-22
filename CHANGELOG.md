## 3.0 (2016-09-22)
### Added
  - New mobile first theme with multiple colors.
  - Swedish and Polish (Cred: tmseth) translation.
  - Ability to turn off NO_ZERO_IN_DATE and/or STRICT_ALL_TABLES. Fix for SQL ERROR 1292 (0000-00-00).
  - Specify min/max upload size for images.
  - Specify max width/height for images (in pixels).
  - Settings for default admin username. So that you can't delete the first admin, if you changed your name in the database.
  - Can activate pretty/clean/friendly URLs.
  - Can change the default number of movies shown.
  - Can change how many pages that are shown in pagination.
  - Added "No direct script access allowed" in all php4dvd files.
  - Search query, sort, category, amount and page is now validated against default values.
  - Add your own poster, now you can change out the default one from IMDb.
  - Can convert movies duration from 90 minutes into 1h 30min.
  - Your position is saved. So then you go back, you will return to the same spot. (Cred: Tonza)
  - You can now click on categories inside movies, to search for that category.
  
### Changed 
  - Updated code to PHP 5.3.7+.
  - Updated to the latest RedBeanPhp (4.3.2), Smarty (3.1.30), imdbphp (4.1.1) and BulletProof (2.0.0).
  - Changed maxwidth for thumbnails/posters to better correspond with new theme.
  - You can only export movies, if you are logged in.
  - How language.inc check for available languages.
  - Number of results changed from (4, 8, 12, 16, 20, 24, 28, 32) into (20, 30, 40, 50, 60)
  - Pagination defaults to 6 instead of 8.
  - Only fetch image from IMDb once.
  - Changing password are now validated in PHP (before only in JavaScript).
  - Rewrote some SQL queries, using getRow() instead of load() for information that don't need updating.
  - search() only returns the following columns: ('`id`','`imdbid`','`name`','`format`','`own`','`seen`') if you don't use export to CSV
  - User.class now changed into Users.model (RedBeanPhp)
  - .htaccess updated with newer Options tag for compatibility with newer versions of Apache

### Removed
  - addMovieFormat()
  - removeMovieFormat()
  - generateRandomPassword()
  - isIE()
  - isIE6()
  - isIE7()
  - isIE8()
  - isIE9()
  - findExtention()
  - mkpath()
  
### Fixed
  - $baseurl returned wrong value on multiple sub folders.
  - Export function generated wrong characters.
  - Only run statistics and movie collection ones.
  - Installer overrides users choice of language in step 2 (configuration).
  - Some functions didn't return https if activated.
  
### Security
  - Password is now stored using password_hash. Reset password with MD5.
  - No longer store password in $_SESSION or Smarty $user.
  - Validate against illegal characters in install database configuration.
  - Validation for updating users e-mailaddress and permissions.
  - search() now uses query bindings instead of addslashes.
  - Removed phpinfo.php.

## 2.0
  - New theme which is HTML5 compatible.
  - Updated code to PHP5.3.
  - Updated to the latest imdbphp2 class (v2.1.0).
  - Revisited database model and increased database fields.
  - Multiple languages introduced.
	
## 1.2

  - Updated to the latest imdbphp2 class (v1.9.9).
  - Fixed apple trailer library (www.apple.com -> trailers.apple.com).
  - Empty movie formats are no longer allowed.
  - 'Score' changed into 'Rating' at the movie update page.

## 1.1

  - IMDb plot text broken. Fixed by upgrading to imdbphp2 (pre-release 1.9.8).
  - Searching for cover link fixed when adding new movie.
	
## 1.0

  - Add a link to an (Apple) trailer [#13](https://sourceforge.net/p/php4dvd/feature-requests/13/).
  - YouTube link added to the movie details.
  - By default, the guest login is set to false.
  - Updated to the latest imdbphp class (v1.1.4).
  - Search also supports year.
  - Some graphical restyling.
  - Sorting by loaned out.
  - Default 30 movies per page.
  - Supports customizable movie formats.
  - Movie, audio and subtitles added to movie information [#14](https://sourceforge.net/p/php4dvd/feature-requests/14/).
  - Export to CSV [#15](https://sourceforge.net/p/php4dvd/feature-requests/15/).
  - FIX: IMDb movie information is downloaded with correct characters and stored as UTF-8 text.
	
## 0.2

  - php4dvd can be installed or upgraded with the web installer.
  - More information is added to the movie: format, personal notes, if you have seen it, if you own it and if you loaned it out.
  - Sort by drop down box to sort by more criteria.
  - Added paging, so you can select how many movies you want to view per page to speed up the site.
  - Added user login with guest, editor and admin users.
  - Your search is saved, so when going back to the search page, the same search results appear.
  - Code split up into include files for easier development.
  - Added delete button when showing movie information.
  - Updated to the latest imdbphp class (v1.0.3)
  - Fixed the check for JPG covers only, any other format is not supported.
  - When downloading the cover, the file generated will get the name of the movie instead of the id of the movie.
  - Added path of the movie images and covers to the config. This location can be adjusted.
  - Removed double plotline from the movie overview.
  - Loading screen when building the list of movies.
      
## 0.1

  - Initial release, including ajax search, sorting by name and year, adding movies, searching on IMDb, searching for covers, adding covers.