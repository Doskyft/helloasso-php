<?php

declare(strict_types=1);

namespace Helloasso\Models\Common;

use Helloasso\Models\HelloassoObject;

/**
 * @template T of HelloassoObject
 */
abstract class Collection implements HelloassoObject
{
    /**
     * @var T[]
     */
    protected array $data = [];

    protected PaginationModel $pagination;

    public function isEmpty(): bool
    {
        return 0 === \count($this->data);
    }

    /**
     * @return T[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param T[] $data
     *
     * @return self<T>
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getPagination(): PaginationModel
    {
        return $this->pagination;
    }

    /**
     * @return self<T>
     */
    public function setPagination(PaginationModel $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}
