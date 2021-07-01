<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'user_id');
    }
    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }
    public function profile(){
        return $this->isAluno() ? $this->aluno : $this->admin;
    }
    public function isAluno(){
        return $this->aluno != null;
    }

    public function isAdmin(){
        return $this->admin != null;
    }
    public function books(){
        return $this->hasMany(Book::class);
    }
}
