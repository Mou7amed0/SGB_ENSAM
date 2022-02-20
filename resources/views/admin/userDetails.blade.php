
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ENSAMBiblio Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../admin/assets/images/favicon.png" />
    <style>
        td, th{
            font-size: 1.5em !important;
        }
        td, th{
            text-align: center;

        }
    </style>
</head>
<body>
<div class="container-scroller">

     <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../admin/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Responsable bibliothèque</h5>
                  <span>Mr. ----- --------</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/adminhome')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/user')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Students</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/book')}}">
              <span class="menu-icon">
                <i class="mdi mdi-book"></i>
              </span>
              <span class="menu-title">Books</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/copy')}}">
              <span class="menu-icon">
                <i class="mdi mdi-library-books"></i>
              </span>
              <span class="menu-title">Copies</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{('/reservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Resevations</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/suggestion')}}">
              <span class="menu-icon">
                <i class="mdi mdi-crystal-ball"></i>
              </span>
              <span class="menu-title">Suggestions</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-format-align-justify"></i>
              </span>
              <span class="menu-title">Categories</span>
            </a>
          </li>

      </nav>
 <!-- partial -->

    <div style="margin: auto;">
       <table class="table table-striped table-dark">
           <tr>
            <th colspan="2">Details of etudiant</th>
           </tr>
           <tr>
               <td>ID: </td><td>{{ $data->id }}</td>
           </tr>
           <tr>
            <td>Apogee: </td>
               <td>{{ $data->apogee }}</td>
           </tr>
           <tr>
            <td>CNE: </td>
               <td>{{ $data->cne }}</td>
           </tr>
           <tr>
            <td>CIN: </td>
               <td>{{ $data->cin }}</td>
           </tr>
           <tr>
            <td>Nom: </td>
               <td>{{ $data->nom }}</td>
           </tr>
           <tr>
            <td>Prénom: </td>
               <td>{{ $data->prenom }}</td>
           </tr>
           <tr>
            <td>Date de naissance: </td>
               <td>{{ $data->date_de_naissance }}</td>
           </tr>
           <tr>
            <td>Adresse: </td>
               <td>{{ $data->adresse }}</td>
           </tr>
           <tr>
            <td>Email institutionnel: </td>
               <td>{{ $data->email_institutionnel }}</td>
           </tr>
           <tr>
            <td>Email personnel: </td>
               <td>{{ $data->email_personnel }}</td>
           <tr>
            <td>Sexe: </td>
               <td>{{ $data->sexe }}</td>
           </tr>
           <tr>
            <td>ID utilisateur: </td>
               <td>{{ $data->user_id }}</td>
           </tr>
       </table>
       <a href="{{url('/deleteuser',$data->id)}}" style="margin: 20px" class="btn btn-danger">Delete</a>
    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="../admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../admin/assets/js/off-canvas.js"></script>
    <script src="../admin/assets/js/hoverable-collapse.js"></script>
    <script src="../admin/assets/js/misc.js"></script>
    <script src="../admin/assets/js/settings.js"></script>
    <script src="../admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

</body>
</html>
