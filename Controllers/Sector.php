<?php 

	class Sector extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function sector()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Sector";
			$data['page_title'] = "Sector";
			$data['page_name'] = "Sector";
			$data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
			$this->views->getView($this,"sector",$data);
		}

	}
 ?>