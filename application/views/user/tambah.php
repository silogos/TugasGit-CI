<style>
    
</style>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div id="box" class="col-md-4">
        
            <h1>TAMBAH USER</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/user'); ?>">USER</a></li>
                <li><a href="#">TAMBAH USER</a></li>
            </ol>
            
            <div id="content">
                <?php echo validation_errors(); ?>
                <?php echo form_open('cruduser/tambah_aksi'); ?>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" required="" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password"/>
                    </div>
                    
                    <input class="form-control btn btn-success" type="submit" value="TAMBAH" id="login" />
                
                </form>
           	</div>
                
        </div>    
        <div class="col-md-4"></div>    
    </div>
</div>

