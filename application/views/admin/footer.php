</html>
<script>
    var tagOption = <?php
        $string = "'";
        foreach ($typeArray as $ele) {
            $tmp = '<option value="' . $ele["ten_theloai"] . '">' . $ele["ten_theloai"] . '</option>';
            $string .= $tmp;
        }
        $string .= "'";
        echo $string;
        ?>;
</script>
<?php
    if(isset($script)) {
        if($script == "product") {
            echo '<script src="public/jsAdmin/getImage.js"></script>';
            echo '<script src="public/jsAdmin/loopProduct.js"></script>';
        }
    }
?>
