<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    
    public function index()
    {
        return response()->json(Pregunta::all(),200);
    }

    public function store(Request $request)
    {
        try{
            
            $pregunta = Pregunta::create($request->all());
            $resultado = $pregunta->id;
            
        }catch(\Exception $ex){
            $resultado = 0;
        }
        
        return response()->json(['resultado'=>$resultado],200);
        
    }

    
    public function show($id)
    {
        $pregunta = Pregunta::find($id);
        return response()->json(['movil'=>$pregunta],200); 
        
    }

    
    public function update(Request $request, $id)
    {
        try{
            $pregunta = Pregunta::find($id);
            $resultado = $pregunta->update($request->all());
        }catch(\Exception $ex){
            $resultado = -1;
        }
       return response()->json(['resultado'=>$resultado],200);
        
    }

   
    public function destroy($id)
    {
        try{
        
        $response = Pregunta::destroy($id);
            
        }catch(\Exception $ex){
         $response = -1;
        } 
        
        return response()->json([$response],200);    
        
    }
}
