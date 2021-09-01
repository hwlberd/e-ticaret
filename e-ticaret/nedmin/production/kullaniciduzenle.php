<?php include 'header.php';

$kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
  'id' => $_GET['kullanici_id']
));


$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Genel Ayarlar <small>İşlem Durumu</small> :

                      <?php

                      if(isset($_GET['durum'])){


                      if ($_GET['durum']=="ok") {?>
                        <b style="color:green;">İşlem Başarılı . .</b>
                    <?php  }elseif ($_GET['durum']=="no") {?>
                      <b style="color:red;">İşlem Başarısız . .</b>
                  <?php  }}
                       ?>



                  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>
                    <!-- /=> en kök dizine çık ../ => bir üst dizine çık -->
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                         <?php 
                         $zaman=explode(" ",$kullanicicek['kullanici_zaman'])?>

                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kayıt Tarihi :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="kullanici_zaman"
                          value="<?php echo $zaman[0]; ?>"
                          class="form-control col-md-7 col-xs-12" type="date" disabled >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kayıt Saati :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="kullanici_zaman"
                          value="<?php echo $zaman[1]; ?>"
                          class="form-control col-md-7 col-xs-12" type="time" disabled >
                        </div>
                      </div>

                      <input type="hidden" name="kullanici_id"  value="<?php echo $kullanicicek['kullanici_id']?>"  >

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">TC :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="kullanici_tc"
                          value="<?php echo $kullanicicek['kullanici_tc'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ad Soyad :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="kullanici_adsoyad"
                          value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mail :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled id="middle-name" name="kullanici_mail"
                          value="<?php echo $kullanicicek['kullanici_mail'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Aktif :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="kullanici_durum" id="heard" class="form-control">
                         <option value="1" <?php echo $kullanicicek['kullanici_durum']== '1' ? 'selected=""' : ''
                         ;?>> Aktif</option>  
                         <option value="0" <?php if($kullanicicek['kullanici_durum']==0)  {echo 'selected=""';}     ?>>Pasif</option> 
                         </select>
                        </div>
                      </div>

                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="kullaniciduzenle"class="btn btn-primary">Güncelle</button>
                        </div>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>








          </div>
        </div>
        <!-- /page content -->

      <?php include 'footer.php' ?>
