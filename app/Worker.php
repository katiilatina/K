<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Worker extends Model
{
    use Notifiable;

    protected $primaryKey = 'id_worker';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'state',
    ];

    public function orders(){
        return $this->belongsTo(Order::class, 'id_worker', 'id_worker');
    }

    public function cars(){
        // die($this->belongsToMany('App\Car', 'orders', 'id_worker', 'id_car')->getQuery()->toSql());
        return $this->belongsToMany('App\Car', 'orders', 'id_worker', 'id_car');
    }
}
