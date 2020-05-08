<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\City;
use App\UserImage;
use App\Order;
use App\Admin;
use DB;
use Validator;
use Redirect;
class AdminController extends Controller {

	public $folder = "user.";

	/*
	|------------------------------------------------------------------
	|Index page for login
	|------------------------------------------------------------------
	*/
	public function index()
	{
		return View($this->folder.'index',[

			
		'form_url' => Asset(env('user').'/login')


		]);
	}

	/*
	|------------------------------------------------------------------
	|Login attempt,check username & password
	|------------------------------------------------------------------
	*/
	public function login(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');
		
		if (auth()->attempt(['email' => $username, 'password' => $password,'status' => 0]))
		{
			return Redirect::to(env('user').'/home')->with('message', 'Welcome ! Your are logged in now.');
		}
		else
		{
			return Redirect::to(env('user').'/login')->with('error', 'Username password not match')->withInput();
		}
	}

	/*
	|------------------------------------------------------------------
	|Homepage, Dashboard
	|------------------------------------------------------------------
	*/
	public function home()
	{			
		$user 	= new User;
		$order = new Order;
		$admin = new Admin;

		return View($this->folder.'dashboard.home',[

		'overview'	=> $user->overview(),
		'admin'		=> $admin,

		]);	
	}

	/*
	|------------------------------------------------------------------
	|Logout
	|------------------------------------------------------------------
	*/
	public function logout()
	{
		auth()->logout();
		
		return Redirect::to(env('user').'/login')->with('message', 'Logout Successfully !');
	}

	/*
	|------------------------------------------------------------------
	|Account setting's page
	|------------------------------------------------------------------
	*/
	public function setting()
	{
		$city = new City;

		return View($this->folder.'dashboard.setting',[

			'data' 		=> User::find(Auth::user()->id),
			'form_url'	=> Asset(env('user').'/setting'),
			'citys'		=> $city->getAll(0),
			'images' 	=> UserImage::where('user_id',Auth::user()->id)->get(),
			'types'		=> explode(",",Admin::find(1)->store_type)
			

			]);
	}
	
	/*
	|------------------------------------------------------------------
	|update account setting's
	|------------------------------------------------------------------
	*/
	public function update(Request $Request)
	{		
		$data = new User;
		$id   = Auth::user()->id;
		
		if($data->validate($Request->all(),$id))
		{
			return redirect::back()->withErrors($data->validate($Request->all(),$id))->withInput();
			exit;
		}

		$data->addNew($Request->all(),$id);

		return Redirect::back()->with('message','Account Information Updated Successfully.');
	}

	public function close()
	{
		$res 		= User::find(Auth::user()->id);
		$res->open  = $res->open == 0 ? 1 : 0;
		$res->save();

		return Redirect::back()->with('message','Status Changes Successfully.');

	}
}