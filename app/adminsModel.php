<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class adminsModel extends Authenticatable
{
  use Notifiable;

  protected $table='admins';

  protected $fillable = [
    'txt_admins_name','password'
  ];
    //

  protected $hidden=[
    'password'
  ];

  public function getAuthPassword(){
    return $this->password;
  }

}
