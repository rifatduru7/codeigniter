<?php

class Product extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "product_v";
        $this->load->model("product_model");
    }

    public function index(){

        $viewData = new stdClass();


        /** Tablodan Verileri Getirilmesi... */
        $items = $this->product_model->get_all();

        /** View'e gönderilecdek değişkenlerin set edilmesi...*/
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function new_form(){

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index" ,$viewData);
    }
    public function save(){

        $this->load->library("form_validation");

        // Kurallar yazılır
        $this->form_validation->set_rules("title", "Başlık","required|trim");
        $this->form_validation->set_message(
        array(
            "required" => "<b>{field}</b> alanı doldurulmalır."
        )

        );



        // form_validation çalıştırılır

        $validate = $this->form_validation->run();

        if ($validate){

            echo "Kayıt işlemleri başlar...";

        }else{

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index" ,$viewData);
        }


        // Başarılı ise
            //Kayıt işlemi başlar
        //Başarısız ise
            //Hata ekranda gösterecektir...
    }
}
