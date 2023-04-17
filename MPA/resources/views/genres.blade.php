<?php 
namespace App\Model\Genres;
$id = request('id');
?>
<h1><center>{{$heading}}</center></h1>

@if ($id == 0)

    @foreach($genreAll as $genres) 
        <h2>
            <!-- <center><a href="/genres/{{$genres['id']}}">{{$genres['title']}}</a></center> -->
        </h2>
    @endforeach
    @else()
 <!--        <h1>
            <center><a href="/genres">Home</a></center>
        </h1>
        <h2>
            <center>{{$genre['title']}}</center>
        </h2>
        <h3>
            <center>{{$genre['songs']}}</center>
        </h3> -->
@endif