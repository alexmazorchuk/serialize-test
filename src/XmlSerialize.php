<?php


namespace App;

final class XmlSerialize extends AbstractSerialize implements SerializeInterface
{
    public function serialize(object $object)
    {
        return simplexml_load_string($this->objectToArray($object));
    }
}