<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\WishlistModel;

class WishListController extends BaseController
{	
    public $userModel = null;
    public $wishlistModel = null;
    
    public function __construct(){
		$this->userModel = new UserModel($db);
		$this->wishlistModel = new WishlistModel($db);
		$this->request = \Config\Services::request();
    }
    
    public function wishList()
	{
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = array('books'=> $this->wishlistModel
										->where('id_user', $id)
										->join('books', 'books.id = wishlist.id_book')
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }

    public function addToWishlist(){
		$idBook = $this->request->getPostGet('idBook');
		$id = $this->session->get('id');
		
		$data = array(
			'id_user'=>$id,
			'id_book'=>$idBook,
		);
		$this->wishlistModel->insert($data);
		return redirect()->to('/proyectolibreria/index.php/seeBook?idBook='.$idBook); 
	}
	
	public function deleteToWishlist(){
		$idBook = $this->request->getPostGet('idBook');
		$idWishlist = $this->request->getPostGet('idWishlist');
		$this->wishlistModel->delete($idWishlist);
		return redirect()->to('/proyectolibreria/index.php/seeBook?idBook='.$idBook); 
	}
}
