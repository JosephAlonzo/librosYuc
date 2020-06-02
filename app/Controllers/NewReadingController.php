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
										->select('nowreading.id as nowreading, nombre, foto, autor, books.id, rate')
										->join('books', 'books.id = nowreading.id_book')
										->where('id_user', $id)
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }
    
    public function addToNowReading(){
		$idBook = $this->request->getPostGet('idBook');
		$uri = $this->request->getPostGet('uri');
		$id = $this->session->get('id');
		$data = array(
			'id_user'=>$id,
			'id_book'=>$idBook,
		);
		$this->nowreadingModel->insert($data);
		if($uri == 'seeBook'){
			$redirect = '/seeBook?idBook='.$idBook;
		}
		else{
			$redirect = '/'.$uri;
		}
		return redirect()->to(site_url($redirect));
    }
    
    public function deleteToNowReading(){
		$uri = $this->request->getPostGet('uri');
		$idBook = $this->request->getPostGet('idBook');
		$idNowReading = $this->request->getPostGet('idNowReading');
		$this->nowreadingModel->delete($idNowReading);

		if($uri == 'seeBook')
		{
			$redirect = '/seeBook?idBook='.$idBook;
		}
		else{
			$redirect = '/'.$uri;
		}
		return redirect()->to( site_url($redirect)); 
	}

}
