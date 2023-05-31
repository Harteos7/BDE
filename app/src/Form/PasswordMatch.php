<?php

namespace App\Form;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class PasswordMatch extends Constraint
{
    public $message = 'le mot de passe ne correspond pas';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

    public function validatedBy()
    {
        return PasswordMatchValidator::class;
    }
}
