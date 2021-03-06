<div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Main sidebar</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				<div class="card card-sidebar-mobile">

					<!-- Header -->
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Navigation</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>
					
					<!-- User menu -->
					<div class="sidebar-user">
						<div class="card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">{{ Auth::user()->first_name }}</div>
									<div class="font-size-xs opacity-50">
										<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="ml-3 align-self-center">
									<a href="#" class="text-white"><i class="icon-cog3"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

					
					<!-- Main navigation -->
					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">

							<!-- Main -->
							<li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
							<li class="nav-item">
								<a href="{{url('dashboard')}}" class="nav-link <?php if($menu=='dashboard'){ echo "active"; } ?> ">
									<i class="icon-home4"></i>
									<span>
										Dashboard
										<span class="d-block font-weight-normal opacity-50">No active orders</span>
									</span>
								</a>
							</li>
							<li class="nav-item nav-item-submenu <?php if($menu=='user_management'){ echo "nav-item-open"; } ?>">
								<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Users Management</span></a>

								<ul class="nav nav-group-sub" data-submenu-title="Layouts"<?php if($menu=='user_management'){ ?> style="display:block" <?php } ?>>
									<li class="nav-item"><a href="{{url('users')}}" class="nav-link <?php if($sub_menu=='users'){ echo "active"; } ?>">Users</a></li>
									<li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
									<li class="nav-item"><a href="index.html" class="nav-link">Layout 3</a></li>
									<li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
									<li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
									<li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Package Setting</span></a>

								<ul class="nav nav-group-sub" data-submenu-title="Themes">
									<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
									<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
									<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
									<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Price Management</span></a>

								<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
									<li class="nav-item"><a href="{{url('price-management')}}" class="nav-link">Price</a></li>
									<li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
									<li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">2 sidebars</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
											<li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
										</ul>
									</li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">3 sidebars</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
											<li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
										</ul>
									</li>
									<li class="nav-item"><a href="../seed/sidebar_sections.html" class="nav-link">Sectioned sidebar</a></li>
									<li class="nav-item"><a href="../seed/sidebar_stretched.html" class="nav-link">Stretched sidebar</a></li>
									<li class="nav-item-divider"></li>
									<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
									<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
									<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
									<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
								</ul>
							</li>
							<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>Order List &amp; Detail View</span></a></li>
							<!-- /main -->
							
							<!-- Layout -->
										<li class="nav-item nav-item-submenu <?php if($menu=='driver_management'){ echo "nav-item-open"; } ?>">
								<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Driver Management</span></a>

								<ul class="nav nav-group-sub" data-submenu-title="Page layouts" <?php if($menu=='driver_management'){ ?> style="display:block" <?php } ?>>
									<li class="nav-item"><a href="{{url('drivers')}}" class="nav-link <?php if($sub_menu=='driver'){ echo "active"; } ?>">Drivers</a></li>
									<li class="nav-item"><a href="{{url('track-drivers')}}" class="nav-link <?php if($sub_menu=='driver_track'){ echo "active"; } ?>"">Track Drivers</a></li>
		
									<li class="nav-item"><a href="layout_without_header.html" class="nav-link">Without page header</a></li>
									<li class="nav-item-divider"></li>
									<li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
									<li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
							
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-page-break2"></i> <span>Vendor Management</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Content styling">
									<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
									<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Subscription Management</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">Main sidebar</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
											<li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
											<li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
											<li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
											<li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
											<li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
											<li class="nav-item-divider"></li>
											<li class="nav-item"><a href="sidebar_default_sections.html" class="nav-link">Sectioned sidebar</a></li>
											<li class="nav-item"><a href="sidebar_default_stretched.html" class="nav-link">Stretched sidebar</a></li>
											<li class="nav-item"><a href="sidebar_default_color_dark.html" class="nav-link">Dark color</a></li>
											<li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
											<li class="nav-item"><a href="sidebar_default_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
										</ul>
									</li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">Secondary sidebar</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
											<li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
											<li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
											<li class="nav-item-divider"></li>
											<li class="nav-item"><a href="sidebar_secondary_sections.html" class="nav-link">Sectioned sidebar</a></li>
											<li class="nav-item"><a href="sidebar_secondary_stretched.html" class="nav-link">Stretched sidebar</a></li>
											<li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
											<li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
											<li class="nav-item"><a href="sidebar_secondary_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
										</ul>
									</li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">Right sidebar</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
											<li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
											<li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
											<li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
											<li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
											<li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
											<li class="nav-item-divider"></li>
											<li class="nav-item"><a href="sidebar_right_sections.html" class="nav-link">Sectioned sidebar</a></li>
											<li class="nav-item"><a href="sidebar_right_stretched.html" class="nav-link">Stretched sidebar</a></li>
											<li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
											<li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
											<li class="nav-item"><a href="sidebar_right_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
										</ul>
									</li>
									<li class="nav-item-divider"></li>
									<li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Push Notification</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Navbars">
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">Single navbar</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
											<li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
											<li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
											<li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
										</ul>
									</li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">Multiple navbars</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
											<li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
											<li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
											<li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
											<li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
											<li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
										</ul>
									</li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link">Content navbar</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
											<li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
										</ul>
									</li>
									<li class="nav-item-divider"></li>
									<li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
									<li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
									<li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
									<li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
									<li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
									<li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
									<li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
									<li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
									<li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
									<li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
									<li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
									<li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
									<li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
									<li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
									<li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
									<li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
									<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
									<li class="nav-item nav-item-submenu">
										<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
										<ul class="nav nav-group-sub">
											<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
											<li class="nav-item nav-item-submenu">
												<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
												<ul class="nav nav-group-sub">
													<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
													<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
												</ul>
											</li>
											<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
										</ul>
									</li>
									<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
								</ul>
							</li>
							<!-- /layout -->
								
						</ul>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /sidebar content -->
			
		</div>
		