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
                <h4 class="m-b-lg">
                    Yeni Ürün Resimleri....
                    <a href="#" class="btn btn-info btn-outline btn-sm pull-right" ><i class="fa fa-plus"></i>Yeni Ekle</a>
                </h4>
            </div>

            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                    <form action="../api/dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '../api/dropzone'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div>
         </div>
      </div>
   </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="m-b-lg">
                        Yeni Ürün Resimleri....
                    </h4>
                </div>
            <div class="col-md-12">
                <div class="widget">
                  <div class="widget-body">
                    <table class="table table-hover">
                      <thead>
                      <th>id</th>
                      <th>Görseli</th>
                      <th>ResimAdı</th>
                      <th>Durumu</th>
                      <th>İşlem</th>
                      </thead>
                        <tbody>
                            <tr>
                              <td>1</td>
                              <td><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                              <td>Vue Js</td>
                              <td>
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
                              <td>
                                  <button data-url="<?php echo base_url("product/delete/");?>"
                                          type="button" class="btn btn-danger btn-sm btn-outline remove-btn">
                                      <i class="fa fa-trash"></i> Sil
                                  </button>
                              </td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td>Vue Js</td>
                                <td>
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
                                <td>
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td>Vue Js</td>
                                <td>
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
                                <td>
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img width="30" src="https://vuejs.org/images/logo.png" alt="görsel" class="img-responsive"></td>
                                <td>Vue Js</td>
                                <td>
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
                                <td>
                                    <button data-url="<?php echo base_url("product/delete/");?>"
                                            type="button" class="btn btn-danger btn-sm btn-outline remove-btn">
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