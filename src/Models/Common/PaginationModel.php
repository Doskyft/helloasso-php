<?php

declare(strict_types=1);

namespace Helloasso\Models\Common;

use Helloasso\Models\HelloassoObject;

class PaginationModel implements HelloassoObject
{
    private int $pageSize;
    private int $totalCount;
    private int $pageIndex;
    private int $totalPages;
    private string $continuationToken;

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getPageIndex(): int
    {
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex): self
    {
        $this->pageIndex = $pageIndex;

        return $this;
    }

    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    public function setTotalPages(int $totalPages): self
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    public function getContinuationToken(): string
    {
        return $this->continuationToken;
    }

    public function setContinuationToken(string $continuationToken): self
    {
        $this->continuationToken = $continuationToken;

        return $this;
    }
}
