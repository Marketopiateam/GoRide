<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceController extends BaseController
{
    public function __construct(Service $model)
        {
            parent::__construct($model);
        }
}
