<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/datatable/css/dataTables.bootstrap.css'); ?>"/>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div id="box" class="col-md-8">
            <h1>BOOKMARK</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
            </ol>
            <ul class="nav nav-tabs nav-justified">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/user'); ?>">USER</a></li>
                <li class="active"><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
            </ul>
            <div id="content">
                <table id="user" class="table table-bordered table-striped">
                    <thead>
                        <th>NO</th>
                        <th>TITLE</th>
                        <th>URL</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    <?php
                        $no=1;
                        foreach($bookmark as $row){
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>
                                <?php echo anchor(base_url('index.php/crudbookmark/detail_bookmark').'/'.$row->id,$row->title); ?>
                            </td>
                            <td>
                                <?php echo anchor('http://'.$row->url,$row->url); ?>
                            </td>
                            <td>
                                <?php echo anchor(base_url('index.php/crudbookmark/edit').'/'.$row->id,'<i class="fa fa-edit"> EDIT</i>',array('class'=>'btn btn-warning')); ?>
                                <?php echo anchor(base_url('index.php/crudbookmark/delete').'/'.$row->id,'<i class="fa fa-trash"> DELETE</i>',array('class'=>'btn btn-danger')); ?>
                            </td>
                        </tr>
                    <?php 
                            $no++;
                        }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6">
                            <?php echo anchor(base_url('index.php/crudbookmark/tambah'),'<i class="fa fa-plus-square"> TAMBAH</i>',array('class'=>'btn btn-primary')); ?>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            
        </div>
        <div class="col-md-2"></div>
    </div>    
</div>
    <script src="<?php echo base_url('assets/plugin/datatable/js/jquery-1.11.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/datatable/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/datatable/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/datatable/js/dataTables.bootstrap.js') ?>"></script>

    <script>
        $(function(){
            $('#user').dataTable();
        });
    </script>