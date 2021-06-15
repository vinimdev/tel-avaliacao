<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['user_register_id', 'user_update_id', 'name', 'cpf', 'rg', 'birth_date', 'phone', 'state'];

    public function userRegister()
    {
        return $this->hasOne(User::class,   'id', 'user_register_id');
    }

    public function userUpdate()
    {
        return $this->hasOne(User::class,   'id', 'user_update_id');
    }
}
