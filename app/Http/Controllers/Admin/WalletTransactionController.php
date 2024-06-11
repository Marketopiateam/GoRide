<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WalletTransaction;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WalletTransactionController extends BaseController
{
    public function __construct(WalletTransaction $model)
    {
        parent::__construct($model);
    }
}
