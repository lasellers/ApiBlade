<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County;
use Illuminate\Support\Facades\DB;

class CountyController extends Controller
{
    /**
     */
    public function county($id)
    {
        return County::find($id);
    }

    /**
     */
    public function counties()
    {
        return County::all();
    }

    /**
     */
    public function dropdown()
    {
        return County::dropdown();
    }

}
