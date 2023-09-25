@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp



<aside class="main-sidebar"> 
    <!-- sidebar-->
    <section class="sidebar">	
        
        <div class="user-profile">
            <div class="ulogo">
                 <a href="index.html">
                  <!-- logo for regular state and mobile devices -->
                     <div class="d-flex align-items-center justify-content-center">					 	
                          <img src="{{asset('backend/images/logo.png')}}" alt="">
                          <h3><b>ADMIN </b> </h3> <h4>Dashboard</h4>
                     </div>
                </a>
            </div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
          
        <li class="{{ ($route == 'dashboard')?'active':'' }}" >
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
            <span>Dashboard</span>
          </a>
        </li>  
        
        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="users"></i>
            <span>Users Record</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}}  "><i class="ti-more"></i>Show User</a></li>
            <li><a href="{{route('user.add')}}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
          
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>User Profile </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.view')}}"><i class="ti-more"></i> MY Profile </a></li>
            <li><a href="{{route ('password.view')}}"><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
          <a href="#">
            <i data-feather="settings"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('student.class.view')}}"><i class="ti-more"></i> Student Class</a></li>
            <li><a href="{{ route('student.year.view')}}"><i class="ti-more"></i> Student Batch Year </a></li>
            <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a></li>
            <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Student Shift</a></li>
            <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
            <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
            <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type Setup</a></li>
            <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>Subject Setup</a></li>
            <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i> Assign Subject Setup</a></li>


          </ul>
        </li>
        
       		  
         
        <li class="header nav-small-cap"></li>
          
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i></a></li>
            <li><a href=""><i class="ti-more"></i> </a></li>
          </ul>
        </li>       
        
      </ul>
    </section>
    
    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
  </aside>