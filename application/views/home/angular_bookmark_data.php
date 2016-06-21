<?php
    $no=1;
    foreach($bookmark as $row){
        $data[]=array(
            'no'=>$no,
            'title'=>$row->title,
            'url'=>$row->url,
            'id'=>$row->id
        );
        $no++;
    }
    echo json_encode($data);
?>    