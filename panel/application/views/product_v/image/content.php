            <style>
                .alert {
                 width:500px;
                 height: 50px;
                 margin: 5px 0px ;
                 color: #1b1b1b;
                }
            </style>
            <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                    <form action="<?php echo base_url("product/image_upload"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload"); ?>'}">
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
                    <table class="table table-bordered table-striped table-hover pictures_list">
                      <thead>
                      <th >id</th>
                      <th>Görseli</th>
                      <th>ResimAdı</th>
                      <th>Durumu</th>
                      <th>İşlem</th>
                      </thead>
                        <tbody>
                            <tr>
                              <td class="w100">1</td>
                              <td class="w100"><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                              <td class="">Vue_js_Vue.js-Tutorial—A-Guide-on-Prototyping_Web</td>
                              <td class="w100">
                                  <input
                                          data-url="<?php echo base_url("product/isActiveSetter/");?>"
                                          class="isActive"
                                          id=""
                                          type="checkbox"
                                          data-switchery
                                          data-color="#10c469"
                                      <?php echo (true) ? "checked" : ""; ?>
                                  />
                              </td>
                              <td class="w100">
                                  <button data-url="<?php echo base_url("product/delete/");?>"
                                          type="button" class="btn btn-danger btn-sm btn-outline btn btn-block remove-btn">
                                      <i class="fa fa-trash"></i> Sil
                                  </button>
                              </td>

                            </tr>
                            <tr>
                                <td class="w100">1</td>
                                <td class="w100"><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td class="">Vue Js</td>
                                <td class="w100">
                                    <input
                                            data-url="<?php echo base_url("product/isActiveSetter/");?>"
                                            class="isActive"
                                            id=""
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                        <?php echo (true) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="w100">
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn btn-block btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="w100">1</td>
                                <td class="w100"><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td class="">Vue Js</td>
                                <td class="w100">
                                    <input
                                            data-url="<?php echo base_url("product/isActiveSetter/");?>"
                                            class="isActive"
                                            id=""
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                        <?php echo (true) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="w100">
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn btn-block btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="w100">1</td>
                                <td class="w100"><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td class="">Vue Js</td>
                                <td class="w100">
                                    <input
                                            data-url="<?php echo base_url("product/isActiveSetter/");?>"
                                            class="isActive"
                                            id=""
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                        <?php echo (true) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="w100">
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn-outline btn btn-block remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="w100">1</td>
                                <td class="w100"><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td class="">Vue Js</td>
                                <td class="w100">
                                    <input
                                            data-url="<?php echo base_url("product/isActiveSetter/");?>"
                                            class="isActive"
                                            id=""
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                        <?php echo (true) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="w100">
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn-outline btn btn-block remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>

                            </tr>
                        </tbody>
                  </table>

                  </div>
                </div>

                </div>
            </div>
            </div>