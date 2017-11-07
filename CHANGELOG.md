## 3.7.0 (2017-11-07)
### Added
  - You can now change your preferred language from IMDb. #15

### Changed
  - Username can't start or end with a dot (".")
  - Username can only have one dot as a separation; forename...surname turns into forename.surname
  
### Updated
  - imdbphp 5.2.4

## 3.6.3 (2017-10-30)
### Fixed
  - The password is saved even though it was empty. (My profile)
  - Users could change into a already used email address.
  
### Changed
  - Only allow a-z, 0-9 and dot (".") in usernames. Between 5-50 characters.

### Updated
  - BulletProof 3.2.0
  - jQuery Validation Plugin 1.17.0
  - jQuery 3.2.1
  - RedBeanPHP 5.0

## 3.6.2 (2017-09-24)
### Security
  - XSS attacks
    - Trailer URLs where never validated
    - imdbid; if it's possible with 20 characters
	- Do not trust imdbphp
	
### Changed
  - Handle pagination with jQuery
  - MoviePosterDB have been down for a while. Adding CineMaterial instead.
  - Duration: Move "minutes" to the right
  
### Fixed
  - Escape all translated strings
  - Searching for trailers and posters didn't work with: Nick and Norah's Infinite Playlist

## 3.6.1 (2017-09-19)
### Added
  - Support for West Germany (Parental Guidance) by @Bloodsoul #12

### Updated
  - imdbphp 5.2.3
  - Screenshots
  - Code cleanup

### Fixed
  - Search field got extra border when focused
  - Parental Guidance
    - Let the user decide the maximum age
	- If maximum age have been lowered; allow users too se movies added before 3.6.0
	- Only run queries if it have been activated

## 3.6.0 (2017-09-17)
### Added
  - Parental Guidance #7
  - Keyboard Shortcuts for search
    - CTRL+F, CMD+F and F3: focus search field
	- END: deletes selected filters #9
  - German language by @Bloodsoul
  
### Changed
  - Remove logo from mobile
  - Updated imdbphp to 5.2.2

## 3.5.0 (2017-07-25)
### Added
  - Filter by: Movie | TV-Series | Own | Seen | Favorites
  - Icons added in movie collection: TV-Series | Not Own | Not Seen | Favorites
    - Configuration added to disable icons on posterview (poster, postertitle)
  
### Changed
  - Updated imdbphp to 5.2.1
  - Layouts (posterlist, list, listplot): Only two languages are now shown in movie collection
  
### Fixed
  - Search field closed automatic on Android

### Removed
  - Seen and Own removed from "Sort by" in movie collection

## 3.4.1 (2017-04-20)
### Added
  - Remove old authentication(s)
  
### Changed
  - Updated random_compat to 2.0.10
  - Updated imdbphp to 5.2.0
  
### Fixed
  - Various UTF-8 encoding problems

## 3.4.0 (2017-04-04)
### Added
  - Sorting without 'The' prefix #4 

## 3.3.0 (2017-03-19)
### Added
  - Searching on media types/format
  - Combining CSS/JS

### Fixed
  - Sidebar should scroll on small mobile devices
  - Typos

## 3.2.5 (2017-02-21)
### Changed
  - Upadted imdbphp to 5.1.1

## 3.2.4 (2017-02-20)
### Added
  - You can now flag your movies/series as favourite(s)
  
### Changed
  - Updated imdbphp to 5.0.4 RC1
  - Moved favourite/seen/own to the right of genres and right on poster on mobile
  - Genres are now separate buttons (not grouped together)
  - Download cover moved from navigation on top of poster

### Fixed
  - 1h 0min (on 60min runtime)
  - Cover images should have reversed width/height limitations

## 3.2.3 (2017-02-11)
### Added
  - You can now force php4dvd to use HTTPS
  - getValidId() validates that a correct id have been specified
  
### Changed
  - Upgrading charset and collation
    - Changing database into utf8mb4 and utf8mb4_unicode_520_ci
      - MySQL 5.6+ and mysqlnd 5.0.9+
    - Changing database into utf8mb4 and utf8mb4_unicode_ci
      - MySQL 5.5.3+ and mysqlnd 5.0.9+
    - Database fallback into utf8 and utf8_unicode_ci
  - "Update all" now waits for 2 seconds, so that you can cancel update
  
### Fixed
  - Removed weak typing comparisons
  - Remove rememberme cookie after 1 second, fix for wrong browser clocks
  - If user where removed and valid auth where specified, auth where never removed from database
  - Everybody could search on imdb with $_GET['imdbid']
  - Removed unwanted characters from url (movie.html)
  - Some languages broke the menu up in two rows
  - Search now match categories if "Search..." have been specified
  - Spelling
  - PHP 7.1 throws warning on "A non-numeric value encountered"
  - Passwords could be changed even though they didn't match (PHP)

## 3.2.2 (2017-01-31)
### Added
  - You can now add TV-Series (Seasons)

### Changed
  - Updated AdminLTE to 2.3.11
  - Blu-ray are now the standard video format
  - Add from IMDb now includes Direct-to-video
  
### Fixed
  - setlocale uses ISO 639-1 and ISO 3166-1
  - Wrong character encoding on table.auth
  - Installer ran last database update too

## 3.2.1 (2017-01-27)
### Added
  - Validation of photos (jpeg|jpg)
  - "Remember me" on log in
  
### Changed
  - Updated imdbphp to 5.0.3
  - Updated BulletProof to 2.0.2
  
### Fixed
  - Resize high-res image only when it's saved 
  - Missing id tag on input/textarea
  - Plots author mistaken for next plot
    - Ignore author if longer then 75 chars
  - Navigation no longer indented on moviecolletion (mobile)
  - Check if Youtube API key is available
  - Compability with PHP 5.3.7+. Youtube API requires PHP 5.5.0+
  
### Security
  - Added rel="noreferrer noopener" on target="_blank" links
    - https://html.spec.whatwg.org/multipage/semantics.html#link-type-noopener
  - Remove version number after installation (visible for admin)
  - No longer store password in Smarty $User (for real this time).

## 3.2 (2017-01-16)
### Added
  - Added ability to change amount of cast shown
  - Downloading high resolution images from IMDb (enable in settings)
  
### Changed
  - Moved movie specific variables from common.inc into movie.inc
  - Renamed language names to match ISO 639-1 codes
	- WARNING! This will break your site. You must change defaultlanguage inside your config.php file.
  - Removed myUcfirst() and fixed translation instead

### Fixed
  - Moved "Personal notes" into it's own box
  - Movieplots are no longer an ordered list. #2

## 3.1.1 (2016-12-27)
### Added
  - Added ability to toggle "Plots" on Movies

### Changed
  - Updated imdbphp to 5.0.1
  - Updated fontawsome to 4.7.0
  - Updated AdminLTE to 2.3.8
  - Updated all JavaScript dependencies
  - Removed "results per page" from dropdown
  - Display all movies by default
  
### Fixed
  - Layouts highlight not remembered
  - Loading icon not working
  - Updated polish translation from tmseth 
  - Results per page: Dropdown will now adapt for changes made to $settings["results_per_page"]

## 3.1 (2016-09-28)
###Added
  - Fetch trailers automatic from YouTube
  - Can delete search query with "delete"-button
  - Added four more layouts.
    - Posters
    - Posters with title (default)
    - Posters with movie information
    - List
    - List with movie information
  - All posters are now loaded with lazyloading
  - Search movies for director/writer/producer/cast (click on name, and all his/her movies will show)
  - Added the ability to change "results per page"-dropdown
  - Mobile friendly pagination
  - 404-page (not translated)

### Changed
  - Installer now ignores configuration if config/config.php exits
  - Installer now ignores database upgrade if already latest version

### Fixed
  - Light skin had wrong CSS applied to menu
  - Installer and adding movies broke on NO_ZERO_IN_DATE
  - Missing /movie/covers folder
  - Searching for movies on IMDb only worked if SEO Friendly URL where activated
  - Searching for director... changed into htmlspecialchars to support foreign characters

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