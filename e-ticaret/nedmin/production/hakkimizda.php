<?php include 'header.php';

//Belirli veri seçme işlemi
$ayarsor=$db->prepare("SELECT * from hakkımızda where hakkimizda_id=:id");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

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
                    <h2>Hakkımızda Ayarlar <small>İşlem Durumu</small> :

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
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hakkımızda Başlığı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="hakkimizda_baslik"
                          value="<?php echo $ayarcek['hakkimizda_baslik'] ?>"
                          class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
</label>
 
<div class="col-md-6 col-sm-6 col-xs-12">
 
<textarea  class="ckeditor" id="editor1" name="hakkimizda_icerik"><?php echo $ayarcek['hakkimizda_icerik']; ?></textarea>
</div>
</div>
 
<script type="text/javascript">
 
CKEDITOR.replace( 'editor1',
 
 {
 
filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
 
filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
 
filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
 
filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
 
filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
 
filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
 
forcePasteAsPlainText: true
 
} 
 
);
 
</script>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hakkımızda Video</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="hakkimizda_video" value="<?php echo $ayarcek['hakkimizda_video'] ?>" class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hakkımızda Vizyon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="hakkimizda_vizyon"  value="<?php echo $ayarcek['hakkimizda_vizyon'] ?>" class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hakkımızda Misyon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="hakkimizda_misyon"  value="<?php echo $ayarcek['hakkimizda_misyon'] ?>" class="form-control col-md-7 col-xs-12" type="text" >
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="hakkimizdaayarkaydet"class="btn btn-primary">Güncelle</button>
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
