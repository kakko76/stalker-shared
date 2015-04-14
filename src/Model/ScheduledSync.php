<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 06/04/2015
 * Time: 17:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class ScheduledSync extends Model {

    protected $table = 'scheduled_syncs';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}