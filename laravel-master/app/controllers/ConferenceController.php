<?php

class ConferenceController extends BaseController {

	// Specify which default layout should be used across controller views
	protected $layout = 'layouts.main';


	public function callForPresentations() {

		// Set Page Title
		$title = "Call For Presentations";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'conference.callForPresentations', $data);
	}

	public function overview() {

		// Set Page Title
		$title = "Conference Overview";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'conference.overview', $data);
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
             ->nest('content', 'conference.location', $data);
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
             ->nest('content', 'conference.postConferenceActivities', $data);
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
             ->nest('content', 'conference.costAndDates', $data);
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
             ->nest('content', 'conference.keyDates', $data);
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
             ->nest('content', 'conference.registrationFees', $data);
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
             ->nest('content', 'conference.committee', $data);
	}

	public function leadershipInstitute() {

		// Set Page Title
		$title = "Leadership Institute";

		// Set View Data
		$data = array(
			'title' => 'title'
		);

		// Render Views
		$this->layout->with('title', $title)
             ->nest('content', 'conference.leadershipInstitute', $data);
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
             ->nest('content', 'conference.tours', $data);
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
             ->nest('content', 'conference.submissionInformation', $data);
	}

}
