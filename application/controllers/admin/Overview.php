<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin (nama folder pada views)/overview.php (nama file didalam folder)
        $this->load->view("admin/overview");
	}
}