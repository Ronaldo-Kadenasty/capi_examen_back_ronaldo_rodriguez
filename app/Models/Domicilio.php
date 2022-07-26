<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\DomicilioFactory;

class Domicilio extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'user_domicilio';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function newFactory()
    {
        return DomicilioFactory::new();
    }
}
