<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use DB;
use Validator;
use Redirect;
use IMS;
class CategoryController extends Controller {

	public $folder  = "user/category.";
	/*
	|---------------------------------------
	|@Showing all records
	|---------------------------------------
	*/
	public function index()
	{					
		$res = new Category;
		
		return View($this->folder.'index',['data' => $res->getAll(),'link' => env('user').'/category/']);
	}	
	
	/*
	|---------------------------------------
	|@Add new page
	|---------------------------------------
	*/
	public function show()
	{								
		return View($this->folder.'add',['data' => new Category,'form_url' => env('user').'/category']);
	}
	
	/*
	|---------------------------------------
	|@Save data in DB
	|---------------------------------------
	*/
	public function store(Request $Request)
	{			
		$data = new Category;	
		
		if($data->validate($Request->all(),'add'))
		{
			return redirect::back()->withErrors($data->validate($Request->all(),'add'))->withInput();
			exit;
		}

		$data->addNew($Request->all(),"add");
		
		return redirect(env('user').'/category')->with('message','New Record Added Successfully.');
	}
	
	/*
	|---------------------------------------
	|@Edit Page 
	|---------------------------------------
	*/
	public function edit($id)
	{				
		return View($this->folder.'edit',['data' => category::find($id),'form_url' => env('user').'/category/'.$id]);
	}
	
	/*
	|---------------------------------------
	|@update data in DB
	|---------------------------------------
	*/
	public function update(Request $Request,$id)
	{	
		$data = new Category;
		
		if($data->validate($Request->all(),$id))
		{
			return redirect::back()->withErrors($data->validate($Request->all(),$id))->withInput();
			exit;
		}

		$data->addNew($Request->all(),$id);
		
		return redirect(env('user').'/category')->with('message','Record Updated Successfully.');
	}
	
	/*
	|---------------------------------------------
	|@Delete Data
	|---------------------------------------------
	*/
	public function delete($id)
	{
		Category::where('id',$id)->delete();

		return redirect(env('user').'/category')->with('message','Record Deleted Successfully.');
	}

	/*
	|---------------------------------------------
	|@Change Status
	|---------------------------------------------
	*/
	public function status($id)
	{
		$res 			= Category::find($id);
		$res->status 	= $res->status == 0 ? 1 : 0;
		$res->save();

		return redirect(env('user').'/category')->with('message','Status Updated Successfully.');
	}
}