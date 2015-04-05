<?php namespace Shortener\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Link Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Shows all links.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'All links';
	}

	/**
	 * Store links.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('welcome');
	}

	/**
	 * Store links.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $request->input('link');
	}
}
