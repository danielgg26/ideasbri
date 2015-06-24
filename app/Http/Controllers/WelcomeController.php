<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\comida;
use App\hogar;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$comidas = comida::all();
		$comida = comida::orderBy('id','desc')->first();
		$hogar = hogar::orderBy('id','desc')->first();
		//$comidas = comida::table('comidas')->last();
 
        return view('principal.principal', ['comida' => $comida,'hogar'=>$hogar]);
		//return view('principal.principal');
	}

}
