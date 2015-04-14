<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 06/04/2015
 * Time: 17:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class DetailSite extends Model {

    protected $table = 'detail_sites';

    public function accounts()
    {
        return $this->hasMany('App\Account');
    }

}