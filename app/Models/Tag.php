<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $timestamps = true;

    public function jobs(){
        $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }

    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class);
    }
}
