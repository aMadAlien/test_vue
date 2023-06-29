<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Routing\Controller as BaseController;

class ThirdController extends BaseController
{
    public function index()
    {
        return  Data::select('code', 'currency', 'mid')->get();
    }
}
