<?php
    $no=1;
    foreach($user as $row){
        $data[]=array(
            'no'=>$no,
            'username'=>$row->username,
            'id'=>'<a class="btn btn-default" data="'.$row->id.'"><i class="fa fa-edit"></i> EDIT</a> <a id="delete" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</a>'
        );
        $no++;
    }
    echo json_encode(array('data'=>$data));
?>    