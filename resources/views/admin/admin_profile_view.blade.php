@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="card pd-20 pd-sm-40">
                  <h6 class="card-body-title">Profile Information</h6>
                  <p class="mg-b-20 mg-sm-b-30">Places an image to the top of the card.</p>
    
                  <div class="card bd-0 wd-xs-300">
                    <img class="card-img-top img-fluid" src="{{ asset('backend/img/img12.jpg') }}" alt="Image">
                    <div class="card-body bd bd-t-0">
                      <h6>Name : <span class="tx-dark"> {{ $adminData->name }}</span> </h6>
                      <h6>Username : <span class="tx-dark"> {{ $adminData->username }}</span> </h6>
                      <h6>Email : <span class="tx-dark"> {{ $adminData->email }}</span> </h6>
                      <hr>
                      <a class="btn btn-warning btn-block mg-b-10" href="{{ route('edit.profile') }}">Edit Profile</a>
                      <span class="tx-12">Last updated: {{ $adminData->updated_at }}</span>
                    </div>
                  </div>
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>

@endsection