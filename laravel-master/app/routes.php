<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
		'as' => 'home', 
		'uses' => 'HomeController@index'
	)
);

Route::get('the-global-forum', array(
		'as' => 'theGlobalForum', 
		'uses' => 'HomeController@theGlobalForum'
	)
);

Route::get('contact', array(
		'as' => 'contact', 
		'uses' => 'HomeController@contact'
	)
);

Route::post('contact', array(
		'as' => 'sendMessage', 
		'uses' => 'HomeController@sendMessage'
	)
);

Route::get('conference/overview', array(
		'as' => 'conferenceOverview', 
		'uses' => 'ConferenceController@overview'
	)
);

Route::get('conference/registration-fees', array(
		'as' => 'registrationFees', 
		'uses' => 'ConferenceController@registrationFees'
	)
);

Route::get('conference/call-for-presentations', array(
		'as' => 'callForPresentations', 
		'uses' => 'ConferenceController@callForPresentations'
	)
);

Route::get('conference/submission-information', array(
		'as' => 'submissionInformation', 
		'uses' => 'ConferenceController@submissionInformation'
	)
);

Route::get('conference/location', array(
		'as' => 'location', 
		'uses' => 'ConferenceController@location'
	)
);

Route::get('conference/cost-and-dates', array(
		'as' => 'costAndDates', 
		'uses' => 'ConferenceController@costAndDates'
	)
);

Route::get('conference/key-dates', array(
		'as' => 'keyDates', 
		'uses' => 'ConferenceController@keyDates'
	)
);

Route::get('conference/committee', array(
		'as' => 'committee', 
		'uses' => 'ConferenceController@committee'
	)
);

Route::get('conference/leadership-institute', array(
		'as' => 'leadershipInstitute', 
		'uses' => 'ConferenceController@leadershipInstitute'
	)
);

Route::get('conference/post-activities', array(
		'as' => 'postConferenceActivities', 
		'uses' => 'ConferenceController@postConferenceActivities'
	)
);

Route::get('conference/tours', array(
		'as' => 'tours', 
		'uses' => 'ConferenceController@tours'
	)
);

HTML::macro('nav_link_a_route', function($route, $text) {	
	$href = route($route);
	if( Request::url() == $href ) {
		$active = "class = 'active'";
	} else {
		$active = '';
	}
 
  	return '<li ' . $active . '><a href="' . $href .'">'.$text.'</a></li>';
});
