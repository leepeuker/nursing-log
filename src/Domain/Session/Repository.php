<?php declare(strict_types=1);

namespace NursingLog\Domain\Session;

use NursingLog\Domain\ValueObject\Uuid;

interface Repository
{
    public function create(Entity $session) : void;

    public function delete(Uuid $sessionId) : void;

    public function fetchAll() : EntityList;

    public function update(Entity $session) : void;
}
