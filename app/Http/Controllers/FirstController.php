<?php

namespace App\Http\Controllers;

use App\Models\Converted;
use Illuminate\Routing\Controller as BaseController;

class FirstController extends BaseController
{
    public function index()
    {
        return  Converted::select('amount', 'result', 'from_code as from', 'to_code as to', 'from_mid', 'to_mid')->get();
    }
}
