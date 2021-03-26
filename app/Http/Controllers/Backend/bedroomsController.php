<?php

namespace App\Http\Controllers\Backend;

use App\Backend\bedroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bedroomsController extends Controller
{
	public function view()
	{
		$bedrooms = bedroom::get();
		return view('layouts.admin.Bedroom.bedroom_view', compact('bedrooms'));

	}

	public function add()
	{
		return view('layouts.admin.Bedroom.bedroom_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'bedroom_name' =>'required|unique:bedrooms,bedroom_name'
		]);
		$bedroom = null;
		try {

			$bedroom = bedroom::create([
				'bedroom_name' => $request->bedroom_name,
				'status' => $request->status,

			]);

			$bedroom->save();



		} catch (Exception $exception) {
			$bedroom = false;
		}
		if ($bedroom == true) {
			return redirect()->route('bedroom_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a Bedroom');
		}

	}

	public function edit($id)
	{
		$id = base64_decode($id);
		$bedroom_edit = bedroom::find($id);
		return view('layouts.admin.Bedroom.bedroom_edit', compact('bedroom_edit'));
	}
	public function update(Request $request, $id)
	{

		$bedrooms = bedroom::find($id);
		$success = null;
		try {
			$bedrooms->update([
				'bedroom_name' => $request->bedroom_name,
				'status' => $request->status,

			]);
			$bedrooms->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('bedroom_view')->with('success', 'Bedroom has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Bedroom ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$bedroom = bedroom::find($id);
		$bedroom->delete();
		return redirect()->route('bedroom_view')->with('success', ' Bedroom has been delete successfully');
	}
}
