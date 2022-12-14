<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Exports\TypesExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\TypeRequest;
use Maatwebsite\Excel\Facades\Excel;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::filter(request(['search']))->get();

        return view('type.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request)
    {
        Type::create($request->validated());

        return back()->with(['message' => 'Type created succesfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);

        return view('type.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeRequest $request,Type $type)
    {
        $type->update($request->validated());

        return back()->with(['message' => 'Type Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Type::findOrFail($id)->delete();
        
        return back()->with(['message' => 'Item Deleted Successfully!']);
    }

    public function exportPdf(){
        $types = Type::get();
        $pdf = Pdf::loadView('type.export.pdf', ['types' => $types]);
        return $pdf->stream();
    }

    public function exportCsv(){
        return Excel::download(new TypesExport(),'types.csv');
    }
}
