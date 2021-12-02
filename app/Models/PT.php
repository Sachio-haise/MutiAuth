<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PT extends Model
{
    use HasFactory;

    protected $fillable=['model','brand','screensize','operationsystem',
    'storage','price','file','modaltitle','modalbrand','modaldescription'];
}
