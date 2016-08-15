<?php
require_once __DIR__ . '/../utils/helper_functions.php';

var_dump($_SESSION);
function pageController()
{

	// defines array to be returned and extracted for view
	$data = [];

	// finds position for ? in url so we can look at the url minus the get variables
	$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	//if shit goes south, visit helper_functions.php



	// switch that will run functions and setup variables dependent on what route was accessed
	switch ($request) {

		case '/':
			if ($featured = 1) {
			$data["items"] = showInventory();
			} 
			$main_view = '../views/home.php';
			break;

		case '/account':
			$data['user'] = showProfile();
			$main_view = '../views/users/account.php';
			break;
		case '/inventory': 
			$data["items"] = showInventory();
			$main_view = '../views/ads/index.php';
			break;
		case '/create_ad': 
			if ($_POST) {
				$imageName = saveUploadedImage("documents");
		        $item = new Items();
		        $item->name = Input::get('name', ':name');
		        $item->price = Input::get('price', ':price');
		        $item->description = Input::get('description', ':description');
		        $item->keywords = Input::get('keywords', ':keywords');
		        $item->username = $_SESSION["IS_LOGGED_IN"];
		        $item->img_url = Input::get('documents', ':documents');
		        $item->featured = 0;
		        $item->save();
		   	}
			$main_view = '../views/ads/create.php';
			break;
		case '/signup': 
			$main_view = '../views/users/signup.php';
			//create user function
			break;
		case '/login': 
			$main_view = '../views/users/login.php';
			break;
		case '/item': 
			$main_view = '../views/ads/show.php';
			break;
		case '/logout': 
			Auth::logout();
			$main_view = '../views/users/login.php';
			break;
		case '/pleaseloveme!': 
			$main_view = '../views/ads/missed_connections.php';
			break;
		case '/edit_ad': 
			$main_view = '../views/ads/edit.php';
			break;
		default:    // displays 404 if route not specified above
			$main_view = '../views/404.php';
			break;
	}
	$data['main_view'] = $main_view;
	return $data;
}
extract(pageController());