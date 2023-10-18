<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Hotel;
use App\Models\Tour;
use App\Models\Transport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       /* \Artisan::call('config:clear');
        return;*/
        $candidates = [2,3,6,7];
        $result = [];
        $target = 7;
        for ($i = 0; $i<count($candidates); $i++)
        {
            $cand = $candidates[$i];
            $temp = [];
            $_target = $target;
            while ($_target >= 0)
            {
                $_target -= $cand;
                if ($_target >= 0){

                }
            }
             array_push($result, $temp);
        }
        return $result;
    }
}
