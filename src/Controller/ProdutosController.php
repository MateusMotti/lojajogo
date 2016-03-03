<?php

namespace App\Controller;

class ProdutosController extends AppController{

		public function index(){
					$produtos = $this->Produtos->fin('all');
					$this-set(compact('produtos'));
		}

		public function view($id = null){
			$produto = $this->Produtos->get($id);
			$this->set(compact('produto'));
		}

}

?>
