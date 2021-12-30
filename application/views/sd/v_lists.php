
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= $title ?>
        </div>
     <!-- /.panel-heading -->
        <div class="panel-body">
        <?php if ($this->session->userdata('username')<>"") {?>
        <a href="<?= base_url('sd/input') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Input Data</a>
        <?php } ?>
        <div><br></div>
        <?php


        if ($this->session->flashdata('pesan')) {
           echo '<div class="panel-body">
           <div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
           echo $this->session->flashdata('pesan');
           echo '<a href="#" class="alert-link"></a>.</div>';
        }

        ?>
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Sekolah Dasar</th>
                        <th>No Telpone</th>
                        <th>Alamat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Deskripsi</th>
                        <?php if ($this->session->userdata('username')<>"") {?>
                        <th>Action</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($sd as $key => $value) { ?>
                
                    <tr>
                    <td><?= $no++; ?>  </td>
                    <td><?= $value->nama_sd ?>  </td>
                    <td><?= $value->no_tlp ?>   </td>
                    <td><?= $value->alamat ?>   </td>
                    <td><?= $value->latitude ?>   </td>
                    <td><?= $value->longitud ?>   </td>
                    <td><?= $value->deskripsi ?>   </td>
                    <?php if ($this->session->userdata('username')<>"") {?>
                    <td>
                        <a href="<?= base_url('sd/edit/'.$value->id_sd); ?>" class="btn btn-success btn-sm">Edit</a> 
                        <a href="<?= base_url('sd/delete/'.$value->id_sd); ?>" class="btn btn-danger btn-sm" onclick=" return confirm('Apakah Ingin Hapus Data ?')">Hapus</a>  
                    </td>
                    <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>