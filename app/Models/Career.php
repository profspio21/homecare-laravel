<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Career extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public $table = 'careers';

    protected $appends = [
        'lamaran',
        'cv',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'ttl',
        'alamat',
        'tinggi',
        'berat',
        'agama',
        'gender_id',
        'job_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public static function boot()
    {
        parent::boot();
        Career::observe(new \App\Observers\CareerActionObserver());
    }

    // public function registerMediaConversions(Media $media = null): void
    // {
    //     $this->addMediaConversion('thumb')->fit('crop', 50, 50);
    //     $this->addMediaConversion('preview')->fit('crop', 120, 120);
    // }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
