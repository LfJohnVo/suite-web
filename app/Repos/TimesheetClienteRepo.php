<?php

namespace App\Repos;

use App\Models\TimesheetCliente;

class TimesheetClienteRepo extends RepoBase
{
    public function __construct(TimesheetCliente $model)
    {
        parent::__construct($model);
    }

    public function create($data)
    {
        return true;
    }
}
