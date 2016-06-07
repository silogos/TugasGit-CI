<?php
    $no=1;
    foreach($bookmark as $row){
        $data[]=array(
            'no'=>$no,
            'title'=>$row->title,
            'url'=>$row->url,
            'id'=>'<a class="btn btn-primary" onclick="mod_view('.$row->id.')"><i class="fa fa-eye"></i> VIEW</a> <a class="btn btn-default" onclick="mod_edit('.$row->id.')"><i class="fa fa-edit"></i> EDIT</a> <a class="btn btn-danger" onclick="mod_delete('.$row->id.')"><i class="fa fa-trash"></i> DELETE</a>'
        );
        $no++;
    }
    echo json_encode(array('data'=>$data));
?>    