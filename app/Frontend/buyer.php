<?php

namespace App\Frontend;

use App\Backend\bathroom;
use App\Backend\bedroom;
use App\Backend\price;
use App\Backend\property;
use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
	protected $fillable = [
		'property_type','number_of_bedroom','number_of_bathroom','price_range','interest','phone','is_read'
	];

	public function property()
	{
		return $this->belongsTo(property::class,'property_type','id');
	}

	public function bedroom()
	{
		return $this->belongsTo(bedroom::class,'number_of_bedroom','id');
	}
	public function bathroom()
	{
		return $this->belongsTo(bathroom::class,'number_of_bathroom','id');
	}
	public function price()
	{
		return $this->belongsTo(price::class,'price_range','id');
	}
}
