<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

//    public function employees()
//    {
//        return $this->belongsToMany(Employee::class, 'сотрудники_услуги', 'id_услуги', 'id_сотрудника');
//    }
}
