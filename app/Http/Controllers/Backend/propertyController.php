<?php

namespace App\Http\Controllers\Backend;

use App\Backend\property;
use App\Frontend\buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class propertyController extends Controller
{
	public function view()
	{
		$propertys = property::get();
		return view('layouts.admin.Property.property_view', compact('propertys'));

	}

	public function add()
	{
		return view('layouts.admin.Property.property_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'property_name' =>'required|unique:properties,property_name'
		]);
		$property = null;
		try {

			$property = property::create([
				'property_name' => $request->property_name,
				'status' => $request->status,

			]);

			$property->save();



		} catch (Exception $exception) {
			$property = false;
		}
		if ($property == true) {
			return redirect()->route('property_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a Property');
		}

	}

	public function edit($id)
	{
		$id = base64_decode($id);
		$property_edit = property::find($id);
		return view('layouts.admin.Property.property_edit', compact('property_edit'));
	}
	public function update(Request $request, $id)
	{

		$property = property::find($id);
		$success = null;
		try {
			$property->update([
				'property_name' => $request->property_name,
				'status' => $request->status,

			]);
			$property->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('property_view')->with('success', 'Property has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Property ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$property = property::find($id);
		$property->delete();
		return redirect()->route('property_view')->with('success', ' Property has been delete successfully');
	}



}
