<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::paginate(10); // ή ότι query θέλεις
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
    public function store(SkillRequest $request)
    {


        Skill::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
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
    public function update(SkillRequest $request, Skill $skill)
       {

        $skill -> update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
        ])
        ;

         return redirect()->route('skills.index')->with('success', 'Skill updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Skill deleted!'); 
    }
}
