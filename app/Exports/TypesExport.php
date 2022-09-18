<?php

namespace App\Exports;

use App\Models\Type;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TypesExport implements FromView,ShouldAutoSize
{
    use Exportable;
    
    private $items;

    public function __construct(){
        $this->types = Type::all();
    }
    public function view(): View{
        return view('type.export.excel',['types'=>$this->types]);
    }
}
