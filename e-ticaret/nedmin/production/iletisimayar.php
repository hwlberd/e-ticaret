<?php include 'header.php';



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
                    <h2>İletişim Ayarlar <small>İşlem Durumu</small> :

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

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefon Numarası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_tel"
                          value="<?php echo $ayarcek['ayar_tel'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefon GSM</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_gsm"
                          value="<?php echo $ayarcek['ayar_gsm'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fax Numarası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_fax"
                          value="<?php echo $ayarcek['ayar_fax'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mail Adresi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_mail"
                          value="<?php echo $ayarcek['ayar_mail'] ?>"
                          class="form-control col-md-7 col-xs-12" type="mail" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İlçe</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_ilce"
                          value="<?php echo $ayarcek['ayar_ilce'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İl</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_il"
                          value="<?php echo $ayarcek['ayar_il'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_adres"
                          value="<?php echo $ayarcek['ayar_adres'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mesai</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="ayar_mesai"
                          value="<?php echo $ayarcek['ayar_mesai'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>







                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="iletişimayarkaydet"class="btn btn-primary">Güncelle</button>
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
