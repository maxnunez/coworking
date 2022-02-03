@guest
    @include('auth.login')
@else
	@include('template.index')
@endguest

