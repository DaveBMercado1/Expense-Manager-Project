<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Repositories\UserManagementRepositories\RoleManagementRepository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class test_controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        dd("Hello");
    }
}
