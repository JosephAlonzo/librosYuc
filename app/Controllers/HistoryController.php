<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\HistoryModel;
use App\Models\WishlistModel;
use App\Models\FavouriteModel;
use App\Models\NowreadingModel;

class HistoryController extends BaseController
{	
	public $userModel = null;
	public $historyModel = null;
	public $nowreading = null;
	public $wishlist = null;
	public $favourite = null;

	public function __construct(){
		$this->userModel = new UserModel($db);
		$this->historyModel = new HistoryModel($db);
		$this->request = \Config\Services::request();
		$this->nowreadingModel = new NowreadingModel($db);
		$this->wishlistModel = new WishlistModel($db);
		$this->favouriteModel = new FavouriteModel($db);
		parent::__construct();
		$id = $this->session->get('id');
		$login = $this->session->get('login');
		if($login == null or empty($login) ){
			$this->users = [];
		}
		else {
			$this->users = array('users'=> $this->userModel->find($id));
			$this->nowreading = $this->nowreadingModel
				->select('id_book, nowreading.id')
				->join('books', 'books.id = nowreading.id_book' )
				->where('id_user',$this->users['users']['id'])
				->find();
			$this->wishlist = $this->wishlistModel
				->select('id_book, wishlist.id')
				->join('books', 'books.id = wishlist.id_book' )
				->where('id_user',$this->users['users']['id'])
				->find();
			$this->favourite = $this->favouriteModel
				->select('id_book, favourite.id')
				->join('books', 'books.id = favourite.id_book' )
				->where('id_user',$this->users['users']['id'])
				->find();
		}
	}

    public function history()
	{
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
        $books = $this->historyModel
						->where('id_user', $id)
						->join('books', 'books.id = history.id_book')
						->orderby('updated_at', 'DESC')
						->find();
	
		$books = $this->addlists($books);
		$books = array('books'=> $books);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}
	
	public function addlists($books){
		foreach ($books as $key => $book){
			foreach ($this->nowreading as $value){
				($value['id_book'] == $book['id'])? $books[$key]['nowreading'] = $value['id'] : '';
			}
			foreach ($this->wishlist as $value){
				($value['id_book'] == $book['id'])?	$books[$key]['wishlist'] = $value['id'] : '';
			}
			foreach ($this->favourite as $value){
				($value['id_book'] == $book['id'])? $books[$key]['favorite'] = $value['id'] : '';
			}
		}
		return $books;
	}

}
