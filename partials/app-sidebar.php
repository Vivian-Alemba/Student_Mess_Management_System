<div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">SMMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="./images/user/profile2.jpg" id="userImage" alt="User Image.">
                <span><?= $user['first_name']. ' '. $user['last_name']   ?></span>
            </div>
           <!-- SIDEBAR -->
           <div class="dashboard_sidebar_menu">
                <ul class="dashboard_menus_lists">
                <!-- class="menuActive" -->
                    <li >
                        <a href="./dashboard.php"><i class="fa fa-user-graduate "></i><span class="menuTexts">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="./users-add.php"><i class="fa fa-user-plus"></i><span class="menuTexts">ADD USER</span></a>
                    </li>
                    <!-- <li>
                        <a href=""><i class="fa fa-user-graduate"></i><span class="menuTexts">add staff</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user-graduate"></i><span class="menuTexts">Order food</span></a>
                    </li>
                   
                    <li>
                        <a href=""><i class="fa fa-user-graduate"></i><span class="menuTexts">food store</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user-graduate"></i><span class="menuTexts">settings</span></a>
                    </li> -->
                   

                </ul>

            </div>
        </div>