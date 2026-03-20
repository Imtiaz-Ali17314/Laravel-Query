<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
        //  Get Data From DataBase and Show it
    public function showUsers(){
        $users = DB::table('users')->paginate(4);

        // return $users;

        return view('allUsers' , ['data' => $users]);
    }

    public function singleUser(string $id){
         $user = DB::table('users')->where('id' , $id)->get();
    
         return view('user' , ['data' => $user]);
    }

        //  Insert Data Into DataBase
    public function insertUser(UserRequest $req){

        // return $req->all();
        // return $req->only(['username' , 'usercity']);
        // return $req->except(['userage' , 'usercity']);
        
        
        $users = DB::table('users')
                    ->insert([
                        'name' => $req -> username,
                        'age' =>  $req -> userage,
                        'email' =>  $req -> useremail,
                        'city' =>  $req -> usercity
                    ],
                );

       if($users){
            return redirect()->route('home');
            //   echo "<h2>Data Insert Successfully!</h2>";
       }
       else{
         echo "<h2>Emial already exists</h2>";
       }
    }

    public function updatePage(string $id){
        $user = DB::table('users')->find($id);
        return view('/updateUser' , ['Data' => $user]);
    }

    public function updateUser(request $req , $id){
        $users = DB::table('users')
                    ->where ('id' ,'=' , $id)
                    ->update([
                        'name' => $req -> username,
                        'age' =>  $req -> userage,
                        'email' =>  $req -> useremail,
                        'city' =>  $req -> usercity
                    ]
                  
                );

       if($users){
         return redirect()->route('home');
        // echo "<h2>Data Update Successfully!</h2>";
       }
       else{
         echo "<h2>Data not Updated</h2>";
       }
    }

        //  Delete Data From DataBase
    public function deleteUser(string $id){
        $users = DB::table('users')
                    ->where ('id' ,'=' , $id)
                    ->delete();


        if($users){
            return redirect()->route('home');
        }

       

    }
}
