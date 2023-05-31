<?php

namespace App\Form;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PasswordMatchValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!is_array($value) || !isset($value['first']) || !isset($value['second'])) {
            // Si le tableau n'est pas défini ou ne contient pas les clés attendues,
            // vous pouvez éventuellement ajouter une autre validation ici ou simplement retourner
            return;
        }

        $firstPassword = $value['first'];
        $secondPassword = $value['second'];

        if ($firstPassword !== $secondPassword) {
            $this->context->buildViolation($constraint->message)
                ->atPath('first')
                ->addViolation();
        }
    }
}
