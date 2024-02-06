<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <div class="user">
            <div class="avatar-sm float-left mr-2">
                <img src="{{asset('assets/img/arashmil.jpg')}}" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        {{ Auth::user()->user }}
                        <span class="user-level">
                            @if(Auth::user()->role === 0)
                                User
                            @elseif(Auth::user()->role === 1)
                                Admin
                            @endif
                        </span>
                        {{-- <span class="caret"></span> --}}
                    </span>
                </a>
                {{-- <div class="clearfix"></div> --}}

                {{-- <div class="collapse in" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <ul class="nav nav-primary">
            <li class="nav-item" >
                <a  href="" class="collapsed" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <p>Produk</p>
                    <!-- <span class="caret"></span>  -->
                </a>

            </li>

            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Produk</h4>
            </li>








            {{-- <li class="nav-item {{ (request()->is('blok1/dashboard-blok1')) ? 'active' : '' }}">
                <a href="{{route('pengenalan')}}">
                    <i class="far fa-question-circle"></i>
                    <p>Pengenalan Tempat Usaha</p>
                    <!-- <span class="badge badge-count">6</span>  -->
                </a>
            </li>
            </li>
            <li class="nav-item {{ (request()->is('excel/import-excel')) ? 'active' : '' }}">
                <a href="{{route('excel.import')}}">
                    <i class="far fa-question-circle"></i>
                    <p>Faqs</p>
                    <!-- <span class="badge badge-count">6</span> -->
                </a>
            </li> --}}
        </ul>
    </div>
</div>
