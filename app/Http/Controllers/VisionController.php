<?php
namespace App\Http\Controllers;
use App\Models\User;
use DB;
use Session;
use Illuminate\Validation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Views;
use Input;
use GuzzleHttp\Client;
 class VisionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function electricity()
    {
      if(\Auth::check())
      {
        $result=DB::table('electricity')->where('adhaar',Session::get('adhaar'))->get();
        $i=0;
        foreach($result as $r)
        {
          $result[$i]=(array)$r;
          $i++;
          }
          //dd($result);
           return \View::make('elect',['response'=> $result]);
      }
      else
      {
        return Redirect::to('login');
      }
    }
    public function water()
    {
      if(\Auth::check())
      {
        $result=DB::table('water')->where('adhaar',Session::get('adhaar'))->get();
        $i=0;
        foreach($result as $r)
        {
          $result[$i]=(array)$r;
          $i++;
          }
          //dd($result);
           return \View::make('water',['response'=> $result]);
      }
      else
      {
        return Redirect::to('login');
      }
    }
    public function house()
    {
      if(\Auth::check())
      {
        $result=DB::table('house')->where('adhaar',Session::get('adhaar'))->get();
        $i=0;
        foreach($result as $r)
        {
          $result[$i]=(array)$r;
          $i++;
          }
          //dd($result);
           return \View::make('house',['response'=> $result]);
      }
      else
      {
        return Redirect::to('login');
      }
    }
}
