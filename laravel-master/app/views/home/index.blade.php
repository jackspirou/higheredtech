@section('js')
<script>
</script>
@stop

@section('css')
<style>
.carousel {
	margin-bottom: 20px;

	/* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
	/* margin-top: -20px; */
	margin-top: auto;
}

/* Since positioning the image, we need to help out the caption */
.carousel-caption {
	z-index: 10;
}

.carousel .item {
	height: 500px;
	background-color: #777;
}

.carousel-inner > .item > img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	min-width: 1280px;
	height: 100%;
}

.carousel-caption {
	background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Opera 12+ */
	background: -ms-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* IE10+ */
	background: radial-gradient(ellipse at center,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.marketing {

	padding-left: 15px;
	padding-right: 15px;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-3 {
	text-align: center;
	margin-bottom: 20px;
}
.marketing h2 {
	font-weight: normal;
}
.marketing .col-lg-3 p {
	margin-left: 10px;
	margin-right: 10px;
}

@media (min-width: 768px) {

	/* Bump up size of carousel content */
	.carousel-caption p {
		margin-bottom: 20px;
		font-size: 21px;
		line-height: 1.4;
	}

}
</style>
@stop

@section('content')

<div class="container-fluid">

	<div class="container">
		<div class="row text-center">
			<div class="panel panel-default">
				<h3><a href="{{ asset('assets/docs/Conference_2016_Long_Press_Release.pdf') }}">2016 Conference Press Release</a></h3>
			</div>
		</div>
	</div>

	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel" data-interval="3000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="{{ asset('assets/img/carousel/morroco.jpg') }}" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Technology In Higher Education</h1>
						<p>“If we teach today as we taught yesterday, we rob our children of tomorrow” -- John Dewey</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/img/carousel/classroom.jpg') }}" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Participate In Our Discussion</h1>
						<p>“Technology is just a tool.  In terms of getting the kids working together and motivating them, the teacher is the most important” – Bill Gates</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/img/carousel/ruins.jpg') }}" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Immersed In History</h1>
						<p>“Any growth requires a temporary loss of security”– Madeline Hunter</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/img/carousel/ipads.jpg') }}" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Technology, A Learning Tool</h1>
						<p>“New technology is common, new thinking is rare” – Sir Peter Blake</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>

	<div class="container marketing">

		<div class="row text-center">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div style="min-height: 350px;"class="panel-body">
						<i class="icon-road icon-4x"></i>
						<h2>About The Global Forum</h2>
						<br />
						<p>
							The Global Forum On Technology in Higher Education seeks to connect and support a worldwide network of faculty and academic leaders as they engage in managing the challenges of applying technology to higher education...
						</p>
						<br />
						<p><a class="btn btn-primary" href="{{ route('theGlobalForum') }}">View details &raquo;</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div style="min-height: 350px;" class="panel-body">
						<a href="https://twitter.com/HighrEdTech"><i class="icon-twitter icon-4x"></i></a>
						<a class="twitter-timeline" href="https://twitter.com/HighrEdTech" data-widget-id="531594007709634561">Tweets by @HighrEdTech</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-default">
					<div style="min-height: 350px;"class="panel-body">
						<a href="https://www.facebook.com/pages/International-Conference-on-Technology-in-Higher-Education/1578486185706504"><i class="icon-facebook icon-4x"></i></a>
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/International-Conference-on-Technology-in-Higher-Education/1578486185706504" data-width="520px" data-height="250px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div style="min-height: 350px;" class="panel-body">
						<i class="icon-power-off icon-4x"></i>
						<h2>Post Conference Activities</h2>
						<br />
						<p>
							Leadership Institute participants will have an opportunity to engage in various activities and excursions.  An <a href="{{ route('tours') }}">afternoon excursion of Marrakech</a> is included at no additional cost.  Three additional excursions are provided to those who want to gain a deeper understating of Moroccan culture and society.  For more information...
						</p>
						<br />
						<p><a class="btn btn-primary" href="{{ route('postConferenceActivities') }}">View details &raquo;</a></p>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=328713703826884&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@stop
