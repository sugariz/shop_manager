<?php
    $this->load->model("loadProduct");
    $array = $this->loadProduct->return_types();
    $string = "";
    foreach ($array as $ele) {
        $string += '<option value="' . $ele["ten_theloai"] . '">' . $ele["ten_theloai"] . '</option>';
    }
?>