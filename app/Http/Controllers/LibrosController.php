<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use PDF;
use Illuminate\Support\Facades\Hash;

class LibrosController extends Controller
{   

    public function __construct(){
        $this->middleware('auth:usuarios');
    }

    public function inicio(){
        $user = auth()->guard('usuarios')->user();
        return view('libros.inicio',compact('user'));
    }

    public function crear(){
        //$password = Hash::make('123');
        //dd($password);
        $user = auth()->guard('usuarios')->user();
        return view('libros.crear',compact('user'));
    }

    public function leer(){
       $libros = Libros::all();//trae todos los libros y pasa a la vista
       $user = auth()->guard('usuarios')->user();
        return view('libros.leer',compact('libros','user'));
        
    }

    public function eliminar(){
        $libros = Libros::all();//trae todos los libros y pasa a la vista
        $user = auth()->guard('usuarios')->user();
        return view('libros.eliminar',compact('libros','user'));
    }

    public function update(Request $request,Libros $libro){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255',
        ]);

        $libro->update($request->all());
        return redirect()->back()->with('success','Libro actualizado con exito!');
    }


    //funcion para guardar los libros
    public function store(Request $request){
        //validar los datos
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'autor'=>'required|string|max:255',

        ]);

        //crear libro y guarda los registros
        $libro = new Libros();
        $libro->nombre = $request->nombre;
        $libro->descripcion = $request->descripcion;
        $libro->autor = $request->autor;

        $libro->save();

        return redirect()->back()->with('success','Libro creado con exito!');

    }

    
    public function destroy(Request $request){
        $Id = $request->input('IdLibro');//recibir un valor de un input
        $libro = Libros::find($Id);
        if($libro){
            $libro->delete();
            return redirect()->back()->with('success','Libro borrado con exito!');
        }else{
            return redirect()->back()->with('error','Libro no encontrado');
        }
    }

    public function GenerarPDF(){
        $libros = Libros::all();
        $pdf = PDF::loadView('libros.pdf',compact('libros'));
        return $pdf->stream('reporte_libros.pdf');//abrir reporte
    }

    public function consultar(){
        $user = auth()->guard('usuarios')->user();
        return view('libros.consultar',compact('user'));
    }

    public function GenerarPDFId(Request $request){
        $libro = Libros::find($request->id);
        if($libro){
            $pdf = PDF::loadView('libros.pdfId',compact('libro'));
            return $pdf->stream('reporte_librosID.pdf');
        }else{
            return redirect()->back()->with('error','Libro no encontrado');
        }
    }


}
