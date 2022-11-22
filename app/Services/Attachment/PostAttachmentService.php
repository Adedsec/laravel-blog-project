<?php

namespace App\Services\Attachment;

use App\Models\Attachment;
use App\Models\File;
use App\Models\User;

class PostAttachmentService implements Contracts\AttachmentInterface
{

    public function addAttachment(User $user, string $name, string $type, string $size, File $file): string
    {
        // TODO: Implement addAttachment() method.
        return '';
    }

    public function deleteAttachments(Attachment $attachment): string
    {
        // TODO: Implement deleteAttachments() method.
        return '';
    }
}
