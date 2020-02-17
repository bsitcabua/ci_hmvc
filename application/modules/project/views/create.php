
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Project</h1>
        <a href="<?php echo base_url('/project'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Go to projects</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card h-100 py-2 m-auto w-50" style="min-width: 350px">
                <div class="card-body" style="min-height: 350px;">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Project Details</h1>
                        </div>

                        <!-- @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(session('msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('msg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif -->

                        <form class="user" method="POST" action="<?php  echo base_url('/project/store')?>">
                            
                            <div class="form-group">
                                <label for="company_id">Select Company</label>
                                <select class="form-control" id="company_id" name="company_id">
                                <?php if($companies->num_rows() > 0): ?>
                                    <?php foreach($companies->result() as $ompany): ?>
                                        <option value="<?php echo $ompany->id ?>"><?php echo $ompany->name ?></option>
                                    <?php endforeach ?>
                                <?php endif ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Project name"/>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control" name="deadline" id="deadline" />
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="select_priority" name="priority">
                                    <option value="Normal">Normal</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Urgent">Urgent</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">Create Company</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
