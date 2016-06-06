<?php 
    foreach($user as $row){
        $data=array(
            'id'=>$row->id,
            'username'=>$row->username
        );
    }
    echo json_encode($data);
?>    