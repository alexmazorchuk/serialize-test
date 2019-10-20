<?php

declare(strict_types=1);

namespace App;

final class JsonSerialize extends AbstractSerialize implements SerializeInterface
{
    public function serialize(object $object)
    {
        return \json_encode($this->objectToArray($object));
    }
}
