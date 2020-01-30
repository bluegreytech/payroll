 <?php 
     $this->load->view('common/header.php');
     $this->load->view('common/sidebar.php');
?>
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">
        <?php if(($this->session->flashdata('error'))){ ?>
        <div class="alert alert-danger" id="errorMessage">
            <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
        </div>
        <?php } ?>
        <?php if(($this->session->flashdata('success'))){ ?>
        <div class="alert alert-success" id="successMessage">
            <strong> <?php echo $this->session->flashdata('success'); ?></strong> 
        </div>
        <?php } ?>
        <?php if(($this->session->flashdata('warning'))){ ?>
        <div class="alert alert-warning" id="warningMessage">
            <strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
        </div>
        <?php } ?>
        <!-- Page Title -->
     
       
       
        <div class="row">
            <div class="col-md-12">
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>WARNING!</strong> <?php echo NO_RIGHTS; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

<?php $this->load->view('common/footer');?>
               
    