<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/datatable/css/dataTables.bootstrap.css'); ?>"/>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div id="box" class="col-md-8">
            <h1>USER</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/user'); ?>">USER</a></li>
            </ol>
            <ul class="nav nav-tabs nav-justified">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li class="active"><a href="<?php echo base_url('index.php/home/user'); ?>">USER</a></li>
                <li><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
            </ul>
            <div id="content">
                <table id="user" class="table table-bordered table-striped">
                    <thead>
                        <th>NO</th>
                        <th>USERNAME</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                    <?php
                        $no=1;
                        foreach($user as $row){
                    ?>
                        <tr>
                            <td><?php echo $no; ?> </td>
                            <td><?php echo $row->username ?></td>
                            <td>
                                <?php echo anchor(base_url('index.php/cruduser/edit').'/'.$row->id,'<i class="fa fa-edit"> EDIT</i>',array('class'=>'btn btn-warning')); ?>
                                <?php echo anchor(base_url('index.php/cruduser/delete').'/'.$row->id,'<i class="fa fa-trash"> DELETE</i>',array('class'=>'btn btn-danger')); ?>
                            </td>
                        </tr>
                    <?php
                            $no++;
                        }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                            <?php echo anchor(base_url('index.php/cruduser/tambah'),'<i class="fa fa-plus-square"> TAMBAH</i>',array('class'=>'btn btn-primary')); ?>
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
