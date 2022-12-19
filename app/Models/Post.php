<?php

namespace App\Models;

use App\Services\Attachment\Contracts\hasAttachment;
use App\Services\Attachment\StorageManager;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory, HasPersianSlug, hasAttachment;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'thumbnail_path'
    ];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

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
        return $this->thumbnail_path != null;
    }

    public function addThumbnail(StorageManager $storageManager, UploadedFile $file): string
    {
        return $storageManager->putFileAsPublic($file->getClientOriginalName(), $file, 'thumbnail');

    }

    public function getThumbnailPath()
    {
        return "/storage/" . $this->thumbnail_path;
    }


    public function publishDate(): string
    {
        return Carbon::parse($this->created_at)->toFormattedDayDateString();
    }


}
