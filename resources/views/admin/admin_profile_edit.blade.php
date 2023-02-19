@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-xl-10 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">EDIT ADMIN PROFILE </h6>
                    <p class="mg-b-30 tx-gray-600">Update the current admin users profile information.</p>

                    <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row row-xs">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Firstname:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" value="{{ $adminEditData->name }}" name="name" placeholder="Enter firstname">
                            </div>
                        </div><!-- row -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> User Name:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ $adminEditData->username }}" class="form-control" name="username" placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Email:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" value="{{ $adminEditData->email }}" name="email" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label">Profile Picture:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <label class="custom-file w-100">
                                    <input id="image" name="profile_image" type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div><!-- row -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label">Current Picture:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <img id="showImage" class="card-img-top img-fluid" src="{{ asset('backend/img/img12.jpg') }}" alt="Image">
                            </div>
                        </div><!-- row -->

                        <div class="row row-xs mg-t-30">
                            <div class="col-sm-8 mg-l-auto">
                                <div class="form-layout-footer">
                                    <input type="submit" class="btn btn-info" value="Update Profile">
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>

                    </form>

                </div><!-- card -->
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            console.log(e.target.result);
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection