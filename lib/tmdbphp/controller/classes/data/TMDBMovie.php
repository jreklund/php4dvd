<?php
/**
 * 	This class handles all the data you can get from a TMDBMovie
 *
 *	@package TMDB-V3-PHP-API
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.2
 * 	@date 02/04/2016
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class TMDBMovie extends ApiBaseObject{

	private $_tmdb;

	//------------------------------------------------------------------------------
	// Get Variables
	//------------------------------------------------------------------------------

	/**
	 * 	Get the TMDBMovie's title
	 *
	 * 	@return string
	 */
	public function getTitle() {
		return $this->_data['title'];
	}

	/**
	 * 	Get the TMDBMovie's tagline
	 *
	 * 	@return string
	 */
	public function getTagline() {
		return $this->_data['tagline'];
	}

	/**
	 * 	Get the TMDBMovie Directors IDs
	 *
	 * 	@return array(int)
	 */
	public function getDirectorIds() {

		$director_ids = [];

		$crew = $this->getCrew();

		/** @var Person $crew_member */
        foreach ($crew as $crew_member) {

			if ($crew_member->getJob() === Person::JOB_DIRECTOR){
				$director_ids[] = $crew_member->getID();
			}
		}
		return $director_ids;
	}

	/**
	 * 	Get the TMDBMovie's trailers
	 *
	 * 	@return array
	 */
	public function getTrailers() {
		return $this->_data['trailers'];
	}

	/**
	 * 	Get the TMDBMovie's trailer
	 *
	 * 	@return string | null
	 */
	public function getTrailer() {
		$trailers = $this->getTrailers();

		if (!array_key_exists('youtube', $trailers)) {
			return null;
		}

		if (count($trailers['youtube']) === 0) {
			return null;
		}

		return $trailers['youtube'][0]['source'];
	}

	/**
	 * 	Get the TMDBMovie's reviews
	 *
	 * 	@return Review[]
	 */
	public function getReviews() {
		$reviews = array();

		foreach ($this->_data['review']['result'] as $data) {
			$reviews[] = new Review($data);
		}

		return $reviews;
	}

	/**
	 * 	Get the TMDBMovie's companies
	 *
	 * 	@return Company[]
	 */
	public function getCompanies() {
		$companies = array();

		foreach ($this->_data['production_companies'] as $data) {
			$companies[] = new Company($data);
		}

		return $companies;
	}

	//------------------------------------------------------------------------------
	// Import an API instance
	//------------------------------------------------------------------------------

	/**
	 *	Set an instance of the API
	 *
	 *	@param TMDB $tmdb An instance of the api, necessary for the lazy load
	 */
	public function setAPI($tmdb){
		$this->_tmdb = $tmdb;
	}

	//------------------------------------------------------------------------------
	// Export
	//------------------------------------------------------------------------------

	/**
	 * 	Get the JSON representation of the TMDBMovie
	 *
	 * 	@return string
	 */
	public function getJSON() {
		return json_encode($this->_data, JSON_PRETTY_PRINT);
	}


	/**
	 * @return string
	 */
	public function getMediaType(){
		return self::MEDIA_TYPE_MOVIE;
	}
}
