<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-mini"><img src="{{ asset('icon.png') }}" width="25px" alt=""></a>
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-normal">Sewing Machine</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('default.png') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            
            <li class="nav-item @routeis('admin.user.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#user">
                    <i class="material-icons">groups</i><p> user<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.user.*') show @endrouteis" id="user">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.user.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.user.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> User List </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="nav-item @routeis('admin.category.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#category">
                    <i class="material-icons">groups</i><p> category<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.category.*') show @endrouteis" id="category">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.category.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.category.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> category List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.category.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.category.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add catarory </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.brand.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#brand">
                    <i class="material-icons">groups</i><p> brand<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.brand.*') show @endrouteis" id="brand">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.brand.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.brand.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Brand List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.brand.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.brand.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add Brand </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.product.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#product">
                    <i class="material-icons">groups</i><p> Product<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.product.*') show @endrouteis" id="product">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.product.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.product.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Product List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.product.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.product.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add product </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
