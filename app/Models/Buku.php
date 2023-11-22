<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $timestamps = false;
    protected $table = 'buku';
    protected $guarded = [];
}