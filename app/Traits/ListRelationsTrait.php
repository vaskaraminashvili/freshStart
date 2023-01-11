<?php

namespace App\Traits;

trait ListRelationsTrait {
    /**
     * @return array
     */
    public static function definedRelations(): array
    {
        $reflector = new \ReflectionClass(get_called_class());

        return collect($reflector->getMethods())
            ->filter(
                fn($method) => !empty($method->getReturnType()) &&
                    str_contains(
                        $method->getReturnType(),
                        'Illuminate\Database\Eloquent\Relations'
                    )
            )
            ->pluck('name')
            ->all();
    }
}
