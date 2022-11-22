<?php


namespace App\Services\Attachment\Contracts;


use App\Models\Attachment;
use App\Models\File;
use App\Models\User;

trait hasAttachment
{
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function hasAttachment(): bool
    {
        return false;
    }

    public function addAttachment(User $user, File $files, string $type, string $size): void
    {

    }

    public function deleteAttachment(): void
    {

    }

    public function getAttachmentsData(): void
    {

    }

}
