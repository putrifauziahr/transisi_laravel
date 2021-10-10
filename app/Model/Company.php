<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['nama', 'email', 'website', 'logo'];
    protected $table = "companies";
    protected $primaryKey = "id_company";
}
