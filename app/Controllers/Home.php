<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{	
	#public function buybooks()
	#{
	#	$structure = view('includes/header') . view('pages/buybooks') . view('includes/footer');
	#	return $structure;
	#}
	#public function index()
	#{	
	#	var_dump("home");
	#	$structure = view('includes/header') . view('pages/browse') . view('includes/footer');
	#	return $structure;
	#}
	#
	#public function add()
	#{	
	#	$request = \Config\Services::request();
	#	$data = array(
	#		'nombre'=>$request->getPostGet('nombre'),
	#		'email'=>$request->getPostGet('email'),
	#		'area'=>$request->getPostGet('area'),
	#		'curriculum'=>$request->getPostGet('curriculum'),
	#		'foto' => $this->subirArchivo()
	#	);
#
	#	$userModel = new UserModel($db);
	#	$userModel->insert($data);
	#	$users = array('users'=> $userModel->findAll() );
	#	$structure = view('includes/header') . view('includes/body', $users) . view('includes/footer');
	#	return $structure;
	#}
	#public function update()
	#{	
	#	$request = \Config\Services::request();
	#	$id = $request->getPostGet('id');
	#	$data = array(
	#		'nombre'=>$request->getPostGet('nombre'),
	#		'email'=>$request->getPostGet('email'),
	#		'area'=>$request->getPostGet('area'),
	#		'curriculum'=>$request->getPostGet('curriculum'),
	#		'foto'=>$this->subirArchivo()
	#	);
	#	$userModel = new UserModel($db);
	#	$userModel->update($id, $data);
	#	$users = array('users'=> $userModel->findAll() );
	#	$structure = view('includes/header') . view('includes/body', $users) . view('includes/footer');
	#	return $structure;
	#}
#
	#public function delete()
	#{	
	#	$request = \Config\Services::request();
	#	$id = $request->getPostGet('id');
#
	#	$userModel = new UserModel($db);
	#	$userModel->delete($id);
	#	$users = array('users'=> $userModel->findAll() );
	#	$structure = view('includes/header') . view('includes/body', $users) . view('includes/footer');
	#	return $structure;
	#}
	#//--------------------------------------------------------------------
#
	#function subirArchivo(){
	#	$dir_subida = $_SERVER['DOCUMENT_ROOT'] . "/codeigniter2/public/src/img/";
	#	$fichero_subido = $dir_subida . basename($_FILES['foto']['name']);
	#	return (move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido)) ?  basename($_FILES['foto']['name']) :  '';
	#}
}
