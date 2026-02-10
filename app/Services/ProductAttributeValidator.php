<?php

namespace App\Services;


use Illuminate\Validation\ValidationException;

class ProductAttributeValidator
{
    /**
     * Create a new class instance.
     */
    public static function validate(array $attributes, array $schema): void
    {
        foreach ($schema['fields'] as $field) {
            if($field['required'] && !array_key_exists($field['key'], $attributes)) {
                throw ValidationException::withMessages([
                    $field['key'] => 'this field is required.',
                ]);
            }
        }
    }
}
