    <style>
        
        #login {
                margin-top: 100px;
                padding: 50px;
                border-radius: 3px;
                background: #EFEEEA;
                box-shadow: 1px 1px 1px 1px #CCC;
                z-index: 2;
        }
        #login > .clip {
            position: absolute;
            top: -7px;
            right: 40px;
            -webkit-user-drag: none;
            -khtml-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-drag: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        #login > h4 {
            margin: 0 0 10px 0;
        }
        
        
    </style>
       
    <link />
</head>
<body>
    
    <div class="blur"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div id="login" class="col-md-4">
                <img class="clip" src="<?php echo base_url("img/clip.png"); ?>" />
                <h4>LOGIN</h4>  
                <?php echo validation_errors(); ?>
                <?php echo form_open('login/'); ?>
                <div id="body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" required="" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" required="" placeholder="Password" />
                    </div>
                    
                    
                    <input class="form-control" type="submit" value="LOGIN" />
                
                </div>
                </form>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>
