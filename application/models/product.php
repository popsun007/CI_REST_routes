<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Model
{
	function get_all_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}
	function show($id)
	{
		$query = "SELECT * FROM products WHERE id=?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}
	function create($post)
	{
		$query = "INSERT INTO products
			(name, description, price, created_at)
			VALUES (?,?,?,now())";
		$values = array($post['name'], $post['description'], $post['price']);
		return $this->db->query($query, $values);
	}
	function edit($id, $post)
	{
		$query = "UPDATE products
			SET name=?, description=?, price=?
			WHERE id=?";
		$values = array($post['name'], $post['description'], $post['price'], $id);
		return $this->db->query($query, $values);
	}
	function delete($id)
	{
		$query = "DELETE FROM products
				WHERE id=?";
		$value = array($id);
		return $this->db->query($query, $value);
	}
}
?>