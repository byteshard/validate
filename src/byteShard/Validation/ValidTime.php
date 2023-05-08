<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Validation;

use byteShard\Internal\Validation\InvariableValidation;
use DateTime;

class ValidTime extends InvariableValidation
{
    public static function verify(mixed $value): bool
    {
        return DateTime::createFromFormat('!H:i:s', $value) !== false;
    }

    public static function getFailureMessage(mixed $value, string $label): string
    {
        return '';
    }

    public function getClientValidation(): string
    {
        return 'ValidTime';
    }
}
