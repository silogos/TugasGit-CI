<style>
    
</style>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div id="box" class="col-md-4">
        
            <h1>EDIT USER</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/user'); ?>">USER</a></li>
                <li><a href="#">TAMBAH USER</a></li>
            </ol>
            
            <div id="content">
            <?php echo validation_errors(); ?>
            <?php echo form_open('cruduser/edit_aksi');
                foreach ($user as $row){
            ?>
                <input type="hidden" name="id" value="<?php echo $row->id; ?>" required=""/>    
                <div class="form-group">
                    <input class="form-control" type="text" name="username" value="<?php echo $row->username; ?>" readonly="" required="" placeholder="Username"/>    
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pass_word" required="" placeholder="Password Lama"/>    
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" required="" placeholder="Password Baru"/>    
                </div>     
                
                <input class="btn btn-primary" type="submit" value="EDIT" />
            </form>
            </div>
    <?php } ?>
    
        </div>
        <div class="col-md-4"></div>
    </div>
    