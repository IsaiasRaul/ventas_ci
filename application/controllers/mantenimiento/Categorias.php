<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Categorias_model");
    }    
    
	public function index()
	{
        $data = array(
                'categorias' => $this->Categorias_model->getCategorias(),
                );

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list',$data);
		$this->load->view('layouts/footer');
    }
    
    public function add(){
 
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/categorias/add');
        $this->load->view('layouts/footer');        
    }

    public function store(){
 
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'estado' => 1,
        );

        if($this->Categorias_model->save($data)){
            redirect(base_url()."mantenimiento/categorias");
        }else{
            $this->sesion->set_flashdata("error","Error en la inserción");
            redirect(base_url()."mantenimiento/categorias/add");
        }
    }
    
    public function edit($id){
 
        $data = array(
            'categoria' => $this->Categorias_model->getCategoria($id),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/categorias/edit',$data);
        $this->load->view('layouts/footer'); 
    } 
    
    public function update(){
        $idCategoria = $this->input->post("idCategoria");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        
        $data = array(
            'nombre' =>$nombre,
            'descripcion' =>$descripcion,
        );

        if($this->Categorias_model->update($idCategoria, $data)){
            redirect(base_url()."mantenimiento/categorias");
        }else{
            $this->sesion->set_flashdata("error","Error en la actualización");
            redirect(base_url()."mantenimiento/categorias/edit/".$idCategoria);            
        }
    }

    public function view($id){
        $data = array(
            'categoria' => $this->Categorias_model->getCategoria($id),
        );

        $this->load->view("admin/categorias/view",$data);
    }
}