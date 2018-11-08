
            <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                    <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buraya sürükleyiniz.</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı sürükleyiniz yada bu alana tıklayınız.)</p>
                    </div>
                </form>
            </div>
         </div>
      </div>
   </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="m-b-lg">
                     <b>"<?php echo $item->title; ?>"</b> kaydına ait resimler
                    </h4>
                </div>
            <div class="col-md-12">
                <div class="widget">
                  <div class="widget-body">

                      <?php if(empty($item_images)) { ?>

                          <div class="alert alert-info text-center">
                              <p>Burada herhangi bir resim bulunmamaktadır. </p>
                          </div>

                      <?php } else { ?>
                    <table class="table table-bordered table-striped table-hover pictures_list">
                      <thead>
                      <th class="text-center">id</th>
                      <th class="text-center">Görseli</th>
                      <th>Resim Adı</th>
                      <th class="text-center">Durumu</th>
                      <th class="text-center">İşlem</th>
                      </thead>
                        <tbody>

                        <?php foreach($item_images as $image){ ?>

                            <tr>
                              <td class="w100">#<?php echo $image->id; ?></td>
                              <td class="w100"><img width="30" src="<?php echo base_url("uploads/{$viewFolder}/$image->img_url"); ?>" alt="<?php echo $image->img_url; ?>" class="img-responsive"></td>
                              <td class=""><?php echo $image->img_url; ?></td>
                              <td class="w100">
                                  <input
                                          data-url="<?php echo base_url("product/isActiveSetter/");?>"
                                          class="isActive"
                                          id=""
                                          type="checkbox"
                                          data-switchery
                                          data-color="#10c469"
                                      <?php echo ($image->id) ? "checked" : ""; ?>
                                  />
                              </td>
                              <td class="w100">
                                  <button data-url="<?php echo base_url("product/delete/");?>"
                                          type="button" class="btn btn-danger btn-sm btn-outline btn btn-block remove-btn">
                                      <i class="fa fa-trash"></i> Sil
                                  </button>
                              </td>

                            </tr>
                        <?php } ?>
                        </tbody>
                  </table>
                      <?php } ?>
                  </div>
                </div>

                </div>
            </div>
            </div>