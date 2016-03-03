<?php

  namespace App\Model\Table;

  use Cake\ORM\Table;

  class ProdutosTable extends table {

      public function initialize(array $config){
            $this->addBehavior('Timestamp');
      }

  }

?>
