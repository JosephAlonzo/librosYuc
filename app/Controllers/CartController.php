<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\BookModel;

class CartController extends BaseController
{	
    protected $_email;    
    protected $_password; 
    public $users = null;

    public function __construct(){
		$this->userModel = new UserModel($db);
		$this->bookModel = new BookModel($db);
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
    
    public function show()
	{
        $data = $this->session->get('cart');
        if(!empty($data)){
            $ids = array_column($data, 'idBook'); 
            $data = $this->bookModel->find($ids);
            $books = array('books' => $data, 'cart'=>$this->session->get('cart'));
        }
        else{
            $books = [];
        }
        
        $structure = view('includes/header', $this->users) . view('includes/nav') . view('pages/cart', $books) . view('includes/footer');
		return $structure;
    }
    
    public function add(){
        $idBook = $this->request->getPostGet('idBook');
        $data = $this->session->get('cart');
        $exist = false;
		if(empty($data)){
			$data = [];
        }
        else{
            foreach ($data as $key=>$value){
                if($value['idBook'] == $idBook){
                    $newcantidad = (int)$data[$key]['cantidad'] + 1;
                    $data[$key]['cantidad'] = $newcantidad;
                    $exist = true;
                }
            }
        }
        if(!$exist){
            $row = array('idBook' => $idBook , 'cantidad' => 1);
            array_push( $data, $row);
        }
        
		$this->session->set('cart', $data);
        return redirect()->to(site_url('cart/show'));
    }
    public function delete(){
        $idBook = $this->request->getPostGet('idBook');
        $cantidad = $this->request->getPostGet('cantidad');
        $data = $this->session->get('cart');

		foreach ($data as $key=>$value){
            if($value['idBook'] == $idBook){
                $newcantidad = (int)$data[$key]['cantidad'] - 1;
                if($newcantidad < 1){
                    unset($data[$key]);
                }
                else{
                   $data[$key]['cantidad'] = $newcantidad; 
                }
            }
        }
        
		$this->session->set('cart', $data);
        return redirect()->to(site_url('cart/show'));
    }
}