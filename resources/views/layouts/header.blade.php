<!-- Header -->
<header id="header">
	<a href="{{ route('home')}}" class="logo"><strong>URBANCUT</strong></a>
	@if(empty(session('session_id')))
	<h1></h1>
	@else
	
	Hola {{session('session_name')}}

	@endif
	<ul class="icons">

		@if(!empty(session('session_id')))

		<a href="{{ route ('logout')}}" class="button big">Log Out</a>
		

		@if (count(Cart::getContent()))

		<a href="{{route('carrito')}}" class="button big"> Carrito </a>

		@endif

		@else
		<h1></h1>
		@endif

	</ul>
</header>