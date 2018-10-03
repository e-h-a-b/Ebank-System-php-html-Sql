       <div class="col-md-3 left_col" >
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title" ><span>البنك الالكتروني </span> <img src="https://3.bp.blogspot.com/-pr0fqnXp9m8/WXSmGyR0y3I/AAAAAAAAAYw/HXpnsjlKUpQjD2aAf8LOazJJABfcHimQACLcBGAs/s1600/cc.gif" alt="Avatar" style="max-width:100px;max-height:100px;margin-right: 0px;width: 55px;"></a>
            </div>

    <div id="flb-lightbox" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 1000; box-sizing: content-box; display: none;">
<div id="flb-lightbox-background" style="width: 100%; height: 100%; background-color: #000; opacity:0.8; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"></div><div id="flb-lightbox-content" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: none; text-align: center; box-sizing: content-box; display: none;"><img id="flb-close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABBJREFUeNpi+P//PwNAgAEACPwC/tuiTRYAAAAASUVORK5CYII=" width="25px" height="25px" alt="Close" style="margin-top: 73.5px; margin-left: 475px;box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"><br><img src="x-demo-images/1.gif" id="flb-lightbox-image" style="border: 10px solid rgb(255, 255, 255); box-sizing: content-box; width: 0px; height: 430px; opacity: 0; display: inline-block;"></div><div id="flb-load" style="position: fixed; top: 40%; left: 0px; width: 100%; text-align: center; font-size: 14px; color: #fff; opacity: 0.3; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"></div><div id="flb-load2" style="position: fixed; top: 40%; left: 0px; width: 100%; text-align: center; font-size: 14px; color: #fff; opacity: 0.3;"></div></div>
          <br>
            <div class="clearfix"></div>

             <!-- menu profile quick info -->
            <div class="profile" style="width: 230px;">

     
              <div class="profile_pic">
              <img src="<?php echo $userRow['userpic'];?>" alt="..." class="img-circle profile_img" style="height: 102px;margin-top: 0px;width: 100px;">
			  </div>
              <div class="profile_info">
                <span>مرحبا,</span>
                <h2><?php echo $userRow['userName'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>

       
            <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section active">
             
                <ul id="nn" class="nav side-menu" >
                  <li ><!--  class="active"  -->
				  <a>
				  <i class="fa fa-home"></i> الرئيسية <span class="fa fa-chevron-down"></span>
				  <audio id="sound"  preload="auto">
		             <source src="http://ebank.esy.es/move.mp3" ></source>
		           </audio>
				  </a>
                    <ul class="nav child_menu" style="/* display: block; */">
				    <li><a href="http://ebank.esy.es/pm/profile.php?userName=<?php echo  urlencode($userRow['userName']); ?>">الصفحة الشخصية</a></li>
                    <li ><a href="http://ebank.esy.es/login/profile.php">الصفحة العامة</a></li>
                    <li><a href="http://ebank.esy.es/login/allproject.php">المشروعات المشترك بها</a></li>
                    <li><a href="http://ebank.esy.es/login/P1.php">احصائيات الارباح السنوية</a></li>
                    <li><a href="http://ebank.esy.es/login/yourinfo.php">الملف الشخصي</a></li>
                    <li><a href="http://ebank.esy.es/login/n.php">الاصدقـــاء</a></li>
					<li><a href="http://ebank.esy.es/login/inbox.php">الرسائل</a></li>
                     </ul>
                  </li>
                  <li class=""><a><i class="fa fa-edit"></i> ملف جديد <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" >
                      <li class=""><a href="http://ebank.esy.es/login/P2.php">ادخال مبلغ</a></li>
                      <li><a href="http://ebank.esy.es/login/P3.php">اشترك باستبيان</a></li>
                      <li><a href="http://ebank.esy.es/login/P4.php">اشترك بمصنع</a></li>
                      <li><a href="http://ebank.esy.es/login/P5.php">اشترك بقطة ارض</a></li>
					 <?php //<li><a href="http://ebank.esy.es/login/P23.php">بمبلغ من المـــال</a></li>
                      //<li><a href="http://ebank.esy.es/login/P23.php">امـــلاك</a></li>
                      //<li><a href="http://ebank.esy.es/login/P23.php">مقترح للمشروعات</a></li>
                       //<li><a href="http://ebank.esy.es/login/P6.php">اشترك باشياء اخري</a></li> ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> استعلامات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="http://ebank.esy.es/login/P7.php">استعلام عن المشروعات</a></li>
                      <?php //<li><a href="http://ebank.esy.es/login/P9.php">استعلام عن الموقع</a></li>?>
                      <li><a href="http://ebank.esy.es/login/P8.php">استعلام عن منتجات</a></li>
                      <li><a href="http://ebank.esy.es/login/P16.php">استعلام عن رقم الخاص بالبنك</a></li>
                      <?php //<li><a href="http://ebank.esy.es/login/P9.php">استعلام عن الدفع الشهري</a></li> ?>
                      <li><a href="http://ebank.esy.es/login/P10.php">استعلام عن الخدمات</a></li>
                      <?php //<li><a href="http://ebank.esy.es/login/p17.php">استعلام عن  بدء العمل</a></li> ?>
                      <?php //<li><a href="http://ebank.esy.es/login/P11.php">استعلام عن استخدام الموقع</a></li> ?>
					  <li><a href="http://ebank.esy.es/login/p22.php">استعلامات الوظائف</a></li>
                      <?php // <li><a href="http://ebank.esy.es/login/p18.php">استعلامات اخري</a></li> ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> جداول <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="http://ebank.esy.es/login/P12.php">جداول المشروعات</a></li>
                      <li><a href="http://ebank.esy.es/login/p19.php">جداول الارباح</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> البيانات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <?php //<li><a href="http://ebank.esy.es/login/P13.php">بيانات السنوية</a></li>?>
                      <li><a href="http://ebank.esy.es/login/P14.php">بيانات الايداع</a></li>
                        <?php //<li><a href="http://ebank.esy.es/login/P15.php">بيانات السحب</a></li>?>
                      <li><a href="http://ebank.esy.es/login/p20.php">بيانات الاعضاء</a></li>
                      <li><a href="http://ebank.esy.es/login/p21.php">بيانات المشروعات</a></li>
					  <li><a href="http://ebank.esy.es/login/P24.php">التحويلات</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
           

            </div>
            <!-- /sidebar menu -->
		<div class="sidebar-footer hidden-small" style="position: absolute;">
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
              
            </div>
            <!-- /menu footer buttons -->
           <script src="./Gentallela Alela! __files/codepg.js"></script>
  
            <!-- /menu footer buttons -->
          
        </div>