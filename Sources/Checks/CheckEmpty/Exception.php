<?php

namespace Judex\Checks\CheckEmpty;

use Judex\Checks\Exception as ChecksException;

/**
 * Exception: Empty expected, but not empty value provided.
 *
 * @package Assert
 */
class Exception extends ChecksException
{
    /**
     * @inheritDoc
     */
    protected $defaultMessage = 'Empty expected, but not empty value provided.';

    /**
     * @inheritDoc
     */
    protected $defaultCode = 0x05;
}