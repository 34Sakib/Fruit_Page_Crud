<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruits; 

class FruitsController extends Controller
{
    public function index()
    {
        $fruits = Fruits::all();
       
        return view('fruit.index',['fruits' => $fruits]);
    }
    public function create()
    {
        return view('fruit.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'color' => 'required|string|max:20',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string|max:50',
        ]);

        $newFruits = Fruits::create($data);

        return redirect()->route('fruits.index')->with('success', 'Fruit created successfully!');
    }
    public function edit(Fruits $fruits)
    {
        return view('fruit.edit', ['fruits' => $fruits]);
    }
    public function update(Request $request, Fruits $fruits)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'color' => 'required|string|max:20',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string|max:50',
        ]);
        $fruits->update($data);
        return redirect()->route('fruits.index')->with('success', 'Fruit updated successfully!');   
    }
    public function destroy(Fruits $fruits)
    {
        $fruits->delete();
        return redirect()->route('fruits.index')->with('success', 'Fruit deleted successfully!');
    }

}
