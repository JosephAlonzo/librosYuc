<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends BaseController
{	
    protected $_email;    
    protected $_password; 
    

    public function index(){
        if ($this->login()){
		    return redirect()->to(site_url('/')); 
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Nombre de usuario o contraseña incorrectos.
            </div>';
		    return view('pages/login');
        }
    }

	public function login()
    {   
        $this->session->stop();
        $request = \Config\Services::request();
        if(!empty($request->getPostGet('email')) && !empty($request->getPostGet('password'))){
            
            $this->_email = $request->getPostGet('email');
            $this->_password = $request->getPostGet('password');

            $user = $this->_checkCredentials();
            if ($user) {
                $newdata = [
                    'id' => $user['id'],
                    'login' => true
                ];
                $this->session->set($newdata);
                return true;
            }
        }
        return false;
    }

    protected function _checkCredentials()
    {
        $userModel = new UserModel($db);
		$user = $userModel->where('email', $this->_email)
                          ->first();

        $submitted_pass = sha1($this->_password);
        if (!empty($user)){
            if($user['password'] == $submitted_pass){
                return $user;
            }
        }
        return false;
    }
}
