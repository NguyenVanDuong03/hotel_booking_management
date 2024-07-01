<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $primaryKey = 'hotel_id';
    public $timestamps = false;

    public $fillable = ['hotel_name', 'hotel_address', 'hotel_description', 'hotel_price'];

}
