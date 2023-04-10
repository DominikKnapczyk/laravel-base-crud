<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    public function getAbstract($chars = 30) {
        return substr($this->description, 0, $chars);
    }
}
