 <?php
 $list = App\Models\GlobalModel::LinkList();
 ?>


 <!--header-->
 <header class="top-header">
     <form action="/search" method="POST" id="form-search">
         @csrf
         <nav class="navbar navbar-expand">
             <div class="left-topbar d-flex align-items-center">
                 <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
                 </a>
             </div>

             <div class="right-topbar ml-auto">
                 <ul class="navbar-nav">

                     {{-- account login --}}
                     <li class="nav-item dropdown dropdown-user-profile">
                         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                             data-toggle="dropdown">
                             <div class="media user-box align-items-center">
                                 <div class="media-body user-info">
                                     <p class="user-name mb-0">Jessica Doe</p>
                                     <p class="designattion mb-0 text-success">Available</p>
                                 </div>
                                 <img src="https://via.placeholder.com/110x110" class="user-img"
                                     alt="user avatar">
                             </div>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item"
                                 href="/user-profile"><i class="bx bx-user"></i><span>Profile</span></a>

                             <div class="dropdown-divider mb-0"></div> <a class="dropdown-item" href="/user-profile"><i
                                     class="bx bx-power-off"></i><span>Logout</span></a>
                         </div>
                     </li>

                 </ul>
             </div>
         </nav>
     </form>
 </header>
 <!--end header-->
