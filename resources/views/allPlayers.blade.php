<h1> All Users details list</h1>


@foreach ($data as $id => $user)

<h3>
    {{$user->name}} |
    {{$user->email}} |
    {{-- {{$user->age}} | --}}
    {{$user->city}} |
</h3>

@endforeach
