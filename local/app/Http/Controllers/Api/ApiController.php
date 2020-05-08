<?php namespace App\Http\Controllers\api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\City;
use App\OfferStore;
use App\Offer;
use App\User;
use App\Cart;
use App\CartCoupen;
use App\AppUser;
use App\Order;
use App\Lang;
use App\Rate;
use App\Slider;
use App\Banner;
use App\Address;
use App\Admin;
use App\Page;
use App\Language;
use App\Text;
use App\Delivery;
use DB;
use Validator;
use Redirect;
use Excel;
use Stripe;
class ApiController extends Controller {

	public function welcome()
	{
		$res = new Slider;

		return response()->json(['data' => $res->getAppData()]);
	}

	public function city()
	{
		$city = new City;
        $text = new Text;
        $lid =  isset($_GET['lid']) && $_GET['lid'] > 0 ? $_GET['lid'] : 0;
        
		return response()->json(['data' => $city->getAll(0),'text'		=> $text->getAppData($lid)]);
	}

	public function lang()
	{
		$res = new Language;

		return response()->json(['data' => $res->getWithEng()]);
	}

	public function homepage($city_id)
	{
		$banner  = new Banner;
		$store   = new User;
		$text    = new Text;
		$l 		 = Language::find($_GET['lid']);

		$data = [

		'banner'	=> $banner->getAppData($city_id,0),
		'middle'	=> $banner->getAppData($city_id,1),
		'bottom'	=> $banner->getAppData($city_id,2),
		'store'		=> $store->getAppData($city_id),
		'trending'	=> $store->getAppData($city_id,true),
		'text'		=> $text->getAppData($_GET['lid']),
		'app_type'	=> isset($l->id) ? $l->type : 0,
		'admin'		=> Admin::find(1)

		];

		return response()->json(['data' => $data]);
	}

	public function search($query,$type,$city)
	{
		$user = new User;
		
		return response()->json(['data' => $user->getUser($query,$type,$city)]);
	}

	public function addToCart(Request $Request)
	{
		$res = new Cart;

		return response()->json(['data' => $res->addNew($Request->all())]);
	}

	public function updateCart($id,$type)
	{
		$res = new Cart;

		return response()->json(['data' => $res->updateCart($id,$type)]);
	}

	public function cartCount($cartNo)
	{
	  if(isset($_GET['user_id']) && $_GET['user_id'] > 0)
	  {
	  	$order = Order::where('user_id',$_GET['user_id'])->whereIn('status',[0,1,3,4])->count();
	  }
	  else
	  {
	  	$order = 0;
	  }

	  $cart = new Cart;

	  return response()->json([

	  	'data'  => Cart::where('cart_no',$cartNo)->count(),
	  	'order' => $order,
	  	'cart'	=> $cart->getItemQty($cartNo)

	  	]);
	}

	public function getCart($cartNo)
	{
		$res = new Cart;
		
		return response()->json(['data' => $res->getCart($cartNo)]);
	}

	public function getOffer($cartNo)
	{
		$res = new Offer;
		
		return response()->json(['data' => $res->getOffer($cartNo)]);
	}

	public function applyCoupen($id,$cartNo)
	{
		$res = new CartCoupen;
		
		return response()->json($res->addNew($id,$cartNo));
	}

	public function signup(Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->addNew($Request->all()));
	}

	public function login(Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->login($Request->all()));
	}

	public function forgot(Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->forgot($Request->all()));
	}

	public function verify(Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->verify($Request->all()));
	}

	public function updatePassword(Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->updatePassword($Request->all()));
	}

	public function loginFb(Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->loginFb($Request->all()));
	}
	
	public function getAddress($id)
	{
		$address = new Address;
		$cart 	 = new Cart;

		$data 	 = [

		'address'	 => $address->getAll($id),
		'admin'      => Admin::find(1),
		'total'   	 => $cart->getCart($_GET['cart_no'])['total']

		];

		return response()->json(['data' => $data]);
	}

	public function addAddress(Request $Request)
	{
		$res = new Address;
		
		return response()->json($res->addNew($Request->all()));
	}

	public function order(Request $Request)
	{
		$res = new Order;
		
		return response()->json($res->addNew($Request->all()));
	}

	public function userinfo($id)
	{		
		return response()->json(['data' => AppUser::find($id)]);
	}

	public function updateInfo($id,Request $Request)
	{
		$res = new AppUser;
		
		return response()->json($res->updateInfo($Request->all(),$id));
	}

	public function cancelOrder($id,$uid)
	{
		$res = new Order;
		
		return response()->json($res->cancelOrder($id,$uid));
	}

	public function sendChat(Request $Request)
	{
		$user = new AppUser;

		return response()->json($user->sendChat($Request->all()));

	}

	public function rate(Request $Request)
	{
		$rate = new Rate;

		return response()->json($rate->addNew($Request->all()));

	}

	public function pages()
	{
		$res = new Page;

		return response()->json(['data' => $res->getAppData()]);
	}

	public function myOrder($id)
	{	
		$res = new Order;
		
		return response()->json(['data' => $res->history($id)]);
	}

	public function stripe()
	{
		Stripe\Stripe::setApiKey(Admin::find(1)->stripe_api_id);
        $res = Stripe\Charge::create ([
                "amount" => $_GET['amount'] * 100,
                "currency" => "INR",
                "source" => $_GET['token'],
                "description" => "Test payment from itsolutionstuff.com.",

        ]);

        if($res['status'] === "succeeded")
        {
        	return response()->json(['data' => "done",'id' => $res['source']['id']]);
        }
        else
        {
        	return response()->json(['data' => "error"]);
        }
	}

	public function getStatus($id)
	{
		$order = Order::find($id);
		$dboy  = Delivery::find($order->d_boy);

		return response()->json(['data' => $order,'dboy' => $dboy]);
	}
}