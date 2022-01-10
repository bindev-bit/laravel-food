<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:menus|string|max:255',
            'price' => 'required',
            'description' => 'required|string',
            'image_url' => 'required|image|file|max:10240',
        ]);

        if ($request->file('image_url')) {
            $validateData['image_url'] = $request->file('image_url')->store('menu-image');
        }

        Menu::create($validateData);

        session()->flash('flash.banner', 'New menu has been added !');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('menu.detail', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255|unique:products' . ',id,' . $menu->id,
            'price' => 'required',
            'description' => 'required|string',
            'image_url' => 'image|file|max:10240',
        ]);

        if ($request->file('image_url')) {
            $validateData['image_url'] = $request->file('image_url')->store('product-image');
        } else {
            $validateData['image_url'] = $menu->image_url;
        }

        $menu->update($validateData);

        session()->flash('flash.banner', 'New menu has been updated !');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        session()->flash('flash.banner', 'Menu has been removed !');
        session()->flash('flash.bannerStyle', 'danger');
        return redirect()->route('menu.index');
    }
}
