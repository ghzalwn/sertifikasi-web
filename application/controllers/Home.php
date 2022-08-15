<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$d['page'] = 'dashboard';
		$d['title'] = 'Dashboard';
		$d['jml_tempat_wisata'] = $this->db->count_all_results('tempat_wisata');
		$d['jml_pesan_tiket'] = $this->db->count_all_results('pesan_tiket');
		// var_dump($d);
		// die;
		$this->load->view('home', $d);
	}

	public function tempat_wisata(){
		$d['page'] = 'tempat_wisata';
		$d['title'] = 'Tempat Wisata';
		$d['data'] = $this->db->get('tempat_wisata')->result_array();
		$this->load->view('home', $d);
	}

	public function add_tempat_wisata(){
		$d['page'] = 'add_tempat_wisata';
		$d['title'] = 'Add Tempat Wisata';
		$this->load->view('home', $d);
	}

	public function edit_tempat_wisata($id){
		$d['page'] = 'edit_tempat_wisata';
		$d['title'] = 'Edit Tempat Wisata';
		$d['data'] = $this->db->get_where('tempat_wisata', ['id' => $id])->row_array();
		$this->load->view('home', $d);
	}

	public function submit_tempat_wisata(){
		$data = $this->input->post();
		// var_dump($data);
		// die;
		if(isset($data['id']) && !empty($data['id'])){
			$id = $data['id'];
			unset($data['id']);
			$this->db->where('id', $id);
			$this->db->update('tempat_wisata', $data);
			if($this->db->affected_rows() >=0){
				$this->session->set_flashdata('status', 'success');
				$this->session->set_flashdata('message', 'Saving Data Success');
				redirect('home/tempat_wisata', 'refresh');
			}else{
				$this->session->set_flashdata('status', 'failed');
				$this->session->set_flashdata('message', 'Saving Data Failed');
				redirect(current_url());
			}

		}else{
			$this->db->insert('tempat_wisata',$data);
			$this->session->set_flashdata('status', 'success');
				$this->session->set_flashdata('message', 'Saving Data Success');
			if($this->db->affected_rows() >=0){
				$this->session->set_flashdata('status', 'success');
				$this->session->set_flashdata('message', 'Saving Data Success');
				redirect('home/tempat_wisata', 'refresh');
			}else{
				$this->session->set_flashdata('status', 'failed');
				$this->session->set_flashdata('message', 'Saving Data Failed');
				redirect(current_url());
			}
		}
	}


	public function delete_tempat_wisata($id){
		$this->db->where('id', $id);
		$this->db->delete('tempat_wisata');
		$this->session->set_flashdata('status', 'success');
		$this->session->set_flashdata('message', 'Deleting Data Success');
		redirect('home/tempat_wisata', 'refresh');

	}


	public function pesan_tiket(){
		$d['page'] = 'pesan_tiket';
		$d['title'] = 'Pesan Tiket';
		$d['data_tempat'] = $this->db->get('tempat_wisata')->result_array();
		$this->load->view('home', $d);
	}

	public function data_pesan_tiket(){
		$d['page'] = 'data_pesan_tiket';
		$d['title'] = 'Data Pesan Tiket';

		$d['data'] = $this->db->select('pesan_tiket.*, tempat_wisata.nama_tempat')
			->from('pesan_tiket')->join('tempat_wisata', 'pesan_tiket.id_tempat_wisata = tempat_wisata.id')
			->get()->result_array();

		$this->load->view('home', $d);
	}

	public function edit_pesan_tiket($id){
		$d['page'] = 'edit_pesan_tiket';
		$d['title'] = 'Edit Pesan Tiket';
		$d['data_tempat'] = $this->db->get('tempat_wisata')->result_array();

		$d['data'] = $this->db->get_where('pesan_tiket', ['id' => $id])->row_array();
		$this->load->view('home', $d);
	}

	public function delete_pesan_tiket($id){
		$this->db->where('id', $id);
		$this->db->delete('pesan_tiket');
		$this->session->set_flashdata('status', 'success');
		$this->session->set_flashdata('message', 'Deleting Data Success');
		redirect('home/data_pesan_tiket', 'refresh');
	}


	public function submit_pesan_tiket(){
		$data = $this->input->post();
		if($data['total_bayar'] != ''){
			if(isset($data['id']) && !empty($data['id'])){
				$id = $data['id'];
				unset($data['id']);
				$this->db->where('id', $id);
				$this->db->update('pesan_tiket', $data);
				if($this->db->affected_rows() >=0){
					$this->session->set_flashdata('status', 'success');
					$this->session->set_flashdata('message', 'Saving Data Success');
					redirect('home/data_pesan_tiket', 'refresh');
				}else{
					$this->session->set_flashdata('status', 'failed');
					$this->session->set_flashdata('message', 'Saving Data Failed');
					redirect(current_url());
				}
	
			}else{
				$this->db->insert('pesan_tiket',$data);
				$this->session->set_flashdata('status', 'success');
					$this->session->set_flashdata('message', 'Saving Data Success');
				if($this->db->affected_rows() >=0){
					$this->session->set_flashdata('status', 'success');
					$this->session->set_flashdata('message', 'Saving Data Success');
					redirect('home/data_pesan_tiket', 'refresh');
				}else{
					$this->session->set_flashdata('status', 'failed');
					$this->session->set_flashdata('message', 'Saving Data Failed');
					redirect(current_url());
				}
			}
		}else{
			$this->session->set_flashdata('status', 'failed');
			$this->session->set_flashdata('message', 'Tolong klik hitung total bayar terlebih dahulu');
			redirect('home/data_pesan_tiket', 'refresh');
		}
		
	}



}
