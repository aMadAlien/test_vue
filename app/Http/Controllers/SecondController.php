<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Routing\Controller as BaseController;

class SecondController extends BaseController
{
    public function index()
    {
        return  Data::select('code', 'currency', 'mid')->paginate(10);
    }
}
