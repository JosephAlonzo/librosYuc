<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends BaseController
{	
    protected $_email;    
    protected $_password; 
    public $users = null;

    public function __construct(){
		$this->userModel = new UserModel($db);
		parent::__construct();
		$this->request = \Config\Services::request();
		$id = $this->session->get('id');
		$login = $this->session->get('login');
		if($login == null or empty($login) ){
			$this->users = [];
		}
		else {
			$this->users = array('users'=> $this->userModel->find($id));
        }
    }

    public function index(){
        
        if ($this->login()){
            
            if(isset($this->users) and !empty($this->users)){
                
                if ( $this->users['users']['tipo'] == '0'){
                    return redirect()->to(site_url('/')); 
                }
                else{
                    return redirect()->to(site_url('/users')); 
                }
            }
            return redirect()->to(site_url('/'));
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Nombre de usuario o contraseña incorrectos.
            </div>';
		    return view('pages/login') . view('includes/footer');
        }
    }
    public function logout()
    {   
        $this->session->destroy();
        return redirect()->to(site_url('/browse')); 
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
    public function show(){
        if(empty($this->users) OR $this->users['users']['tipo'] == '0'){
            return redirect()->to(site_url('/'));
        }
        else{
            $AllUsers = array('users'=> $this->userModel
                                                ->select('id, nombre, apellido, email, tipo, foto')    
                                                ->findAll());
            $structure = view('includes/header',$this->users) . view('pages/userform',$AllUsers) . view('includes/footer');
            return $structure;
            
        }
    }
    public function add(){
        $uri = $this->request->getPostGet('uri');
        $data = array(
			'nombre'=>$this->request->getPostGet('nombre'),
			'apellido'=>$this->request->getPostGet('apellido'),
			'email'=>$this->request->getPostGet('email'),
            'foto' => $this->subirArchivo(),
            'password' => sha1($this->request->getPostGet('password')),
            'tipo'=>$this->request->getPostGet('tipo'),
        );
        $this->userModel->insert($data);
        
        return redirect()->to(site_url('/'.$uri)); 
    }
    public function update(){
        $id = $this->request->getPostGet('id');
        $data = array(
			'nombre'=>$this->request->getPostGet('nombre'),
			'apellido'=>$this->request->getPostGet('apellido'),
			'email'=>$this->request->getPostGet('email'),
            'password' => sha1($this->request->getPostGet('password')),
            'tipo'=>$this->request->getPostGet('tipo'),
        );
        $foto=$this->request->getPostGet('foto');
        if (!empty($foto)){
            $foto = $this->subirArchivo();
            if($foto != ''){
                $data['foto'] = $foto;
            }   
        }
        $this->userModel->update($id, $data);

        return redirect()->to(site_url('/users')); 
    }
    public function delete(){
        $id = $this->request->getPostGet('id');
        $this->userModel->delete($id);

        return redirect()->to(site_url('/users')); 
    }

    function subirArchivo(){
        try{
            $dir_subida = $_SERVER['DOCUMENT_ROOT'] . '/proyectoLibreria/public/src/img/';
            $fichero_subido = $dir_subida . basename($_FILES['foto']['name']);
            $respuesta =  move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido)  ;
            $this->resizeImage($fichero_subido);
            $respuesta = ( $respuesta ) ?  basename($_FILES['foto']['name']) :  ''  ;
        }
        catch(Exception $e){
            $respuesta = '';
        }
		return $respuesta;
    }
    public function resizeImage($ruta){
        $image = \Config\Services::image();
        $image = \Config\Services::image()
        ->withFile($ruta)
        ->resize(300, 300, true, 'height')
        ->save($ruta);
    }

}
