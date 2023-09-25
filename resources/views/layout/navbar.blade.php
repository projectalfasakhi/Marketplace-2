<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
    <div class="container-fluid">
        <div class="collapse" id="search-nav">

            {{-- Ie teh search --}}
            <form class="navbar-left navbar-form nav-search mr-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-search pr-1">
                            <i class="fa fa-search search-icon"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                </div>
            </form>
        </div>
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                </a>
                <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                    <li>
                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                            Messages
                            <a href="#" class="small">Mark all as read</a>
                        </div>
                    </li>
                    <li>
                        <div class="message-notif-scroll scrollbar-outer">
                            <div class="notif-center">
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Jimmy Denis</span>
                                        <span class="block">
                                            How are you ?
                                        </span>
                                        <span class="time">5 minutes ago</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Chad</span>
                                        <span class="block">
                                            Ok, Thanks !
                                        </span>
                                        <span class="time">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Jhon Doe</span>
                                        <span class="block">
                                            Ready for the meeting today...
                                        </span>
                                        <span class="time">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="../assets/img/talha.jpg" alt="Img Profile">
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Talha</span>
                                        <span class="block">
                                            Hi, Apa Kabar ?
                                        </span>
                                        <span class="time">17 minutes ago</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="notification">4</span>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                    <li>
                        <div class="dropdown-title">You have 4 new notification</div>
                    </li>
                    <li>
                        <div class="notif-scroll scrollbar-outer">
                            <div class="notif-center">
                                <a href="#">
                                    <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            New user registered
                                        </span>
                                        <span class="time">5 minutes ago</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            Rahmad commented on Admin
                                        </span>
                                        <span class="time">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                    </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            Reza send messages to you
                                        </span>
                                        <span class="time">12 minutes ago</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            Farrah liked Admin
                                        </span>
                                        <span class="time">17 minutes ago</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fas fa-layer-group"></i>
                </a>
                <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                    <div class="quick-actions-header">
                        <span class="title mb-1">Quick Actions</span>
                        <span class="subtitle op-8">Shortcuts</span>
                    </div>
                    <div class="quick-actions-scroll scrollbar-outer">
                        <div class="quick-actions-items">
                            <div class="row m-0">
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-file-1"></i>
                                        <span class="text">Generated Report</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-database"></i>
                                        <span class="text">Create New Database</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-pen"></i>
                                        <span class="text">Create New Post</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-interface-1"></i>
                                        <span class="text">Create New Task</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-list"></i>
                                        <span class="text">Completed Tasks</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-file"></i>
                                        <span class="text">Create New Invoice</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <div class="dropdown">
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div>
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ $details['image'] }}" />
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['name'] }}</p>
                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                <div class="u-text">
                                    <h4>Hizrian</h4>
                                    <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">My Balance</a>
                            <a class="dropdown-item" href="#">Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Account Setting</a>
                            <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }} 
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                           
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
