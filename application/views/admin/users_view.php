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

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Users</h4>
                <ol class="breadcrumb"></ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">                    
                    <h4 class="m-t-0 header-title"><b>Users List</b></h4>
                    <br>
                    <a href="<?php echo site_url('admin/users/adddata'); ?>">
                        <button type="button" class="btn btn-primary btn-custom waves-effect waves-light btn-sm"><i class="fa fa-plus-circle"></i> Add Data</button>
                    </a>
                    <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">Username</th>
                                <th width="15%">N I P</th>
                                <th>Nama Lengkap</th>
                                <th width="15%">Jabatan</th>
                                <th width="15%">Level</th>
                                <th width="10%">Avatar</th>
                                <th width="8%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach($listData as $r) {
                                $user_username = $r->user_username;
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $r->user_username; ?></td>
                                <td><?php echo $r->user_nip; ?></td>
                                <td><?php echo $r->user_nama; ?></td>
                                <td><?php echo $r->user_jabatan; ?></td>
                                <td><?php echo $r->user_level; ?></td>
                                <td>
                                    <?php 
                                    if (empty($r->user_image)) {
                                    ?>
                                    <img src="<?php echo base_url(); ?>img/avatar.png" width="50%">
                                    <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>img/avatar/<?php echo $r->user_image; ?>" width="50%">
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('admin/users/editdata').'/'.$user_username; ?>">
                                        <button type="button" class="btn btn-warning btn-custom waves-effect waves-light btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit
                                        </button>
                                    </a>
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