@section('js')

@stop

@section('css')

@stop

@section('content')
<div class="container-fluid">

	<div class="container background-color">

		<div class="page-header text-center">

			<h1>{{ $subject }}</h1>

		</div>

		<h2>From: {{ $email }}</h2>

		<p>{{ print_r($message) }}</p>

	</div>

</div>
@stop