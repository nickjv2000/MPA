<?php 
namespace App\Model\Genres;

?>
<h1><center>{{$heading}}</center></h1>

@if ($id == 0) {
@foreach($genreAll as $genres)
    <h2>
        <center><a href="/genres/{{$genres['id']}}">{{$genres['title']}}</a></center>
    </h2>
@endforeach
}
@endif