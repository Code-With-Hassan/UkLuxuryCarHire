<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Fleets extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'fleets';
    
    protected $fillable = [
          'car_name',
          'car_make',
          'car_description',
          'car_image1',
          'car_image2',
          'car_image3',
          'car_image4'
    ];
    

    public static function boot()
    {
        parent::boot();

        Fleets::observe(new UserActionsObserver);
    }
    
    
    
    
}