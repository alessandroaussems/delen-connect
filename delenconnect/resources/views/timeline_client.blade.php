@if (!empty(Auth::user()) && !empty($customer))
    ID => {{ $customer->id ?: '# EMPTY ID #' }}
    <br>
    ROLE => {{ $customer->role ?: '# EMPTY ROLE #' }}
    <br>
    NAME => {{ $customer->name ?: '# EMPTY NAME #' }}
    <br>
    E-MAIL => {{ $customer->email ?: '# EMPTY EMAIL #' }}
@endif
