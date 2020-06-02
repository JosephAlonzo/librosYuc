<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\FavouriteModel;

class FavouriteController extends BaseController
{	
    public $userModel = null;
    public $favouriteModel = null;

    public function __construct(){
		$this->userModel = new UserModel($db);
		$this->favouriteModel = new FavouriteModel($db);
		$this->request = \Config\Services::request();
	}
    public function favourite()
	{
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = array('books'=> $this->favouriteModel
										->select('favourite.id as favorite, nombre, foto, autor, books.id, rate')
										->where('id_user', $id)
										->join('books', 'books.id = favourite.id_book')
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }

    public function addToFavourite(){
		$uri = $this->request->getPostGet('uri');
		$idBook = $this->request->getPostGet('idBook');
		$id = $this->session->get('id');
		
		$data = array(
			'id_user'=>$id,
			'id_book'=>$idBook,
		);
		$this->favouriteModel->insert($data);
		if($uri == 'seeBook'){
			$redirect = '/seeBook?idBook='.$idBook;
		}
		else{
			$redirect = '/'.$uri;
		}
		return redirect()->to( site_url($redirect));
    }
    
	public function deleteToFavourite(){
		$uri = $this->request->getPostGet('uri');
		$idBook = $this->request->getPostGet('idBook');
		$idFavorite = $this->request->getPostGet('idFavourite');
		$this->favouriteModel->delete($idFavorite);
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
