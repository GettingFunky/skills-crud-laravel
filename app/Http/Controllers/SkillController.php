<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $skills = Skill::all(); // ή ότι query θέλεις
    $randomSkill = Skill::inRandomOrder()->first();
    return view('skills.skills', compact('skills', 'randomSkill'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|min:3|max:50'
    ]);

    Skill::create([
        'name' => $validated['name'],
        'description'=> fake()->sentence(),
        'category'=> fake()->word(),])
    ;

    return redirect('skills')->with('success', 'Category created!');;
}

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
{

    return view('skills.skill', compact('skill'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
