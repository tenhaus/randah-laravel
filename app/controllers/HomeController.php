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

	public function showLanding()
	{
		$saneArray = [];
		$userImages = UserImage::all()->random(20);

		foreach($userImages as $userImage)
		{
			array_push($saneArray, $userImage);
		}

		return View::make('landing')->with('userImages', $saneArray);
	}

}
