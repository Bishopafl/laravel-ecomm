@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-xl-10 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">CHANGE ADMIN PROFILE </h6>
                    <p class="mg-b-30 tx-gray-600">Update the current admin users password.</p>

                    @if (count($errors))
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                        @endforeach
                    @endif

                    <form method="POST" action="{{ route('admin.update.password') }}">
                        @csrf

                        <div class="row row-xs mb-4">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Old Password:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="password" id="oldpassword" class="form-control" name="oldpassword" placeholder="Old Password">
                            </div>
                        </div><!-- row -->

                        <div class="row row-xs mb-4">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> New Password:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="password" id="newpassword" class="form-control" name="newpassword" placeholder="New Password">
                            </div>
                        </div><!-- row -->

                        <div class="row row-xs">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Confirm Password:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="New Password">
                            </div>
                        </div><!-- row -->

                        <div class="row row-xs mg-t-30">
                            <div class="col-sm-8 mg-l-auto">
                                <div class="form-layout-footer">
                                    <input type="submit" class="btn btn-info" value="Change Password">
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>

                    </form>

                </div><!-- card -->
            </div>
        </div>
    </div>
</div>

@endsection