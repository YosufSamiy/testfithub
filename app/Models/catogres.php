<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catogres extends Model
{
    use HasFactory;

    protected $appends=['status','button'];


    public function subCitys(){

        return $this->hasMany(subCitys::class, 'catogres_id','id');

    }
    
    public function getStatusAttribute()
    {
             


        return $this->active ? "Activate" : "DiActivate";
    }
    public function getbuttonAttribute()
    {


        return $this->active ? "btn btn-success" : "btn btn-danger";
    }

}
