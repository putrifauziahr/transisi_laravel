<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{

    protected $fillable = ['nama', 'id_company', 'email'];
    protected $table = "employees";
    protected $primaryKey = "id_employe";
}
