
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home-admin.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="home-admin.php?m=content&p=create_kontraktor">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="nav-link-text">Data Kontraktor</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="home-admin.php?m=content&p=kriteria-admin">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Kriteria</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home-admin.php?m=content&p=nilai-admin">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Penilaian Kontraktor</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="home-admin.php?m=content&p=ranking-admin">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Hasil penilaian</span>
          </a>
        </li>
        

        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home-admin.php?m=content&p=content-admin">
            <i class="fa fa-fw fa-camera"></i>
            <span class="nav-link-text">Content</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
        if (empty($_SESSION)) {
          echo '"<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Login</a>
        </li>"';
        } else {   
        echo '"<li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Loguot</a>
        </li>"';
        } ?>