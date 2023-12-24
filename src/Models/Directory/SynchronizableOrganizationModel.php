<?php

declare(strict_types=1);

namespace Helloasso\Models\Directory;

use Helloasso\Enums\RecordActionType;
use Helloasso\Models\HelloassoObject;
use Helloasso\Models\Organization\OrganizationBasicModel;

class SynchronizableOrganizationModel implements HelloassoObject
{
    private RecordActionType $action;
    private OrganizationBasicModel $record;

    public function getAction(): RecordActionType
    {
        return $this->action;
    }

    public function setAction(RecordActionType $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getRecord(): OrganizationBasicModel
    {
        return $this->record;
    }

    public function setRecord(OrganizationBasicModel $record): self
    {
        $this->record = $record;

        return $this;
    }
}
