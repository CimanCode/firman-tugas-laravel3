<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class AuthUser extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    protected $table  = 'user';

    protected static function boot()
    {
        parent::boot();

        static::creating( function($user) {
            $user->password = Hash::make($user->password);
        });

        static::updating(function(AuthUser $user) {
            if($user->isDirty(["password"])){
                $user->password = Hash::make($user->password);
            }
        });
    }
}
