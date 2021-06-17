<body>
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
              				<li><a href="<?= URl;?>/Participant"></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<form action="<?= URl;?>/donation/tambah" method="post" style="margin-left: 600px; margin-right: 100px; margin-bottom: 130px">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" size="4" required style="width: 400px;" >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" required style="width: 400px;">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">BANK</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input type="radio" class="form-check-input" name="rekening" value="BNI" required>
						<label class="form-check-label">BNI</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="rekening" value="BRI" required>
						<label class="form-check-label">BRI</label>
					</div>
				</div>
			</div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Donasi</label>
        <div class="col-sm-10">
          <input type="text" name="donasi" class="form-control" size="4" required style="width: 400px;">
        </div>
      </div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN" onclick="alert('DATA TELAH TERSIMPAN')">
				</div>
			</div>
		</form>
