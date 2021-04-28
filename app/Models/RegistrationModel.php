<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    protected $guarded = [];

    protected $table = "registration";
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    // protected $dateFormat = 'U';

}
