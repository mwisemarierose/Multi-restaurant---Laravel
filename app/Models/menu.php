<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Title',
        'Description',
        'Image',
        'Price',
        'user_id'
];
public function user(){
    return $this-> belongsTo(User::class);
}
}
