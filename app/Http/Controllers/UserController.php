<?php
namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\People\Person;
use Illuminate\Routing\Route;

class UserController extends Controller
Route::get('/user/{id}', [UserController::class, 'show']);
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => Person::findOrFail($id)
        ]);
    }
}
