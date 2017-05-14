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
                    <h4 class="m-t-0 header-title"><b><i class="fa fa-plus-circle"></i> Add Data Users</b></h4>
                    <p class="text-muted m-b-30 font-13">Input Users</p>
                    <p>Fields with * are required.</p>

                    <form class="form-horizontal" role="form" action="<?php echo site_url('admin/users/savedata'); ?>" method="post" enctype="multipart/form-data"> 
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="row">
                        <div class="col-md-12">                                    
                            <div class="form-group">
                                <label class="col-md-3 control-label">Username *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo set_value('username'); ?>" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Jangan Gunakan SPASI, Max. 20 Karakter" placeholder="Input Username" autocomplete="off" autofocus required>
                                    <?php echo form_error('username', '<p class="help-block alert-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password *</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" value="" name="password" placeholder="Input Password" autocomplete="off" required>
                                    <?php echo form_error('password', '<p class="help-block alert-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">N I P *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nip" placeholder="Input N I P" value="<?php echo set_value('nip'); ?>"  autocomplete="off" required>
                                    <?php echo form_error('nip', '<p class="help-block alert-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nama Lengkap *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nama" placeholder="Input Nama Lengkap" value="<?php echo set_value('nama'); ?>"  autocomplete="off" required>
                                    <?php echo form_error('nama', '<p class="help-block alert-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jabatan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="jabatan" placeholder="Input Jabatan" value="<?php echo set_value('jabatan'); ?>"  autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="col-md-3 control-label">Level *</label> 
                                <div class="col-md-4">
                                    <select class="form-control" name="lstLevel" required>
                                        <option value="">- Pilih Level User -</option>
                                        <option value="Admin" <?php echo set_select('lstLevel', 'Admin'); ?>>Admin</option>
                                        <option value="Operator" <?php echo set_select('lstLevel', 'Operator'); ?>>Operator</option>
                                    </select>
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
                    <button type="submit" class="btn btn-info btn-custom waves-effect waves-light btn-sm"><i class="fa fa-floppy-o"></i> Save</button>

                    </form>
                </div>
            </div>
        </div>

        
    </div>
</div>