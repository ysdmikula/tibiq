<?php

namespace App\Rules;

use App\Models\Task;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TaskDailyLimit implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $taskAmount = Task::where("date", $value)->count();
        if ($taskAmount >= 2) {
            $fail("Only a maximum of 2 tasks per day.");
        }
       
    }
}
