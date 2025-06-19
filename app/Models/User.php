<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    public $timestamps = false;
    protected $table = 'users';

    protected $fillable = [
        'user', 
        'password',
        'cuit',
        'ptovta',
        'privileges'
    ];

    public function username()
    {
        return 'user';
    }
}
