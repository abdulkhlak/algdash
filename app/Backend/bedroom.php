<?php

namespace App\Backend;

use App\Frontend\buyer;
use Illuminate\Database\Eloquent\Model;

class bedroom extends Model
{
	protected $fillable = [
		'bedroom_name','status'
	];

	public function buyer()
	{
		return $this->hasMany(buyer::class,'number_of_bedroom','id');
	}
}
