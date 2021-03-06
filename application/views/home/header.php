<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0;
		padding: 14px 15px 10px 15px;
        text-align: center;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin-bottom: 100px;
	}
    
    #body > input {
        width: 100%;
        margin: 10px 0;
        padding: 10px 0;
        text-align: left;
    }

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px auto;
        width: 900px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
        text-align: center;
	}
    
    #list {
        list-style: none;
        height: 25px;
        padding: 0;
        margin: 0;
        
    }
    #list > li {
        height: inherit;
        float: left;
        padding: 10px 0;
        width: 300px;
        position: relative;
        background: #CCC;
    }
    #table{
        width: 100%;
        border: 1px solid #CCC;
    }
    #table th, td {
        border: 1px solid #CCC;
    }
    a.tambah{
        text-decoration: none;
        float: right;
        padding: 2px;
        border: 1px solid;
        background: #CCC;
    }
    a.tambah:before{
        content: "";
        display: block;
        background: url("../../img/tambah.png");
        width: 16px;
        height: 16px;
        float: left;
        margin: 1px 2px 0 0;
    }
    
    .username {
        position: absolute;
        top: 0;
        right: 10px;
        background: #CCC;
        padding: 5px;
        border-radius: 0 0 3px 3px;
    }
    
	</style>
</head>
<body>
<div class="username">Signed In : <?php echo"$username"; ?></div>