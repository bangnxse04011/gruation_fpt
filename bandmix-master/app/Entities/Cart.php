<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cart.
 *
 * @package namespace App\Entities;
 */
class Cart extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'books';
    protected $fillable = ['book_time','total_price','number_of_ticket','member_id','event_id','number_phone','address','name','email','note'];

}
