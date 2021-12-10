<?php

namespace App\Http\Controllers;

use App\Models\Juice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class JuiceController extends Controller
{
    public function index(){
        return view('juices.index');
    }
    public function fetchjuices(){
        $juices = Juice :: all();
        return response()->json([
            'juices' => $juices,
        ]);;
    }
    public function store(Request $request){
        $validator = Validator :: make($request->all(),[
            'juicename' => 'required',
            'number' => 'required',
            'image' => 'required',
            'nicotin' => 'required',
            'flavor' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'sellingprice' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $juice = new Juice();
            $juice->juicename = $request->input('juicename');
            $juice->number = $request->input('number');
            $juice->image = $request->input('image');
            $juice->nicotin = $request->input('nicotin');
            $juice->flavor = $request->input('flavor');
            $juice->brand = $request->input('brand');
            $juice->price = $request->input('price');
            $juice->sellingprice = $request->input('sellingprice');
            $juice->save();
            return response()->json([
                'status' => 200,
                'messages' => 'Created!'
            ]);
        }

    }
    public function edit($id){
        $juice = Juice::find($id);
        if($juice){
            return response()->json([
                'status' => 200,
                'juice' => $juice,
            ]);
        }
        else {
            return response()->json([
                'status' => 400,
                'messages' => 'Not Found!',
            ]);
        }
    }
    public function update(Request $request,$id){
        $validator = Validator :: make($request->all(),[
            // 'juicename' => 'required',
            // 'number' => 'required',
            // 'image' => 'required',
            // 'nicotin' => 'required',
            // 'flavor' => 'required',
            // 'brand' => 'required',
            // 'price' => 'required',
            // 'sellingprice' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $juice = Juice::find($id);
            if($juice){
                $juice->juicename = $request->input('juicename');
                $juice->number = $request->input('number');
                $juice->image = $request->input('image');
                $juice->nicotin = $request->input('nicotin');
                $juice->flavor = $request->input('flavor');
                $juice->brand = $request->input('brand');
                $juice->price = $request->input('price');
                $juice->sellingprice = $request->input('sellingprice');
                $juice->update();
                return response()->json([
                    'status' => 200,
                    'messages' => 'Updated!'
                ]);
            }
            else{
                return response()->json([
                    'status' => 404,
                    'messages' => 'Not Found!',
                ]);
            }
            
        }
    }
    public function destroy($id){
        $juice = Juice::find($id);
        if($juice)
        {
            $juice->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Juice Deleted '
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No juice Found.'
            ]);
        }
    }
}

