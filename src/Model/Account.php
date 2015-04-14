<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 06/04/2015
 * Time: 17:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'accounts';

    public function listings()
    {
        return $this->belongsToMany('App\Listing');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function detailSite()
    {
        return $this->belongsTo('App\DetailSite');
    }
}