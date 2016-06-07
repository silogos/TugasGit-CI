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
                <div id="notif" class="alert" role="alert" style="display: none;">
                    <i id="notif_icon" class="fa fa-plus"></i>
                    <span class="sr-only">Error:</span>
                    <span class="eror_detail"></span>
                    <button onclick="remove_notif()" class="close"><i class="fa fa-remove"></i></button>
                </div>
                <div style="margin: 5px 0;">
                    <a class="btn btn-primary" onclick="mod_tambah()"><i class="fa fa-plus"></i> TAMBAH</a>
                    <button class="btn btn-default" onclick="reload()"><i class="fa fa-refresh"></i> RELOAD</button>
                </div>
                <div class="table-responsive">
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
                                
                            </th>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>
            
            
        </div>
        <div class="col-md-2"></div>
    </div>    
</div>

<!-- Modal Tambah User -->
<div class="modal fade" id="tambah_user">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
            <h4 class="modal-title">TAMBAH USER</h4>
            </div>
            <form id="form-tambah-user">
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
                <a href="#tambah" onclick="tambah()" class="form-control btn btn-primary" >TAMBAH</a>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit User -->
<div class="modal fade" id="edit_user">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
            <h4 id="modtit" class="modal-title">USER</h4>
            </div>
            <div class="modal-body">
                <form id="form-edit-user">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" required="" readonly=""/>
                        <input class="form-control" type="text" name="username" id="username" required="" id="username" placeholder="Username" readonly=""/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass_word" required="" id="password" placeholder="Password Lama"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="Password Sekarang"/>
                    </div>
                    <div class="progress" style="display: none;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
                        
                      </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="#edit" onclick="edit()" class="btn btn-primary" >EDIT</a>
            </div>
            
        </div>
    </div>
</div>

<!-- modal delete user --!>
<div class="modal fade" id="hapus">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
            <h4 class="modal-title">HAPUS USER</h4>
            </div>
            <div class="modal-body">
            
                Yakin ingin menghapus data ini..!
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="#delete" id='delete_user' class="btn btn-danger" ><i class="fa fa-trash"></i> Delete</a>
            </div>
            
        </div>
    </div>
</div>    