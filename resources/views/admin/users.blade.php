@section('title')
Admin - Users
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Users</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-plus mr-2"></i>Add User</button>
                <!-- Modal -->
                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">First Name</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="useradd">Last Name</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="useradd">Email</label>
                                                <input type="text" class="form-control" id="useradd">
                                            </div>
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="userprofile">Profile</label>
                                            <select id="userstatus" class="form-control">
                                                <option selected>Select Profile...</option>
                                                <option value="salesmanager">Sales Manager</option>
                                                <option value="salesagent">Sales Agent</option>
                                                <option value="owneroperator">Owner Operator</option>
                                                <option value="mover">Mover</option>
                                                <option value="client">Client</option>
                                                <option value="affiliate">Affiliate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="hidden" class="form-control" id="useraddedon">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="usercontact">Phone</label>
                                            <input type="text" class="form-control" id="usercontact">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="doctorpic">Picture</label>
                                            <input type="file" class="form-control" id="doctorpic">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <!-- Start col -->
                <div class="card m-b-30 p-b-50">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">Categories</h5>
                            </div>
                            <div class="col-3">
                                <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="all">
                            <label class="custom-control-label" for="all">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="active" checked="">
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inactive">
                            <label class="custom-control-label" for="inactive">Inactive</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="manager">
                            <label class="custom-control-label" for="manager">Manager</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sales-agent">
                            <label class="custom-control-label" for="sales-agent">Sales Agent</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="owner-operator">
                            <label class="custom-control-label" for="owner-operator">Owner Operator</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="affiliate">
                            <label class="custom-control-label" for="affiliate">Affiliate</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="client">
                            <label class="custom-control-label" for="client">Client</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="mover">
                            <label class="custom-control-label" for="mover">Mover</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/boy.svg" class="img-fluid" alt="doctor">
                    <h5>John Doe</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Cardiac), Heart Surgeon</p>
                        <p>University of South Carolina</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-primary-inverse">SALES MANAGER</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/girl.svg" class="img-fluid" alt="doctor">
                    <h5>Rodney Macneal</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Ortho), Knee Specialist</p>
                        <p>University of Colorado</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-success-inverse">SALES AGENT</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/women.svg" class="img-fluid" alt="doctor">
                    <h5>Meghan Abo</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Ped.), NICU-PICU</p>
                        <p>South Medical Institute</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-warning-inverse">OWNER OPERATOR</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/men.svg" class="img-fluid" alt="doctor">
                    <h5>Kristie Aamdot</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Gynec), IVF Specialist</p>
                        <p>University of Simmer, Sola</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-danger-inverse">AFFILIATE</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->

        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/boy.svg" class="img-fluid" alt="doctor">
                    <h5>Neil Aaron</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (CardioVasl), Vacular Surgeon</p>
                        <p>NY Medical Science Institute</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-primary-inverse">MOVER</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/girl.svg" class="img-fluid" alt="doctor">
                    <h5>John Aase</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Oto), Eye Surgeon</p>
                        <p>University of Nevada</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-success-inverse">CLIENT</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/women.svg" class="img-fluid" alt="doctor">
                    <h5>Naomi Wattson</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Cosmet), Skin Care Specialist</p>
                        <p>University of Memphis</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-warning-inverse">CLIENT</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/men.svg" class="img-fluid" alt="doctor">
                    <h5>Mark Wahlberg</h5>
                    <!-- <div class="doctor-detail">
                        <p class="mb-1">M.D (Gastro), Stomach Specialist</p>
                        <p>University of Florida</p>
                    </div> -->
                    <p class="mb-0"><span class="badge badge-danger-inverse">CLIENT</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
