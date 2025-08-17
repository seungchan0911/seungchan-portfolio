<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Project extends Model
{
    protected $fillable = ['title', 'image_path', 'link_url', 'published_at'];

    protected $casts = [
        'published_at' => 'date',
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class, 'project_tags');
    }
}
