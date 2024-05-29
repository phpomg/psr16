<?php

declare(strict_types=1);

namespace PHPOMG\Psr16;

use Exception;
use Psr\SimpleCache\CacheException as CacheExceptionInterface;

class CacheException extends Exception implements CacheExceptionInterface
{
}
