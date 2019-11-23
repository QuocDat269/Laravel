<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\hash;


class QuanTriVien extends Authenticatable
{
    //
    protected $table = 'quan_tri_vien';

    public function getPasswordAttribute($value)
	{
		return $this->mat_khau;
	}
}
