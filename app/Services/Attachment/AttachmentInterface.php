<?php


namespace App\Services\Attachment;


use App\Models\Attachment;
use App\Models\File;
use App\Models\Post;
use App\Models\User;

interface AttachmentInterface
{
    public function addAttachment(User $user, string $name, string $type, string $size, File $file);

    public function deleteAttachments(Attachment $attachment);
}
