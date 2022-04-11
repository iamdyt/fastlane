<?php 

    namespace App\Repository;

use App\Models\Cinema;

    class UserRepository {
        
        public function getAuthPage(){
            return view('auth');
        }

        public function authenticateUser($email, $password){
            if (!auth()->attempt(['email'=>$email, 'password'=>$password])){
                return response()->json(['status'=>404, 'error'=> 'User not found']);
            } 
            return response()->json(['status'=>200]);
        }

        public function getDashboard(){
            $cinema = Cinema::all();
            return view ('dashboard', compact('cinema'));
        }

    }


?>