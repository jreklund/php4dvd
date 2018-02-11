<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "/lib/bulletproof/bulletproof.php");
require_once($loc . "/lib/bulletproof/utils/func.image-resize.php");

class Movie {
	/**
	 * Fill this movie from an IMDb movie object.
	 * @param $imdbmovie
	 * @param $parental_guidance
	 */
	public function fill($imdbmovie, $parental_guidance) {
		$this->id = isset($this->id) ? $this->id : 0;
		$this->imdbid = $this->htmldecode($imdbmovie->imdbid());
		$this->name = $this->htmldecode($imdbmovie->title());
		$this->nameorder = isset($this->nameorder) ? $this->nameorder : "";
		$akas = array();
		foreach($imdbmovie->alsoknow() as $aka) {
			$title = $this->htmldecode($aka["title"]);
			$akas[$title] = $title;
		}
		$this->aka = join("\n", $akas);
		$this->year = $this->htmldecode($imdbmovie->year());
		$this->duration = $this->htmldecode($imdbmovie->runtime());
		$this->rating = $this->htmldecode($imdbmovie->rating());
		$this->votes = $this->htmldecode($imdbmovie->votes());
		$age = $this->parentalGuidance($imdbmovie->mpaa(),$parental_guidance);
		$this->pg = $age > $parental_guidance["age"] ? $parental_guidance["age"] : $age;
		$this->favourite = isset($this->favourite) ? $this->favourite : false;
		$this->own = isset($this->own) ? $this->own : true;
		$this->seen = isset($this->seen) ? $this->seen : true;
		$this->loaned = isset($this->loaned) ? $this->loaned : false;
		$this->loanname = isset($this->loanname) ? $this->loanname : "";
		$this->loandate = isset($this->loandate) ? $this->loandate : "";
		$this->tv = ($imdbmovie->is_serial() || $imdbmovie->seasons()) ? true : false;
		$this->seasons = $this->htmldecode($imdbmovie->seasons());
		$this->trailer = isset($this->trailer) ? $this->trailer : "";
		$this->notes = isset($this->notes) ? $this->notes : "";
		$this->taglines = $this->join("\n\n", $this->htmldecode($imdbmovie->taglines()));
		$this->plotoutline = trim(strip_tags($this->htmldecode($imdbmovie->plotoutline())));
		$this->plots = $this->join("\n\n", $this->htmldecode($imdbmovie->plot()));
		$this->languages = $this->join("\n", $this->htmldecode($imdbmovie->languages()));
		$this->subtitles = isset($this->subtitles) ? $this->subtitles : "";
		$this->audio = isset($this->audio) ? $this->audio : "";
		$this->video = isset($this->video) ? $this->video : "";
		$this->country = $this->join("\n", $this->htmldecode($imdbmovie->country()));
		$this->genres = $this->join("\n", $this->htmldecode($imdbmovie->genres()));
		$this->mpaa = $this->join("\n", $this->htmldecode($imdbmovie->mpaa()), '::');
		$this->director = $this->join("\n", $this->htmldecode($imdbmovie->director()));
		$this->writer = $this->join("\n", $this->htmldecode($imdbmovie->writing()));
		$this->producer = $this->join("\n", $this->htmldecode($imdbmovie->producer()));
		$this->music = $this->join("\n", $this->htmldecode($imdbmovie->composer()));
		$this->cast = $this->join("\n", $this->htmldecode($imdbmovie->cast()));
	}
	
	private function htmldecode($content) {
		if(is_array($content)) {
			$tmp = array();
			foreach($content as $key=>$value) {
				$tmp[$key] = $this->htmldecode($value);
			}
			return $tmp;
		} else {
			return html_entity_decode($content, ENT_QUOTES, 'UTF-8');
		}
	}
	
	private function join($glue, $pieces, $separator = '', $striptags = true, $allowable_tags = '') {
		$p = '';
		foreach($pieces as $k => $v) {
			if(is_array($v) && isset($v["name"]))
				$v = $v["name"];
			if($striptags)
				$v = strip_tags($v, $allowable_tags);
			if($separator === '')
				$p .= trim($v) . $glue;
			else
				$p .= trim($k) . $separator . trim($v) . $glue;
		}
		return rtrim($p);
	}
	
	private function parentalGuidance($mpaa,$parental_guidance) {
		$want	= $parental_guidance["countries"];
		$age	= $parental_guidance["age"];
		$map	= $parental_guidance["map"];
		
		// No mpaa available
		if(!is_array($mpaa) || empty($mpaa))
			return $age;

		// What countries have a working map
		$mapKeys = array_keys($map);
		$mpaaKeys = array_keys($mpaa);
		$mapAvailable = array_intersect($mapKeys,$mpaaKeys);
		
		// No map available 
		if(empty($mapAvailable)) 
			return $age;
		
		// Do I prefer any of the available countries
		$wanted = array_intersect($want,$mapAvailable);
		if(empty($wanted))
			return $this->_parentalGuidance($mpaa,$map,$age);
		
		// Return first matching rating
		foreach($wanted as $w) {
			if( isset($map[$w][$mpaa[$w]]) )
				return $map[$w][$mpaa[$w]];
		}
		
		// Rating not available
		return $this->_parentalGuidance($mpaa, $map, $age);
	}
	
	private function _parentalGuidance($mpaa, $map, $age) {
		foreach($mpaa as $c => $pg) {
			if( isset($map[$c][$pg]) )
				return $map[$c][$pg];
		}
		return $age;
	}
	
	public function getList($field) {
		$list = $this->{$field};
		$list = preg_split("/\r?\n/", $list);
		$tmp = array();
		foreach($list as $l) {
			if(strlen(trim($l)) > 0) {
				$tmp[] = $l;
			}
		}
		return $tmp;
	}
	
	public function formatPlots($plots) {
		$tmp = array();
		if($count = count($plots)) {
			for($i = 0; $i < $count; ++$i ) {
				$plot = $plots[$i];
				$author = '';
				if(isset($plots[$i+1]) && preg_match('!^\s*-!',$plots[$i+1])) {
					if(isset($plots[$i+2]) && strlen($plots[$i+2]) < 75) {
						$author = $plots[$i+2];	$i += 2;
					} else {
						$i += 1;
					}
				}
				$tmp[] = array('plot' => $plot, 'author' => $author);
			}
		}
		return $tmp;
	}
	
	public function getYouTubeTrailerId() {
		if(preg_match("/youtube.*?v=([^&#]+)/i", $this->trailer, $matches)) {
			return $matches[1];
		}
		return false;
	}
	
	public function photo($dir = false) {
		if(!$dir) {
			global $photopath, $webroot;
			$dir = $webroot.ltrim($photopath,'./');
		}
		return $dir.$this->id.".jpg";
	}
	
	public function hasPhoto($dir = false) {
		if(!$dir) {
			global $photopath;
			$dir = $photopath;
		}
		return file_exists($dir.$this->id.".jpg");
	}
	
	public function addPhoto($field, $dir = false) {
		global $settings;
		if(!$dir) {
			global $photopath;
			$dir = $photopath;
		}
		$photo = $dir.$this->id.".jpg";
		
		$image = new Bulletproof\Image($_FILES);
		$image->setName($this->id)
		      ->setMime(array('jpeg'))
			  ->setLocation(rtrim($dir,'/'))
			  ->setSize($settings["photo"]["min_upload_size"],$settings["photo"]["max_upload_size"])
			  ->setDimension($settings["photo"]["max_width"], $settings["photo"]["max_height"]);

		if($image[$field]){
			$upload = $image->upload(); 

			if($upload){
				if(!rename($image->getFullPath(),$photo))
					return false;
				$resize = Bulletproof\resize(
					$photo,
					$image->getMime(),
					$image->getWidth(),
					$image->getHeight(),
					$settings["photo"]["p_maxwidth"],
					$settings["photo"]["p_maxheight"],
					true,
					false
				);
				return true;
				// OK
			}else{
				return false;
				// $image["error"]; 
			}
		}
		return false;
	}
	
	public function removePhoto($dir = false) {
		if(!$dir) {
			global $photopath;
			$dir = $photopath;
		}
		if($this->hasPhoto($dir))
			unlink($dir.$this->id.".jpg");
	}
	
	public function cover($dir = false) {
		if(!$dir) {
			global $coverpath, $webroot;
			$dir = $webroot.ltrim($coverpath,'./');
		}
		return $dir.$this->id.".jpg";
	}
	
	public function hasCover($dir = false) {
		if(!$dir) {
			global $coverpath;
			$dir = $coverpath;
		}
		return file_exists($dir.$this->id.".jpg");
	}
	
	public function addCover($field, $dir = false) {
		global $settings;
		if(!$dir) {
			global $coverpath;
			$dir = $coverpath;
		}
		$cover = $dir.$this->id.".jpg";
		$thumb = $dir."tn_".$this->id.".jpg";
		
		$image = new Bulletproof\Image($_FILES);
		$image->setName($this->id)
		      ->setMime(array('jpeg'))
			  ->setLocation(rtrim($dir,'/'))
			  ->setSize($settings["photo"]["min_upload_size"],$settings["photo"]["max_upload_size"])
			  ->setDimension($settings["photo"]["max_height"], $settings["photo"]["max_width"]); // Width, Height

		if($image[$field]){
			$upload = $image->upload(); 

			if($upload){
				if(!rename($image->getFullPath(),$cover))
					return false;
				if(!copy($cover, $thumb))
					return false;
				$resize = Bulletproof\resize(
					$thumb,
					$image->getMime(),
					$image->getWidth(),
					$image->getHeight(),
					$settings["photo"]["tn_maxheight"], // Width
					$settings["photo"]["tn_maxwidth"], // Height
					true,
					false
				);
				return true;
				// OK
			}else{
				return false;
			}
		}
		return false;
	}
	
	public function removeCover($dir = false) {
		if(!$dir) {
			global $coverpath;
			$dir = $coverpath;
		}
		if($this->hasCover($dir)) {
			unlink($dir.$this->id.".jpg");
			unlink($dir."tn_".$this->id.".jpg");
		}
	}
}

?>