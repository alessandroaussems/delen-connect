@if (!empty(Auth::user()))
    {{$customer->role ?: '' }}
    <br>
    {{$customer->name}}
    <br>
    {{$customer->email}}
    <br>
@endif
