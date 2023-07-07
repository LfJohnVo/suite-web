<?php

namespace App\Repos;

use App\Models\TimesheetProyectoArea;

class TimesheetProyectoAreaRepo extends RepoBase
{
    public function __construct(TimesheetProyectoArea $model)
    {
        parent::__construct($model);
    }

    public function create($data)
    {
        return true;
    }
}
