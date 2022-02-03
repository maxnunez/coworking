@guest
    @include('auth.login')
@else
    @include('coworking.template.index')
@endguest

