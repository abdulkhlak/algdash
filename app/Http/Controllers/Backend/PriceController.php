<?php

namespace App\Http\Controllers\Backend;

use App\Backend\price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PriceController extends Controller
{
	public function view()
	{
		$prices = price::get();
		return view('layouts.admin.Price.price_view', compact('prices'));

	}

	public function add()
	{
		return view('layouts.admin.Price.price_add');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'price' =>'required',
		]);
		$price = null;
		try {

			$price = price::create([
				'price' => $request->price,
				'sequence' => $request->sequence,
				'status' => $request->status,

			]);

			//$price->save();



		} catch (Exception $exception) {
			$price = false;
		}
		if ($price == true) {
			return redirect()->route('price_view')->with('success', 'Successfully Created');
		} else {
			return back()->with('error', 'Oops! Unable to create a Price');
		}

	}

	public function edit($id)
	{
		$id = base64_decode($id);
		$price_edit = price::find($id);
		return view('layouts.admin.Price.price_edit', compact('price_edit'));
	}
	public function update(Request $request, $id)
	{

		$price = price::find($id);
		$success = null;
		try {
			$price->update([
				'price' => $request->price,
				'sequence' => $request->sequence,
				'status' => $request->status,

			]);
			//$property->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('price_view')->with('success', 'Price has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Price ');
		}


	}
	public function delete($id)
	{
		$id = base64_decode($id);

		$price = price::find($id);
		$price->delete();
		return redirect()->route('price_view')->with('success', ' Price has been delete successfully');
	}
}
