
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Company</h1>
        <a href="<?php echo base_url('/company'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Go to companies</a>
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

                        <form class="user" method="POST" action="<?php  echo base_url('/company/store')?>">
                            <!-- @csrf -->
                            <!-- {{-- @method('POST') --}} -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Company name"/>
                                <!-- <div class="invalid-feedback">
                                    {{ (isset(session('error')['first_name'])) ? session('error')['first_name'][0] : '' }}
                                </div> -->
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                                <!-- <div class="invalid-feedback">
                                    {{ (isset(session('error')['address'])) ? session('error')['address'][0] : '' }}
                                </div> -->
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact No."/>
                                <!-- <div class="invalid-feedback">
                                    {{ (isset(session('error')['contact_no'])) ? session('error')['contact_no'][0] : '' }}
                                </div> -->
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <!-- <div class="invalid-feedback">
                                    {{ (isset(session('error')['email'])) ? session('error')['email'][0] : '' }}
                                </div> -->
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
