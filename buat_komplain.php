<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ngErsulo Online | Buat Komplain</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php
        session_start();
        if(!isset($_SESSION['username'])) {
        header('location:index.php'); }
        else { $username = $_SESSION['username']; }
        require_once("koneksi.php");

        $query = $pdo->prepare("SELECT * FROM user WHERE username = '$username'");
        $query->execute();
        $hasil =  $query->fetch();
    ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="images/logo.png">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                
                            </a>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                
                            </a>
                            
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                
                            </a>
                            
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo "$username";?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo "$username - Konsumen";?>
                                        <small>Member since Jan. 2015</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo "Selamat Datang, $username ";?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Cari Komplain..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="menu_konsumen.php">
                                <i class="fa fa-th"></i> <span>Menu Konsumen</span>
                            </a>
                        </li>
                        <li>
                            <a href="tanggapan_instansi.html">
                                <i class="fa fa-reply-all"></i> <span>Tanggapan Instansi</span> <small class="badge pull-right bg-green">baru</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list-ul"></i>
                                <span>Kategori Komplain</span>
                                <i class="fa fa-sort-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="komplain_pendidikan.html"><i class="fa fa-graduation-cap"></i> Pendidikan</a></li>
                                <li><a href="komplain_pemerintah.html"><i class="fa fa-institution"></i> Pemerintah</a></li>
                                <li><a href="komplain_masyarakat.html"><i class="fa fa-group"></i> Masyarakat</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="komplain_terbaru.html">
                                <i class="fa fa-comments"></i>
                                <span>Komplain Terbaru</span><small class="badge pull-right bg-blue">baru</small>
                            </a>
                        </li>
                        <li>
                            <a href="rating_tertinggi.html">
                                <i class="fa fa-star"></i> <span>Rating Komplain Tertinggi</span>
                            </a>
                        </li>
                        <li>
                            <a href="rating_terendah.html">
                                <i class="fa fa-star-half-o"></i> <span>Rating Komplain Terendah</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    Buat Komplain
                    </h1>
                </section>

                <!-- Main content -->
                <form action="proses_komplain.php" method="post">
                    <section class="content">
                                    <div class="box-body">
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="judul" placeholder="Judul Komplain"/>
                                            </div>
                                            Pilih Kategori&nbsp;&nbsp;
                                            <select class="pilih_kategori" name="kategori">
                                              <option value="Pendidikan">Pendidikan</option>
                                              <option value="Pemerintah">Pemerintah</option>
                                              <option value="Masyarakat">Masyarakat</option>
                                            </select>
                                            Pilih Instansi&nbsp;&nbsp;
                                            <select class="pilih_instansi" name="instansi_tujuan">
                                              <option value="udinus">Universitas Dian Nuswantoro</option>
                                              <option value="polres">Polres Semarang Barat</option>
                                              <option value="harpindo">PT. Harpindo Jaya</option>
                                              <option value="pemkot">Pemerintah Kota Semarang</option>
                                            </select>
                                            <div class="radio_profil" name="profil">
                                                Tampilkan Secara&nbsp;&nbsp;
                                                <input type="radio" name="profil" value="pribadi"> Saya Pribadi &nbsp; &nbsp;
                                                <input type="radio" name="profil" value="anonim"> Anonim
                                            </div>
                                            <div>
                                                <textarea name="isi" class="textarea" placeholder="Tulis Komplain Anda" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="box-footer clearfix">
                                        <button type="submit" class="pull-right btn btn-default" id="send">Kirim <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                    </section><!-- /.content -->
                </form>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>