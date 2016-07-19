<?php

namespace Chatty\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'username',
    'first_name',
    'last_name',
    'location',
     'email',
    'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    'password',
     'remember_token'];

     public function getName(){
        if($this->first_name && $this->last_name){
            return "{$this->first_name} {$this->last_name}";
        }
        if($this->first_name){
            return $this->first_name;
        }
          return null;
    }

    public function getNameorUsername(){
        return $this->getName() ?: $this->username;
    }
    public function getFirstNameorUsername(){
        return $this->first_name ?:  $this->username;
    }
      
    
     }