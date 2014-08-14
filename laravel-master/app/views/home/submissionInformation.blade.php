@section('js')

@stop

@section('css')

@stop

@section('content')
<div class="container-fluid">

	<div class="container background-color">

		<div style="text-align: center;" class="page-header text-center">

			<h1>Submission Information <br ><small></small></h1>

		</div>

		<img class="banner hidden-xs" src="{{ asset('assets/img/banners/old-typewriter-keys.png') }}" >

		<h2>HOW TO SUBMIT YOUR PROPOSAL</h2>
		<p class="lead">Include the following information in a 1 page proposal: </p>

		<ol>
  			<li>Name, affiliation and address of each presenter </li>
  			<li>Email, phone and fax number of each presenter </li>
  			<li>Presentation Title (15 words or fewer)</li>
  			<li>Presentation Abstract (300-400 words describing the topic)</li>
		</ol>

		<br />

		<h2>SEND PAPER PROPOSAL TO </h2>

		<ul class="list-unstyled">
			<li><strong>Aran MacKinnon</strong>, Conference Program Chair</li>
  			<li>Professor and Chair </li>
  			<li>Department of History and Geography</li>
  			<li>Georgia College & State University</li>
  			<li>Email to: <a href="{{ route('committee') }}">Aran.Mackinnon@gcsu.edu</a></li>
		</ul>

		<h4 style="text-align: center;">All presenters must register and pay the conference registration fee.  Proposals will be reviewed by the Conference Program Committee  and will be acknowledged via email within 72 hours of arrival/receipt. </h4>
		<h3 style="color: red; text-align: center;"><strong>The deadline for Proposal Submissions is March 1, 2015 </strong></h3>

	</div>

</div>
@stop