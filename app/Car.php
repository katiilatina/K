<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Car extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_brand', 'price',
    ];

    public function brands(){
        return $this->hasOne(Brand::class, 'id_brand', 'id_brand');
    }

    public function orders(){
        return $this->belongsTo(Order::class, 'id', 'id_car');
    }

    public function workers(){
        return $this->belongsToMany(Worker::class, 'orders', 'id_car', 'id_worker');
    }
}
