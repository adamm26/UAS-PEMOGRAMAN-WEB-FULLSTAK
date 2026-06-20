<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\rooms;

class roomfacilities extends Model
{
    //
    protected $table = 'room_facilities';
    protected $fillable = [
        'room_id',
        'name',
        'quantitiy',
        'condition',
    ];
     public function room()
    {
        return $this->belongsTo(rooms::class);
    }
}
