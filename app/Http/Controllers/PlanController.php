<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function showIndex()
    {
        return view('plan.index');
    }

    public function showInputPlan()
    {
        return view('plan.input_plan');
    }

    public function showEditPlan()
    {
        return view('plan.edit_plan');
    }

    public function showResolutionPlan()
    {
        return view('plan.resolution_plan');
    }

    public function inputPlan()
    {
        return redirect()->route('index');
    }

    public function editPlan()
    {
        return redirect()->route('index');
    }

    public function deletePlan()
    {
        return redirect()->route('index');
    }

    public function decidePlan()
    {
        return redirect()->route('index');
    }
}
