<?php

namespace ImageUpload\Application\Services;

use ImageUpload\Domain\Contracts\StorageServiceInterface;
use ImageUpload\Domain\Contracts\UploadServiceInterface;
use ImageUpload\Domain\Models\Image;

class ImageService
{
    /**
     * @var UploadServiceInterface
     */
    private $uploadService;

    /**
     * @var StorageServiceInterface
     */
    private $storageService;

    /**
     * ImageUploadService constructor.
     *
     * @param UploadServiceInterface $uploadService
     * @param StorageServiceInterface $storageService
     */
    public function __construct(
        UploadServiceInterface $uploadService,
        StorageServiceInterface $storageService
    ) {

        $this->uploadService = $uploadService;
        $this->storageService = $storageService;
    }

    /**
     * @param Image $image
     *
     * @return bool
     */
    public function upload(Image $image)
    {
        $result = true;

        return $result;
    }
}
