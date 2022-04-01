<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public $table = 'job';

    protected $dates = [
        'created_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
    ];

    public function career()
    {
        return $this->hasMany(Career::class, 'job_id', 'id');
    }
}
