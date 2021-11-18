<?php 

	class Idioma extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function idioma()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = "Idioma";
			$data['page_title'] = "Idioma";
			$data['page_name'] = "idioma";
			$data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
			$this->views->getView($this,"idioma",$data);
		}

	}
 ?>