<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;
use App\Exports\OrderExport;
use DB;
use Validator;
use Redirect;
use IMS;
use Excel;
class ReportController extends Controller {

	public $folder  = "admin/report.";
	/*
	|---------------------------------------
	|@Showing all records
	|---------------------------------------
	*/
	public function index()
	{					
		$res = new User;
		
		return View($this->folder.'index',['data' => $res->getAll(),'form_url' => env('admin').'/report']);
	}	
	
	public function report(Request $Request)
	{
		$res = new Order;

		return View($this->folder.'report',[

		'data' => $res->getReport($Request->all()),
		'from' => $Request->get('from') ? date('d-M-Y',strtotime($Request->get('from'))) : null,
		'to'   => $Request->get('to') ? date('d-M-Y',strtotime($Request->get('to'))) : null,
		'user' => new User

		]);
	}

	public function payment()
	{					
		$res = new User;
		
		return View($this->folder.'payment',['data' => $res->getAll(),'form_url' => env('admin').'/paymentReport']);
	}

	public function paymentReport()
	{
		return Excel::download(new OrderExport, 'payment.xlsx');
	}
}