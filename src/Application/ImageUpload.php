<?php

namespace ImageUpload\Application;

use ImageUpload\Application\Services\UploadService;

class ImageUpload
{
    /**
     * @var UploadService
     */
    private $uploadService;

    /**
     * ImageUpload constructor.
     *
     * @param UploadService $uploadService
     */
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }
}
