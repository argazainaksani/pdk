<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$data['penduduk']=$this->M_penduduk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_pdk',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
	
  $nik=$this->input->post('nik');
  $nama=$this->input->post('nama');
  $alamat=$this->input->post('alamat');
  $data = array(  'nik' =>$nik ,
                   'nama' =>$nama ,
				   'alamat' =>$alamat ,
	            );

		$this->M_penduduk->input_data($data);
		redirect('admin/index');		
	}

	public function hapus($id) {

		$where = array('id' => $id , );
		$this->M_penduduk->hapus_data($where,'tb_pdk');
		redirect('admin/index');
	}

	public function edit($id) {

		$where = array('id' => $id , );
		$data['penduduk']=$this->M_penduduk->edit_data($where,'tb_pdk');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('templates/footer');
	}

	public function update(){

        $id=$this->input->post('id');
		$nik=$this->input->post('nik');
  $nama=$this->input->post('nama');
  $alamat=$this->input->post('alamat');
  $data = array(  'nik' =>$nik ,
                   'nama' =>$nama ,
				   'alamat' =>$alamat ,
	            );
$where = array('id' =>$id , );
		$this->M_penduduk->update_data($where,$data,'tb_pdk');
		redirect('admin/index');
	}

	public function print() {
 
		$data['penduduk']=$this->M_penduduk->tampil_data()->result();
		$this->load->view('print_penduduk',$data);

	}
	
}
