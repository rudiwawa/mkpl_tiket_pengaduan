<!DOCTYPE html>
<html>
<Head>
        <meta charset="utf-8" />
        <title>E-TICKETING | Homepage</title>
        <link href="<?php echo base_url(); ?>/assets/global/css/homestyle.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/animate.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
            <img src="<?php echo base_url(); ?>/assets/pages/img/logoNakula.png"/>
            </div>
            <ul>
                <li><a href="<?php echo base_url(); ?>C_login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login</a></li>
            </ul>
        </div>
    </header>
    <?php
        foreach ($konteks->result_array() as $key) {
            $judul = $key['judul'];
            $desk = $key['deskripsi'];
        }
    ?>
    <div class="title">
            <h1 class="animated fadeInDown"><?php if(isset($judul)){echo $judul;}  ?></h1>
    </div>
    <div class="desk">
            <h5 class="animated fadeInLeft"><?php if(isset($desk)){echo $desk;} ?></h5>
    </div>
    <div class="gambar">
            <img class="animated fadeInRight" src="<?php echo base_url(); ?>/assets/pages/img/tiket.png"/>
    </div>
</body>
</html>
