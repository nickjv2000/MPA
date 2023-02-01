<h1><center>{{$heading}}</center></h1>

@foreach($genrelist as $genre)
    <h2>
        <center><a href="musicSelection">{{$genre['title']}}</a></center>
    </h2>
@endforeach