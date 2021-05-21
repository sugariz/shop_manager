<?php
    class NhaCungCap extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("LoadNhaCungCap");
        }
        
        function index(){
            $data["title"] = "Nhà cung cấp";
            $data["subview"] = "admin/NhaCungCap";
            $data["script"] = "NhaCungCap";

            $data["nhaCungCap"] = $this->LoadNhaCungCap->return_nhacungcap();
            $this->load->view('admin/master', $data);
        }
        
        public function post() {
            $namNhaCC = $this->input->post("inp_nameNhaCC");
            $nameSDT = $this->input->post("inp_sdt");
            $nameEmail = $this->input->post("inp_email");
            $nameDiaChi = $this->input->post("inp_diaChi");
            $i = 0;
            foreach ($namNhaCC as $row) {
                $data = [
                    'ten_nhacungcap' => $namNhaCC[$i],
                    'SDT' => $nameSDT[$i],
                    'email' => $nameEmail[$i],
                    'diachi' => $nameDiaChi[$i]
                ];
                $insert = $this->db->insert('nhacungcap', $data);
                if($insert) {
                    $i++;
                }
            }
            $arr['success'] = true;
            $arr['notif']  = '<div class="alert alert-success">
              <i class="fa fa-check"></i> Thêm thành công!
            </div>';
            return $this->output->set_output(json_encode($arr));

        }
    }
 
?>