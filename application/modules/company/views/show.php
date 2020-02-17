
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Company</h1>
        <a href="<?php echo base_url('/company'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Go to projects</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card h-100 py-2 m-auto w-50" style="min-width: 350px">
                <div class="card-body" style="min-height: 350px;">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Company Details</h1>
                        </div>
                        <div class="float-right">
                            <a href="<?php echo base_url("/company/edit/$company->id") ?>"><i class="fa fa-pen text-danger" title="Update" style="cursor:pointer"></i></a>
                        </div>
                        <div class="form-group">
                            Name: <?php echo $company->name ?>
                        </div>

                        <div class="form-group">
                            Address: <?php echo $company->address ?>
                        </div>

                        <div class="form-group">
                            Contact No.: <?php echo $company->contact_no ?>
                        </div>

                        <div class="form-group">
                            Eamil: <?php echo $company->email ?>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
