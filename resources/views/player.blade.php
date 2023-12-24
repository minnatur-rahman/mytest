<h1>Single User Datils</h1>

@foreach ($data as $id => $player)
     <h3>Name : {{$player->name}}</h3>
     <h3>Email : {{$player->email}}</h3>
     <h3>Age : {{$player->age}}</h3>
     <h3>City : {{$player->city}}</h3>
@endforeach
