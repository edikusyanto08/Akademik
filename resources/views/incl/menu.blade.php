@inject('menu','Akademik\MenuFetcher')
<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
		<div>
			<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="expanded">
			<a href="../../html/dashboards/dashboard.html">
				<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
			</a>
		</div>
	</div>
	<div class="menubar-scroll-panel">
	
		<!-- BEGIN MAIN MENU -->
		<ul id="main-menu" class="gui-controls">
			<?php $role = Session::get('EmployerRole')  ?>
			@foreach ($menu->lists($role) as $menu)

				@if (isset($menu['inGroup'])) 
					<li class="gui-folder {{in_array($menu['route'],explode('.',Route::currentRouteName()))? 'active expand':''}}" >
						
						<a> 
							<div class="gui-icon"><i class="{{$menu['icon']}}"></i></div>
							<span class="title">{{$menu['name']}}</span>
						</a>
						<ul>
						@foreach ($menu['inGroup'] as $group )
							<li>
								<a href="{{ route("$role.".$menu['route'].'.'.$group['route'].'.index') }}" >
									<span class="title">
										<span class="{{$group['icon']}}"></span>
										{{$group['name']}}
									</span>
								</a>
							</li>
						@endforeach
						</ul>
							
					</li>
				@else
					<li  {{ in_array($menu['route'],explode('.',Route::currentRouteName()))? 'class="active"':'' }}>
						<a href="{{ route($role.'.'.$menu['route']) }}"> 
							<div class="gui-icon"><i class="{{$menu['icon']}}"></i></div>
							<span class="title">{{$menu['name']}}</span>
						</a>
					</li>
				@endif
			@endforeach 
		</ul><!--end .main-menu -->
		<!-- END MAIN MENU -->

		<div class="menubar-foot-panel">
			<small class="no-linebreak hidden-folded">
				<span class="opacity-75">Copyright &copy; {{date('Y')}}</span> <strong>@TriasBrata</strong>
			</small>
		</div>
	</div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->