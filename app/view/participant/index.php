<link rel="stylesheet" href="/css/style.css">
	<body class="layout.css">
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Charity</a></h1>

					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.html">Home</a>
							</li>
              <li><a href="list.php">Participant</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
                    <!-- Begin Page Content -->
										<div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
												<p>Daftar orang yang ikut berpartisipasi</p>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 218px">
                                        <thead>
                                            <tr>
                                              <th>no</th>
                                              <th>Id Data</th>
                                                <th>Name</th>
                                                <th>Donasi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>no</th>
                                              <th>Id Data</th>
                                              <th>Name</th>
                                              <th>Donasi</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
																				$koneksi = mysqli_connect("localhost","root","","sumbangan");
																				if (mysqli_connect_errno()){
																					echo "Koneksi database gagal : " . mysqli_connect_error();
																				}
                                          $sql = mysqli_query($koneksi, "SELECT * FROM sumbangan ORDER BY id DESC") or die(mysqli_error($koneksi));
                                          if(mysqli_num_rows($sql) > 0){
                                            $no = 1;
                                            while($data = mysqli_fetch_assoc($sql)){
                                              echo '
                                              <tr>
                                                <td>'.$no.'</td>
                                                <td>'.$data['id'].'</td>
                                                <td>'.$data['nama'].'</td>
                                                <td>'.$data['donasi'].'</td>

                                              </tr>
                                              ';
                                              $no++;

                                            }
                                          }else{
                                            echo '
                                            <tr>
                                              <td colspan="6">Tidak ada data.</td>
                                            </tr>
                                            ';
                                          }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
