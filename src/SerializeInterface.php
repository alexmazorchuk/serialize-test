<?php

declare(strict_types=1);

namespace App;

interface SerializeInterface
{
    public function serialize(object $object);
}
