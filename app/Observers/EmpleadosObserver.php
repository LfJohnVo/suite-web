<?php

namespace App\Observers;

use App\Models\Empleado;
use Illuminate\Support\Facades\Cache;

class EmpleadosObserver
{
    /**
     * Handle the Empleado "created" event.
     */
    public function created(Empleado $empleado): void
    {
        //
        $this->forgetCache();
    }

    /**
     * Handle the Empleado "updated" event.
     */
    public function updated(Empleado $empleado): void
    {
        //
        $this->forgetCache();
    }

    /**
     * Handle the Empleado "deleted" event.
     */
    public function deleted(Empleado $empleado): void
    {
        //
        $this->forgetCache();
    }

    /**
     * Handle the Empleado "restored" event.
     */
    public function restored(Empleado $empleado): void
    {
        //
        $this->forgetCache();
    }

    /**
     * Handle the Empleado "force deleted" event.
     */
    public function forceDeleted(Empleado $empleado): void
    {
        //
        $this->forgetCache();
    }

    private function forgetCache()
    {
        Cache::forget('empleados_all');
        Cache::forget('empleados_alta');
        Cache::forget('empleados_alta_all');
        Cache::forget('empleados_reportes_all');
        Cache::forget('empleados_alta_id');
    }
}