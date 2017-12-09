<?php

namespace ImageUpload\Application\Services;

use ImageUpload\Domain\Contracts\StorageServiceInterface;
use ImageUpload\Domain\Contracts\UploadServiceInterface;
use ImageUpload\Domain\Models\Image;
use PHPUnit\Framework\TestCase;

class ImageServiceTest extends TestCase
{
    /**
     * @test
     */
    public function uploadImageSuccessful_test()
    {
        /** @var UploadServiceInterface|\PHPUnit_Framework_MockObject_MockObject $uploadServiceMock */
        $uploadServiceMock = $this->createMock(UploadServiceInterface::class);

        /** @var StorageServiceInterface|\PHPUnit_Framework_MockObject_MockObject $storageServiceMock */
        $storageServiceMock = $this->createMock(StorageServiceInterface::class);

        /** @var Image|\PHPUnit_Framework_MockObject_MockObject $imageMock */
        $imageMock = $this->createMock(Image::class);

        $classUnderTest = new ImageService(
            $uploadServiceMock,
            $storageServiceMock
        );

        $result = $classUnderTest->upload($imageMock);

        $this->assertTrue($result);
    }
}
