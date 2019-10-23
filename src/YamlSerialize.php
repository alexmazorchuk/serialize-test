<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sort;

use Symfony\Component\Yaml\Yaml;

final class YamlSerialize extends AbstractSerialize implements SerializeInterface
{
    public function serialize(object $object)
    {
        return Yaml::dump($this->objectToArray($object));
    }
}
