<?php

    foreach ($bookmark as $row){
    
        $data=array(
            'id'=>$row->id,
            'title'=>$row->title,
            'url'=>$row->url,
            'description'=>$row->description,
        );
    }
    echo json_encode($data);

?>        