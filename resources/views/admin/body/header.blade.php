<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
        </div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                    class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->

    @php
        $id = Auth::user()->id;
        $userAdminData = Auth::user($id);
    @endphp

    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{ $userAdminData->name }}</span>
                    <img src="{{ (!empty($userAdminData->profile_image)) ? url('upload/admin_images/'.$userAdminData->profile_image) : url('upload/no_image.jpg') }}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="{{ route('admin.profile') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href="{{ route('admin.change.password') }}"><i class="icon ion-ios-gear-outline"></i> Change Password</a></li>
                        <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                        <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- sl-header-right -->


</div><!-- sl-header -->