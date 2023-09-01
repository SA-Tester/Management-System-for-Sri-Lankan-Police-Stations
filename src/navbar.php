<?php
session_start();
if(!isset($_SESSION['dark'])) {
    $_SESSION['dark'] = false;
}

// Function to render the navigation bar based on the user's role
function renderNavBar()
{
    $mode_icon = $_SESSION['dark'] ? 'bi bi-moon-fill' : 'bi bi-sun-fill';
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] === 'admin') {
            echo '<div class="container">
            <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0 mt-0 mb-0">
                    <a class="navbar-brand" href="index.php">
                      <div class="d-flex align-items-center">
                        <img src="../assets/logo.png" alt="logo" width=70px; height=70px">
                        <h3 class="d-none d-lg-inline-block align-top mt-3 h3" style="color:#101D6B;margin: auto 10px">Sri Lanka Police</h3>
                      </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="form-inline my-2 my-lg-0" action="switch-theme.php" method="post">
    <button class="btn btn my-2 my-sm-0 theme-toggle" type="submit" style="color: #101D6B;">
        <i id="toggleIcon" class="'.$mode_icon.'" style="font-size: 30px"></i>
    </button>
</form>
                  
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="index.php" style="color:#101D6B">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="complaintsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#101D6B">
                            Complaints
                          </a>
                          <div class="dropdown-menu" aria-labelledby="complaintsDropdown">
                            <a class="dropdown-item" href="record-complaints.php" style="color:#101D6B"><b>Add/View Complaints</b></a>
                            <a class="dropdown-item" href="view-people.php" style="color:#101D6B"><b>View People and Cases</b></a>
                            <a class="dropdown-item" href="complaint-study.php" style="color:#101D6B"><b>Complaint Study</b></a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dutiesDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#101D6B">Duties</a>
                          <div class="dropdown-menu" aria-labelledby="dutiesDropdown">
                            <a class="dropdown-item" href="general-duty.php" style="color:#101D6B"><b>General Duty</b></a>
                            <a class="dropdown-item" href="special-duty.php" style="color:#101D6B"><b>Special Duty</b></a>
                            <a class="dropdown-item" href="emergency-duties.php" style="color:#101D6B"><b>Emergency Duty</b></a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="leavesDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#101D6B">Leaves</a>
                          <div class="dropdown-menu" aria-labelledby="leavesDropdown">
                            <a class="dropdown-item" href="submit-leave-medical.php" style="color:#101D6B"><b>Submit Leaves</b></a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="employeeDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#101D6B">Employee</a>
                          <div class="dropdown-menu" aria-labelledby="employeeDropdown">
                            <a class="dropdown-item" href="new-employee.php" style="color:#101D6B"><b>Add New Employee</b></a>
                            <a class="dropdown-item" href="check-avalability.php" style="color:#101D6B"><b>Check Employee Avalability</b></a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="payroll.php" style="color:#101D6B">Salary</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="index.php#settings" style="color:#101D6B;">Settings</a>
                        </li>
                        <form class="form-inline my-2 my-lg-0"  action="logout.php" method="get">
                          <button class="btn btn my-2 my-sm-0" type="submit" style="color:white;background-color: #101D6B;">Log Out</button>
                        </form>
                    </div>
                  </nav>
              </div>
            </div>
          </div>';
        } elseif ($_SESSION['role'] === 'user') {
            echo '<div class="container">
            <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0 mt-0 mb-0">
                    <a class="navbar-brand" href="index.php">
                      <div class="d-flex align-items-center">
                        <img src="../assets/logo.png" width="70" height="70" alt="logo">
                        <h3 class="d-none d-lg-inline-block align-top mt-3 h3" style="color:#101D6B;margin: auto 10px">Sri Lanka Police</h3>
                      </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
<form class="form-inline my-2 my-lg-0" action="switch-theme.php" method="post">
    <button class="btn btn my-2 my-sm-0 theme-toggle" type="submit" style="color: #101D6B;">
        <i id="toggleIcon" class="'.$mode_icon.'" style="font-size: 30px"></i>
    </button>
</form>
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="index.php" style="color:#101D6B">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="complaintsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#101D6B">
                            Complaints
                          </a>
                          <div class="dropdown-menu" aria-labelledby="complaintsDropdown">
                            <a class="dropdown-item" href="record-complaints.php" style="color:#101D6B"><b>Add/View Complaints</b></a>
                            <a class="dropdown-item" href="view-people.php" style="color:#101D6B"><b>View People and Cases</b></a>
                            <a class="dropdown-item" href="complaint-study.php" style="color:#101D6B"><b>Complaint Study</b></a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dutiesDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#101D6B">Duties</a>
                          <div class="dropdown-menu" aria-labelledby="dutiesDropdown">
                            <a class="dropdown-item" href="general-duty.php" style="color:#101D6B"><b>General Duty</b></a>
                            <a class="dropdown-item" href="special-duty.php" style="color:#101D6B"><b>Special Duty</b></a>
                            <a class="dropdown-item" href="emergency-duties.php" style="color:#101D6B"><b>Emergency Duty</b></a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="payroll.php" style="color:#101D6B">Salary</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="index.php#settings" style="color:#101D6B;">Settings</a>
                        </li>
                        <form class="form-inline my-2 my-lg-0"  action="logout.php" method="get">
                          <button class="btn btn my-2 my-sm-0" type="submit" style="color:white;background-color: #101D6B;">Log Out</button>
                        </form>
                    </div>
                  </nav>
              </div>
            </div>
          </div>';
        }
    } else {
        echo '<div class="container">
        <div class="row">
          <div class="col-md-12">
              <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0 mt-0 mb-0">
                <a class="navbar-brand" href="index.php">
                  <div class="d-flex align-items-center">
                    <img src="../assets/logo.png" width="70" height="70" alt="logo">
                    <h3 class="d-none d-lg-inline-block align-top mt-3 h3" style="color:#101D6B;margin: auto 10px">Sri Lanka Police</h3>
                  </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0" action="switch-theme.php" method="post">
    <button class="btn btn my-2 my-sm-0 theme-toggle" type="submit" style="color: #101D6B;">
        <i id="toggleIcon" class="'.$mode_icon.'" style="font-size: 30px"></i>
    </button>
</form>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php" style="color:#101D6B">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <form class="form-inline my-2 my-lg-0"  action="loginForm.php" method="get">
                      <button class="btn btn my-2 my-sm-0" type="submit" style="color:white;background-color: #101D6B;">Log In</button>
                    </form>
                </div>
              </nav>
          </div>
        </div>
      </div>';
    }
}
