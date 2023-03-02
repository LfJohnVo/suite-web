<?php

namespace App\Http;

use Alexusmai\LaravelFileManager\Services\ACLService\ACLRepository;

class UsersACLRepository implements ACLRepository
{
    public function getUserID()
    {
        return auth()->user()->id;
    }

    /**
     * Get ACL rules list for user.
     *
     * @return array
     */
    public function getRules(): array
    {
        if (auth()->user()->isAdmin || auth()->user()->can('documentador')) {
            return [
                ['disk' => 'Administrador', 'path' => '*', 'access' => 2],
                ['disk' => 'Normas', 'path' => '*', 'access' => 2],
                ['disk' => 'Documentos_publicados', 'path' => '*', 'access' => 2],
                ['disk' => 'Documentos_en_aprobacion', 'path' => '*', 'access' => 2],
                ['disk' => 'Documentos_obsoletos', 'path' => '*', 'access' => 2],
                ['disk' => 'Documentos_versiones_anteriores', 'path' => '*', 'access' => 2],
            ];
        }

        return [
            ['disk' => 'Administrador', 'path' => '*', 'access' => 1],  // Not Admin then only read
            ['disk' => 'Normas', 'path' => '*', 'access' => 1], // Not Admin then only read
            ['disk' => 'Documentos_publicados', 'path' => '*', 'access' => 1],  // Not Admin then only read
            ['disk' => 'Documentos_en_aprobacion', 'path' => '*', 'access' => 1],   // Not Admin then only read
            ['disk' => 'Documentos_obsoletos', 'path' => '*', 'access' => 1],   // Not Admin then only read
            ['disk' => 'Documentos_versiones_anteriores', 'path' => '*', 'access' => 1],    // Not Admin then only read
        ];
    }
}
