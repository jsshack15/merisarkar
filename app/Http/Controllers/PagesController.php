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
 class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
      return \View::make('index');
    }
    public function login()
    {
      return \View::make('login');
    }
    public function info()
    {
      return \View::make('info');
    }
    public function rail()
    {
      return \View::make('rail');
    }
     public function tour()
    {
      return \View::make('tour');
    }
    public function inst()
    {
      return \View::make('inst');
    }
 public function whole()
    {
      return \View::make('whole');
    }
public function pin()
    {
      return \View::make('pin');
    }

    public function search()
    {
        $search=Input::get('obj');
          $client = new Client(['base_uri' => 'https://data.gov.in/api/datastore/']);
          $category=Input::get('category');
          $response = $client->request('GET', 'resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters['.$category.']='.$search);
      //dd($category);
      $body=json_decode($response->getBody(),true);
      $res=$body["records"];
        return \View::make('result',['response'=> $res]);
     //   https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters[state]=%22maharashtra%22
         // return Redirect::to('https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30');
      //return https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30;
    }

    public function search_rail()
    {
        $search=Input::get('obj');
          $client = new Client(['base_uri' => 'https://data.gov.in/api/datastore/']);
          
          $response = $client->request('GET', 'resource.json?resource_id=b46200c1-ca9a-4bbe-92f8-b5039cc25a12&api-key=f679eef3a738730ea25505cec1a62c30');
      
      $body=json_decode($response->getBody(),true);
      $res=$body["records"];
     //$result=$res[0]["Train No."];    //"'00851'"
     //$result1=substr($result,1,-1);
   //   $i=0;
     $result=array();

      foreach($res as $r)
      {
        if(substr($r["Train No."],1,-1)==strval($search))
        {
       //  dd("yes");
          $result=$result+$r;
        }
      }
  //var_dump($result);
   // dd($result["train Name"]);
       return \View::make('railway',['name'=> $result["train Name"],'deptime'=>$result["Departure time"],'sname'=>$result["source Station Name"],'atime'=>$result["Arrival time"],'dname'=> $result["Destination Station Name"]]);
     //   https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters[state]=%22maharashtra%22
         // return Redirect::to('https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30');
      //return https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30;
    }
        public function tourist()
    {
        $search=Input::get('obj');
          $client = new Client(['base_uri' => 'https://data.gov.in/api/datastore/']);
          $response = $client->request('GET', 'resource.json?resource_id=6911b243-d924-404d-a587-7717bd7c7eb9&api-key=f679eef3a738730ea25505cec1a62c30&filters[year]='.$search);
      
      $body=json_decode($response->getBody(),true);
      $res=$body["records"];
     
      //dd($body);
        return \View::make('tourists',['response'=> $res]);
     //   https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters[state]=%22maharashtra%22
         // return Redirect::to('https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30');
      //return https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30;
    }
    public function institution()
    {
        $search=Input::get('obj');
          $category=Input::get('category');
         
          $client = new Client(['base_uri' => 'https://data.gov.in/api/datastore/']);
          $response = $client->request('GET', 'resource.json?resource_id=ff965d59-cd5d-4e1e-83f2-cf65fbeb85d7&api-key=f679eef3a738730ea25505cec1a62c30');
      
      $body=json_decode($response->getBody(),true);
      $res=$body["records"];
     
      //dd($category);
      $result=array();

      foreach($res as $r)
      {
        if(substr($r[$category],1,-1)==strval($search))
        {
       //  dd("yes");
          $result=$result+$r;
        }
      }
     // dd($result);
       return \View::make('result',['response'=> $result]);
     //   https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters[state]=%22maharashtra%22
         // return Redirect::to('https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30');
      //return https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30;
    }
public function wholesale()
    {
        $search=Input::get('obj');
          $client = new Client(['base_uri' => 'https://data.gov.in/api/datastore/']);
          $category=Input::get('category');
          $response = $client->request('GET', 'resource.json?resource_id=d1c6eebd-94e0-4d20-b129-7dd893dc474b&api-key=f679eef3a738730ea25505cec1a62c30&filters[centre]='.$search);
      
      $body=json_decode($response->getBody(),true);
      $res=$body["records"];
     
      //dd($body);
        return \View::make('wholesale',['response'=> $res]);
     //   https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters[state]=%22maharashtra%22
         // return Redirect::to('https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30');
      //return https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30;
    }

public function pincode()
    {
        $search=Input::get('obj');
          $client = new Client(['base_uri' => 'https://data.gov.in/api/datastore/']);
          $category=Input::get('category');
          $response = $client->request('GET', 'resource.json?resource_id=0a076478-3fd3-4e2c-b2d2-581876f56d77&api-key=f679eef3a738730ea25505cec1a62c30&filters['.$category.']='.$search);
      //dd($category);
      
      $body=json_decode($response->getBody(),true);
      $res=$body["records"];
     
    //dd($res);
        return \View::make('pincode',['response'=> $res]);
     //   https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30&filters[state]=%22maharashtra%22
         // return Redirect::to('https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30');
      //return https://data.gov.in/api/datastore/resource.json?resource_id=e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9&api-key=f679eef3a738730ea25505cec1a62c30;
    }
    public function log()
    {
      $user=array(
        "email"=>Input::get('email'),
        "adhaar"=>Input::get('adhaar'),
        "password"=>Input::get('password')
        );
      if(\Auth::attempt($user))
    {
      Session::put('email', $user['email']);
     $name=DB::table('users')->where('adhaar',$user['adhaar'])->pluck('name');
      Session::put('name', $name);
      Session::put('adhaar', $user['adhaar']);


      return Redirect::to('/');
    }
    else
    {
      return Redirect::to('login')->withInput();

    }

    }
    public function logout()
  {
    if(\Auth::check())
    {
      \Auth::logout();
      Session::forget('name');
      Session::forget('email');
      Session::forget('adhaar');

      return Redirect::to('/'); 
    }
    else
    {
      return Redirect::to('login'); 
    }
  }

}
