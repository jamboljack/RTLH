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
                        Kabupaten / Kota
                    </li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">                    
                    <h4 class="m-t-0 header-title"><b>Kabupaten / Kota List</b></h4>
                    <br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Provinsi</th>
                                <th>Kabupaten/Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach($listData as $r) {
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $r->provinsi_nama; ?></td>
                                <td><?php echo $r->kabupaten_nama; ?></td>
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