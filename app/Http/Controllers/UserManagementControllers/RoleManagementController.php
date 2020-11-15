<?php

namespace App\Http\Controllers\UserManagementControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Validator;
use App\Repositories\UserManagementRepositories\RoleManagementRepository;
use Illuminate\Validation\Rule;

class RoleManagementController extends Controller
{

    protected $roleRepo;

    public function __construct(RoleManagementRepository $roleRepo)
    {
        $this->repo = $roleRepo;
    }

    public function RoleManagementProcess(Request $request)
    {

       $Validation = $this->validate($request, [
            'Category' => 'Required',
            'roleName' => Rule::requiredif($request->Category == 'Register'),
            'roleDescription' => 'Nullable'
        ]);

        $category = $request->Category;

        if($category == 'Get'){
            $getResponse = $this->repo->getRoles();
            return $getResponse;
        }
        if ($category == 'Register') {
            $registerResponse = $this->repo->registerRole($request->all());
            return $registerResponse;
        }

        if ($category == 'Update') {
            $updateResponse = $this->repo->updateRole($request->all());
            return $updateResponse;
        }

        if ($category == 'Delete') {
            $deleteResponse = $this->repo->deleteRole($request->all());
            return $deleteResponse;
        }


    }
}
