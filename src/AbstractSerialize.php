<?php


namespace App;

abstract class AbstractSerialize implements SerializeInterface
{
    private function getProperties($key)
    {
        $pos = \strpos($key, "\0");
        $key = \substr_replace($key, 'CROPSTART', $pos, \strlen("\0"));
        $key = \substr_replace($key, 'CROPEND', \strpos($key, "\0"), \strlen("\0"));

        return \preg_replace('/CROPSTART[\s\S]+?CROPEND/', '', $key);
    }

    public function objectToArray($object): array
    {
        $array = [];

        foreach ((array) $object as $key => $value) {
            if (false !== \strpos($key, "\0")) {

                $key = $this->getProperties($key);
            }

            if (\is_array($value) || \is_object($value)) {
                $array[$key] = $this->objectToArray($value);
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }
}