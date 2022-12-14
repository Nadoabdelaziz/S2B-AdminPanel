
@if(auth()->user())
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
@endif

<?php

if(auth()->user()){

    $current_user_role = auth()->user()->role_user;
    $all_roles;
    foreach ($roles as $role) {
       if($role->role == $current_user_role){
        $all_roles = $role;
       }
    }
}





?>

@if(isset($all_roles) == 'true')
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{isset($all_roles->id) ? $all_roles->id : '' }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


        <!-- Heading -->
        <div class="sidebar-heading">
            Distributor
        </div>


        
    @if($all_roles->dist == '1')
        <!-- distributor -->

        <!-- Nav Item - Pages Collapse Menu -->
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDownDistr"
                aria-expanded="true" aria-controls="taTpDropDown">
                <i class="fas fa-user-alt"></i>
                <span>Distributor Management</span>
            </a>
            <div id="taTpDropDownDistr" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Distributor Management:</h6>
                    <a class="collapse-item" href="{{ route('distributor.index') }}">List</a>
                    
                    @if($all_roles->dist_add == '1')
                        <a class="collapse-item" href="{{ route('distributor.create') }}">Add New</a>
                        {{-- <a class="collapse-item" href="">Import Data</a> --}}
                    @endif    
                </div>
            </div>
        </li>


        <!-- end distributor  -->


        <!-- Divider -->
        <!-- <hr class="sidebar-divider">

        
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDownSales"
                aria-expanded="true" aria-controls="taTpDropDown">
                <i class="fas fa-user-alt"></i>
                <span>Sales Management</span>
            </a>
            <div id="taTpDropDownSales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Sales Management:</h6>
                    <a class="collapse-item" href="{{ route('distributor.index') }}">List</a>
                    <a class="collapse-item" href="{{ route('distributor.create') }}">Add New</a>
                    {{-- <a class="collapse-item" href="">Import Data</a> --}}
                </div>
            </div>
        </li> -->

    @endif

    <hr class="sidebar-divider">

    @if($all_roles->deal == '1')

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDownDeal"
                aria-expanded="true" aria-controls="taTpDropDown">
                <i class="fas fa-user-alt"></i>
                <span>Dealer Management</span>
            </a>
            <div id="taTpDropDownDeal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Dealer Management:</h6>
                    <a class="collapse-item" href="{{ route('dealer.index') }}">List</a>

                    @if($all_roles->deal_add == '1')
                        <a class="collapse-item" href="{{ route('dealer.create') }}">Add New</a>
                        {{-- <a class="collapse-item" href="">Import Data</a> --}}
                    @endif
                </div>
            </div>
        </li>
    @endif
    <hr>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if($all_roles->users == '1' )

        <!-- Heading -->
        <div class="sidebar-heading">
            Management
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#taTpDropDown"
                aria-expanded="true" aria-controls="taTpDropDown">
                <i class="fas fa-user-alt"></i>
                <span>User Management</span>
            </a>
            <div id="taTpDropDown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User Management:</h6>
                    <a class="collapse-item" href="{{route('users.index')}}">List</a>
                    
                    @if($all_roles->users_edit == '1')
                        <!-- <a class="collapse-item" href="">Edit</a>
                        <a class="collapse-item" href="">Import Data</a> -->
                    @endif    
                </div>
            </div>
        </li>

        @endif

        @if($all_roles->roles == '1' )


        <!-- Divider -->
        
        {{-- <hr class="sidebar-divider"> --}}
            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Admin Section
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Masters</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Role & Permissions</h6>
                        <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
                        <!-- <a class="collapse-item" href="">Permissions</a> -->
                    </div>
                </div>
            </li>

        @endif    
    

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <form action="logout" method="get">
            {{ csrf_field() }}
            <i class="fas fa-sign-out-alt"></i>
                <button type="submit"  class="btn btn-primary btn-block">
                    Logout
                </button>
            </form>
            <!-- <div>{{auth()->user()}}</div> -->
        </li>

    <!-- <form action="logout" method="get">
                {{ csrf_field() }}
                    <button type="submit"  class="btn btn-primary btn-block">
                        Logout
                    </button>
    </form> -->
                <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


    @endif
</ul>