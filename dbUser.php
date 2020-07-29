<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class User1 extends Controller
{
    //
    function dbcheck()
    {
  return $users=DB::table('project_data')
  ->where('name','sam')
  -> update([
      'email'=>'sam@test.com'
      
  ]);
 print_r($users);
    }
}
