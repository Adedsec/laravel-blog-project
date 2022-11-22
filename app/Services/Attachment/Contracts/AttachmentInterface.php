<?php


namespace App\Services\Attachment\Contracts;


use App\Models\Attachment;
use App\Models\File;
use App\Models\User;

interface AttachmentInterface
{

    public const SUCCESSFUL_RESPONSE = 'attachment.operation.successful';
    public const FAILED_RESPONSE = 'attachment.operation.failed';

    public function addAttachment(User $user, string $name, string $type, string $size, File $file): string;

    public function deleteAttachments(Attachment $attachment): string;
}
