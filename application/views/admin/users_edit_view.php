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
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b><i class="fa fa-edit"></i> Edit Data Users</b></h4>
                    <p class="text-muted m-b-30 font-13">Edit Users</p>
                    <p>Fields with * are required.</p>

                    <form class="form-horizontal" role="form" action="<?php echo site_url('admin/users/updatedata'); ?>" method="post" enctype="multipart/form-data"> 
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $detail->user_username; ?>">

                    <div class="row">
                        <div class="col-md-12">                                    
                            <div class="form-group">
                                <label class="col-md-3 control-label">Username *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $detail->user_username; ?>"  readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password *</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" value="" name="password" placeholder="Input Password" autocomplete="off">
                                    <p>*) Isi Password jika ingin diubah.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">N I P *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nip" placeholder="Input N I P" value="<?php echo $detail->user_nip; ?>"  autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nama Lengkap *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nama" placeholder="Input Nama Lengkap" value="<?php echo $detail->user_nama; ?>"  autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jabatan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="jabatan" placeholder="Input Jabatan" value="<?php echo $detail->user_jabatan; ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="col-md-3 control-label">Level *</label> 
                                <div class="col-md-4">
                                    <select class="form-control" name="lstLevel" required>
                                        <option value="">- Pilih Level User -</option>
                                        <option value="Admin" <?php if ($detail->user_level == 'Admin') { echo 'selected'; } ?>>Admin</option>
                                        <option value="Operator" <?php if ($detail->user_level == 'Operator') { echo 'selected'; } ?>>Operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="col-md-3 control-label">Status *</label> 
                                <div class="col-md-4">
                                    <select class="form-control" name="lstStatus" required>
                                        <option value="">- Pilih Status -</option>
                                        <option value="Aktif" <?php if ($detail->user_status == 'Aktif') { echo 'selected'; } ?>>Aktif</option>
                                        <option value="Tidak Aktif" <?php if ($detail->user_status == 'Tidak Aktif') { echo 'selected'; } ?>>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">Avatar</label> 
                                <div class="col-md-9">
                                    <?php if (empty($detail->user_image)) { ?>
                                    <img src="<?php echo base_url(); ?>img/noimage.png" alt="" />
                                    <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>img/avatar/<?php echo $detail->user_image; ?>" alt="" />
                                    <?php }?>                                    
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Upload Avatar</label> 
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="<?php echo base_url(); ?>img/noimage.png" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                        <div>
                                            <span class="btn btn-blue btn-file">
                                            <span class="fileupload-new"><i class="icon-paper-clip"></i> Browse</span>
                                            <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="userfile" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix margin-top-10">
                                        <span class="label label-danger">NOTE !</span>
                                        <span>Resolution : 60 x 60 pixel (Landscape)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <a href="<?php echo site_url('admin/users'); ?>" class="btn btn-warning btn-custom waves-effect waves-light btn-sm"><i class="fa fa-times"></i> Cancel</a>
                    <button type="submit" class="btn btn-info btn-custom waves-effect waves-light btn-sm"><i class="fa fa-floppy-o"></i> Update</button>

                    </form>
                </div>
            </div>
        </div>

        
    </div>
</div>