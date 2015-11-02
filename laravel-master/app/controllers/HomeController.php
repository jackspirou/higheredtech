<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// Specify which default layout should be used across controller views
	protected $layout = 'layouts.main';

	// Path = "/"
	public function index() {

		// Set Page Title
		$title = "Higher Education Technology Conference";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.index', $data);
	}

	public function callForPresentations() {

		// Set Page Title
		$title = "Call For Presentations";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.callForPresentations', $data);
	}

	public function instituteOverview() {

		// Set Page Title
		$title = "Institute Overview";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.instituteOverview', $data);
	}

	public function location() {

		// Set Page Title
		$title = "Location";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.location', $data);
	}

	public function contact() {

		// Set Page Title
		$title = "Contact Us";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.contact', $data);
	}

	public function sendMessage() {

		// Set Page Title
		$title = "Send Message";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		mail('costas.spirou@gcsu.edu', Input::get('subject'), Input::get('message'), "CC: ".Input::get('email'));

/*
		Mail::send('email.contact', $data, function($message) {
   			$message->from('noreply@higheredtech.org', Input::get('first'). " " . Input::get('last'));
    		$message->to('jack.spirou@me.com')->cc('Costas.Spirou@gcsu.edu')->subject(Input::get('subject'));
		});
*/

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.sendMessage', $data);
	}

	public function theGlobalForum() {

		// Set Page Title
		$title = "The Global Forum";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.theGlobalForum', $data);
	}

	public function postConferenceActivities() {

		// Set Page Title
		$title = "Post Conference Activities";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.postConferenceActivities', $data);
	}

	public function costAndDates() {

		// Set Page Title
		$title = "Cost and Dates";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.costAndDates', $data);
	}

	public function keyDates() {

		// Set Page Title
		$title = "Key Dates";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.keyDates', $data);
	}

	public function registrationFees() {

		// Set Page Title
		$title = "Fegistration Fees";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.registrationFees', $data);
	}

	public function committee() {

		// Set Page Title
		$title = "Advisory Board";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.committee', $data);
	}

	public function tours() {

		// Set Page Title
		$title = "Marrakech Tours";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.tours', $data);
	}

	public function submissionInformation() {

		// Set Page Title
		$title = "Submission Information";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'home.submissionInformation', $data);
	}

}
