@section('js')

@stop

@section('css')

@stop

@section('content')
<div class="container-fluid">

	<div class="container background-color">

		<div class="page-header text-center">

			<h1>Leadership Institute <br ><small>June 13, 2015</small></h1>

		</div>

		<img class="banner hidden-xs" src="{{ asset('assets/img/banners/leadership.png') }}" >

		<p class="lead">The <em>Conference Planning Committee</em> will be organizing a <em>Leadership Institute</em> for administators engaged in the advancement of technology on campus.  Participants will share presentations on various relevant subjects.</p>

		<p>A call for presentations includes:</p>

		<ul>
			<li>Strategic technology plan development</li>
			<li>Integration of instructional technologies</li>
			<li>Management and delivery of technologically infused academic programs</li>
			<li>Effective faculty development practices</li>
			<li>Academic support and training</li>
			<li>Implications of technology in institutional development</li>
			<li>The role of mobile technologies in higher education</li>
		</ul>

		<p>Submitted proposals will be peer reviewed by the Conference Planning Committee for: </p>

		<ol>
			<li>originality</li>
			<li>timeliness</li>
			<li>significance</li>
			<li>scholarship</li>
			<li>overall quality and contribution to the focus of the <em>Conference</em></li>
		</ol>

		<p>Please review the <a href="{{ route('submissionInformation') }}">Submission Information</a> for participation.</p>
		<p>Participants at the <em>Conference</em> will have the opportunity to:</p>

		<ul>
			<li>Learn about challenges facing the implementation of an ever-changing technology.</li>
			<li>Exchange ideas and strategies with educators from various parts of the globe.</li>
			<li>Build partnerships for future research and teaching opportunities.</li>
			<li>Assess the impact of technology on students learning outcomes.</li>
			<li>Explore the still untapped pedagogical benefits of a digitized education.</li>
			<li>Discover Morocco’s cultural mosaic, its vibrant colors, its Moorish architecture, its <em>souks</em>, its artistic performances, its unique gastronomy, and much more.</li>
		</ul>

		<div class="container text-center">
			<p><strong>For more information about the conference please contact:</strong></p>
			<p>Proposal Deadline is March 1, 2015</p>
		</div>

	</div>

</div>
@stop