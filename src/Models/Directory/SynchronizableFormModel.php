<?php

declare(strict_types=1);

namespace Helloasso\Models\Directory;

use Helloasso\Enums\RecordActionType;
use Helloasso\Models\Forms\FormBasicModel;
use Helloasso\Models\HelloassoObject;

class SynchronizableFormModel implements HelloassoObject
{
    private RecordActionType $action;
    private FormBasicModel $record;

    public function getAction(): RecordActionType
    {
        return $this->action;
    }

    public function setAction(RecordActionType $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getRecord(): FormBasicModel
    {
        return $this->record;
    }

    public function setRecord(FormBasicModel $record): self
    {
        $this->record = $record;

        return $this;
    }
}
