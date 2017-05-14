<?php 
$uri = $this->uri->segment(2);

if ($uri == 'home') {
    $dashboard      = 'active';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'provinsi') {
    $dashboard      = '';
    $area           = 'active subdrop';
    $provinsi       = 'active';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'kabupaten') {
    $dashboard      = '';
    $area           = 'active subdrop';
    $provinsi       = '';
    $kabupaten      = 'active';
    $kecamatan      = '';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'kecamatan') {
    $dashboard      = '';
    $area           = 'active subdrop';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = 'active';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'desa') {
    $dashboard      = '';
    $area           = 'active subdrop';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = 'active';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'pekerjaan') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = 'active subdrop';
    $pekerjaan      = 'active';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'penghasilan') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = 'active subdrop';
    $pekerjaan      = '';
    $penghasilan    = 'active';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'pengeluaran') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = 'active subdrop';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = 'active';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'status_tanah') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = 'active subdrop';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = 'active';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'bukti_tanah') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = 'active subdrop';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = 'active';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'pemilik_rumah') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = 'active subdrop';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = 'active';
    $rtlh           = '';
    $users          = '';
} elseif ($uri == 'rtlh') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = 'active';
    $users          = '';
} elseif ($uri == 'users') {
    $dashboard      = '';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = 'active';
} else {
    $dashboard      = 'active';
    $area           = '';
    $provinsi       = '';
    $kabupaten      = '';
    $kecamatan      = '';
    $desa           = '';
    $master         = '';
    $pekerjaan      = '';
    $penghasilan    = '';
    $pengeluaran    = '';
    $status_tanah   = '';
    $bukti_tanah    = '';
    $pemilik_rumah  = '';
    $rtlh           = '';
    $users          = 'active';
}
?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li>
                    <a href="<?php echo base_url(); ?>" class="waves-effect <?php echo $dashboard; ?>"><i class="fa fa-home"></i> <span> Dashboard </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo $area; ?>"><i class="fa fa-globe"></i> <span> Area </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li class="<?php echo $provinsi; ?>"><a href="<?php echo site_url('admin/provinsi'); ?>">Provinsi</a></li>
                        <li class="<?php echo $kabupaten; ?>"><a href="<?php echo site_url('admin/kabupaten'); ?>">Kabupaten/Kota</a></li>
                        <li class="<?php echo $kecamatan; ?>"><a href="<?php echo site_url('admin/kecamatan'); ?>">Kecamatan</a></li>
                        <li class="<?php echo $desa; ?>"><a href="<?php echo site_url('admin/desa'); ?>">Desa/Kelurahan</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo $master; ?>"><i class="fa fa-tasks"></i> <span> Master </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li class="<?php echo $pekerjaan; ?>"><a href="<?php echo site_url('admin/pekerjaan'); ?>">Pekerjaan</a></li>
                        <li class="<?php echo $penghasilan; ?>"><a href="<?php echo site_url('admin/penghasilan'); ?>">Penghasilan</a></li>
                        <li class="<?php echo $pengeluaran; ?>"><a href="<?php echo site_url('admin/pengeluaran'); ?>">Pengeluaran /Bulan</a></li>
                        <li class="<?php echo $status_tanah; ?>"><a href="<?php echo site_url('admin/status_tanah'); ?>">Status Tanah</a></li>
                        <li class="<?php echo $bukti_tanah; ?>"><a href="<?php echo site_url('admin/bukti_tanah'); ?>">Bukti Kepemilikan Tanah</a></li>
                        <li class="<?php echo $pemilik_rumah; ?>"><a href="<?php echo site_url('admin/pemilik_rumah'); ?>">Status Kepemilikan Rumah</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/rtlh'); ?>" class="waves-effect <?php echo $rtlh; ?>"><i class="md-account-balance"></i> <span> Data RTLH </span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/users'); ?>" class="waves-effect <?php echo $users; ?>"><i class="fa fa-users"></i> <span> Users </span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>