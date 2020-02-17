
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Projects</h1>
        <a href="<?php echo base_url('/project/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card h-100 py-2">
                <div class="card-body table-responsive" style="min-height: 350px;">
                    <caption class="float-left">List of all projects</caption>
                    <br/>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Company</th>
                            <th scope="col">Created At</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($projects->num_rows() > 0): ?>
                            <?php foreach ($projects->result() as $key => $project): ?>
                            <tr>
                                <th scope="row"><?php echo ++$key ?></th>
                                <td>
                                <a href="<?php echo base_url("/project/details/$project->id") ?>" title="View">
                                    <?php echo $project->name ?>
                                </a>
                                </td>
                                <td><?php echo $project->description ?></td>
                                <td><?php echo $project->priority ?></td>
                                <td><?php echo $project->deadline ?></td>
                                <td><?php echo $project->company_id ?></td>
                                <td><?php echo date('Y-m-d', strtotime($project->created_at)) ?></td>
                                <td class="text-center">
                                <form method="post" action="<?php echo base_url("/project/destroy/$project->id") ?>">

                                    <a href="<?php echo base_url("/project/details/$project->id") ?>" class="mb-sm-1 mb-lg-0 mr-lg-1 btn btn-sm btn-info btn-icon-split" title="View">
                                        <span class="icon text-white-50">
                                        <i class="fa fa-eye"></i>
                                        </span>
                                    </a>

                                    <a href="<?php echo base_url("/project/edit/$project->id") ?>" class="mb-sm-1 mb-lg-0 btn btn-sm btn-success btn-icon-split" title="Edit">
                                        <span class="icon text-white-50">
                                        <i class="fa fa-pen"></i>
                                        </span>
                                    </a>
                                    
                                    <button type="submit" onclick="return confirm('Delete poject?')" class="mt-sm-1 mt-lg-0 ml-lg-1 btn btn-sm btn-danger btn-icon-split" title="Delete">
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
