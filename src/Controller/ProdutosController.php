<?php

namespace App\Controller;

class ProdutosController extends AppController{

		public function cadastrar(){

				$nomeDoProduto = '';
				$quantidadeDoProduto = '';
				$valorUnidade = '';
				$marcaDoProduto = '';

				if ($this->request->is('post')) {
						var_dump($this->request->data);
				}

		}

}

?>
