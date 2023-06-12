<?php

use function PHPSTORM_META\type;
//base data
$status_project_list = ['progres','done','cancel'];

//cennection to database
function conn(){
    $us = "root";
    $pw = "";
    $db = "project";
    $hn = "localhost";

    $conn = new mysqli($hn,$us,$pw,$db);
    if(!$conn){
        return "error".$conn;
    }else{
        return $conn;
    }
}
//get input from user
function get_input($var){
    $var = htmlentities($var);
    $var = str_replace("'","td_ptk",$var);
    $var = str_replace('"',"td_ptk2",$var);
    $var = str_replace(",","td_koma",$var);
    // $var = html_entity_decode($var);
    return $var;
}
//get output from database
function get_output($var){
    $var = str_replace("td_ptk","'",$var);
    $var = str_replace("td_ptk2",'"',$var);
    $var = str_replace("td_koma",",",$var);
    $var = html_entity_decode($var);
    return $var;
}
//test output
function print_output($var){
    if(is_array($var)){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }else{
        echo $var;
    }
}
//input to database
function input($tabel,$keys,$values,$conn){
    $query = "INSERT INTO $tabel($keys) VALUES($values)";
    $result = $conn->query($query);
    if(!$result){
        return false;
    }

    return true;    
}
function make_arr($split,$val){
    $arr = explode($split,$val);
    return $arr;
}
//update to database
function update($tabel,$keys,$values,$id,$conn){
    $key = explode(",",$keys);
    $val = explode(",",$values);
    if(count($key) != count($val)){
        return false;
    }

    for($i=0;$i<count($key);$i++){
        $query = "UPDATE $tabel SET $key[$i]='$val[$i]' WHERE $id";
        $result = $conn->query($query);
        if(!$result){
            return false;
        }
    }

    return true;
}
//select from database
function select($query,$conn){
    $result = $conn->query($query);
    $hasil = array();
    if(!$result){
        return "error".$conn->error;
    }
    
    for($i=0;$i<$result->num_rows;$i++){
        $result->data_seek($i);
        $data = $result->fetch_array(MYSQLI_BOTH);
        
        $hasil[$i] = $data;
        
    }

    return $hasil;
}
//display list project
function list_project($status,$conn){
    if(gettype($conn) == "string"){
        return;
    }
    
    $query = "SELECT * FROM project_detail WHERE status='$status'";
    $rows = select($query,$conn);
    echo "<tbody>";
    foreach($rows as $data){
        $persen = $data['done']/$data['task'] * 100;
        switch($data['status']){
            case "done":
                $status = "badge-success";
                break;
            case "cancel":
                $status = "badge-danger";
                break;
            default:
            $status = "badge-warning";
        }
        echo "<tr>";
        echo <<<_DOC
        <tr>
                    <td>
                        $data[id]
                    </td>
                    <td>
                        <a>
                            $data[project_name]
                        </a>
                    </td>
                    <td>
                        $data[leader]
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="$data[done]" aria-valuemin="0" aria-valuemax="$data[task]" style="width: $persen%">
                            </div>
                        </div>
                        <small>
                            $persen % Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge $status">$data[status]</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="?p=project&id=$data[id]">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="?p=edit_project&id=$data[id]">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#$data[id]">
                            <i class="fas fa-trash">
                            </i>
                            Cancel
                        </a>
                    </td>
                </tr>
_DOC;
        echo "</tr>";
    }
    echo "</tbody>";
    
}
?>