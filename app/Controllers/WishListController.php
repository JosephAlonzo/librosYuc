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
										->select('wishlist.id as wishlist, nombre, foto, autor, books.id, rate')
										->where('id_user', $id)
										->join('books', 'books.id = wishlist.id_book')
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }

    public function addToWishlist(){
		$uri = $this->request->getPostGet('uri');
		$idBook = $this->request->getPostGet('idBook');
		$id = $this->session->get('id');
		
		$data = array(
			'id_user'=>$id,
			'id_book'=>$idBook,
		);
		$this->wishlistModel->insert($data);
		if($uri == 'seeBook'){
			$redirect = '/seeBook?idBook='.$idBook;
		}
		else{
			$redirect = '/'.$uri;
		}
		return redirect()->to( site_url($redirect));
	}
	
	public function deleteToWishlist(){
		$uri = $this->request->getPostGet('uri');
		$idBook = $this->request->getPostGet('idBook');
		$idWishlist = $this->request->getPostGet('idWishlist');
		$this->wishlistModel->delete($idWishlist);

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
