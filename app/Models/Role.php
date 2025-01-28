<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Указываем все поля из таблицы, кроме id, created_at и updated_at
    protected $fillable = [
        'name',
        "code"
    ];

    //связь 1:М к моделе User
    public function users(){
        return $this->hasMany(User::class);
    }
}
