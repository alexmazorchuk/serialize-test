<?php


namespace App;

final class YamlSerialize extends AbstractSerialize implements SerializeInterface
{
    public function serialize(object $object)
    {
        return yaml_parse($this->objectToArray($object));
    }
}