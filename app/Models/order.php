<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
    'user_id',
    'menu_id',
    'quantity',
    'amount',
    'status',
    'address',
    "phoneNumber"
    ];
    public function user(){
        return $this-> belongsTo(User::class);
    }
    public function menu(){
        return $this-> belongsTo(menu::class);
    }
}
