
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Companies</h1>
        <a href="<?php echo base_url('/company/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card h-100 py-2">
                <div class="card-body table-responsive" style="min-height: 350px;">
                    <caption class="float-left">List of all companies</caption>
                    <br/>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($companies->num_rows() > 0): ?>
                            <?php foreach ($companies->result() as $key => $company): ?>
                            <tr>
                                <th scope="row"><?php echo ++$key ?></th>
                                <td>
                                <a href="<?php echo base_url("/company/details/$company->id") ?>" title="View">
                                    <?php echo $company->name ?>
                                </a>
                                </td>
                                <td><?php echo $company->address ?></td>
                                <td><?php echo $company->contact_no ?></td>
                                <td><?php echo $company->email ?></td>
                                <td><?php echo date('Y-m-d', strtotime($company->created_at)) ?></td>
                                
                                <td class="text-center">
                                <form method="post" action="<?php echo base_url("/company/destroy/$company->id") ?>">

                                    <a href="<?php echo base_url("/company/details/$company->id") ?>" class="mb-sm-1 mb-lg-0 mr-lg-1 btn btn-sm btn-info btn-icon-split" title="View">
                                        <span class="icon text-white-50">
                                        <i class="fa fa-eye"></i>
                                        </span>
                                    </a>

                                    <a href="<?php echo base_url("/company/edit/$company->id") ?>" class="mb-sm-1 mb-lg-0 btn btn-sm btn-success btn-icon-split" title="Edit">
                                        <span class="icon text-white-50">
                                        <i class="fa fa-pen"></i>
                                        </span>
                                    </a>
                                    
                                    <button type="submit" onclick="return confirm('Delete company?')" class="mt-sm-1 mt-lg-0 ml-lg-1 btn btn-sm btn-danger btn-icon-split" title="Delete">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </button>
                                </form>
                                    
                                </td>
                            </tr>
                            <?php endforeach ?>

                        <?php else: ?>
                            <tr>
                            <th scope="row" colspan="12" class="text-center">No data found</th>
                            </tr>
                        <?php endif ?>
                        
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
