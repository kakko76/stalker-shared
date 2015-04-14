<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 06/04/2015
 * Time: 17:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Listing extends Model {

    protected $table = 'listings';

    public function detailSites()
    {
        return $this->belongsToMany('App\DetailSite');
    }

    public function filters()
    {
        return $this->hasMany('App\Filter');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}