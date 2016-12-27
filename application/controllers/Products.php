<?php

class Products extends CI_Controller {

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/products/index';
		$config['total_rows'] = $this->db->count_all('products');
		$config['per_page'] = '1';
		$config['cur_tag_open'] = "<a><b>";
		$config['cur_tag_close'] = "</a></b>";
		$config['full_tag_open'] = "<ul class='pagination'><li>";
		$config['full_tag_close'] = "</li></ul>";

		$this->pagination->initialize($config);

		$this->load->model('product_model');
		$data['products'] = $this->product_model->get_all_products($config['per_page'],  $this->uri->segment(3));
		$name = 'products';
		$this->template->page_view($data,$name);
	}
	
}