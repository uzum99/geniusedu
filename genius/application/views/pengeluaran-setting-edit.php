<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/css') ?>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        
        <?php $this->load->view('components/topbar') ?>

        <?php $this->load->view('components/sidebar') ?>

        
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">

            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="page-title">EDIT KATEGORI PENGELUARAN</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <?php foreach ($kategori as $k) { ?>
                    <form action="<?php echo base_url('pengeluaran/setting/edit/aksi/').$k->kategoripengeluaran_id ?>" method="post">
                        Kategori Pengeluaran:
                        <input class="form-control mb-3" type="text" name="nama" value="<?php echo $k->kategoripengeluaran_nama ?>" required>

                        <a class="btn btn-warning" href="<?php echo base_url('pengeluaran/setting') ?>">Kembali</a>
                        <input class="btn btn-primary" type="submit" value="Simpan"> 
                    </form>
                    <?php } ?>
                    
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
            
            <?php $this->load->view('components/footer') ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    
    <?php $this->load->view('components/js') ?>

    <script type="text/javascript">

        $( document ).ready(function() {
            
        });
        
    </script>
</body>

</html>