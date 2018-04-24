<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class checkcardnum implements Rule
{

    public function passes($attribute, $value)
    {

        if ($value != '5105 1051 0510 5100') {
            return false;
        }
        else {
            return true;
        }
    }

    public function message()
    {
        return 'Failed payment: credit card number is not valid.';
    }
}
