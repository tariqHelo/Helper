
<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            @can('Dashboard')
                <li class="nav-item start ">
                    <a href="{{ route('statics') }}" class="nav-link nav-toggle">
                        <i class="icon-map"></i>
                        <span class="title">Dashboard</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endcan
        @can('Governance')
            <li class="nav-item start ">
                <a href="{{ route('governance.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">Governance</span>
                    <span class="arrow"></span>
                </a>

            </li>
        @endcan
        @can('Assigenment')
            <li class="nav-item start ">
                <a href="{{ route('assigenment.index') }}" class="nav-link nav-toggle">
                    <i class="icon-support"></i>
                    <span class="title">Assignments</span>
                    <span class="arrow"></span>
                </a>

            </li>
        @endcan
        @can('Risk_Mangment')

            <li class="nav-item start ">
                <a href="{{ route('riskMangment.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-laptop"></i>
                    <span class="title">Risk Mangment</span>
                    <span class="arrow"></span>
               </a>
            </i>
        @endcan
        @can('Excele_Risk')
             <li class="nav-item start ">
                <a href="{{ route('Excelerisk.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-laptop"></i>
                    <span class="title">xxxx</span>
                    <span class="arrow"></span>
               </a>
            </i>
        @endcan
		@can('User_Mangmant')
            <li class="last ">
                <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span class="title">Users Mangment</span>
                <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('permissions.index') }}">
                        Permissions</a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}">
                        Rols </a>
                        
                    </li>
                        <li>
                        <a href="{{ route('users.index') }}">
                        Users </a>
                    </li>
                </ul>
            </li>
        @endcan
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
