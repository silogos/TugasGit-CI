<?php
    $no=1;
    foreach($user as $row){
        $data[]=array(
            'no'=>$no,
            'username'=>$row->username,
            'id'=>$row->id
        );
        $no++;
    }
    echo json_encode($data);
?>