<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PersonController extends Controller
{
    public function index()
    {
        $person = Person::all();

        $data = [

            'status'=>200,
            'person'=>$person
        ];

        return response()->json($data,200);
    }

    public function show($id)
    {
        $person = Person::find($id);
        if($person){

            return response()->json([
                'status'=>200,
                'person'=>$person
            ]);
        }else{

            return response()->json([
                'status'=>404,
                'message'=>"No Such Person Found!"
            ],404);
        }
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),

            [
                'name'=>'required',
                'surname'=>'required',
                'phone'=>'required',
                'street'=>'required',
                'city'=>'required',
                'country'=>'required',
        ]);

        if($validator->fails())
        {

            $data=[

                "status"=>422,
                "message"=>$validator->messages()
            ];
            return response()->json($data,422);
        }

        else

        {
            $person = new Person;
            $person->name=$request->name;
            $person->surname=$request->surname;
            $person->phone=$request->phone;
            $person->street=$request->street;
            $person->city=$request->city;
            $person->country=$request->country;

            $person->save();

            $data=[

                'status'=>200,
                'message'=>'Data uploaded successfully'
            ];
            return response()->json($data,200);
        }
    }

    public function edit(Request $request,$id)
    {
        $validator = Validator::make($request->all(),

            [
                'name'=>'required',
                'surname'=>'required',
                'phone'=>'required|digits:9',
                'street'=>'required|string|max:191',
                'city'=>'required|string|max:191',
                'country'=>'required|string|max:191',


            ]);

        if($validator->fails())
        {

            $data=[

                "status"=>422,
                "message"=>$validator->messages()
            ];
            return response()->json($data,422);
        }

        else

        {
            $person = Person::find($id);

            $person->name=$request->name;
            $person->surname=$request->surname;
            $person->phone=$request->phone;
            $person->street=$request->street;
            $person->city=$request->city;
            $person->country=$request->country;

            $person->save();

            $data=[

                'status'=>200,
                'message'=>'Data updated successfully'
            ];
            return response()->json($data,200);
        }
    }


    public function  delete($id)
    {
        $person = Person::find($id);

        $person->delete();

        $data=
            [
                'status'=>200,
                'message'=>"Person deleted successfully"
            ];
        return response()->json($data,200);
    }
}
