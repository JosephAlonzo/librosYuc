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
										->where('id_user', $id)
										->join('books', 'books.id = favourite.id_book')
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }

    public function addToFavourite(){
		$idBook = $this->request->getPostGet('idBook');
		$id = $this->session->get('id');
		
		$data = array(
			'id_user'=>$id,
			'id_book'=>$idBook,
		);
		$this->favouriteModel->insert($data);
		return redirect()->to('/proyectolibreria/index.php/seeBook?idBook='.$idBook); 
    }
    
	public function deleteToFavourite(){
		$idBook = $this->request->getPostGet('idBook');
		$idFavorite = $this->request->getPostGet('idFavourite');
		$this->favouriteModel->delete($idFavorite);
		return redirect()->to('/proyectolibreria/index.php/seeBook?idBook='.$idBook); 
	}

}
