<div class="col-lg-7">
<div class="panel panel-primary">
            <div class="panel-heading">
            Lokasi Sekolah Dasar
            </div>
                <div class="panel-body">
                <?= $map['html']; ?>
                </div>
    </div>
</div>

<div class="col-lg-5">
<div class="panel panel-primary">
            <div class="panel-heading">
            lokasi Sekolah Dasar
            </div>
                <div class="panel-body">
                <!--form input data-->
                <?php echo form_open('sd/input');?>
                <div class="form-group">
                    <label>Nama Sekolah Dasar</label>
                    <input class="form-control" name="nama_sd" placeholder="Nama Sekolah Dasar" required>
                 </div>

                <?php echo form_open('sd/input');?>
                <div class="form-group">
                    <label>No Telpone</label>
                    <input class="form-control" name="no_tlp" placeholder="Nomor Telpone" required>
                 </div>

                 <?php echo form_open('sd/input');?>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" placeholder="Alamat" required>
                 </div>

                <?php echo form_open('sd/input');?>
                <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" name="latitude" placeholder="Latitude" required readonly>
                 </div>

                <?php echo form_open('sd/input');?>
                <div class="form-group">
                    <label>Longitude</label>
                    <input class="form-control" name="longitud" placeholder="Longitude" required readonly>
                </div>

                <?php echo form_open('sd/input');?>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi"  cols="50" required></textarea>
                </div>

                <?php echo form_open('sd/input');?>
                <div class="form-group">
                    
                    <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                    <button class="btn btn-Success btn-sm" type="reset">Reset</button>
                    
                 </div>

                <?php echo form_close(); ?>
                <!--form input data-->
                </div>
    </div>
</div>
