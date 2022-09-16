<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['code','description','type_id'];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
