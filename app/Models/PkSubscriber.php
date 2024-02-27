<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PkSubscriber extends Model
{
    use HasFactory;
    protected  $table = "pk_subscribers";
    protected $primaryKey = "id";
}
