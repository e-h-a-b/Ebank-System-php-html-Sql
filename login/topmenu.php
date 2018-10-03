  <!-- top navigation -->
        <div class="top_nav" style="margin-left: 0px;width: 100%;">
    

<div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-left" style="margin-left: 50px;">
                <li class="">
                  
				   <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="<?php echo $userRow['userpic'];?>" alt="Avatar" style="max-width:100px;max-height:100px;" />
    	                <?php echo  $userRow['userName']; ?>                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-left">
                    <li><a href="http://ebank.esy.es/login/yourinfo.php"> الملف الشخصي</a></li>
                    <li>
                      <a href="http://ebank.esy.es/pm/edit_infos.php">
                        <!--<span class="badge bg-red pull-right">20%</span>-->
                        <span>خصائص</span>
                      </a>
                    </li>
                    <li><a href="http://ebank.esy.es/help.html">مساعدة</a></li>
                    <li><a href="logout.php?logout"><i class="fa fa-sign-out pull-right"></i> تسجيل خروج</a></li>
                  </ul>
                </li>

                <?php
//We check if the user is logged
if(isset($_SESSION['user']))
{
//We list his messages in a table
//Two queries are executes, one for the unread messages and another for read messages


$req1 = mysql_query('select m1.userId, m1.title, m1.timestamp,
 count(m2.userId) as reps, users.userId as  Id,
 users.userName from pm as m1, pm as m2,users where ((m1.user1="'.$userRow['userId'].'" and m1.user1read="no" and users.userId=m1.user2)
 or (m1.user2="'.$userRow['userId'].'" and m1.user2read="no" and users.userId=m1.user1))
 and m1.id2="1" and m2.userId=m1.userId group by m1.userId order by m1.userId desc');


$req2 = mysql_query('select m1.userId, m1.title, m1.timestamp,
 count(m2.userId) as reps, users.userId as  Id,
 users.userName from pm as m1, pm as m2,users where ((m1.user1="'.$userRow['userId'].'" and m1.user1read="yes" and users.userId=m1.user2)
 or (m1.user2="'.$userRow['userId'].'" and m1.user2read="yes" and users.userId=m1.user1))
 and m1.id2="1" and m2.userId=m1.userId group by m1.userId order by m1.userId desc');


?>
				<li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/login/inbox.php" ><!--class="dropdown-toggle info-number" id="md" data-toggle="dropdown" aria-expanded="false"-->
                     
                  <i class="fa fa-envelope-o" id="md"></i> 
                    <?php
					if(mysql_num_rows($req1)==0){
					}else{
                    echo' <span class="badge bg-red">';
				    echo intval(mysql_num_rows($req1)); 
					echo'</span>';
					}
					?>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <!--
				  <li>
                      <a href="http://ebank.esy.es/login/inbox.php">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>عبد الله</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                        بارك الله فيك ووافقك الله لما فية نفعا للمسلمين
					   </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>رسالة البنك</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                          لقد نجئshy; المشروع ووصلت اربائshy;ك الى 1500 جنية
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>مئshy;مود ائshy;مد</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                          ياض اعلى بقولك ياض انا اشتركت فى المشروع اربائshy;ى هتبقى امتى ياله
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>عماد مئshy;مد</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                          اعلى متنساش ياض ندخل المشروع دا ياض انا وانت وننزل نفعا البلد بقى ياله
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a href="http://ebank.esy.es/login/inbox.php">
                          <strong>اظهر جميع الرسائل</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  -->
				  </ul>
<?php  }?>
<script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
  document.getElementById("20000").onclick = function () {
    location.href = "http://ebank.esy.es/chat/chat.html";
};
</script>
                </li>
				<li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/chat/chat.html"><!-- class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"-->
                    <i class="fa fa-wechat" id="wwbchat"></i>
                    
                  </a>
                 <!-- <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات المدير</span>
                          <span class="time">شات خاص برئيس البنك</span>
                        </span>
                        <span class="message">حتى تدلي بالمشكلات او المقترحات او تعديلات</span>
                      </a>
                    </li><li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات العام</span>
                          <span class="time">كل الاعضاء فى هذا الشات</span>
                        </span>
                        <span class="message">الهدف من الشات هو التفاعل بين جميع الاعضاء</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات الشركات</span>
                          <span class="time"> اصحاب الشركات فى هذا الشات</span>
                        </span>
                        <span class="message">حتى يتمكن اصحاب الشركات من تبادل المنفعة والتعاون وربط التجارات</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات المشاريع</span>
                          <span class="time">كل مشتركين فى المشريع</span>
                        </span>
                        <span class="message">حتى يتناول جميع المشتركين قضايا المشروع ورفع كفائتة</span>
                      </a>
                    </li>
                    
                    
                  </ul>-->
</li><li role="presentation" class="dropdown">
              <a href="https://www.facebook.com/%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%89-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A-319963795063101/"  target="_blank" title="البنك الالكترونى المصري">
  <i class="fa fa-facebook"></i>

</a>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/login/n.php"><!-- class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"-->
                    <i class="fa fa-users" id="wwbchat"></i>
                    
                  </a>
               <!--   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات المدير</span>
                          <span class="time">شات خاص برئيس البنك</span>
                        </span>
                        <span class="message">حتى تدلي بالمشكلات او المقترحات او تعديلات</span>
                      </a>
                    </li><li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات العام</span>
                          <span class="time">كل الاعضاء فى هذا الشات</span>
                        </span>
                        <span class="message">الهدف من الشات هو التفاعل بين جميع الاعضاء</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات الشركات</span>
                          <span class="time"> اصحاب الشركات فى هذا الشات</span>
                        </span>
                        <span class="message">حتى يتمكن اصحاب الشركات من تبادل المنفعة والتعاون وربط التجارات</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات المشاريع</span>
                          <span class="time">كل مشتركين فى المشريع</span>
                        </span>
                        <span class="message">حتى يتناول جميع المشتركين قضايا المشروع ورفع كفائتة</span>
                      </a>
                    </li>
                    
                    
                  </ul>-->
</li>
                 <li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/notifications.html"><!-- class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"-->
                    <i class="fa fa-globe" id="globe"></i>
                    
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                   
				   
                    
                  </ul>
                </li>
				<li class=""> 
				<a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">lang<span class=" fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu dropdown-usermenu pull-left">
                    <li><a href="http://ebank.esy.es/login/yourinfo.php"> English</a></li>
                    <li><a href="http://ebank.esy.es/help.html">العربية</a></li> 
                  </ul>
                </li>	
				<li class=""> 
				<div id="head">
		           <?php include('head.php');?>
	            </div>
	           </li>
                			
			 </ul>
            </nav>
          </div>

    </div>
        <!-- /top navigation -->