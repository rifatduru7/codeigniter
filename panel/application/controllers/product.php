<?php

class Product extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "product_v";
        $this->load->model("product_model");
        $this->load->model("product_image_model");

    }

    public function index(){

        $viewData = new stdClass();


        /** Tablodan Verileri Getirilmesi... */
        $items = $this->product_model->get_all(

            array(), "rank ASC"


        );

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

            $insert =$this->product_model->add(
                array(
                    "title"         =>$this->input->post("title"),
                    "description"   =>$this->input->post("description"),
                    "url"           =>convertToSEO($this->input->post("title")),
                    "isActive"      =>1,
                    "createdAt"     =>date('Y-m-d H:i:s')


                )
            );
                if ($insert){
                    redirect(base_url("product"));
                }
                else{
                    redirect(base_url("product"));
                }
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
    public function update_form($id){
        $viewData = new stdClass();

        //Tablodan verilerin getirilmesi
        $item = $this->product_model->get(
            array(
                "id"        =>$id,
                //"isActive"  =>1
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index" ,$viewData);

    }
    public function update($id){

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

            $update =$this->product_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "title"         =>$this->input->post("title"),
                    "description"   =>$this->input->post("description"),
                    "url"           =>convertToSEO($this->input->post("title")),
                    //"isActive"      =>1,
                    //"createdAt"     =>date('Y-m-d H:i:s')


                )
            );
            if ($update){
                redirect(base_url("product"));
            }
            else{
                redirect(base_url("product"));
            }
        }else{

            $viewData = new stdClass();
            $item =$this->product_model->get(
                array(
                    "id"    =>$id,
                )
            );
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index" ,$viewData);
            $viewData->item = $item;
        }


        // Başarılı ise
        //Kayıt işlemi başlar
        //Başarısız ise
        //Hata ekranda gösterecektir...
    }
    public function delete($id){
        $delete = $this->product_model->delete(
            array(
                "id"    =>$id
            )
        );
        if ($delete){
            redirect(base_url("product"));
        }else{
            redirect(base_url("product"));
        }
    }
    public function isActiveSetter($id){

        if ($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->product_model->update(
                array(
                    "id"  => $id
                ),
                array(
                    "isActive" => $isActive
                )


            );
        }

    }
    public function rankSetter(){

        $data = $this->input->post("data");
        parse_str($data , $order);
        $items = $order["ord"];
        
        foreach ($items as $rank => $id) {

            $this->product_model->update(
                array(
                    "id"    => $id,
                    "rank !="  => $rank
                ),
                array(
                    "rank"  => $rank
                )
            );
        }

    }
    public function image_form($id){

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item = $this->product_model->get(
            array(
                "id"    => $id
            )
        );

        $viewData->item_images = $this->product_image_model->get_all(
            array(
                "product_id"      =>$id
            )
        );


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index" ,$viewData);

    }
    public function image_upload($id){

        $file_name = convertToSEO(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]   = "uploads/$this->viewFolder/";
        $config["file_name"]     = $file_name;

        $this->load->library("upload", $config);

        $upload = $this->upload->do_upload("file");

        if($upload){

            $uploaded_file = $this->upload->data("file_name");

            $this->product_image_model->add(
                array(
                    "img_url"       => $uploaded_file,
                    "rank"          => 0,
                    "isActive"      => 1,
                    "isCover"       => 0,
                    "createdAt"     => date("Y-m-d H:i:s"),
                    "product_id"    => $id
                )
            );


        } else {
            echo "islem basarisiz";
        }

    }

}
