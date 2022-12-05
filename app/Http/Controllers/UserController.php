<?php
declare (strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\People\Person;
use http\Env\response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;

class UserController extends Controller
{
    public function index():JsonResponse
    {
        return response::json(Person::all(), 200);
    }


    public function show(Person$person):JsonResponse
    {
       return response ()json($person,200);

    }
}

