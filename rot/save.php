<?php
$keys = "";
$values = "";
$no = 0;
if(isset($_GET['id'])){

}else{
    foreach($_POST as $i=>$v){
        if($i != "files"){
            if($no == 0){
                $keys .= $i;
                $values .= "'".get_input($v)."'";
            }else{
                $keys .= ",".$i;
                $values .= ",'".get_input($v)."'";
            }
        }
        $no++;
    }
    $save = input("project_detail",$keys,$values,$conn);
?>
<div class="card">
    <div class="card-body">
        <?php 
        
        if($save){
            echo "Berhasil";
        }
        ?>
    </div>
</div>

<?php
}
?>