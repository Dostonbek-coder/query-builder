{{-- @foreach ($users as $user ) --}}
    <p>{{ $user->id}}</p>
    <p>{{ $user->name}}</p>
    <p>{{ $user->age}}</p>
    <p>{{ $user->status}}</p>
    <p>{{ $user->email   }}</p>

{{-- @endforeach --}}