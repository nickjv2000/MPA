<?php
	namespace App\Models;

	class Genres {
		public static function all() {
		return [
        [
            'id' => '1',
            'title' => 'pop',
            'songs' => 'a' 
        ],
        
        [
            'id' => '2',
            'title' => 'edm',
            'songs' => 'a'
        ],
       
        [
            'id' => '3',
            'title' => 'rock',
            'songs' => 'a'
        ],
        
        [
            'id' => '4',
            'title' => 'hardstyle',
            'songs' => 'a'
        ],
        
        [
            'id' => '5',
            'title' => 'kpop',
            'songs' => 'a'
        ]
    	];
    }

    public static function find($id) {
    	$genres = self::all();

    	foreach($genres as $genre) {
    		if($genre['id'] == $id) {
    			return $genre;
    		}		
    	}
  	}
}