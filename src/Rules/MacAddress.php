<?php

namespace Intervention\Validation\Rules;

use Intervention\Validation\AbstractRegexRule;

class MacAddress extends AbstractRegexRule
{
    /**
     * Mac Adress regex pattern
     *
     * @var string
     */
    protected $pattern = "/^[0-9a-f]{12}$/i";

    /**
     * Prepare value for validation
     *
     * @return string
     */
    protected function getValue(): string
    {
        return preg_replace("/[\. :-]/i", '', parent::getValue());
    }
}
