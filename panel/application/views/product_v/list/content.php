<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
            <a href="<?php echo base_url("product/new_form"); ?>" class="btn btn-info btn-outline btn-sm pull-right" ><i class="fa fa-plus"></i>Yeni Ekle</a>
        </h4>
        </div>

        <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

            <div class="alert alert-danger" role="alert">
                <strong>Uyarı !</strong>
                <span>Burada herhangi bir kayıt bulunamamıştır.Yeni eklemek için lütfen</span>
                <a href="<?php echo base_url("product/new_form"); ?>" class="alert-link">Tıklayın.</a>
            </div>


            <?php  } else { ?>

            <table class="table table-hover table-striped ">
                <thead>
                <th>ID</th>
                <th>url</th>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>Durumu</th>
                <th>İşlem</th>
                </thead>
                <tbody>

                        <?php foreach ($items as $item) { ?>

                        <tr>
                            <td>#<?php echo $item->id; ?></td>
                            <td><?php echo $item->url; ?></td>
                            <td><?php echo $item->title; ?></td>
                            <td><?php echo $item->description; ?></td>
                            <td>
                                <input
                                        id=""
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                />
                            </td>
                            <td>
                                <a href="#" type="button" class="btn btn-danger btn-sm btn-outline"><i class="fa fa-trash"></i> Sil </a>
                                <a href="#" type="button" class="btn btn-info btn-sm btn-outline"><i class="fa fa-pencil"></i> Düzenle </a>
                            </td>
                        </tr>

                        <?php } ?>

                </tbody>
            </table>
            <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->
</div>