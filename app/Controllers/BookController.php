<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\BookModel;
use App\Models\WishlistModel;
use App\Models\FavouriteModel;
use App\Models\NowreadingModel;
use App\Models\HistoryModel;

class BookController extends BaseController
{
	public $userModel = null;
	public $bookModel = null;
	public $nowreadingModel = null;
	public $wishlistModel   = null;
	public $favouriteModel  = null;
	public $historyModel    = null;
	public $request = null;
	
	public function __construct(){
		$this->userModel = new UserModel($db);
		$this->bookModel = new BookModel($db);
		$this->nowreadingModel = new NowreadingModel($db);
		$this->wishlistModel = new WishlistModel($db);
		$this->favouriteModel = new FavouriteModel($db);
		$this->historyModel = new HistoryModel($db);
		$this->request = \Config\Services::request();
	}
	public function index()
	{	
		$id = $this->session->get('id');
		$login = $this->session->get('login');
		if($login == null or empty($login) ){
			$users = [];
		}
		else {
			$users = array('users'=> $this->userModel->find($id));
		}
		
		$books = array('books'=> $this->bookModel->findAll());

		
		$structure = view('includes/header',$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}
	public function buybooks()
	{
		$structure = view('includes/header') . view('includes/nav') . view('pages/buybooks') . view('includes/footer');
		return $structure;
    }
    public function cart()
	{
        $structure = view('includes/header') . view('pages/cart') . view('includes/footer');
		return $structure;
	}

	
	public function allBooks()
	{	
		$id = $this->session->get('id');

		$users = array('users'=> $this->userModel->find($id));
		$books = array('books'=> $this->bookModel->findAll());
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function mostRecent()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->orderBy('added_at', 'ASC')
				->findAll();
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function mostPopular()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->orderBy('rate', 'DESC')
				->findAll();
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function mostRead()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$nowreading = $this->nowreadingModel
							->select( '* , count(id_book) as count ')
							->join('books', 'books.id = nowreading.id_book')
							->groupBy("id_book")
							->findAll(10);
		$books = array('books'=> $nowreading);
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function bestOfList()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->orderBy('rate', 'DESC')
				->findAll(10);
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function novels()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->like('genero', 'novela')
				->findAll();
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function nonFiction()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->notLike('genero', 'ficcion')
				->findAll();
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function freeBooks()
	{	
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->where('precio', 0)
				->findAll();
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function searchBooks()
	{	
		$search = $this->request->getPostGet('search');

		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
		$books = $this->bookModel
				->like('nombre', $search)
				->findAll();
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function seeBook(){
		$idBook = $this->request->getPostGet('idBook');
		$id = $this->session->get('id');
		$nowreading = $this->nowreadingModel
							->where('id_user', $id)
							->where('id_book', $idBook)
							->find();
		$wishlist = $this->wishlistModel
							->where('id_user', $id)
							->where('id_book', $idBook)
							->find();
		$favourite = $this->favouriteModel
							->where('id_user', $id)
							->where('id_book', $idBook)
							->find();
		$this->addHistory($id, $idBook);
		$nowreading = ($nowreading)? $nowreading[0] : FALSE;
		$wishlist = ($wishlist)? $wishlist[0] : FALSE;
		$favourite = ($favourite)? $favourite[0] : FALSE;

		$users = array('users'=> $this->userModel->find($id) );
		$books = array('books'=> $this->bookModel->find($idBook), 'nowreading' => $nowreading, 'wishlist' => $wishlist, 'favourite' => $favourite);
		
		$structure = view('includes/header',$users) . view('includes/nav') . view('pages/buybooks', $books) . view('includes/footer');
		return $structure;
	}

	public function addHistory($idUser, $idBook){
		$history = $this->historyModel
						->where('id_user', $idUser)
						->where('id_book', $idBook)
						->find();
		$history = ($history)? $history[0] : FALSE;
		
		if($history){
			$data = array(
			'id' => $history['id'],
			'id_user'=>$idUser,
			'id_book'=>$idBook,
			);
		}
		else {
			$data = array(
				'id_user'=>$idUser,
				'id_book'=>$idBook,
			);
		}
		$this->historyModel->save($data);
	}
	
	
}
