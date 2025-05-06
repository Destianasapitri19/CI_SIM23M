<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Matakuliah_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['matakuliah'] = $this->Matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['matakuliah'] = $this->Matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/form_matakuliah');
        $this->load->view('templates/footer');
    }

    public function insert(){
        $this->form_validation->set_rules('kode_matakuliah', 'Kode Matakuliah', 'required');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->tambah();
        } else {
            $data = [
                'kode_matakuliah' => $this->input->post('kode_matakuliah'),
                'nama_matakuliah' => $this->input->post('nama_matakuliah'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester'),
                'jenis' => $this->input->post('jenis'),
                'prodi' => $this->input->post('prodi')
            ];

            if ($this->Matakuliah_model->insert_matakuliah($data)) {
                $this->session->set_flashdata('success', 'Matakuliah berhasil disimpan');
            } else {
                $this->session->set_flashdata('error', 'Matakuliah gagal disimpan');
            }

            redirect('matakuliah');
        }
    }

    public function hapus($kode_matakuliah){
        if ($this->Matakuliah_model->delete_matakuliah($kode_matakuliah)) {
            $this->session->set_flashdata('success', 'Matakuliah berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Matakuliah gagal dihapus');
        }
        redirect('matakuliah');
    }

    public function edit($kode_matakuliah){
        $data['matakuliah'] = $this->Matakuliah_model->get_matakuliah_by_id($kode_matakuliah);

        if (!$data['matakuliah']) {
            $this->session->set_flashdata('error', 'Matakuliah tidak ditemukan');
            redirect('matakuliah');
        }

        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function update($kode_matakuliah){
        $this->form_validation->set_rules('kode_matakuliah', 'Kode Matakuliah', 'required');    
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');
        $this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit($kode_matakuliah);
        } else {
            $data = [
                'nama_matakuliah' => $this->input->post('nama_matakuliah'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester'),
                'jenis' => $this->input->post('jenis'),
                'prodi' => $this->input->post('prodi')
            ];

            if ($this->Matakuliah_model->update_matakuliah($kode_matakuliah, $data)) {
                $this->session->set_flashdata('success', 'Matakuliah berhasil diperbarui');
            } else {
                $this->session->set_flashdata('error', 'Matakuliah gagal diperbarui');
            }

            redirect('matakuliah');
        }
    }
}
