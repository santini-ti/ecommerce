<?php

namespace Hcode;

class PageAdmin extends Page {
	
	public function __construct($opts = array(), $tpl_dir="/views/admin/") {
		
		// Executa implementação do pai
		parent::__construct($opts, $tpl_dir);

	}
}

?>