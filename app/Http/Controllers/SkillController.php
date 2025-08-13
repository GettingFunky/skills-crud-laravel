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
        $newSkill = Skill::factory()->make();
        return view('skills.skills', compact('skills', 'randomSkill', 'newSkill'));
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
            'name' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:50',
            'category' => 'required|min:3|max:50',

        ]);

        Skill::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'category' => $validated['category'],
        ])
        ;

        return redirect('skills')->with('success', 'Skill created!');
        ;
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
            return view('skills.edit', compact('skill'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
       {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:50',
            'category' => 'required|min:3|max:50',

        ]);

        $skill -> update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'category' => $validated['category'],
        ])
        ;

         return redirect()->route('skills.index')->with('success', 'Skill updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
