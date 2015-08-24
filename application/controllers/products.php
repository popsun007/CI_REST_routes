<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
		$products = $this->product->get_all_products();
		$this->load->view('products/index', array('products' => $products));
	}
	public function show($id)
	{
		$product_infos = $this->product->show($id);
		$this->load->view('products/show', array('id' => $product_infos['id'], 'name' => $product_infos['name'], 'description' => $product_infos['description'], 'price' => $product_infos['price'], 'sell_since' => $product_infos['created_at']));
	}
	public function edit($id)
	{
		$product_infos = $this->product->show($id);
		$this->load->view('products/edit', array('id' => $product_infos['id'], 'name' => $product_infos['name'], 'description' => $product_infos['description'], 'price' => $product_infos['price'], 'sell_since' => $product_infos['created_at']));
	}
	public function create()
	{
		$this->load->view('products/new');
	}
	public function add()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Product Name", "trim|required");
		$this->form_validation->set_rules("price", "Price", "required|decimal");
		if($this->form_validation->run() === TRUE){
			$this->product->create($this->input->post());
			$this->session->set_flashdata('message', 'Product is added successfully!');
		}
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/products/create');
		}
		redirect('/products/index');
	}
	public function update($id)
	{
		$this->product->edit($id, $this->input->post());
		redirect('/products/index');
	}
	public function delete($id)
	{
		$this->product->delete($id);
		$this->session->set_flashdata('message', "Product is deleted successfully!");
		redirect('/products/index');
	}
}

?>