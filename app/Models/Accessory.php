<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $fillable =['brand','model','colour','price','file','modaltitle',
        'modalbrand','modaldescription'];
}
