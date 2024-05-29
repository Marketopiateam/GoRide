<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ThreadResource;
use App\Models\Thread;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ThreadApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('thread_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ThreadResource(Thread::with(['order', 'receiver', 'sender', 'chat'])->get());
    }
}
