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
                                <?php echo anchor(base_url('index.php/cruduser/edit').'/'.$row->id,'<i class="fa fa-edit"> EDIT</i>',array('class'=>'btn btn-default')); ?>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hps">Small modal</button>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            
        </div>
        <div class="col-md-2"></div>
    </div>    
</div>



<div class="modal" id="hps">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
            <h4 class="modal-title">TAMBAH USER</h4>
            </div>
            <form method="POST" class="form-user">
            <div class="modal-body">
            
                <div class="form-group">
                    <input class="form-control" type="text" name="username" required="" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" required="" placeholder="Password"/>
                </div>
                
                <div id="loadings" style="width: 0px; height: 30px; background: aquamarine;">
                    
                </div>
                
            </div>
            <div class="modal-footer">
                <a class="form-control btn btn-primary tambahuser" >TAMBAH</a>
            </div>
            </form>
        </div>
    </div>
</div>
    
    
<script>
        $(document).ready(function(){
            $('.tambahuser').click(function(){
                var data = $('.form-user').serialize();
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url('index.php/cruduser/tambah_aksi'); ?>",
                    data: data,
                    beforeSend: function(){
                        $('#loadings').animate({width: '60%'}, 1500);
                    },
                    success: function(){
                        $('#loadings').animate({width: '100%'}, 1500);
                    }
                });
            }); 
        });
    </script>