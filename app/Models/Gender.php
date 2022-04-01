<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public $table = 'gender';

    protected $dates = [
        'created_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
    ];

    public function career()
    {
        return $this->hasMany(Career::class, 'gender_id', 'id');
    }
}
