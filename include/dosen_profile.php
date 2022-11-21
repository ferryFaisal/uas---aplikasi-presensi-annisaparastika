 <!-- Navbar -->
 <!-- <ul class="navbar-nav ml-auto ml-md-0">

     <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
             <?php
                require 'connect_db.php';
                $sql2 = "SELECT * FROM user where email= '$_SESSION[login]'";
                $result2 = mysqli_query($conn, $sql2);
                $cek2 = mysqli_num_rows($result2);

                if ($cek2 > 0) {
                    $row2 = mysqli_fetch_assoc($result2);

                ?>
                 <img src="images/<?php echo $row2['photo'] ?>" alt="" width="32" height="32" class="rounded-circle me-2">

                 <strong><?php echo $_SESSION['name'] ?></strong>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                     <a class="dropdown-item" href='admin_user_edit.php?email=<?php echo $row2['email'] ?>'>
                         <?php echo $_SESSION['role'] ?> Settings
                     </a>
                 <?php
                }
                    ?>
                 <!-- <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
                 </div>
     </li>
 </ul> -->