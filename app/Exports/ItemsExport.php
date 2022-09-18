<?php

namespace App\Exports;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ItemsExport implements FromView,ShouldAutoSize
{
    use Exportable;

    private $items;

    public function __construct(){
        $this->items = Item::with('type')->get();
    }
    public function view(): View{
        return view('item.export.excel',['items'=>$this->items]);
    }
}
