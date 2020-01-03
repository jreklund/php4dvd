<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "lib/Database.class.php");
require_once($loc . "lib/db/Movie.class.php");

class Movies extends Database {
	/**
	* Save this movie.
	* @param Movie $movie
	*/
	public function save($movie) {
		$m = null;
		if(isset($movie->id))
			$m = R::load("movies", $movie->id);
		if(!$m)
			$m = R::dispense("movies");
		$this->fillObject($m, $movie);
		return R::store($m);
	}

	/**
	 * Remove a movie.
	 * @param Movie $movie
	 * @param string $photopath
	 * @param string $coverpath
	 */
	public function remove($movie, $photopath = false, $coverpath = false) {
		if(!$photopath) {
			global $photopath;
		}
		if(!$coverpath) {
			global $coverpath;
		}
		$m = R::load("movies", $movie->id);
		if($m) {
			R::trash($m);

			// Remove its photo and cover
			$movie->removePhoto($photopath);
			$movie->removeCover($coverpath);
		}
	}

	/**
	 * Create a class from the database item.
	 * @param $dbItem
	 */
	private function create($dbItem) {
		return $this->fillObject(new Movie(), $dbItem);
	}

	/**
	 * Get a movie by its id.
	 * @param int $id
	 * @return the movie or false when the movie was not found
	 */
	public function get($id) {
		return $this->create(R::getRow('SELECT * FROM `movies` WHERE `id` = ?', array($id)));
	}

	/**
	 * Search for movies.
	 * @param string $search
	 * @param string $sort
	 * @param string $category
	 * @param string $format
	 * @param int|null $pgMin
	 * @param int|null $pgMax
	 * @param int|null $movieTv
	 * @param int|null $own
	 * @param int|null $seen
	 * @param int|null $favourite
	 * @param int|null $page
	 * @param int|null $amount
	 * @param boolean $array
	 * @param array $searchColumns
	 * @return the movies that match the search criteria
	 */
	function search($search, $sort = "nameorder", $category = "", $format = "", $pgMin = null, $pgMax = null, $movieTv = null, $own = null, $seen = null, $favourite = null, $page = 0, $amount = 0, $array = false, $searchColumns = array()) {
		// Words
		$words = preg_split("/\s+/", $search);

		// Columns to return
		if(!$searchColumns)
			$searchColumns = array('`id`','`imdbid`','`name`','`format`','`own`','`seen`');

		// Query
		$query  = "SELECT SQL_CALC_FOUND_ROWS ".implode(',',$searchColumns)." FROM `movies` WHERE 1 = 1";
		$bindings = array();
		$wordsTotal = count($words);
		if($wordsTotal > 0 && $words[0] != "") {
			$query .= " AND ((";$i = 0;
			for($i; $i < $wordsTotal; ++$i) {
				$word = $words[$i];

				$query .= "(";
				$query .= "`name` LIKE ? OR ";		$bindings[] = '%'.$word.'%';
				$query .= "`aka` LIKE ? OR ";		$bindings[] = '%'.$word.'%';
				$query .= "`year` LIKE ? OR ";		$bindings[] = '%'.$word.'%';
				$query .= "`plotoutline` LIKE ?";	$bindings[] = '%'.$word.'%';
				$query .= ")";

				// Next word
				if($i + 1 < $wordsTotal)
					$query .= " AND ";
			}
			$query .= ") OR (";
			$query .= "`director` LIKE ? OR ";	$bindings[] = '%'.implode(' ',$words).'%';
			$query .= "`writer` LIKE ? OR ";	$bindings[] = '%'.implode(' ',$words).'%';
			$query .= "`producer` LIKE ? OR ";	$bindings[] = '%'.implode(' ',$words).'%';
			$query .= "`music` LIKE ? OR ";		$bindings[] = '%'.implode(' ',$words).'%';
			$query .= "`cast` LIKE ? ";			$bindings[] = '%'.implode(' ',$words).'%';
			$query .= "))";
		}
		if($category != "") {
			$query .= " AND `genres` LIKE ?"; $bindings[] = '%'.$category.'%';
		}
		if($format != "") {
			$query .= " AND `format` = ?"; $bindings[] = $format;
		}
		if($pgMin !== null && $pgMin >= 1) {
			$query .= " AND `pg` >= ?"; $bindings[] = $pgMin;
		}
		if($pgMax !== null && $pgMax >= 0 && $pgMax < 99) {
			$query .= " AND `pg` <= ?"; $bindings[] = $pgMax;
		}
		if($movieTv === 0 || $movieTv === 1) {
			$query .= " AND `tv` = ?"; $bindings[] = $movieTv;
		}
		if($own === 0 || $own === 1) {
			$query .= " AND `own` = ?"; $bindings[] = $own;
		}
		if($seen === 0 || $seen === 1) {
			$query .= " AND `seen` = ?"; $bindings[] = $seen;
		}
		if($favourite === 0 || $favourite === 1) {
			$query .= " AND `favourite` = ?"; $bindings[] = $favourite;
		}
		if($sort != "") {
			$query .= " ORDER BY ".$sort.", `nameorder`";
		}
		if($amount > 0) {
			$query .= " LIMIT ?,?"; $bindings[] = $page; $bindings[] = $amount;
		}

		// Get all movies
		$movies = array();
		if($array) {
			$movies = R::getAll($query,$bindings);
		} else {
			foreach(R::getAll($query,$bindings) as $movie) {
				$movies[] = $this->create($movie);
			}
		}
		return $movies;
	}

	/**
	 * Get the amount of rows when doing the search limited.
	 * @return the number of rows in total
	 */
	public function getFoundRows() {
		return R::getCell("SELECT FOUND_ROWS()");
	}

	/**
	 * Get a movie by its Imdb id.
	 * @param string $imdbid
	 * @return the movie ID with this IMDb number
	 */
	function getByImdb($imdbid) {
		return R::getRow('SELECT `id` FROM `movies` WHERE `imdbid` = ?', array($imdbid));
	}

	/**
	 * Get all distinct categories.
	 * @return the list of category names
	 */
	public function getCategories() {
		$categories = array();
		foreach(R::getCol("SELECT `genres` FROM `movies`") as $category) {
			// Split by , or newlines
			foreach(preg_split("/,|\n/", $category) as $category) {
				$category = trim($category);
				if(strlen($category) > 0)
					$categories[$category] = $category;
			}
		}
		$categories = array_keys($categories);
		sort($categories);
		return $categories;
	}

	/**
	 * Retrieve all distinct movie formats from the database.
	 * @return all movie formats
	 */
	function getFormats() {
		$formats = array();
		foreach(R::getCol("SELECT DISTINCT `format` FROM `movies`") as $format) {
			if(strlen($format) > 0)
				$formats[] = $format;
		}
		return $formats;
	}
}