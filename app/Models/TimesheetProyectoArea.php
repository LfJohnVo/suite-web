<?php

namespace App\Models;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TimesheetProyectoArea extends Model implements Auditable
{
    use ClearsResponseCache, \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'timesheet_proyectos_areas';

    protected $fillable = [
        'area_id',
        'proyecto_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function proyecto()
    {
        return $this->belongsTo(TimesheetProyecto::class, 'proyecto_id', 'id');
    }

    public function proyectosAsignados()
    {
        return $this->belongsTo(TimesheetProyectoEmpleado::class, 'proyecto_id', 'proyecto_id');
    }
}
