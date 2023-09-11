<section class="main_content dashboard_part">
<div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." />
                                    </div>
                                    <button type="submit">
                                        <i style="color: black; margin-top: -0.9rem;"
                                            class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <i style="font-size: 30px;" class="fa-solid fa-user"></i>
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <h5><?= $_SESSION['auth']['name'] ?></h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="./profile.php">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="../controller/logout.php">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>