<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{

    protected $table = 'cats';

    protected $primaryKey = "id";
}
