﻿<?php include 'important/include/header.php';?>
<div class="container">
	<div class="row">
		<div class="col-md-5">

		</div>
		<script>
			$(function() {
  var taeb = $(".taeb-switch");
  taeb.find(".taeb").on("click", function() {
    var $this = $(this);

    if ($this.hasClass("active")) return;

    var direction = $this.attr("taeb-direction");

    taeb.removeClass("left right").addClass(direction);
    taeb.find(".taeb.active").removeClass("active");
    $this.addClass("active");
  });
});
$(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " dosya seçildi.");
  });
});
			</script>
<main>

  <div class="wrapper">
    <div class="taeb-switch left text-center">
	  <label class="taeb active" taeb-direction="left" id="one-tab" for="one"><i class="fad fa-tv"></i> Bilgisayardan</label><!--
  --><label class="taeb" taeb-direction="right" id="two-tab" for="two"><i class="fad fa-globe-americas"></i> İnternetten</label>
    </div>
  </div>
</main>
<br><br><br><br><br>
<div class="warpper">
  <input class="radio" id="one" name="group" type="radio" checked>
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">

  <div class="panels">
  <div class="panel" id="one-panel">
  <form class="upload" action="yukleResim" method="POST"  enctype="multipart/form-data">
  
								<div class="row">
									<div class="col-md-9">
									<input type="file" name="resim"></input>
<center> 
<p><br><br><i class="fad fa-download fa-4x"></i><br><br>Dosyayı buraya sürükle yada bu alana tıkla.</p>
</center>
</div>

<div class="col-md-3">
											<button type="submit" onclick="" name="gonder" class="upload-buttonn">Yükle</button>
										</div>
								</div>
							</form>
						</div>

  <div class="panel" id="two-panel">
	<form action="yukleUrl" method="POST"> 
								<div id="tab-upload-remote" class="tab-pane" style="margin-top: 10px;"> 
									<div class="row">
										<div class="col-md-9">
											<center>
              <div class="styled-input">
			  <input name="url" type="text" id="input" class="Input-text" placeholder="htttps://">
			</div>
										</div>
										
										<br><br>
										<div class="col-md-3">
											<button type="submit" onclick="" name="gonder" class="upload-buttonn">Yükle</button>
										</div>
										</center>
									</div>
								</div>
							</form>   
						</div>
  </div>
</div>

<br><br><br><br>
<center>
<?php echo $ads2 ?>

<br><br><br>


<h1 style="text-align: center"> Neden biz?</h1>


<div class="card" style="width: 18rem;">
  <span class="card-img-top">
	  <br><i class="fad fa-rocket fa-5x"></i></span>
  <div class="card-body">
    <h5 class="card-title">Yüksek Hız</h5>
    <p class="card-text">Sizin için en ideal yükleme hızıyla şimdi resminizi yükleyip paylaşın.</p>
    <a href="/tr/yukle" class="yukle">Resim Yükle</a>
  </div>
</div>
<div class="card active" style="width: 18rem;">
  <span class="card-img-top">
	  <br><i class="fad fa-sort-size-up fa-5x"></i></span>
  <div class="card-body">
    <h5 class="card-title">Yüksek Boyut</h5>
    <p class="card-text">Yüksek boyutdaki kaliteli resimlerinizi yüklemeniz için oldukça ideal.</p>
    <a href="/tr/yukle" class="yukle">Resim Yükle</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <span class="card-img-top">
	  <br><i class="fad fa-hdd fa-5x"></i></span>
  <div class="card-body">
    <h5 class="card-title">Depolama</h5>
    <p class="card-text">Sınırlandırılmadan istediğiniz kadar resim ekleyip, paylaşabilirsiniz.</p>
    <a href="/tr/yukle" class="yukle">Resim Yükle</a>

  </div>
</div>
</center>

</body>
</html>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<?php include('important/include/footer.php') ?>