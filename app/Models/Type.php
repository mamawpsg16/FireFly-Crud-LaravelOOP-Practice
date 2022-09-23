<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['code','description'];

    public function scopeFilter($query,$filters) {
        if($filters['search'] ?? false) {
            $query->where('code', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%'. request('search') .'%');
        }
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
}
