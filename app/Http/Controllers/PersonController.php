<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function index(): JsonResponse
    {
        return response()->json(Person::all(), 200);
    }

    public function create(Request $request): JsonResponse
    {
        $person = Person::create($request->all());
        return response()->json($person, 201);
    }

    public function show(Person $person): JsonResponse
    {
        return response()->json($person, 200);
    }

    public function update(Request $request, Person $person): JsonResponse
    {
        $person->update($request->all());
        return response()->json($person, 200);
    }

    public function destroy(Person $person): JsonResponse
    {
        $person->delete();
        return response()->json(null, 204);
    }
}
