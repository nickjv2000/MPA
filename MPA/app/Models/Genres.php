<?php
	namespace App\Models;

	class Genres {
		public static function all() {
		return [
        [
            'id' => '1',
            'title' => 'pop' 
        ],
        
        [
            'id' => '2',
            'title' => 'edm'
        ],
       
        [
            'id' => '3',
            'title' => 'rock'
        ],
        
        [
            'id' => '4',
            'title' => 'hardstyle'
        ],
        
        [
            'id' => '5',
            'title' => 'kpop'
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

    public function getId(Requests $request, $id) {
    }
}