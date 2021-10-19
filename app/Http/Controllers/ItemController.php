<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $itemName = $request->input('item-name');
        $sectionId = $request->input('section-id');

        if ($request->image) {
            $newImageName = str_replace(' ', '-', $itemName) . '.' . $request->image->extension();
            $dirName = 'images';
            $request->image->move(public_path('images'), $newImageName);

            $path = "/$dirName/$newImageName";
        }

        Item::create([
            'name' => $itemName,
            'section_id' => $sectionId,
            'description' => $request->input('item-description'),
            'price' => $request->input('item-price'),
            'active' => 1,
            'position' => 1,
            'image_path' => $path ?? ''
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $itemName = $request->input('item-name');
        $sectionId = $request->input('section-id');
        $path = '';

        if ($request->image) {
            $newImageName = str_replace(' ', '-', $itemName) . '.' . $request->image->extension();
            $dirName = 'images';
            $request->image->move(public_path('images'), $newImageName);

            $path = "/$dirName/$newImageName";
        }

        Item::find($id)->update([
            'name' => $itemName,
            'section_id' => $sectionId,
            'description' => $request->input('item-description'),
            'price' => $request->input('item-price'),
            'active' => $request->input('item-visible') ?? 1,
            'position' => '1',
        ]);

        if ($path != '') {
            Item::find($id)->update([
                'image_path' => $path
            ]);
        }

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function visible($id)
    {
        $item = Item::find($id);
        
        Item::where('item_id', $id)->update([
            'active' => !$item->active
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::where('item_id', $id)->first()->delete();

        return redirect()->back();
    }
}
