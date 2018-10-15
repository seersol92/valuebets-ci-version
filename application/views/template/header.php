<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" ">
    <meta name="keyword" content="">
    <title>ValueBets</title>
    <!-- Icons-->
    <link href="<?=base_url()?>assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/app.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

  <header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <img class="navbar-brand-full" src="<?=base_url() ?>assets/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
    <img class="navbar-brand-minimized" src="<?=base_url() ?>assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto" style="margin-right: 30px;">
          <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
              <div class="dropdown-header text-center">
                <strong>You have 5 notifications</strong>
              </div>
              <a class="dropdown-item" href="#">
                <i class="icon-user-follow text-success"></i> New user registered</a>
              <a class="dropdown-item" href="#">
                <i class="icon-user-unfollow text-danger"></i> User deleted</a>
              <a class="dropdown-item" href="#">
                <i class="icon-chart text-info"></i> Sales report is ready</a>
              <a class="dropdown-item" href="#">
                <i class="icon-basket-loaded text-primary"></i> New client</a>
              <a class="dropdown-item" href="#">
                <i class="icon-speedometer text-warning"></i> Server overloaded</a>
              <div class="dropdown-header text-center">
                <strong>Server</strong>
              </div>
              <a class="dropdown-item" href="#">
                <div class="text-uppercase mb-1">
                  <small>
                    <b>CPU Usage</b>
                  </small>
                </div>
                <span class="progress progress-xs">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
              </a>
              <a class="dropdown-item" href="#">
                <div class="text-uppercase mb-1">
                  <small>
                    <b>Memory Usage</b>
                  </small>
                </div>
                <span class="progress progress-xs">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                <small class="text-muted">11444GB/16384MB</small>
              </a>
              <a class="dropdown-item" href="#">
                <div class="text-uppercase mb-1">
                  <small>
                    <b>SSD 1 Usage</b>
                  </small>
                </div>
                <span class="progress progress-xs">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                <small class="text-muted">243GB/256GB</small>
              </a>
            </div>
          </li>
        
          <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="icon-envelope-letter"></i>
              <span class="badge badge-pill badge-info">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
              <div class="dropdown-header text-center">
                <strong>You have 4 messages</strong>
              </div>
              <a class="dropdown-item" href="#">
                <div class="message">
                  <div class="py-3 mr-3 float-left">
                    <div class="avatar">
                      <img class="img-avatar" src="<?=base_url() ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                      <span class="avatar-status badge-success"></span>
                    </div>
                  </div>
                  <div>
                    <small class="text-muted">John Doe</small>
                    <small class="text-muted float-right mt-1">Just now</small>
                  </div>
                  <div class="text-truncate font-weight-bold">
                    <span class="fa fa-exclamation text-danger"></span> Important message</div>
                  <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="message">
                  <div class="py-3 mr-3 float-left">
                    <div class="avatar">
                      <img class="img-avatar" src="<?=base_url() ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                      <span class="avatar-status badge-warning"></span>
                    </div>
                  </div>
                  <div>
                    <small class="text-muted">John Doe</small>
                    <small class="text-muted float-right mt-1">5 minutes ago</small>
                  </div>
                  <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                  <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="message">
                  <div class="py-3 mr-3 float-left">
                    <div class="avatar">
                      <img class="img-avatar"src="<?=base_url() ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                      <span class="avatar-status badge-danger"></span>
                    </div>
                  </div>
                  <div>
                    <small class="text-muted">John Doe</small>
                    <small class="text-muted float-right mt-1">1:52 PM</small>
                  </div>
                  <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                  <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="message">
                  <div class="py-3 mr-3 float-left">
                    <div class="avatar">
                      <img class="img-avatar" src="<?=base_url() ?>assets/img/avatars/6.jpg"  alt="admin@bootstrapmaster.com">
                      <span class="avatar-status badge-info"></span>
                    </div>
                  </div>
                  <div>
                    <small class="text-muted">John Doe</small>
                    <small class="text-muted float-right mt-1">4:03 PM</small>
                  </div>
                  <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                  <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                </div>
              </a>
              <a class="dropdown-item text-center" href="#">
                <strong>View all messages</strong>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <img class="img-avatar" src="<?=base_url() ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
              <?php echo $first_name; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header text-center">
                <strong>Account</strong>
              </div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-bell-o"></i> Updates
                <span class="badge badge-info">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-envelope-o"></i> Messages
                <span class="badge badge-success">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-tasks"></i> Tasks
                <span class="badge badge-danger">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-comments"></i> Comments
                <span class="badge badge-warning">42</span>
              </a>
              <div class="dropdown-header text-center">
                <strong>Settings</strong>
              </div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-user"></i> Profile</a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-wrench"></i> Settings</a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-usd"></i> Payments
                <span class="badge badge-dark">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-file"></i> Projects
                <span class="badge badge-primary">42</span>
              </a>
              <div class="divider"></div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-shield"></i> Lock Account</a>
              <a class="dropdown-item" href="logout.php">
                <i class="fa fa-lock"></i> Logout</a>
            </div>
          </li>
        </ul>
  </header>
  
  <div class="app-body" style="overflow-x: unset;">
  <?php include 'sidebar.php'; ?>