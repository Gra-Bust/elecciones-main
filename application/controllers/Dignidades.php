<?php
class Dignidades extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dignidad');
    }

    public function ingresar()
    {
        $this->load->view('header');
        $this->load->view('dignidades/ingresar');
        $this->load->view('footer');
    }

    public function listar()
    {
        $datos['dignidades'] = $this->Dignidad->obtener();
        $this->load->view('header');
        $this->load->view('dignidades/listar', $datos);
        $this->load->view('footer');
    }

    public function guardaDig()
    {
        $datosNuevaDig = array(
            "nom_can" => $this->input->post('nom_can'),
            "ape_can" => $this->input->post('ape_can'),
            "mov_can" => $this->input->post('mov_can'),
            "edad_can" => $this->input->post('edad_can'),
            "regi_can" => $this->input->post('regi_can'),
            "lati_can" => $this->input->post('lati_can'),
            "longi_can" => $this->input->post('longi_can'),
            "dignidad_can" => $this->input->post('dignidad_can'),
            "idiolo_can" => $this->input->post('idiolo_can')
        );
        if ($this->Dignidad->insertar($datosNuevaDig)) {
            redirect('dignidades/listar');
        } else {
            echo "<h1>ERROR AL INSERTAR</h1>";
        }
    }

    public function eliminaDig($id_can)
    {
        if ($this->Dignidad->borrar($id_can)) {
            redirect('dignidades/listar');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }

    public function locaGene()
	{
		$mapas["candidatos"]=$this->Dignidad->obtenerGene();
        $this->load->view('header');
		$this->load->view('dignidades/locaGene', $mapas);
        $this->load->view('footer');
	}

    public function locaPre()
    {
        $mapaPre["candiPre"]=$this->Dignidad->obtenerPre();
        $this->load->view('header');
        $this->load->view('dignidades/locaPre', $mapaPre);
        $this->load->view('footer');
    }

    public function locaAsaNac()
    {
        $mapaAsaNac["candiAsaNac"]=$this->Dignidad->obtenerAsaNac();
        $this->load->view('header');
        $this->load->view('dignidades/locaAsaNac', $mapaAsaNac);
        $this->load->view('footer');
    }

    public function locaAsaPro()
    {
        $mapaAsaPro["candiAsaPro"]=$this->Dignidad->obtenerAsaPro();
        $this->load->view('header');
        $this->load->view('dignidades/locaAsaPro', $mapaAsaPro);
        $this->load->view('footer');
    }

    public function locaIdeo()
    {
        $mapaIdeo["ideo" ]=$this->Dignidad->obtenerIdeo();
        $this->load->view('header');
        $this->load->view('dignidades/locaIdeo', $mapaIdeo);
        $this->load->view('footer');
    }
}
