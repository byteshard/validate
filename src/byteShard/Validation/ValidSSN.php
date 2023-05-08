<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Validation;

use byteShard\Internal\Validation\InvariableValidation;

class ValidSSN extends InvariableValidation
{
    public static function verify(mixed $value): bool
    {
        return preg_match('/^\d{3}\-?\d{2}\-?\d{4}$/', $value) === 1;
    }

    public static function getFailureMessage(mixed $value, string $label): string
    {
        return '';
    }

    public function getClientValidation(): string
    {
        return 'ValidSSN';
    }
}
