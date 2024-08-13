<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Attendance System - Dashboard </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
     <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
      <!-- am chart export.css -->
      <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                     
                          <li class="user-profile header-notification">
                            <a href="#!" class="waves-effect waves-light">
    <img src="{{ asset('assets/images/Placeholder_Person.jpg') }}" class="img-radius" alt="User-Profile-Image">
    <span>{{ Auth::user()->name }}</span>
    <i class="ti-angle-down"></i>
</a>

                              <ul class="show-notification profile-notification">
                                
                                    <li class="waves-effect waves-light">
                                        <a href="{{ route('profile.show') }}">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                
                                    <li class="waves-effect waves-light">
                                        <a href="{{ route('logout') }}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                            <div class="main-menu-header">
    <img class="img-80 img-radius" src="{{ asset('assets/images/Placeholder_Person.jpg') }}" alt="User-Profile-Image">
    <div class="user-details">
        <span id="more-details">{{ Auth::check() ? Auth::user()->name : 'Guest' }}<i class="fa fa-caret-down"></i></span>
    </div>
</div>

        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="{{ route('profile.show') }}"><i class="ti-user"></i>View Profile</a>
                                          <a  href="{{ route('logout') }}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                                 <li class="">
                                  <a href="{{ route('generate.qr') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Generate QR</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                            
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Users &amp; Teachers List</div>
                          <ul class="pcoded-item pcoded-left-item">
                               <li>
    <a href="{{ route('show.users.list') }}" class="waves-effect waves-dark">
        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Users List</span>
        <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="">
                                  <a href="{{ route('register.teacher.form') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Register Teachers</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('show.teachers.list') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Teachers List</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Reports</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="{{ route('report.daily') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Daily Report</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('report.weekly') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Weekly Report</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('report.monthly') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Monthly Report</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('report.yearly') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Yearly Report</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                         
        
                          </ul>
        
            
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Dashboard</h5>
                                          <p class="m-b-0">Welcome to Mega Able</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                         <div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-purple">{{ $totalStudents }}</h4>
                    <h6 class="text-muted m-b-0">Total Students</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="fa fa-users f-28"></i>
                </div>
            </div>
        </div>
         <div class="card-footer bg-c-purple">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">New Enrollments</p>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-arrow-up text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-green">{{ $totalTeachers }}</h4>
                    <h6 class="text-muted m-b-0">Total Teachers</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="fa fa-chalkboard-teacher f-28"></i>
                </div>
            </div>
        </div>
     <div class="card-footer bg-c-green">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">New Hires</p>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-arrow-up text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-red">{{ $averageDailyAttendance }}</h4>
                    <h6 class="text-muted m-b-0">Daily Attendance</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="fa fa-calendar-day f-28"></i>
                </div>
            </div>
        </div>
               <div class="card-footer bg-c-red">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">Compared to Yesterday</p>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-arrow-down text-white f-16"></i>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-blue">{{ $averageWeeklyAttendance }}</h4>
                    <h6 class="text-muted m-b-0">Weekly Attendance</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="fa fa-calendar-week f-28"></i>
                </div>
            </div>
        </div>
       <div class="card-footer bg-c-blue">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">Compared to Last Week</p>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-arrow-up text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>

                                            <!-- task, page, download counter  end -->
    
                                            <!--  sale analytics start -->
                                      <div class="col-xl-8 col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Student, Teacher, and Attendance Analytics</h5>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                    <li><button id="downloadImage" class="btn btn-outline-primary">Download as Image</button></li>
                    <li><button id="downloadPDF" class="btn btn-outline-secondary">Download as PDF</button></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <canvas id="analyticsChart" style="height: 400px;"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('analyticsChart').getContext('2d');
        var analyticsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    'January', 'February', 'March', 'April', 'May', 'June', 
                    'July', 'August', 'September', 'October', 'November', 'December'
                ],
                datasets: [
                    {
                        label: 'Students',
                        data: @json(array_values($monthlyStudentData)),
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                    },
                    {
                        label: 'Teachers',
                        data: @json(array_values($monthlyTeacherData)),
                        borderColor: 'rgba(153, 102, 255, 1)',
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        fill: true,
                    },
                    {
                        label: 'Attendance',
                        data: @json(array_values($monthlyAttendanceData)),
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true,
                    },
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true,
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            title: function(tooltipItems) {
                                return tooltipItems[0].label; // Display the label of the hovered point
                            },
                            label: function(tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw; // Display the value of the hovered point
                            }
                        }
                    }
                }
            }
        });

        // Download chart as Image
        document.getElementById('downloadImage').addEventListener('click', function() {
            var a = document.createElement('a');
            a.href = analyticsChart.toBase64Image();
            a.download = 'analytics-chart.png';
            a.click();
        });

        // Download chart as PDF
        document.getElementById('downloadPDF').addEventListener('click', function() {
            html2canvas(document.getElementById('analyticsChart')).then(function(canvas) {
                var imgData = canvas.toDataURL('image/png');
                var pdf = new jspdf.jsPDF('landscape');
                pdf.addImage(imgData, 'PNG', 10, 10, 280, 150);
                pdf.save('analytics-chart.pdf');
            });
        });
    });
</script>
<div class="col-xl-4 col-md-12">
    <div class="card">
        <div class="card-block">
            <h6 class="text-muted m-b-15">Attendance Overview</h6>

            <!-- This Day -->
            <h4>{{ $attendanceToday }}</h4>
            <p class="text-muted">This Day Attendance</p>
            <div class="progress">
                <div class="progress-bar bg-c-blue" style="width: {{ ($attendanceToday / $totalStudents) * 100 }}%"></div>
            </div>

            <!-- This Week -->
            <h5 class="m-t-15">{{ $averageWeeklyAttendance }}</h5>
            <p class="text-muted">This Week Attendance</p>
            <div class="progress">
                <div class="progress-bar bg-c-green" style="width: {{ ($averageWeeklyAttendance / $totalStudents) * 100 }}%"></div>
            </div>

            <!-- This Month -->
            <h5 class="m-t-15">{{ $attendanceMonth }}</h5>
            <p class="text-muted">This Month Attendance</p>
            <div class="progress">
                <div class="progress-bar bg-c-red" style="width: {{ ($attendanceMonth / $totalStudents) * 100 }}%"></div>
            </div>

            <!-- This Quarter -->
            <h5 class="m-t-15">{{ $attendanceQuarter }}</h5>
            <p class="text-muted">This Quarter Attendance</p>
            <div class="progress">
                <div class="progress-bar bg-c-yellow" style="width: {{ ($attendanceQuarter / $totalStudents) * 100 }}%"></div>
            </div>

            <!-- This Year -->
            <h5 class="m-t-15">{{ $attendanceYear }}</h5>
            <p class="text-muted">This Year Attendance</p>
            <div class="progress">
                <div class="progress-bar bg-c-purple" style="width: {{ ($attendanceYear / $totalStudents) * 100 }}%"></div>
            </div>
        </div>
    </div>
</div>

                                            <!--  sale analytics end -->
    
                                            <!--  project and team member start -->
                                       <div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h5>Recent Students</h5>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Assigned</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th class="text-right">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentStudents as $student)
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                <i class="cr-icon fa fa-check txt-default"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                 
                                    <img src="{{ asset('assets/images/Placeholder_Person.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15">
                                    <div class="d-inline-block">
                                        <h6>{{ $student->name }}</h6>
                                        <p class="text-muted m-b-0">{{ $student->role }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->role }}</td>
                            <td class="text-right">{{ $student->created_at->format('M, d') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right m-r-20">
                    <a href="{{ route('show.users.list') }}" class="b-b-primary text-primary">View all Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>

                                     
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
 <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/pages/widget/excanvas.js') }}"></script>
  <!-- waves js -->
  <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
  <!-- modernizr js -->
  <script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }}"></script>
  <!-- slimscroll js -->
  <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <!-- Chart js -->
  <script type="text/javascript" src="{{ asset('assets/js/chart.js/Chart.js') }}"></script>
  <!-- amchart js -->
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="{{ asset('assets/pages/widget/amchart/gauge.js') }}"></script>
  <script src="{{ asset('assets/pages/widget/amchart/serial.js') }}"></script>
  <script src="{{ asset('assets/pages/widget/amchart/light.js') }}"></script>
  <script src="{{ asset('assets/pages/widget/amchart/pie.min.js') }}"></script>
  <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
  <!-- menu js -->
  <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
  <script src="{{ asset('assets/js/vertical-layout.min.js') }}"></script>
  <!-- custom js -->
  <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
