<?php

$keys = "project_name,description,status,clien,leader";
$values = get_input($_POST['project_name']).",".
get_input($_POST['description']).",".
get_input($_POST['status']).",".
get_input($_POST['clien']).",".
get_input($_POST['leader']);
// $update = update("project_detail",$keys,$values,$id,$conn);
?>
<div class="card">
    <div class="card-body">
        <p>Hasil</p>
        <?php
        print_output($_POST);
        // if($update){ echo "Berhasil";}else{echo "Gagal";}
        ?>
    </div>
</div>
<?php

?>