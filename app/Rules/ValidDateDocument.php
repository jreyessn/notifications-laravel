<?php

namespace App\Rules;

use Illuminate\Support\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidDateDocument implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $date = new Carbon($value);
        $now = Carbon::now();
        $now->hour = 0;
        $now->minute = 0;
        $now->second = 0;

        if($date->diffInMonths($now) >= 3)
            return false;
        return true;
 
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La fecha de :attribute debe ser inferior a los 3 meses.';
    }
}
