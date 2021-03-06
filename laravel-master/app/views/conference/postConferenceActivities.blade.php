@section('js')

@stop

@section('css')

@stop

@section('content')
<div class="container-fluid">

	<div class="container background-color">

		<div class="page-header text-center">

			<h1>Post Conference Activites</h1>

		</div>

		<img class="banner hidden-xs" src="{{ asset('assets/img/banners/adventure.jpg') }}" >

		<p class="lead">Conference participants will have an opportunity to engage in various activities and excursions.  An <a href="{{ route('tours') }}">afternoon excursion of Marrakech</a> is included at no additional cost.  Other excursion opportunities will be announced.</p>

<!--
		<ol>
  			<li><a href="#AGADIR">MARRAKECH – AESSAOUIRA – AGADIR</a></li>
  			<li><a href="#FEZ">MARRAKECH – RABAT – FEZ</a></li>
		</ol>

		<br />

		<h2 id="AGADIR">1. Marrakech - Aessaouira - Agadir</h2>
		<h3>Details:</h3>
		<ul>
  			<li><strong>Duration:</strong> Three Day Trip</li>
  			<li><strong>Route:</strong> South of Morocco</li>
  			<li><strong>Locations:</strong> MARRAKECH – AESSAOUIRA – AGADIR</li>
  			<li><strong>Cost:</strong> COST: $550 (USD)</li>
		</ul>
		<h3>Schedule:</h3>
		<h4>Day 1 <small>June 18th, AESSAOUIRA - AGADIR</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>9:00 am: </dt>
				<dd>Departure for <strong>AESSAOUIRA</strong></dd>
				<dt>Mid-day:</dt>
				<dd>Lunch in <strong>AESSAOUIRA</strong></dd>
				<dt>2:00 pm - 6:00 pm: </dt>
				<dd>Tour of <strong>AESSAOUIRA</strong>, a seaside town with undeniable charm, stone ramparts surrounding whitewashed houses with bright blue shutters, art galleries, and a picturesque harbor. </dd>
				<dt>6:00 pm: </dt>
				<dd>Dinner in <strong>AESSAOUIRA</strong></dd>
				<dt>7:00 pm: </dt>
				<dd>Departure to <strong>AGADIR</strong></dd>
				<dt>Overnight: </dt>
				<dd>Hotel in <strong>AGADIR</strong></dd>
			</dl>
		</div>

		<h4>Day 2 <small>June 19th, AGADIR - TIZNIT – DESERT</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>Prior 8:30 am: </dt>
				<dd>Complementary breakfast at the hotel in <strong>AGADIR</strong></dd>
				<dt>9:00 am: </dt>
				<dd>Departure in minibus to <strong>Le Petit Desert</strong>, the start of the desert</dd>
				<dt>1:00 pm:</dt>
				<dd>Lunch in a Nomads village</dd>
				<dt>Afternoon: </dt>
				<dd>Silver Market in <strong>TIZNIT</strong> market</dd>
				<dt>Overnight: </dt>
				<dd>Hotel in <strong>AGADIR</strong></dd>
			</dl>
		</div>

		<h4>Day 3 <small>June 20th, AGADIR</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>Prior 8:30 am: </dt>
				<dd>Complementary breakfast at the hotel in <strong>AGADIR</strong></dd>
				<dt>9:00 am: </dt>
				<dd>Departure in minibus for a tour of <strong>AGADIR</strong></dd>
				<dt>1:00 pm:</dt>
				<dd>Lunch in <strong>MARRAKECH</strong></dd>
				<dt>3:00 pm – 6:00 pm: </dt>
				<dd>Visit to the <strong>souk</strong> / shopping</dd>
				<dt>6:00 pm: </dt>
				<dd>Departure to <strong>MARRAKECH</strong></dd>
				<dt>Evening: </dt>
				<dd>in <strong>MARRAKECH</strong> / free</dd>
				<dt>Overnight: </dt>
				<dd>Hotel in <strong>MARRAKECH</strong></dd>
			</dl>
		</div>

		<h4>Day 4 <small>June 21st, CASABLANCA or MARRAKECH AIRPORTS</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>All day: </dt>
				<dd>Transportation will be provided either to the Casablanca or Marrakech airports</dd>
			</dl>
		</div>
		<h4>PROGRAM FEE:  <small>$ 550 single occupancy</small></h4>
		<h4><em>Program fee includes:</em></h4>
		<ul>
  			<li>Unforgettable guided tour</li>
  			<li>Lodging in Four Star hotels</li>
  			<li>24-hour transportation throughout the trip in comfortable air conditioned minibus</li>
  			<li>Cultural events, excursions, and experiences</li>
  			<li>Complete breakfasts</li>
		</ul>
		<h4><em>Program fee does not include:</em></h4>
		<ul>
  			<li>Meals or beverages other than breakfasts </li>
  			<li>Personal expenses including laundry, mini-bar charges, medicine or other personal needs, and telephone calls</li>
  			<li>Any other item not listed under ‘Program fee includes’</li>
		</ul>

		<p><strong>For more information on how to participate, or for a complete itinerary, e-mail us at ....</strong></p>

		<br />
		<hr>
		<hr>
		<br />

		<h2 id="FEZ">2. Marrakech - Rabat - Fez</h2>
		<h3>Details:</h3>
		<ul>
  			<li><strong>Duration:</strong> Three Day Trip</li>
  			<li><strong>Route:</strong> A once in life experience!</li>
  			<li><strong>Locations:</strong> MARRAKECH – RABAT – FEZ</li>
  			<li><strong>Cost:</strong> COST: $550 (USD)</li>
		</ul>
		<h3>Schedule:</h3>
		<h4>Day 1 <small>June 18th, MARRAKECH to FEZ</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>9:00 am: </dt>
				<dd>Departure for <strong>MARRAKECH</strong> to <strong>RABAT</strong></dd>
				<dt>Mid-day:</dt>
				<dd>Lunch in <strong>RABAT</strong></dd>
				<dt>Afternoon: </dt>
				<dd>
					Tour of RABAT from 2:00 pm to 5:00 pm - walking tour
					<ul>
  						<li><strong>Medina</strong></li>
  						<li><strong>Kasbah of the Oudayas</strong></li>
  						<li><strong>Chellah</strong></li>
  						<li><strong>Tour Hassan &amp; Mohammed V Mausoleum</strong></li>
  						<li><strong>The King’s Palace</strong> (passing by only)</li>
					</ul>
				</dd>
				<dt>5:00 pm: </dt>
				<dd>Dinner in <strong>AESSAOUIRA</strong></dd>
				<dt>7:00 pm: </dt>
				<dd>Departure to <strong>FEZ</strong>, dinner en route </dd>
				<dt>Evening: </dt>
				<dd>Rest</dd>
				<dt>Overnight: </dt>
				<dd>Hotel in <strong>FEZ</strong></dd>
			</dl>
		</div>

		<h4>Day 2 <small>June 19th, FEZ</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>Prior 8:30 am: </dt>
				<dd>Complementary breakfast at the hotel</dd>
				<dt>8:45 am – 1:00 pm: </dt>
				<dd>
					Tour of FEZ: a feast for the senses and an endless mosaic of souks, each devoted to a separate trade: pottery, woodwork, copper, leather, carpets, and spices.
					<ul>
  						<li><strong>Merinid Tombs</strong></li>
  						<li><strong>Musée des Armes</strong></li>
  						<li><strong>Fondouk el-Nejjarine</strong></li>
  						<li><strong>Souk</strong></li>
					</ul>
				</dd>
				<dt>4:00 pm – 7:00 pm:</dt>
				<dd>Walking tour of FEZ wit its brilliant colors of the perfume of its spice markets, and the sounds of artisans creating art objects</dd>
				<dt>Evening: </dt>
				<dd>Free</dd>
				<dt>Overnight: </dt>
				<dd>Hotel in <strong>FEZ</strong></dd>
			</dl>
		</div>

		<h4>Day 3 <small>June 20th, FEZ - CASABLANCA </small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>Prior 8:30 am: </dt>
				<dd>Complementary breakfast at the hotel in <strong>Fez</strong></dd>
				<dt>8:45 am: </dt>
				<dd>Check out of hotel</dd>
				<dt>9:00 am:</dt>
				<dd>Departure to <strong>CASABLANCA</strong> lunch on route</dd>
				<dt>3:00 pm: </dt>
				<dd>
					Tour of <strong>CASABLANCA</strong> (Bus tour with some walking)
					<ul>
  						<li><strong>Medina</strong></li>
  						<li><strong>Hassan II Mosque</strong></li>
  						<li><strong>Corniche</strong></li>
  						<li><strong><strong>Morocco Mall</strong> – an Arab modern mall!</strong></li>
					</ul>
				</dd>
				<dt>Evening: </dt>
				<dd>Group Free</dd>
			</dl>
		</div>

		<h4>Day 4 <small>June 21st, CASABLANCA or MARRAKECH AIRPORTS</small></h4>
		<div class="container">
			<dl class="dl-horizontal">
				<dt>All day: </dt>
				<dd>Transportation will be provided either to the Casablanca or Marrakech airports</dd>
			</dl>
		</div>
		<h4>PROGRAM FEE:  <small>$ 550 single occupancy</small></h4>
		<h4><em>Program fee includes:</em></h4>
		<ul>
  			<li>Unforgettable guided tour</li>
  			<li>Lodging in Four Star hotels</li>
  			<li>24-hour transportation throughout the trip in comfortable air conditioned minibus</li>
  			<li>Cultural events, excursions, and experiences</li>
  			<li>Complete breakfasts</li>
		</ul>
		<h4><em>Program fee does not include:</em></h4>
		<ul>
  			<li>Meals or beverages other than breakfasts </li>
  			<li>Personal expenses including laundry, mini-bar charges, medicine or other personal needs, and telephone calls</li>
  			<li>Any other item not listed under ‘Program fee includes’</li>
		</ul>

-->

	</div>

</div>
@stop
