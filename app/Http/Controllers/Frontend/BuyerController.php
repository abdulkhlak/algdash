<?php

namespace App\Http\Controllers\Frontend;

use App\Backend\bathroom;
use App\Backend\bedroom;
use App\Backend\price;
use App\Backend\property;
use App\Frontend\buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerController extends Controller
{
	public function index()
	{
		$properties=property::get();
		$bedrooms=bedroom::get();
		$bathrooms= bathroom::get();
		$prices=price::orderby('sequence', 'asc')->get();
		//return $property;
		return view('frontend.layouts.home',compact('properties','bedrooms','bathrooms','prices'));
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'price_range' =>'required'
		]);
		$property = null;
		try {

			$property = buyer::create([
				'property_type' => $request->property_type,
				'number_of_bedroom' => $request->number_of_bedroom,
				'number_of_bathroom' => $request->number_of_bathroom,
				'price_range' => $request->price_range,
				'interest' => $request->interest,
				'phone' => $request->phone,
				//'is_read' => $request->is_read,
				'status' => $request->status,

			]);




		} catch (Exception $exception) {
			$property = false;
		}
		if ($property == true) {
			return back();
//			return redirect()->route('thank_you_page')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a Property');
		}

	}
	public function thankyou()
	{

	//return view('frontend.layouts.thank_you_page');
	}



	// DATA LIST FUNCTION
	public function data()
	{
		$all_data = buyer::with('property','bedroom','bathroom','price')->get();
		//return $all_data;
		return view('layouts.admin.data.buyer_data', compact('all_data'));
	}
	// DATA DETAILS FUNCTION
	public function details ($id)
	{
		$all_details= buyer::with('property','bedroom','bathroom','price')->find($id);

		if($all_details->is_read==0)
		{
			$all_details->is_read=1;
			$all_details->save();
		}
//dd($all_details);
		return view('layouts.admin.data.buyer_details',compact('all_details'));
	}

	// data delete function
	public function deleteall(Request $request)
	{
		$id = $request->delete;
		foreach ($id as $deleteall)
		{
			buyer::where('id', $deleteall)->delete();
		}
		return back();
	}

}
