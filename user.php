<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class User1 extends Controller
{
    //
    function dbcheck()
    {
 $users=DB::select('select * from test');
 print_r($users);
    }
}
