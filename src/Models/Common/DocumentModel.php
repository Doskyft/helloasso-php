<?php

declare(strict_types=1);

namespace Helloasso\Models\Common;

use Helloasso\Models\HelloassoObject;

class DocumentModel implements HelloassoObject
{
    private string $fileName;
    private string $publicUrl;

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getPublicUrl(): string
    {
        return $this->publicUrl;
    }

    public function setPublicUrl(string $publicUrl): self
    {
        $this->publicUrl = $publicUrl;

        return $this;
    }
}
