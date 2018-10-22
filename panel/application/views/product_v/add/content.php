        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Yeni Ürün Ekleme....
                    <a href="#" class="btn btn-info btn-outline btn-sm pull-right" ><i class="fa fa-plus"></i>Yeni Ekle</a>
                </h4>
            </div>

            <div class="col-md-12">
                <form action="<?php echo base_url("product/save"); ?>" method="post">
                    <div class="form-group">
                        <h6 for="exampleInputEmail1">Ürün Adı</h6>
                        <input name="title" class="form-control" id="exampleInputEmail1" placeholder="Ürün başlığı giriniz...">
                    </div>
                    <div class="form_group">
                        <h6>Açıklama</h6>
                        <textarea name="description" class="m-0" data-plugin="summernote" placeholder="Ürün Açıklaması..." data-options="{height: 250}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("product"); ?>"  class="btn btn-danger btn-md btn-outline">İptal<a/>
                </form>
                </div>
            </div>
        </div>