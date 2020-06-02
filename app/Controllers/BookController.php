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
	public $nowreading = null;
	public $wishlist = null;
	public $favourite = null;
	public $historyModel    = null;
	public $request = null;
	public $users = [];
	public $books = null;
	
	public function __construct(){
		$this->userModel = new UserModel($db);
		$this->bookModel = new BookModel($db);
		$this->nowreadingModel = new NowreadingModel($db);
		$this->wishlistModel = new WishlistModel($db);
		$this->favouriteModel = new FavouriteModel($db);
		$this->historyModel = new HistoryModel($db);
		$this->books = $this->bookModel->findAll();	
		parent::__construct();
		$this->request = \Config\Services::request();
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
			foreach ($this->books as $key => $book){
				foreach ($this->nowreading as $value){
					($value['id_book'] == $book['id'])? $this->books[$key]['nowreading'] = $value['id'] : '';
				}
				foreach ($this->wishlist as $value){
					($value['id_book'] == $book['id'])?	$this->books[$key]['wishlist'] = $value['id'] : '';
				}
				foreach ($this->favourite as $value){
					($value['id_book'] == $book['id'])? $this->books[$key]['favorite'] = $value['id'] : '';
				}
			}
		
		}
	}
	public function index()
	{	
		if(isset($this->users) and !empty($this->users)){
			if($this->users['users']['tipo'] == 1){
			return redirect()->to(site_url('/users')); 
			}
		}
		$books = array('books'=> $this->books);	
		$structure = view('includes/header',$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}
	public function buybooks()
	{
		$structure = view('includes/header') . view('includes/nav') . view('pages/buybooks') . view('includes/footer');
		return $structure;
    }
   
	
	public function allBooks()
	{	
		$books = array('books'=> $this->books);	
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
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
	public function mostRecent()
	{	
		$books = $this->bookModel
				->orderBy('added_at', 'ASC')
				->findAll();
		
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function mostPopular()
	{	
		$books = $this->bookModel
				->orderBy('rate', 'DESC')
				->findAll();
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function mostRead()
	{	
		$books = $this->nowreadingModel
							->select( '* , count(id_book) as count ')
							->join('books', 'books.id = nowreading.id_book')
							->groupBy("id_book")
							->findAll(10);
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function bestOfList()
	{	
		$books = $this->bookModel
				->orderBy('rate', 'DESC')
				->findAll(10);
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function novels()
	{	
		$books = $this->bookModel
				->like('genero', 'novela')
				->findAll();
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function nonFiction()
	{	
		$books = $this->bookModel
				->notLike('genero', 'ficcion')
				->findAll();
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function freeBooks()
	{			
		$books = $this->bookModel
				->where('precio', 0)
				->findAll();
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
	}

	public function searchBooks()
	{	
		$search = $this->request->getPostGet('search');
		$books = $this->bookModel
				->like('nombre', $search)
				->findAll();
		if(!empty($this->users)){
			$books = $this->addlists($books);
		}
		$books = array('books'=> $books);
		
		$structure = view('includes/header' ,$this->users) . view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
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
		if($id != null){
			$this->addHistory($id, $idBook);
		}
		$nowreading = ($nowreading)? $nowreading[0] : FALSE;
		$wishlist = ($wishlist)? $wishlist[0] : FALSE;
		$favourite = ($favourite)? $favourite[0] : FALSE;
		
		$books = array('books'=> $this->bookModel->find($idBook), 'nowreading' => $nowreading, 'wishlist' => $wishlist, 'favourite' => $favourite);
		
		$structure = view('includes/header',$this->users) . view('includes/nav') . view('pages/buybooks', $books) . view('includes/footer');
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

	
	public function show(){
        if(empty($this->users)){
            return redirect()->to(site_url('/'));
		}
        if($this->users['users']['tipo'] == '0'){
            return redirect()->to(site_url('/'));
        }
        else{
            $Allbooks = array('books'=> $this->bookModel
                                                ->select('id, nombre, autor,  genero, rate , descripcion, precio, foto')    
                                                ->findAll());
            $structure = view('includes/header',$this->users) . view('pages/bookform',$Allbooks) . view('includes/footer');
            return $structure;
        }
    }
    public function add(){
        $data = array(
			'nombre'=>$this->request->getPostGet('nombre'),
			'autor'=>$this->request->getPostGet('autor'),
			'genero'=>$this->request->getPostGet('genero'),
			'rate'=>$this->request->getPostGet('rate'),
			'descripcion'=>$this->request->getPostGet('descripcion'),
			'precio'=>$this->request->getPostGet('precio'),
            'foto' => $this->subirArchivo(),
		);
        $this->bookModel->insert($data);
        
        return redirect()->to(site_url('/books')); 
    }
    public function update(){
        $id = $this->request->getPostGet('id');
        $data = array(
			'nombre'=>$this->request->getPostGet('nombre'),
			'autor'=>$this->request->getPostGet('autor'),
			'genero'=>$this->request->getPostGet('genero'),
			'rate'=>$this->request->getPostGet('rate'),
			'descripcion'=>$this->request->getPostGet('descripcion'),
			'precio'=>$this->request->getPostGet('precio')
        );
        $foto = $this->subirArchivo();
        if($foto != ''){
            $data['foto'] = $foto;
        }
        $this->bookModel->update($id, $data);

        return redirect()->to(site_url('/books')); 
    }
    public function delete(){
        $id = $this->request->getPostGet('id');
        $this->bookModel->delete($id);

        return redirect()->to(site_url('/books')); 
    }

    function subirArchivo(){
        try{
		$dir_subida = $_SERVER['DOCUMENT_ROOT'] . '/proyectolibreria/public/src/img/';
        $fichero_subido = $dir_subida . basename($_FILES['foto']['name']);
        $respuesta =  move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido)  ;
        $this->resizeImage($fichero_subido);
        $respuesta = ( $respuesta ) ?  basename($_FILES['foto']['name']) :  '';
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
        ->resize(350, 300, true, 'height')
        ->save($ruta);
    }
}