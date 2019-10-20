<?php

declare(strict_types=1);

namespace App;

final class XmlSerialize extends AbstractSerialize implements SerializeInterface
{
    public function serialize(object $object)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0"?><root></root>');
        \array_walk_recursive($object, [$xml, 'addChild']);

        return $xml->asXML();
    }
}
