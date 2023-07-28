<?php

namespace App\Observers;

use App\Models\Sugerencias;
use Illuminate\Support\Facades\Cache;

class SugerenciasObserver
{
    /**
     * Handle the Sugerencias "created" event.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return void
     */
    public function created(Sugerencias $sugerencias)
    {
        $this->forgetCache();
    }

    /**
     * Handle the Sugerencias "updated" event.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return void
     */
    public function updated(Sugerencias $sugerencias)
    {
        $this->forgetCache();
    }

    /**
     * Handle the Sugerencias "deleted" event.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return void
     */
    public function deleted(Sugerencias $sugerencias)
    {
        $this->forgetCache();
    }

    /**
     * Handle the Sugerencias "restored" event.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return void
     */
    public function restored(Sugerencias $sugerencias)
    {
        $this->forgetCache();
    }

    /**
     * Handle the Sugerencias "force deleted" event.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return void
     */
    public function forceDeleted(Sugerencias $sugerencias)
    {
        $this->forgetCache();
    }

    private function forgetCache()
    {
        Cache::forget('sugerencias_all');
    }
}
