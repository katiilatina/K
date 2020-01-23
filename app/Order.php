<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_client', 'id_car', 'id_worker', 'status',
    ];

    public function clients(){
        return $this->hasOne(Client::class, 'id_client', 'id_client');
    }

    public function workers(){
        return $this->hasOne(Worker::class, 'id_worker', 'id_worker');
    }

    public function cars(){
        return $this->hasOne(Car::class, 'id', 'id_car');
    }
}
