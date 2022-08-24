<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model{
    
    protected $table = 'sliders';
    protected $fillable = ['link','background','speed','loop','autoplay','controls','hover'];
    

}
