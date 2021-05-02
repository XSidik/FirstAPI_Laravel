<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facedes\Auth;
use App\Helper\Helper;

class RegionController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function GetProvinces()
    {
        $provinces = Helper::GetApi('https://ibnux.github.io/data-indonesia/propinsi.json');        
        return $provinces;
    }

    public function GetDistricts($id)
    {        
        $districts = Helper::GetApi('https://ibnux.github.io/data-indonesia/kabupaten/'.$id.'.json');        
        return $districts;
    }
}
