<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 06/04/2015
 * Time: 17:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Filter extends Model {

    protected $table = 'filters';

    public function listing()
    {
        return $this->belongsTo('App\Listing');
    }
}