<?php
// Session start
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Si no ha iniciado sesión, redireccionar al formulario de inicio de sesión
  header('Location: login.php');
  exit();
}

?>





<!-- include component head -->
<?php include 'components/head-logged-in.php' ?>

<body>
  <div class="pre-loader">
    <div class="pre-loader-box">
      <div class="loader-logo">
        <!-- <img src="vendors/images/deskapp-logo.svg" alt="" /> -->
        <img src="src/images/logo_elp.gif" class="w-40" alt="">
      </div>
      <div class="loader-progress" id="progress_div">
        <div class="bar" id="bar1"></div>
      </div>
      <div class="percent" id="percent1">0%</div>
      <div class=" text-sm text-center animation-pulse">Cargando...</div>
    </div>
  </div>


  <!-- include component nav -->
  <?php include 'components/nav.php' ?>

  <div class="right-sidebar">
    <div class="sidebar-title">
      <h3 class="weight-600 font-16 text-blue">
        Layout Settings
        <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
      </h3>
      <div class="close-sidebar" data-toggle="right-sidebar-close">
        <i class="icon-copy ion-close-round"></i>
      </div>
    </div>
    <div class="right-sidebar-body customscroll">
      <div class="right-sidebar-body-content">
        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
        <div class="sidebar-btn-group pb-30 mb-10">
          <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
          <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
        </div>

        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
        <div class="sidebar-btn-group pb-30 mb-10">
          <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
          <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
        </div>

        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
        <div class="sidebar-radio-group pb-10 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="" />
            <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2" />
            <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3" />
            <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
          </div>
        </div>

        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
        <div class="sidebar-radio-group pb-30 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="" />
            <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2" />
            <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3" />
            <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="" />
            <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5" />
            <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6" />
            <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
          </div>
        </div>

        <div class="reset-options pt-30 text-center">
          <button class="btn btn-danger" id="reset-settings">
            Reset Settings
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- include left sidebar -->
  <?php include 'components/left-sidebar.php' ?>

  <div class="mobile-menu-overlay"></div>
  <div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
      <div class="title pb-20">
        <h2 class="h3 mb-0">Hospital Overview</h2>
      </div>

      <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">75</div>
                <div class="font-14 text-secondary weight-500">
                  Appointment
                </div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#00eccf">
                  <i class="icon-copy dw dw-calendar1"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">124,551</div>
                <div class="font-14 text-secondary weight-500">
                  Total Patient
                </div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#ff5b5b">
                  <span class="icon-copy ti-heart"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">400+</div>
                <div class="font-14 text-secondary weight-500">
                  Total Doctor
                </div>
              </div>
              <div class="widget-icon">
                <div class="icon">
                  <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">$50,000</div>
                <div class="font-14 text-secondary weight-500">Earning</div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#09cc06">
                  <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row pb-10">
        <div class="col-md-8 mb-20">
          <div class="card-box height-100-p pd-20">
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
              <div class="h5 mb-md-0">Hospital Activities</div>
              <div class="form-group mb-md-0">
                <select class="form-control form-control-sm selectpicker">
                  <option value="">Last Week</option>
                  <option value="">Last Month</option>
                  <option value="">Last 6 Month</option>
                  <option value="">Last 1 year</option>
                </select>
              </div>
            </div>
            <div id="activities-chart"></div>
          </div>
        </div>
        <div class="col-md-4 mb-20">
          <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
            <div class="d-flex justify-content-between pb-20 text-white">
              <div class="icon h1 text-white">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
              </div>
              <div class="font-14 text-right">
                <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                <div class="font-12">Since last month</div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
              <div class="text-white">
                <div class="font-14">Appointment</div>
                <div class="font-24 weight-500">1865</div>
              </div>
              <div class="max-width-150">
                <div id="appointment-chart"></div>
              </div>
            </div>
          </div>
          <div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
            <div class="d-flex justify-content-between pb-20 text-white">
              <div class="icon h1 text-white">
                <i class="fa fa-stethoscope" aria-hidden="true"></i>
              </div>
              <div class="font-14 text-right">
                <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                <div class="font-12">Since last month</div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
              <div class="text-white">
                <div class="font-14">Surgery</div>
                <div class="font-24 weight-500">250</div>
              </div>
              <div class="max-width-150">
                <div id="surgery-chart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-20">
          <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="d-flex justify-content-between pb-10">
              <div class="h5 mb-0">Top Doctors</div>
              <div class="dropdown">
                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown">
                  <i class="dw dw-more"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                  <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                  <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                  <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                </div>
              </div>
            </div>
            <div class="user-list">
              <ul>
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="vendors/images/photo1.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="" />
                    </div>
                    <div class="txt">
                      <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
                      <div class="font-14 weight-600">Dr. Neil Wagner</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">
                        Pediatrician
                      </div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                  </div>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="vendors/images/photo2.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="" />
                    </div>
                    <div class="txt">
                      <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
                      <div class="font-14 weight-600">Dr. Ren Delan</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">
                        Pediatrician
                      </div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                  </div>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="vendors/images/photo3.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="" />
                    </div>
                    <div class="txt">
                      <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
                      <div class="font-14 weight-600">Dr. Garrett Kincy</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">
                        Pediatrician
                      </div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                  </div>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="vendors/images/photo4.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="" />
                    </div>
                    <div class="txt">
                      <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
                      <div class="font-14 weight-600">Dr. Callie Reed</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">
                        Pediatrician
                      </div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-20">
          <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="d-flex justify-content-between">
              <div class="h5 mb-0">Diseases Report</div>
              <div class="dropdown">
                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown">
                  <i class="dw dw-more"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                  <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                  <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                  <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                </div>
              </div>
            </div>

            <div id="diseases-chart"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-20">
          <div class="card-box height-100-p pd-20 min-height-200px">
            <div class="max-width-300 mx-auto">
              <img src="vendors/images/upgrade.svg" alt="" />
            </div>
            <div class="text-center">
              <div class="h5 mb-1">Upgrade to Pro</div>
              <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
                You can enjoy all our features by upgrading to pro.
              </div>
              <a href="#" class="btn btn-primary btn-lg">Upgrade</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Recent Patient</div>
        <table class="data-table table nowrap">
          <thead>
            <tr>
              <th class="table-plus">Name</th>
              <th>Gender</th>
              <th>Weight</th>
              <th>Assigned Doctor</th>
              <th>Admit Date</th>
              <th>Disease</th>
              <th class="datatable-nosort">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo4.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Jennifer O. Oster</div>
                  </div>
                </div>
              </td>
              <td>Female</td>
              <td>45 kg</td>
              <td>Dr. Callie Reed</td>
              <td>19 Oct 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Typhoid</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo5.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Doris L. Larson</div>
                  </div>
                </div>
              </td>
              <td>Male</td>
              <td>76 kg</td>
              <td>Dr. Ren Delan</td>
              <td>22 Jul 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo6.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Joseph Powell</div>
                  </div>
                </div>
              </td>
              <td>Male</td>
              <td>90 kg</td>
              <td>Dr. Allen Hannagan</td>
              <td>15 Nov 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Infection</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo9.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Jake Springer</div>
                  </div>
                </div>
              </td>
              <td>Female</td>
              <td>45 kg</td>
              <td>Dr. Garrett Kincy</td>
              <td>08 Oct 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Covid 19</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo1.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Paul Buckland</div>
                  </div>
                </div>
              </td>
              <td>Male</td>
              <td>76 kg</td>
              <td>Dr. Maxwell Soltes</td>
              <td>12 Dec 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Asthma</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo2.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Neil Arnold</div>
                  </div>
                </div>
              </td>
              <td>Male</td>
              <td>60 kg</td>
              <td>Dr. Sebastian Tandon</td>
              <td>30 Oct 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Diabetes</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo8.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Christian Dyer</div>
                  </div>
                </div>
              </td>
              <td>Male</td>
              <td>80 kg</td>
              <td>Dr. Sebastian Tandon</td>
              <td>15 Jun 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Diabetes</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                  <div class="avatar mr-2 flex-shrink-0">
                    <img src="vendors/images/photo1.jpg" class="border-radius-100 shadow" width="40" height="40" alt="" />
                  </div>
                  <div class="txt">
                    <div class="weight-600">Doris L. Larson</div>
                  </div>
                </div>
              </td>
              <td>Male</td>
              <td>76 kg</td>
              <td>Dr. Ren Delan</td>
              <td>22 Jul 2020</td>
              <td>
                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span>
              </td>
              <td>
                <div class="table-actions">
                  <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                  <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="title pb-20 pt-20">
        <h2 class="h3 mb-0">Quick Start</h2>
      </div>

      <div class="row">
        <div class="col-md-4 mb-20">
          <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
            <div class="img pb-30">
              <img src="vendors/images/medicine-bro.svg" alt="" />
            </div>
            <div class="content">
              <h3 class="h4">Services</h3>
              <p class="max-width-200">
                We provide superior health care in a compassionate maner
              </p>
            </div>
          </a>
        </div>
        <div class="col-md-4 mb-20">
          <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
            <div class="img pb-30">
              <img src="vendors/images/remedy-amico.svg" alt="" />
            </div>
            <div class="content">
              <h3 class="h4">Medications</h3>
              <p class="max-width-200">
                Look for prescription and over-the-counter drug information.
              </p>
            </div>
          </a>
        </div>
        <div class="col-md-4 mb-20">
          <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
            <div class="img pb-30">
              <img src="vendors/images/paper-map-cuate.svg" alt="" />
            </div>
            <div class="content">
              <h3 class="h4">Locations</h3>
              <p class="max-width-200">
                Convenient locations when and where you need them.
              </p>
            </div>
          </a>
        </div>
      </div>

      <div class="footer-wrap pd-20 mb-20 card-box">
        DeskApp - Bootstrap 4 Admin Template By
        <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
      </div>
    </div>
  </div>

  <!-- welcome modal end -->
  <!-- js -->
  <script src="vendors/scripts/core.js"></script>
  <script src="vendors/scripts/script.min.js"></script>
  <script src="vendors/scripts/process.js"></script>
  <script src="vendors/scripts/layout-settings.js"></script>
  <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
  <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
  <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
  <script src="vendors/scripts/dashboard3.js"></script>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</body>

</html>