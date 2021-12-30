<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sd extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_sd');
    }

    public function index()
    {

        $data = array(
            'title' => 'Data Sekolah Dasar Cilacap',
            'map' => $this->googlemaps->create_map(),
            'sd' => $this->m_sd->lists(),
            'isi' => 'sd/v_lists'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }
    public function input()
    {
        //$this->user_login->cek_login();
        //memunculkan peta
        $config['center'] = '-7.696136, 109.028546';
        $config['zoom']   = 14;
        $this->googlemaps->initialize($config);
        //.......................end
        $marker['position']   = '-7.696136, 109.028546';
        $marker['draggable']  = true;
        $marker['ondragend'] = 'setToForm(event.latLng.lat(),event.latLng.lng())';
        $this->googlemaps->add_marker($marker);
        //........................
        $this->form_validation->set_rules('nama_sd', 'Nama Sekolah Dasar', 'required');
        $this->form_validation->set_rules('no_tlp', 'No Telpone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitud', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Sekolah Dasar Cilacap',
                'map' => $this->googlemaps->create_map(),
                'isi' => 'sd/v_add'
            );
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_sd' => $this->input->post('nama_sd'),
                'no_tlp' => $this->input->post('no_tlp'),
                'alamat' => $this->input->post('alamat'),
                'latitude' => $this->input->post('latitude'),
                'longitud' => $this->input->post('longitud'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_sd->input($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');



            redirect('sd');
        }
    }

    public function edit($id_sd)
    {
        //$this->user_login->cek_login();
        //memunculkan peta
        $config['center'] = '-7.696136, 109.028546';
        $config['zoom']   = 14;
        $this->googlemaps->initialize($config);
        //.......................end
        $marker['position']   = '-7.696136, 109.028546';
        $marker['draggable']  = true;
        $marker['ondragend'] = 'setToForm(event.latLng.lat(),event.latLng.lng())';
        $this->googlemaps->add_marker($marker);
        //........................
        $this->form_validation->set_rules('nama_sd', 'Nama Sekolah Dasar', 'required');
        $this->form_validation->set_rules('no_tlp', 'No Telpone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitud', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Sekolah Dasar Cilacap',
                'map' => $this->googlemaps->create_map(),
                'sd' => $this->m_sd->detail($id_sd),
                'isi' => 'sd/v_edit'
            );
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_sd' => $id_sd,
                'nama_sd' => $this->input->post('nama_sd'),
                'no_tlp' => $this->input->post('no_tlp'),
                'alamat' => $this->input->post('alamat'),
                'latitude' => $this->input->post('latitude'),
                'longitud' => $this->input->post('longitud'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_sd->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
            redirect('sd');
        }
    }

    public function delete($id_sd)
    {
        //$this->user_login->cek_login();
        $data = array('id_sd' => $id_sd);
        $this->m_sd->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('sd');
    }
}

/* End of file Sd.php */
