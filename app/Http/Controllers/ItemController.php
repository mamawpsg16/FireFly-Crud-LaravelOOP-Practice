<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Type;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('type')->get();
        
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::get();

        return view('item.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        Item::create($request->validated());

        return back()->with(['message' => 'Item created succesfully!']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::with('type')->findOrFail($id);
        $types = Type::get();

        return view('item.edit', compact('types', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, Item $item)
    {
        $item->update($request->validated());

        return back()->with(['message' => 'Item Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::findOrFail($id)->delete();

        return back()->with(['message' => 'Item Deleted Successfully!']);
    }

    public function exportPDF(){
        $items = Item::with('type')->get();
        $pdf = Pdf::loadView('item.export.pdf', ['items' => $items]);
        return $pdf->stream();
    }
}
