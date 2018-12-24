<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Event.
 *
 * @package namespace App\Entities;
 */
class Event extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description','avatar','name','time','date','member_id','salary','location_detail','number_phone','mail','vacancy','price','slug','detail','status'];

    public function locations(){
        return $this->belongsTo('App\Entities\Location','location_id');
    }
    public function genres()
    {
        return $this->belongsToMany('App\Entities\Genre');
    }
    public function item()
    {
        return $this->belongsToMany(('App\Entities\Item'));
    }
    public  function image()
    {
        return $this->hasMany('App\Entities\Image');
    }
    public function  bands(){
        return $this->belongsToMany('App\Entities\Band','act','event_id','band_id')->withPivot('act');
    }
    public function member(){
        return $this->belongsTo('App\Entities\Member','member_id');
    }
}
