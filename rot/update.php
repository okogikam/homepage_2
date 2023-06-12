<?php

$keys = "project_name,description,status,clien,leader";
$values = get_input($_POST['project_name']).",".
get_input($_POST['description']).",".
get_input($_POST['status']).",".
get_input($_POST['clien']).",".
get_input($_POST['leader']);
$id_project = "id='$id'";
// $update = update("project_detail",$keys,$values,$id_project,$conn);
$keys_task = "id_project,task_name,status";
for($i=0;$i<count($_POST['task_name']);$i++){
    $values_task = $id.",".get_input($_POST['task_name'][$i]).",".get_input($_POST['task_status'][$i]);
    $id_task = "id_project='$id' && task_name='".get_input($_POST['task_name'][$i])."'";
    $update_task = update("tasks",$keys_task,$values_task,$id_task,$conn);
    if(!$update_task){
        $values_task = "'$id','".get_input($_POST['task_name'][$i])."','".get_input($_POST['task_status'][$i])."'";
        $input_taks = input("tasks",$keys_task,$values_task,$conn);
    }
}
?>
<div class="card">
    <div class="card-body">
        <p>Hasil</p>
        <?php  
        // gettype($id_task);      
        if($update_task){ echo "Berhasil";}else{echo "Gagal";}
        ?>
    </div>
</div>
<?php

?>