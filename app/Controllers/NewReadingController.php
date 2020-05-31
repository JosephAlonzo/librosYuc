<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\NowreadingModel;

class newReadingController extends BaseController
{	
	public $userModel = null;
	public $nowreadingModel = null;

	public function __construct(){
		$this->userModel = new UserModel($db);
		$this->nowreadingModel = new NowreadingModel($db);
		$this->request = \Config\Services::request();
	}

	public function nowReading()
	{
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = array('books'=> $this->nowreadingModel
										->where('id_user', $id)
										->join('books', 'books.id = nowreading.id_book')
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }
    
    public function addToNowReading(){
		$idBook = $this->request->getPostGet('idBook');
		$id = $this->session->get('id');
		
		$data = array(
			'id_user'=>$id,
			'id_book'=>$idBook,
		);
		$this->nowreadingModel->insert($data);
		return redirect()->to( site_url('/seeBook?idBook='.$idBook)); 
    }
    
    public function deleteToNowReading(){
		$idBook = $this->request->getPostGet('idBook');
		$idNowReading = $this->request->getPostGet('idNowReading');
		$this->nowreadingModel->delete($idNowReading);
		return redirect()->to( site_url('/seeBook?idBook='.$idBook)); 
	}

}
