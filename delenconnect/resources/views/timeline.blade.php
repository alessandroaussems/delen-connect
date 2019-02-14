@if (!empty(Auth::user()))
    {{$customer->name}}
    <br>
    {{$customer->email}}
    <br>
@endif
