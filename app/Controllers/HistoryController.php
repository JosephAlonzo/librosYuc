<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\HistoryModel;

class HistoryController extends BaseController
{	
	public $userModel = null;
	public $historyModel = null;

	public function __construct(){
		$this->userModel = new UserModel($db);
		$this->historyModel = new HistoryModel($db);
		$this->request = \Config\Services::request();
	}

    public function history()
	{
		$id = $this->session->get('id');
		$users = array('users'=> $this->userModel->find($id));
        $books = array('books'=> $this->historyModel
                                        ->where('id_user', $id)
										->join('books', 'books.id = history.id_book')
										->find()
					);
        $structure = view('includes/header' ,$users). view('includes/nav')  . view('pages/browse', $books) . view('includes/footer');
		return $structure;
    }
	

}
