<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Himifda</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style type="text/css">
    .row{
    	padding-bottom: 15px;
    	padding-top: 15px;
    }
    </style>

</head>

<body>
<h1></h1>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="#">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="#">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="#">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Full Width Page</a>
                            </li>
                            <li>
                                <a href="#">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">404</a>
                            </li>
                            <li>
                                <a href="#">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div style="height:60px;"></div>
    <div class="container">
    <!-- konten -->

    <div class="row">

        <div class="col-md-12 col-sm-3 col-xs-6">
        <div class="jumbotron text-center">
            <h3>Form Pelatihan</h3>
        </div>
        </div>
        <div class="col-md-12 col-sm-3 col-xs-6">
        <div class="jumbotron text-center">
            <h3>HIMIFDA</h3>
        </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6 text-center">
            <div class="jumbotron">
                    <p>Terdaftar</p>
                    <h1>50</h1>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 text-center">
            <div class="jumbotron">
                    <p>Sisa</p>
                    <h1>10</h1>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-md-3" for="email">Nama Peserta:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="email" placeholder="NAMA PESERTA">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="pwd">Universitas</label>
                <div class="col-md-9"> 
                  <input type="text" class="form-control" id="pwd" placeholder="NAMA UNIVERSITAS">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="pwd">Smester</label>
                <div class="col-md-9"> 
                  <input type="number" class="form-control" id="pwd" placeholder="5">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="pwd">Jurusan</label>
                <div class="col-md-9"> 
                  <select class="form-control">
                      <option value="">-Pilih Jurusan-</option>
                      <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                      <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                      <option value="TEKNIK INDUSTRI">TEKNIK INDUSTRI</option>
                      <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                      <option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="email">Email:</label>
                <div class="col-md-9">
                  <input type="email" class="form-control" id="email" placeholder="EMAIL">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="email">No Hp:</label>
                <div class="col-md-9">
                  <input type="number" class="form-control" id="no_hp" placeholder="NOMER HANDPHONE">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3" for="email">Alamat:</label>
                <div class="col-md-9">
                  <textarea class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-md-offset-3 col-md-3 col-md-offset-3 col-sm-3">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
                <div class="col-md-offset-3 col-md-3 col-md-offset-3 col-sm-3">
                  <button type="submit" class="btn btn-warning">Cancel</button>
                </div>
              </div>
            </form>
        </div>
    </div>
	<!-- konten -->
	</div> <!-- Container -->
</body>

    <!-- jQuery -->
    <script src="jquery/jquery-2.2.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
   

</html>
