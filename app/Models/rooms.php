<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\room_categories;
use App\Models\roomfacilities;

class rooms extends Model
{
    //
    protected $table = 'rooms';

    protected $fillable = ['name', 'code', 'category_id', 'building', 'floor', 'capacity', 'description', 'image', 'is_active', 'open_time', 'close_time'];

    public function category()
    {
        return $this->belongsTo(room_categories::class, 'category_id');
    }

    public function facilities()
    {
         return $this->hasMany(roomfacilities::class,'room_id');
    }
}
