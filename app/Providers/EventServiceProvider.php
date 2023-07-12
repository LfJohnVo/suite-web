<?php

namespace App\Providers;

use App\Models\Area;
use App\Models\Sede;
use App\Models\User;
use App\Models\Proceso;
use App\Models\Recurso;
use App\Models\Calendario;
use App\Models\Organizacion;
use App\Events\RecursosEvent;
use App\Models\AuditoriaAnual;
use App\Models\Registromejora;
use App\Models\AccionCorrectiva;
use App\Observers\AreasObserver;
use App\Observers\SedesObserver;
use App\Observers\UsersObserver;
use App\Events\TaskRecursosEvent;
use App\Models\PlanImplementacion;
use App\Events\AuditoriaAnualEvent;
use App\Events\RegistroMejoraEvent;
use App\Listeners\RecursosListener;
use App\Observers\ProcesosObserver;
use App\Observers\RecursosObserver;
use App\Events\AccionCorrectivaEvent;
use App\Models\IncidentesDeSeguridad;
use App\Observers\CalendarioObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\TaskRecursosListener;
use App\Observers\OrganizacionObserver;
use App\Listeners\AuditoriaAnualListener;
use App\Listeners\RegistroMejoraListener;
use App\Observers\AuditoriaAnualObserver;
use App\Observers\RegistroMejoraObserver;
use App\Events\IncidentesDeSeguridadEvent;
use App\Listeners\AccionCorrectivaListener;
use App\Observers\AccionCorrectivaObserver;
use App\Observers\PlanImplementacionObserver;
use App\Listeners\IncidentesDeSeguridadListener;
use App\Observers\IncidentesDeSeguridadObserver;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        IncidentesDeSeguridadEvent::class => [
            IncidentesDeSeguridadListener::class,
        ],
        AuditoriaAnualEvent::class => [
            AuditoriaAnualListener::class,
        ],
        AccionCorrectivaEvent::class => [
            AccionCorrectivaListener::class,
        ],
        RegistroMejoraEvent::class => [
            RegistroMejoraListener::class,
        ],
        RecursosEvent::class => [
            RecursosListener::class,
        ],
        TaskRecursosEvent::class => [
            TaskRecursosListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        IncidentesDeSeguridad::observe(IncidentesDeSeguridadObserver::class);
        AuditoriaAnual::observe(AuditoriaAnualObserver::class);
        AccionCorrectiva::observe(AccionCorrectivaObserver::class);
        Registromejora::observe(RegistroMejoraObserver::class);
        Recurso::observe(RecursosObserver::class);
        #Redis
        PlanImplementacion::observe(PlanImplementacionObserver::class);
        Organizacion::observe(OrganizacionObserver::class);
        Sede::observe(SedesObserver::class);
        User::observe(UsersObserver::class);
        Calendario::observe(CalendarioObserver::class);
        AuditoriaAnual::observe(AuditoriaAnualObserver::class);
        Area::observe(AreasObserver::class);
        Proceso::observe(ProcesosObserver::class);
    }
}
