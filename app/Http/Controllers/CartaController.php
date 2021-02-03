<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carta;

class CartaController extends Controller
{
    
    public function index()
    {
        $cartas = Carta::all();
        $preguntas = array();
        foreach($cartas as $carta){
            
           $preguntas[] = $carta->preguntas;
            
        }
        
        
     return response()->json($cartas,200);   
    }

    public function store(Request $request)
    {
        try{
            
            $carta = Carta::create($request->all());
            $resultado = $carta->id;
            
        }catch(\Exception $ex){
            $resultado = 0;
        }
        
        return response()->json(['resultado'=>$resultado],200);
        
    }


    public function show($id)
    {
        $carta = Carta::find($id);
        return response()->json($carta,200); 
        
    }




    public function update(Request $request, $id)
    {
        try{
            $carta = Carta::find($id);
            $resultado = $carta->update($request->all());
        }catch(\Exception $ex){
            $resultado = -1;
        }
       return response()->json(['resultado'=>$resultado],200);
        
    }


    public function destroy($id)
    {
        try{
        
        $response = Carta::destroy($id);
            
        }catch(\Exception $ex){
         $response = -1;
        } 
        
        return response()->json([$response],200);   
        
    }
}
