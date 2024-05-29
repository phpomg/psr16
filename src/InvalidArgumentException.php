<?php

declare(strict_types=1);

namespace PHPOMG\Psr16;

use \Psr\SimpleCache\InvalidArgumentException as InvalidArgumentExceptionInterface;

class InvalidArgumentException extends CacheException implements InvalidArgumentExceptionInterface
{
}
