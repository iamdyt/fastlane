<?php 

    namespace App\Repository;
    use App\Models\User;

    class UserRepository {
        
        public function getAuthPage(){
            return view('auth');
        }

        public function authenticateUser($email, $password){
            if (!auth()->attempt(['email'=>$email, 'password'=>$password])){
                return "nothing found";
            } 
            return "userfound";
        }

    }


?>