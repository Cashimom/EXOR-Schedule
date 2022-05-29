<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function showIndex()
    {
        return "Index View";
    }

    public function showInputPlan()
    {
        return "Input Plan View";
    }

    public function showEditPlan()
    {
        return "Edit Plan View";
    }

    public function showResolutionPlan()
    {
        return "Resolution Plan View";
    }
}
