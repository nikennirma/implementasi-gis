<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->library('googlemaps');
    $this->load->model('m_sd');
    
    
}

    public function index()
    {
        $config ['center'] ='-7.696136, 109.028546';
        $config ['zoom']   =14;
        $this->googlemaps->initialize($config);
        //pemetaan......

        $sd=$this->m_sd->lists();
        foreach ($sd as $key => $value) {
            $marker=array();
            $marker['position']="$value->latitude,$value->longitud";
            $marker['animation']="BOUNCE";
            $marker['infowindow_content'] ='<div class="media" style="width:250px;">';
            $marker['infowindow_content'] .='<div class="media-body">';
            $marker['infowindow_content'] .='<h4>Nama SD: '.$value->nama_sd.'</h4>';
            $marker['infowindow_content'] .='<p>No Tlp : '.$value->no_tlp.'<p>';
            $marker['infowindow_content'] .='<p>Alamat : '.$value->alamat.'<p>';
            $marker['infowindow_content'] .='<p>Deskripsi : '.$value->deskripsi.'<p>';
            $marker['infowindow_content'] .='</div>';
            $marker['infowindow_content'] .='</div>';
            
            $this->googlemaps->add_marker($marker);
        }

        //......
        $data = array(
            'title' => 'Pemetaan Sekolah Dasar Cilacap',
            'map' =>$this->googlemaps->create_map(),
            'isi' => 'v_home'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }

}

/* End of file Home.php */
