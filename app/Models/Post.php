<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'thumbnail_path'
    ];


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    protected function smallBody(): Attribute
    {

        return Attribute::make(
            get: fn($value) => substr(trim($this->body), 100, 80) . "  ..."
        );

    }

    public function hasThumbnail()
    {
        return false;
    }

    public function publishDate(): string
    {
        return Carbon::parse($this->created_at)->toFormattedDayDateString();
    }
}
