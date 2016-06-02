<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugin/datatable/css/dataTables.bootstrap.min.css'); ?>"/>
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
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Error:</span>
                  Enter a valid email address
                </div>
                <table id="user" class="table table-bordered table-striped">
                    <thead>
                        <th>NO</th>
                        <th>USERNAME</th>
                        <th>AKSI</th>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <th>
                                <?php echo anchor(base_url('index.php/cruduser/tambah'),'<i class="fa fa-plus-square"> TAMBAH</i>',array('class'=>'btn btn-primary')); ?>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hps">Small modal</button>
                                <a id="test">sasa</a>
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
                    <input class="form-control" type="text" name="username" required="" id="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" required="" id="password" placeholder="Password"/>
                </div>
                <div class="progress" style="display: none;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
                    
                  </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <a class="form-control btn btn-primary tambahuser" >TAMBAH</a>
            </div>
            </form>
        </div>
    </div>
</div>
    