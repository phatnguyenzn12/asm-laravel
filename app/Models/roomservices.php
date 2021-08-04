<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomservices extends Model
{
    use HasFactory;
    protected $table = "room_services";
    protected $fillable = [
         'service_id[]', 'room_id'
    ];
}
