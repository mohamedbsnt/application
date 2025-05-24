<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;


#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class BanWord extends Constraint
{   
    public string $message;
    public array $banWords;
    public function _construct(
                array $banWords=['spam','viagra'],
                string $message ='This contains a banned word"{{banWord}}" ',
                ?array $groups= null,
                mixed $payload =null)
                {
                  parent:: _construct( null, $groups,$payload);
                }
    
}
