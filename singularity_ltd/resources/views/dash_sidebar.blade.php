<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Singularity Ltd.</h4>
                   
				</div>
				<div class="toggle-icon ms-auto">
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

            
				<li>
					<a href="{{ route('home') }}" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					
				</li>



            @if ($data = Auth::user()->role == 'Super Admin')

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title"> Role</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('roles.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage Role</a>
                        </li>
                        
                    </ul>
                </li>
            @endif


                
            @if ($data = Auth::user()->role == 'Admin')
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Users</div>
					</a>
					<ul>
						<li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>Users List</a>
						</li>
						
					</ul>
				</li>
          



                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Outlets</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Manage Product</a>
						</li>
						
					</ul>
				</li>


                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Product</div>
					</a>
					<ul>
						<li> <a href="{{ route('products.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage Product</a>
						</li>
						
					</ul>
				</li>
            @endif
				
					
			</ul>

            
			<!--end navigation-->
		</div>