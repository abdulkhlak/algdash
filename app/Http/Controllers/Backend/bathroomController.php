<?php

namespace App\Http\Controllers\Backend;

use App\Backend\bathroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bathroomController extends Controller
{
	public function view()
	{
		$bathrooms = bathroom::get();
		return view('layouts.admin.Bathroom.bathroom_view', compact('bathrooms'));

	}

	public function add()
	{
		return view('layouts.admin.Bathroom.bathroom_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'bathroom_name' =>'required|unique:bathrooms,bathroom_name'
		]);
		$bathroom = null;
		try {

			$bathroom = bathroom::create([
				'bathroom_name' => $request->bathroom_name,
				'status' => $request->status,

			]);

			$bathroom->save();



		} catch (Exception $exception) {
			$bathroom = false;
		}
		if ($bathroom == true) {
			return redirect()->route('bathroom_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a Bathroom');
		}

	}

	public function edit($id)
	{
		$id = base64_decode($id);
		$bathroom_edit = bathroom::find($id);
		return view('layouts.admin.bathroom.bathroom_edit', compact('bathroom_edit'));
	}
	public function update(Request $request, $id)
	{

		$bathrooms = bathroom::find($id);
		$success = null;
		try {
			$bathrooms->update([
				'bathroom_name' => $request->bathroom_name,
				'status' => $request->status,

			]);
			$bathrooms->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('bathroom_view')->with('success', 'Bathroom has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Bathroom ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$bathrom = bathroom::find($id);
		$bathrom->delete();
		return redirect()->route('bathroom_view')->with('success', ' Bathroom has been delete successfully');
	}
}
