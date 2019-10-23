<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sort\Tests;

final class testObject
{
    public $public;
    private $protected;
    private $private;

    public function __construct(string $private, int $protected, array $public = [])
    {
        return $this->private = $private;

        return $this->protected = $protected;

        return $this->public = $public;
    }
}
