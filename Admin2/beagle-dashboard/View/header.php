<nav class="navbar navbar-expand fixed-top be-top-header">
     <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="?action=home"></a>
          </div>
          <div class="page-title"><span>Dashboard</span></div>
          <div class="be-right-navbar">
               <ul class="nav navbar-nav float-right be-user-nav">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets\img\avatar.png" alt="Avatar"><span class="user-name"><?= $_SESSION['name_admin'] ?></span></a>
                         <div class="dropdown-menu" role="menu">
                              <div class="user-info">
                                   <div class="user-name"><?= $_SESSION['name_admin'] ?></div>
                                   <div class="user-position online">Available</div>
                              </div><a class="dropdown-item" href="?action=admin&act=profile_admin"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a class="dropdown-item" href="?action=admin&act=logout_admin"><span class="icon mdi mdi-power"></span>Logout</a>
                         </div>
                    </li>
               </ul>
               <ul class="nav navbar-nav float-right be-icons-nav">
                    <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                         <ul class="dropdown-menu be-notifications">
                              <li>
                                   <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                                   <div class="list">
                                        <div class="be-scroller-notifications">
                                             <div class="content">
                                                  <ul>
                                                       <li class="notification notification-unread"><a href="#">
                                                                 <div class="image"><img src="assets\img\avatar2.png" alt="Avatar"></div>
                                                                 <div class="notification-info">
                                                                      <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                                                 </div>
                                                            </a></li>
                                                       <li class="notification"><a href="#">
                                                                 <div class="image"><img src="assets\img\avatar3.png" alt="Avatar"></div>
                                                                 <div class="notification-info">
                                                                      <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                                                 </div>
                                                            </a></li>
                                                       <li class="notification"><a href="#">
                                                                 <div class="image"><img src="assets\img\avatar4.png" alt="Avatar"></div>
                                                                 <div class="notification-info">
                                                                      <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                                                 </div>
                                                            </a></li>
                                                       <li class="notification"><a href="#">
                                                                 <div class="image"><img src="assets\img\avatar5.png" alt="Avatar"></div>
                                                                 <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div>
                                                            </a></li>
                                                  </ul>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="footer"> <a href="#">View all notifications</a></div>
                              </li>
                         </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                         <ul class="dropdown-menu be-connections">
                              <li>
                                   <div class="list">
                                        <div class="content">
                                             <div class="row">
                                                  <div class="col"><a class="connection-item" href="#"><img src="assets\img\github.png" alt="Github"><span>GitHub</span></a></div>
                                                  <div class="col"><a class="connection-item" href="#"><img src="assets\img\bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                                                  <div class="col"><a class="connection-item" href="#"><img src="assets\img\slack.png" alt="Slack"><span>Slack</span></a></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><a class="connection-item" href="#"><img src="assets\img\dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                                                  <div class="col"><a class="connection-item" href="#"><img src="assets\img\mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                                                  <div class="col"><a class="connection-item" href="#"><img src="assets\img\dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="footer"> <a href="#">More</a></div>
                              </li>
                         </ul>
                    </li>
               </ul>
          </div>
     </div>
</nav>
<div class="be-left-sidebar">
     <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
               <div class="left-sidebar-scroll">
                    <div class="left-sidebar-content">
                         <ul class="sidebar-elements">
                              <li class="divider">Menu</li>
                              <li class="<?php if (!isset($_GET['action']) || $_GET['action'] == 'home') echo "active" ?>"><a href="?action=home"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                              </li>
                              <li class="parent <?php if (isset($_GET['action']) && $_GET['action'] == 'order') echo "active" ?>"><a href="#"><span>Danh sách đơn hàng</span></a>
                                   <ul class="sub-menu">
                                        <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'order' && $_GET['act'] == 'order_history' && !isset($_GET['status'])) echo "active" ?>">
                                             <a href="?action=order&act=order_history">Tất cả đơn hàng</a>
                                        </li>
                                        <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'order' && $_GET['act'] == 'order_history' && isset($_GET['status']) && $_GET['status'] == 1) echo "active" ?>">
                                             <a href="?action=order&act=order_history&status=1">Đơn hàng mới nhận</a>
                                        <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'order' && $_GET['act'] == 'order_history' && isset($_GET['status']) && $_GET['status'] == 2) echo "active" ?>">
                                             <a href="?action=order&act=order_history&status=2">Đơn hàng đang giao</a>
                                        </li>
                                        <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'order' && $_GET['act'] == 'order_history' && isset($_GET['status']) && $_GET['status'] == 3) echo "active" ?>">
                                             <a href="?action=order&act=order_history&status=3">Đơn hàng đã giao</a>
                                        </li>
                                        <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'order' && $_GET['act'] == 'order_history' && isset($_GET['status']) && $_GET['status'] == 4) echo "active" ?>">
                                             <a href="?action=order&act=order_history&status=4">Đơn hàng đã hủy</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'product') echo "active" ?>"><a href="?action=product">Product</a>
                              <li class="<?php if (isset($_GET['action']) && $_GET['action'] == 'category') echo "active" ?>"><a href="?action=category">Category</a>
                              <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="charts-flot.html">Flot</a>
                                        </li>
                                        <li><a href="charts-sparkline.html">Sparklines</a>
                                        </li>
                                        <li><a href="charts-chartjs.html">Chart.js</a>
                                        </li>
                                        <li><a href="charts-morris.html">Morris.js</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="form-elements.html">Elements</a>
                                        </li>
                                        <li><a href="form-validation.html">Validation</a>
                                        </li>
                                        <li><a href="form-multiselect.html">Multiselect</a>
                                        </li>
                                        <li><a href="form-wizard.html">Wizard</a>
                                        </li>
                                        <li><a href="form-masks.html">Input Masks</a>
                                        </li>
                                        <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                        </li>
                                        <li><a href="form-upload.html">Multi Upload</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="tables-general.html">General</a>
                                        </li>
                                        <li><a href="tables-datatables.html">Data Tables</a>
                                        </li>
                                        <li><a href="tables-filters.html"><span class="badge badge-primary float-right">New</span>Table Filters</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="pages-blank.html">Blank Page</a>
                                        </li>
                                        <li><a href="pages-blank-header.html">Blank Page Header</a>
                                        </li>
                                        <li><a href="pages-login.html">Login</a>
                                        </li>
                                        <li><a href="pages-login2.html">Login v2</a>
                                        </li>
                                        <li><a href="pages-404.html">404 Page</a>
                                        </li>
                                        <li><a href="pages-sign-up.html">Sign Up</a>
                                        </li>
                                        <li><a href="pages-forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li><a href="pages-profile.html">Profile</a>
                                        </li>
                                        <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                                        </li>
                                        <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                                        </li>
                                        <li><a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li><a href="pages-timeline2.html">Timeline v2</a>
                                        </li>
                                        <li><a href="pages-invoice.html"><span class="badge badge-primary float-right">New</span>Invoice</a>
                                        </li>
                                        <li><a href="pages-calendar.html">Calendar</a>
                                        </li>
                                        <li><a href="pages-gallery.html">Gallery</a>
                                        </li>
                                        <li><a href="pages-code-editor.html"><span class="badge badge-primary float-right">New </span>Code Editor</a>
                                        </li>
                                        <li><a href="pages-booking.html"><span class="badge badge-primary float-right">New</span>Booking</a>
                                        </li>
                                        <li><a href="pages-loaders.html"><span class="badge badge-primary float-right">New</span>Loaders</a>
                                        </li>
                                        <li><a href="pages-ajax-loader.html"><span class="badge badge-primary float-right">New</span>AJAX Loader</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="divider">Features</li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="email-inbox.html">Inbox</a>
                                        </li>
                                        <li><a href="email-read.html">Email Detail</a>
                                        </li>
                                        <li><a href="email-compose.html">Email Compose</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="layouts-primary-header.html">Primary Header</a>
                                        </li>
                                        <li><a href="layouts-success-header.html">Success Header</a>
                                        </li>
                                        <li><a href="layouts-warning-header.html">Warning Header</a>
                                        </li>
                                        <li><a href="layouts-danger-header.html">Danger Header</a>
                                        </li>
                                        <li><a href="layouts-search-input.html">Search Input</a>
                                        </li>
                                        <li><a href="layouts-offcanvas-menu.html">Off Canvas Menu</a>
                                        </li>
                                        <li><a href="layouts-top-menu.html"><span class="badge badge-primary float-right">New</span>Top Menu</a>
                                        </li>
                                        <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                        </li>
                                        <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                        </li>
                                        <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                        </li>
                                        <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                        </li>
                                        <li><a href="layouts-boxed-layout.html"><span class="badge badge-primary float-right">New</span>Boxed Layout</a>
                                        </li>
                                        <li><a href="pages-blank-aside.html">Page Aside</a>
                                        </li>
                                        <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                                        </li>
                                        <li><a href="layouts-sub-navigation.html"><span class="badge badge-primary float-right">New</span>Sub Navigation</a>
                                        </li>
                                        <li><a href="layouts-mega-menu.html"><span class="badge badge-primary float-right">New</span>Mega Menu</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                                   <ul class="sub-menu">
                                        <li><a href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li><a href="maps-vector.html">Vector Maps</a>
                                        </li>
                                   </ul>
                              </li>
                              <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu Levels</span></a>
                                   <ul class="sub-menu">
                                        <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                             <ul class="sub-menu">
                                                  <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                  </li>
                                                  <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                       <ul class="sub-menu">
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                       </ul>
                                                  </li>
                                             </ul>
                                        </li>
                                        <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                             <ul class="sub-menu">
                                                  <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                  </li>
                                                  <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                       <ul class="sub-menu">
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                       </ul>
                                                  </li>
                                             </ul>
                                        </li>
                                   </ul>
                              </li>
                              <li><a href="documentation.html"><i class="icon mdi mdi-book"></i><span>Documentation</span></a>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
          <div class="progress-widget">
               <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
               <div class="progress">
                    <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
               </div>
          </div>
     </div>
</div>