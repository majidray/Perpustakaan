<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('anggota/create'); ?>">Anggota</a></li>
            <li class="active">Create Anggota</li>
        </ol>

        <?php
            echo validation_errors();
            //buat message nis
            if(!empty($message)) {
            echo $message;
            }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <div class="panel-heading">
                Create Anggota
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php
                //validasi error upload
                if(!empty($error)) {
                    echo $error;
                }
            ?>
            <?php echo form_open_multipart('anggota/insert', array('class' => 'form-horizontal', 'id' => 'jvalidate')) ?>

                <div class="form-group">
                    <p class="col-sm-2 text-left">NIS </p>

                    <div class="col-sm-10">
                        <input type="text" name="nis" class="form-control" placeholder="NIS" value="<?php echo set_value('nis'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Nama </p>

                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Jenis Kelamin </p>

                    <div class="col-sm-10">
                    <select name="jenis" class="form-control" >
                        <option value="">- Pilih Jenis -</option>
                        <option value="L" <?php echo set_select('jenis','L'); ?> >Laki Laki</option>
                        <option value="P" <?php echo set_select('jenis','P'); ?>>Perempuan</option>
                    </select>   
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Tanggal Lahir </p>

                    <div class="col-sm-10">
                        <input type="text" name="tgl_lahir" class="form-control" placeholder="yyyy-mm-dd, pakai -" id="tanggal"  value="<?php echo set_value('tgl_lahir'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kelas </p>

                    <div class="col-sm-10">
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas"  value="<?php echo set_value('kelas'); ?>">
                    </div>
                </div>

 <div class="form-group">
                    <p class="col-sm-2 text-left">Username </p>

                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>">
                    </div>
                </div>

                 <div class="form-group">
                    <p class="col-sm-2 text-left">Password </p>

                    <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
                    </div>
                </div>

                 <div class="form-group">
                    <p class="col-sm-2 text-left">Jenis level </p>

                    <div class="col-sm-10">
                    <select name="level" class="form-control" >
                        <option value="">- Pilih Jenis -</option>
                        <option value="anggota" <?php echo set_select('level','anggota'); ?> >Anggota</option>
                    </select>   
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        <div class="btn-group pull-left">
                            <?php echo anchor('anggota', 'Cancel', array('class' => 'btn btn-danger btn-sm')); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="btn-group pull-right">
                            <input type="submit" name="save" value="Save" class="btn btn-success btn-sm">
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/bootstrap-datepicker.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>



<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>



})



</script>