<!-- Notifikasi -->
<?php
if ($this->session->flashdata('notification')) { ?>
<script>
    swal({
        title: "Done",
        text: "<?php echo $this->session->flashdata('notification'); ?>",
        timer: 2000,
        showConfirmButton: false,
        type: 'success'
    });
</script>
<? } ?>
<!-- Edit Data -->
<script type="text/javascript">
    $(function() {
        $(document).on("click",'.edit_button', function(e) {
            var id          = $(this).data('id');
            var provinsi    = $(this).data('provinsi');
            var kabupaten   = $(this).data('kabupaten');
            var nama        = $(this).data('nama');
            $(".id").val(id);
            $(".provinsi").val(provinsi);
            $(".kabupaten").val(kabupaten);
            $(".nama").val(nama);
        })
    });
</script>

<div id="adddata" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Data Kecamatan</h4> 
            </div>
            
            <form action="<?php echo site_url('admin/kecamatan/savedata'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="modal-body">
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label class="control-label">Provinsi</label> 
                            <select class="form-control" name="lstProvinsi" readonly>
                                <?php foreach($listProvinsi as $p) { ?>
                                <option value="<?php echo $p->provinsi_id; ?>"><?php echo $p->provinsi_nama; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label class="control-label">Kabupaten/Kota</label> 
                            <select class="form-control" name="lstKabupaten" readonly>
                                <?php foreach($listKabupaten as $k) { ?>
                                <option value="<?php echo $k->kabupaten_id; ?>"><?php echo $k->kabupaten_nama; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label class="control-label">Kecamatan</label> 
                            <input type="text" class="form-control" placeholder="Input Kecamatan" name="nama" autocomplete="off" required> 
                        </div> 
                    </div> 
                </div>
                
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-warning btn-custom waves-effect btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button> 
                    <button type="submit" class="btn btn-info btn-custom waves-effect waves-light btn-sm"><i class="fa fa-floppy-o"></i> Save</button> 
                </div> 
            </div>
            </form>

        </div>
    </div>
</div>

<div id="editdata" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Data Kecamatan</h4> 
            </div>
            
            <form action="<?php echo site_url('admin/kecamatan/updatedata'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <input type="hidden" class="form-control id" name="id">

            <div class="modal-body">
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label class="control-label">Provinsi</label> 
                            <select class="form-control provinsi" name="lstProvinsi" readonly>
                                <?php foreach($listProvinsi as $p) { ?>
                                <option value="<?php echo $p->provinsi_id; ?>"><?php echo $p->provinsi_nama; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label class="control-label">Kabupaten/Kota</label> 
                            <select class="form-control kabupaten" name="lstKabupaten" readonly>
                                <?php foreach($listKabupaten as $k) { ?>
                                <option value="<?php echo $k->kabupaten_id; ?>"><?php echo $k->kabupaten_nama; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label class="control-label">Kecamatan</label> 
                            <input type="text" class="form-control nama" placeholder="Input Kecamatan" name="nama" autocomplete="off" required> 
                        </div> 
                    </div> 
                </div>

                <div class="modal-footer"> 
                    <button type="button" class="btn btn-warning btn-custom waves-effect btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button> 
                    <button type="submit" class="btn btn-info btn-custom waves-effect waves-light btn-sm"><i class="fa fa-floppy-o"></i> Update</button> 
                </div> 
            </div>
            </form>

        </div>
    </div>
</div>


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Area</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Area</a>
                    </li>
                    <li class="active">
                        Kecamatan
                    </li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">                    
                    <h4 class="m-t-0 header-title"><b>Kecamatan List</b></h4>
                    <br>
                    <button type="button" class="btn btn-primary btn-custom waves-effect waves-light btn-sm" data-toggle="modal" data-target="#adddata"><i class="fa fa-plus-circle"></i> Add Data</button>
                    <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%%">Kabupaten</th>
                                <th>Kecamatan</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach($listData as $r) {
                                $kecamatan_id = $r->kecamatan_id;
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $r->kabupaten_nama; ?></td>
                                <td><?php echo $r->kecamatan_nama; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-custom waves-effect waves-light btn-xs edit_button" data-toggle="modal" data-target="#editdata" data-id="<?php echo $r->kecamatan_id; ?>" data-provinsi="<?php echo $r->provinsi_id; ?>" data-kabupaten="<?php echo $r->kabupaten_id; ?>" data-nama="<?php echo $r->kecamatan_nama; ?>" title="Edit Data"><i class="icon-pencil"></i> Edit
                                    </button>
                                </td>
                            </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>