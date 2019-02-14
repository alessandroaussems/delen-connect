@if (!empty(Auth::user()))
    <br>
    {{$customer->name}}
    <br>
    {{$customer->email}}
    <br>
@endif
