<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 <body style="background: #2A3F54;background-image: linear-gradient(rgba(255,255,255,.05) 2px, transparent 2px), linear-gradient(90deg, rgba(255,255,255,.04) 2px, transparent 2px), linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(0deg, rgba(0,0,0,.3) 0, transparent 100px);background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px, 100% 100%;color: #009688;">
 
 <style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #2b5b69;
    background-color: rgba(35, 57, 73, 0.58);
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: right;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
	    color: #31908c;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: rgba(39, 162, 190, 0.57);
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: rgba(18, 34, 49, 0.4);
}

/* Style the tab content */
.tabcontent {
    display: none;
 /*    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none; */
}
a {
    width: 100%;
    display: block;
    padding: 8px 16px;
    text-align: left;
    border: none;
    outline: none;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: aliceblue;
}
a:hover {
color:black;
    background-color: #ccc;
}
.w3-teal, .w3-hover-teal:hover {
    color: rgba(40, 115, 101, 0.29)!important;
    background-color: rgba(15, 30, 28, 0.32)!important;
}
.w3-container, .w3-panel {
    padding: 0.01em 16px;
	background-color: rgba(27, 93, 102, 0.51);
}
.w3-sidebar {
right: 0px;
padding: 0.01em 0px 0.01em 16px;
height: 100%;
overflow: auto;width:25%;background-color: rgba(28, 56, 70, 0.62);position: fixed!important;
    z-index: 1;
    overflow: auto;width:10%;
	}
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid rgb(58, 117, 162);
    text-align: left;
    /* padding: 8px; */
	text-align: center;
}

tr:nth-child(even) {
    background-color: #326372;
}
.toolbar-item.elements .toolbar-icon {
    background-image: url(Images/elementsIcon.png);
}
 .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: 1px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    .close:hover { background: #00d9ff; }
	
	div.tab1 button {
   display: block;
    background-color: inherit;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
     
    padding: 8px 16px;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: #009688;
}
div.tab1 button:hover {
    background-color: #ddd;
}
	div.tab2 button {
   display: block;
    background-color: inherit;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
     
    padding: 8px 16px;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: #009688;
}
div.tab2 button:hover {
    background-color: #ddd;
}
	div.tab3 button {
   display: block;
    background-color: inherit;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
     
    padding: 8px 16px;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: #009688;
}
div.tab3 button:hover {
    background-color: #ddd;
}
	div.tab4 button {
   display: block;
    background-color: inherit;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
     
    padding: 8px 16px;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: #009688;
}
div.tab4 button:hover {
    background-color: #ddd;
}
	div.tab5 button {
   display: block;
    background-color: inherit;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
     
    padding: 8px 16px;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: #009688;
}
div.tab5 button:hover {
    background-color: #ddd;
}
</style>



<div class="tab">
 
 <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">☰</button>
   
  <button class="tablinks active" onclick="openCity(event, 'London')"><div class="toolbar-icon"></div><div class="toolbar-label">اضافة مشروع</div></button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">اضافة منتج</button>
  <button class="tablinks" onclick="openCity(event, 'Toky')">اضافة مصنع</button>
<button class="tablinks" onclick="openCity(event, 'Tok')">اضافة املاك</button><button class="tablinks" onclick="openCity(event, 'Tokyo')">اضافة اراضي</button>
</div>


<div id="London" class="tabcontent" style="display: block;">

<title>Admin of the system</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar -->
<div id="rightMenu" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display: block;">
<a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a><h3 class="w3-bar-item">قائمة المشاريع</h3>

<div class="tab1" style="overflow: scroll;height: 550px;">
 
<button class="tablin" onclick="openCit(event, 'pro1')" id="defaultOpe">مشروع 1</button>
<button class="tablin" onclick="openCit(event, 'pro2')">مشروع 2</button>
<button class="tablin" onclick="openCit(event, 'pro3')">مشروع 3</button>
<button class="tablin" onclick="openCit(event, 'pro4')">مشروع 4</button>
<button class="tablin" onclick="openCit(event, 'pro5')">مشروع 5</button>
<button class="tablin" onclick="openCit(event, 'pro6')">مشروع 6</button>
<button class="tablin" onclick="openCit(event, 'pro7')">مشروع 7</button>
<button class="tablin" onclick="openCit(event, 'pro8')">مشروع 8</button>
<button class="tablin" onclick="openCit(event, 'pro9')">مشروع 9</button>
<button class="tablin" onclick="openCit(event, 'pro10')">مشروع 10</button>
<button class="tablin" onclick="openCit(event, 'pro11')">مشروع 11</button>
<button class="tablin" onclick="openCit(event, 'pro12')">مشروع 12</button>
<button class="tablin" onclick="openCit(event, 'pro13')">مشروع 13</button>
<button class="tablin" onclick="openCit(event, 'pro14')">مشروع 14</button>
<button class="tablin" onclick="openCit(event, 'pro15')">مشروع 15</button>
<button class="tablin" onclick="openCit(event, 'pro16')">مشروع 16</button>
<button class="tablin" onclick="openCit(event, 'pro17')">مشروع 17</button>
<button class="tablin" onclick="openCit(event, 'pro18')">مشروع 18</button>
<button class="tablin" onclick="openCit(event, 'pro19')">مشروع 19</button>
<button class="tablin" onclick="openCit(event, 'pro20')">مشروع 20</button>
<button class="tablin" onclick="openCit(event, 'pro21')">مشروع 21</button>
<button class="tablin" onclick="openCit(event, 'pro22')">مشروع 22</button>
<button class="tablin" onclick="openCit(event, 'pro23')">مشروع 23</button>
<button class="tablin" onclick="openCit(event, 'pro24')">مشروع 24</button>
<button class="tablin" onclick="openCit(event, 'pro25')">مشروع 25</button>
<button class="tablin" onclick="openCit(event, 'pro26')">مشروع 26</button>
<button class="tablin" onclick="openCit(event, 'pro27')">مشروع 27</button>
<button class="tablin" onclick="openCit(event, 'pro28')">مشروع 28</button>
<button class="tablin" onclick="openCit(event, 'pro29')">مشروع 29</button>
<button class="tablin" onclick="openCit(event, 'pro30')">مشروع 30</button>
<button class="tablin" onclick="openCit(event, 'pro31')">مشروع 31</button>
<button class="tablin" onclick="openCit(event, 'pro32')">مشروع 32</button>
</div>

  
  
  
  
</div>
<div id="lo" style="margin-right: 10.76%; width: 89.4%;">





<div class="w3-container w3-teal">
  <h1 style="
    margin-left: 50%;
">My Page</h1>
</div>


<div class="w3-container">
  

  

<div id="pro1" class="container" style=" overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع ري الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

  </div>
</div>
<div id="pro2" class="container" style="overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع استصلاح الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

</div>
</div>

<div id="pro3" class="container" style="overflow: scroll;height: 600px;">3</div>
<div id="pro4" class="container" style="overflow: scroll;height: 600px;">4</div>
<div id="pro5" class="container" style="overflow: scroll;height: 600px;">5</div>
<div id="pro6" class="container" style="overflow: scroll;height: 600px;">6</div>
<div id="pro7" class="container" style="overflow: scroll;height: 600px;">7</div>
<div id="pro8" class="container" style="overflow: scroll;height: 600px;">8</div>
<div id="pro9" class="container" style="overflow: scroll;height: 600px;">9</div>
<div id="pro10" class="container" style="overflow: scroll;height: 600px;">10</div>
<div id="pro11" class="container" style="overflow: scroll;height: 600px;">11</div>
<div id="pro12" class="container" style="overflow: scroll;height: 600px;">12</div>
<div id="pro13" class="container" style="overflow: scroll;height: 600px;">13</div>
<div id="pro14" class="container" style="overflow: scroll;height: 600px;">14</div>
<div id="pro15" class="container" style="overflow: scroll;height: 600px;">15</div>
<div id="pro16" class="container" style="overflow: scroll;height: 600px;">16</div>
<div id="pro17" class="container" style="overflow: scroll;height: 600px;">17</div>
<div id="pro18" class="container" style="overflow: scroll;height: 600px;">18</div>
<div id="pro19" class="container" style="overflow: scroll;height: 600px;">19</div>
<div id="pro20" class="container" style="overflow: scroll;height: 600px;">20</div>
<div id="pro21" class="container" style="overflow: scroll;height: 600px;">21</div>
<div id="pro22" class="container" style="overflow: scroll;height: 600px;">22</div>
<div id="pro23" class="container" style="overflow: scroll;height: 600px;">23</div>
<div id="pro24" class="container" style="overflow: scroll;height: 600px;">24</div>
<div id="pro25" class="container" style="overflow: scroll;height: 600px;">25</div>
<div id="pro26" class="container" style="overflow: scroll;height: 600px;">26</div>
<div id="pro27" class="container" style="overflow: scroll;height: 600px;">27</div>
<div id="pro28" class="container" style="overflow: scroll;height: 600px;">28</div>
<div id="pro29" class="container" style="overflow: scroll;height: 600px;">29</div>
<div id="pro30" class="container" style="overflow: scroll;height: 600px;">30</div>
<div id="pro31" class="container" style="overflow: scroll;height: 600px;">31</div>
<div id="pro32" class="container" style="overflow: scroll;height: 600px;">32</div>


</div>
 </div>                 

<script>
function openCit(evt, cityName) {
    var i, container, tablin;
    container = document.getElementsByClassName("container");
    for (i = 0; i < container.length; i++) {
        container[i].style.display = "none";
    }
    tablin = document.getElementsByClassName("tablin");
    for (i = 0; i < tablin.length; i++) {
        tablin[i].className = tablin[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpe" and click on it
document.getElementById("defaultOpe").click();
</script>
</div>


<!-- Page Content -->


<div id="Paris" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar -->
<div id="rightMenu1" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(50, 99, 114, 0.42); display: block;">
<a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
  <h3 class="w3-bar-item">اضافة منتج</h3>
<div class="tab2" style="overflow: scroll;height: 550px;">
 
<button class="tabli" onclick="openCi(event, 'pr1')" id="defaultOp">مشروع 1</button>
<button class="tabli" onclick="openCi(event, 'pr2')">مشروع 2</button>
<button class="tabli" onclick="openCi(event, 'pr3')">مشروع 3</button>
<button class="tabli" onclick="openCi(event, 'pr4')">مشروع 4</button>
<button class="tabli" onclick="openCi(event, 'pr5')">مشروع 5</button>
<button class="tabli" onclick="openCi(event, 'pr6')">مشروع 6</button>
<button class="tabli" onclick="openCi(event, 'pr7')">مشروع 7</button>
<button class="tabli" onclick="openCi(event, 'pr8')">مشروع 8</button>
<button class="tabli" onclick="openCi(event, 'pr9')">مشروع 9</button>
<button class="tabli" onclick="openCi(event, 'pr10')">مشروع 10</button>
<button class="tabli" onclick="openCi(event, 'pr11')">مشروع 11</button>
<button class="tabli" onclick="openCi(event, 'pr12')">مشروع 12</button>
<button class="tabli" onclick="openCi(event, 'pr13')">مشروع 13</button>
<button class="tabli" onclick="openCi(event, 'pr14')">مشروع 14</button>
<button class="tabli" onclick="openCi(event, 'pr15')">مشروع 15</button>
<button class="tabli" onclick="openCi(event, 'pr16')">مشروع 16</button>
<button class="tabli" onclick="openCi(event, 'pr17')">مشروع 17</button>
<button class="tabli" onclick="openCi(event, 'pr18')">مشروع 18</button>
<button class="tabli" onclick="openCi(event, 'pr19')">مشروع 19</button>
<button class="tabli" onclick="openCi(event, 'pr20')">مشروع 20</button>
<button class="tabli" onclick="openCi(event, 'pr21')">مشروع 21</button>
<button class="tabli" onclick="openCi(event, 'pr22')">مشروع 22</button>
<button class="tabli" onclick="openCi(event, 'pr23')">مشروع 23</button>
<button class="tabli" onclick="openCi(event, 'pr24')">مشروع 24</button>
<button class="tabli" onclick="openCi(event, 'pr25')">مشروع 25</button>
<button class="tabli" onclick="openCi(event, 'pr26')">مشروع 26</button>
<button class="tabli" onclick="openCi(event, 'pr27')">مشروع 27</button>
<button class="tabli" onclick="openCi(event, 'pr28')">مشروع 28</button>
<button class="tabli" onclick="openCi(event, 'pr29')">مشروع 29</button>
<button class="tabli" onclick="openCi(event, 'pr30')">مشروع 30</button>
<button class="tabli" onclick="openCi(event, 'pr31')">مشروع 31</button>
<button class="tabli" onclick="openCi(event, 'pr32')">مشروع 32</button>
</div>

  
</div>

<!-- Page Content -->
<div id="pa" style="margin-right: 10.76%; width: 89.4%;">


<div class="w3-container w3-teal">
  <h1 style="
    margin-left: 50%;
">My Page</h1>
</div>


<div class="w3-container">
<div id="pr1" class="containe" style=" overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع ري الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

  </div>
</div>
<div id="pr2" class="containe" style="overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع استصلاح الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

</div>
</div>

<div id="pr3" class="containe" style="overflow: scroll;height: 600px;">3</div>
<div id="pr4" class="containe" style="overflow: scroll;height: 600px;">4</div>
<div id="pr5" class="containe" style="overflow: scroll;height: 600px;">5</div>
<div id="pr6" class="containe" style="overflow: scroll;height: 600px;">6</div>
<div id="pr7" class="containe" style="overflow: scroll;height: 600px;">7</div>
<div id="pr8" class="containe" style="overflow: scroll;height: 600px;">8</div>
<div id="pr9" class="containe" style="overflow: scroll;height: 600px;">9</div>
<div id="pr10" class="containe" style="overflow: scroll;height: 600px;">10</div>
<div id="pr11" class="containe" style="overflow: scroll;height: 600px;">11</div>
<div id="pr12" class="containe" style="overflow: scroll;height: 600px;">12</div>
<div id="pr13" class="containe" style="overflow: scroll;height: 600px;">13</div>
<div id="pr14" class="containe" style="overflow: scroll;height: 600px;">14</div>
<div id="pr15" class="containe" style="overflow: scroll;height: 600px;">15</div>
<div id="pr16" class="containe" style="overflow: scroll;height: 600px;">16</div>
<div id="pr17" class="containe" style="overflow: scroll;height: 600px;">17</div>
<div id="pr18" class="containe" style="overflow: scroll;height: 600px;">18</div>
<div id="pr19" class="containe" style="overflow: scroll;height: 600px;">19</div>
<div id="pr20" class="containe" style="overflow: scroll;height: 600px;">20</div>
<div id="pr21" class="containe" style="overflow: scroll;height: 600px;">21</div>
<div id="pr22" class="containe" style="overflow: scroll;height: 600px;">22</div>
<div id="pr23" class="containe" style="overflow: scroll;height: 600px;">23</div>
<div id="pr24" class="containe" style="overflow: scroll;height: 600px;">24</div>
<div id="pr25" class="containe" style="overflow: scroll;height: 600px;">25</div>
<div id="pr26" class="containe" style="overflow: scroll;height: 600px;">26</div>
<div id="pr27" class="containe" style="overflow: scroll;height: 600px;">27</div>
<div id="pr28" class="containe" style="overflow: scroll;height: 600px;">28</div>
<div id="pr29" class="containe" style="overflow: scroll;height: 600px;">29</div>
<div id="pr30" class="containe" style="overflow: scroll;height: 600px;">30</div>
<div id="pr31" class="containe" style="overflow: scroll;height: 600px;">31</div>
<div id="pr32" class="containe" style="overflow: scroll;height: 600px;">32</div>
 </div>
  <script>
function openCi(evt, cityName) {
    var i, containe, tabli;
    containe = document.getElementsByClassName("containe");
    for (i = 0; i < containe.length; i++) {
        containe[i].style.display = "none";
    }
    tabli = document.getElementsByClassName("tabli");
    for (i = 0; i < tabli.length; i++) {
        tabli[i].className = tabli[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpe" and click on it
document.getElementById("defaultOp").click();
</script>
</div>
</div>
</div>

<div id="Tokyo" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

<!-- Sidebar -->
<div id="rightMenu2" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(97, 93, 42, 0.35); display: block;">
 <a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
 <h3 class="w3-bar-item">قائمة المحافظات</h3>
 
 
 
<div class="tab3" style="overflow: scroll;height: 550px;">
 
<button class="tabl" onclick="openC(event, 'p1')" id="defaultOp">القاهرة</button>
<button class="tabl" onclick="openC(event, 'p2')">الاسكندرية</button>
<button class="tabl" onclick="openC(event, 'p3')">الفيوم</button>
<button class="tabl" onclick="openC(event, 'p4')">طنطا</button>
<button class="tabl" onclick="openC(event, 'p5')">قنا</button>
<button class="tabl" onclick="openC(event, 'p6')">دمنهور</button>
<button class="tabl" onclick="openC(event, 'p7')">السويس</button>
<button class="tabl" onclick="openC(event, 'p8')">الجيزة</button>
<button class="tabl" onclick="openC(event, 'p9')">اسوان</button>
<button class="tabl" onclick="openC(event, 'p10')">الاسماعلية</button>
<button class="tabl" onclick="openC(event, 'p11')">بورسعيد</button>
<button class="tabl" onclick="openC(event, 'p12')">جنوب سيناء</button>
<button class="tabl" onclick="openC(event, 'p13')">الوادى الجديد</button>
<button class="tabl" onclick="openC(event, 'p14')">دمياط</button>
<button class="tabl" onclick="openC(event, 'p15')">مرسي مطروح</button>
<button class="tabl" onclick="openC(event, 'p16')">مشروع 16</button>
<button class="tabl" onclick="openC(event, 'p17')">مشروع 17</button>
<button class="tabl" onclick="openC(event, 'p18')">مشروع 18</button>
<button class="tabl" onclick="openC(event, 'p19')">مشروع 19</button>
<button class="tabl" onclick="openC(event, 'p20')">مشروع 20</button>
<button class="tabl" onclick="openC(event, 'p21')">مشروع 21</button>
<button class="tabl" onclick="openC(event, 'p22')">مشروع 22</button>
<button class="tabl" onclick="openC(event, 'p23')">مشروع 23</button>
<button class="tabl" onclick="openC(event, 'p24')">مشروع 24</button>
<button class="tabl" onclick="openC(event, 'p25')">مشروع 25</button>
<button class="tabl" onclick="openC(event, 'p26')">مشروع 26</button>
<button class="tabl" onclick="openC(event, 'p27')">مشروع 27</button>
<button class="tabl" onclick="openC(event, 'p28')">مشروع 28</button>
<button class="tabl" onclick="openC(event, 'p29')">مشروع 29</button>
<button class="tabl" onclick="openC(event, 'p30')">مشروع 30</button>
<button class="tabl" onclick="openC(event, 'p31')">مشروع 31</button>
<button class="tabl" onclick="openC(event, 'p32')">مشروع 32</button>
</div>

</div>

<!-- Page Content -->
<div id="to" style="margin-right: 10.76%; width: 89.4%;">

<div class="w3-container w3-teal">
  <h1 style="
    margin-left: 50%;
">My Page</h1>
</div>


<div class="w3-container">
  
 <div id="p1" class="contain" style=" overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع ري الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

  </div>
</div>
<div id="p2" class="contain" style="overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع استصلاح الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

</div>
</div>

<div id="p3" class="contain" style="overflow: scroll;height: 600px;">3</div>
<div id="p4" class="contain" style="overflow: scroll;height: 600px;">4</div>
<div id="p5" class="contain" style="overflow: scroll;height: 600px;">5</div>
<div id="p6" class="contain" style="overflow: scroll;height: 600px;">6</div>
<div id="p7" class="contain" style="overflow: scroll;height: 600px;">7</div>
<div id="p8" class="contain" style="overflow: scroll;height: 600px;">8</div>
<div id="p9" class="contain" style="overflow: scroll;height: 600px;">9</div>
<div id="p10" class="contain" style="overflow: scroll;height: 600px;">10</div>
<div id="p11" class="contain" style="overflow: scroll;height: 600px;">11</div>
<div id="p12" class="contain" style="overflow: scroll;height: 600px;">12</div>
<div id="p13" class="contain" style="overflow: scroll;height: 600px;">13</div>
<div id="p14" class="contain" style="overflow: scroll;height: 600px;">14</div>
<div id="p15" class="contain" style="overflow: scroll;height: 600px;">15</div>
<div id="p16" class="contain" style="overflow: scroll;height: 600px;">16</div>
<div id="p17" class="contain" style="overflow: scroll;height: 600px;">17</div>
<div id="p18" class="contain" style="overflow: scroll;height: 600px;">18</div>
<div id="p19" class="contain" style="overflow: scroll;height: 600px;">19</div>
<div id="p20" class="contain" style="overflow: scroll;height: 600px;">20</div>
<div id="p21" class="contain" style="overflow: scroll;height: 600px;">21</div>
<div id="p22" class="contain" style="overflow: scroll;height: 600px;">22</div>
<div id="p23" class="contain" style="overflow: scroll;height: 600px;">23</div>
<div id="p24" class="contain" style="overflow: scroll;height: 600px;">24</div>
<div id="p25" class="contain" style="overflow: scroll;height: 600px;">25</div>
<div id="p26" class="contain" style="overflow: scroll;height: 600px;">26</div>
<div id="p27" class="contain" style="overflow: scroll;height: 600px;">27</div>
<div id="p28" class="contain" style="overflow: scroll;height: 600px;">28</div>
<div id="p29" class="contain" style="overflow: scroll;height: 600px;">29</div>
<div id="p30" class="contain" style="overflow: scroll;height: 600px;">30</div>
<div id="p31" class="contain" style="overflow: scroll;height: 600px;">31</div>
<div id="p32" class="contain" style="overflow: scroll;height: 600px;">32</div></div>
  
</div>
</div>
</div>
<script>
function openC(evt, cityName) {
    var i, contain, tabl;
    contain = document.getElementsByClassName("contain");
    for (i = 0; i < contain.length; i++) {
        contain[i].style.display = "none";
    }
    tabl = document.getElementsByClassName("tabl");
    for (i = 0; i < tabl.length; i++) {
        tabl[i].className = tabl[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpe" and click on it
document.getElementById("defaultO").click();
</script>
<div id="Toky" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

<!-- Sidebar -->
<div id="rightMenu3" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(0, 150, 136, 0.35); display: block;">
 <a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
 <h3 class="w3-bar-item">مصنع</h3>
<div class="tab4" style="overflow: scroll;height: 550px;">
 
<button class="ta" onclick="ope(event, 'proj1')" id="defaul">القاهرة</button>
<button class="ta" onclick="ope(event, 'proj2')">الاسكندرية</button>
<button class="ta" onclick="ope(event, 'proj3')">الفيوم</button>
<button class="ta" onclick="ope(event, 'proj4')">طنطا</button>
<button class="ta" onclick="ope(event, 'proj5')">قنا</button>
<button class="ta" onclick="ope(event, 'proj6')">دمنهور</button>
<button class="ta" onclick="ope(event, 'proj7')">السويس</button>
<button class="ta" onclick="ope(event, 'proj8')">الجيزة</button>
<button class="ta" onclick="ope(event, 'proj9')">اسوان</button>
<button class="ta" onclick="ope(event, 'proj10')">الاسماعلية</button>
<button class="ta" onclick="ope(event, 'proj11')">بورسعيد</button>
<button class="ta" onclick="ope(event, 'proj12')">جنوب سيناء</button>
<button class="ta" onclick="ope(event, 'proj13')">الوادى الجديد</button>
<button class="ta" onclick="ope(event, 'proj14')">دمياط</button>
<button class="ta" onclick="ope(event, 'proj15')">مرسي مطروح</button>
<button class="ta" onclick="ope(event, 'proj16')">مشروع 16</button>
<button class="ta" onclick="ope(event, 'proj17')">مشروع 17</button>
<button class="ta" onclick="ope(event, 'proj18')">مشروع 18</button>
<button class="ta" onclick="ope(event, 'proj19')">مشروع 19</button>
<button class="ta" onclick="ope(event, 'proj20')">مشروع 20</button>
<button class="ta" onclick="ope(event, 'proj21')">مشروع 21</button>
<button class="ta" onclick="ope(event, 'proj22')">مشروع 22</button>
<button class="ta" onclick="ope(event, 'proj23')">مشروع 23</button>
<button class="ta" onclick="ope(event, 'proj24')">مشروع 24</button>
<button class="ta" onclick="ope(event, 'proj25')">مشروع 25</button>
<button class="ta" onclick="ope(event, 'proj26')">مشروع 26</button>
<button class="ta" onclick="ope(event, 'proj27')">مشروع 27</button>
<button class="ta" onclick="ope(event, 'proj28')">مشروع 28</button>
<button class="ta" onclick="ope(event, 'proj29')">مشروع 29</button>
<button class="ta" onclick="ope(event, 'proj30')">مشروع 30</button>
<button class="ta" onclick="ope(event, 'proj31')">مشروع 31</button>
<button class="ta" onclick="ope(event, 'proj32')">مشروع 32</button>
</div>
</div>

<!-- Page Content -->
<div id="to1" style="margin-right: 10.76%; width: 89.4%;">

<div class="w3-container w3-teal">
  <h1 style="
    margin-left: 50%;
">My Page</h1>
</div>


<div class="w3-container">
   <div id="proj1" class="conta" style=" overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع ري الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

  </div>
</div>
<div id="proj2" class="conta" style="overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع استصلاح الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

</div>
</div>

<div id="proj3" class="conta" style="overflow: scroll;height: 600px;">3</div>
<div id="proj4" class="conta" style="overflow: scroll;height: 600px;">4</div>
<div id="proj5" class="conta" style="overflow: scroll;height: 600px;">5</div>
<div id="proj6" class="conta" style="overflow: scroll;height: 600px;">6</div>
<div id="proj7" class="conta" style="overflow: scroll;height: 600px;">7</div>
<div id="proj8" class="conta" style="overflow: scroll;height: 600px;">8</div>
<div id="proj9" class="conta" style="overflow: scroll;height: 600px;">9</div>
<div id="proj10" class="conta" style="overflow: scroll;height: 600px;">10</div>
<div id="proj11" class="conta" style="overflow: scroll;height: 600px;">11</div>
<div id="proj12" class="conta" style="overflow: scroll;height: 600px;">12</div>
<div id="proj13" class="conta" style="overflow: scroll;height: 600px;">13</div>
<div id="proj14" class="conta" style="overflow: scroll;height: 600px;">14</div>
<div id="proj15" class="conta" style="overflow: scroll;height: 600px;">15</div>
<div id="proj16" class="conta" style="overflow: scroll;height: 600px;">16</div>
<div id="proj17" class="conta" style="overflow: scroll;height: 600px;">17</div>
<div id="proj18" class="conta" style="overflow: scroll;height: 600px;">18</div>
<div id="proj19" class="conta" style="overflow: scroll;height: 600px;">19</div>
<div id="proj20" class="conta" style="overflow: scroll;height: 600px;">20</div>
<div id="proj21" class="conta" style="overflow: scroll;height: 600px;">21</div>
<div id="proj22" class="conta" style="overflow: scroll;height: 600px;">22</div>
<div id="proj23" class="conta" style="overflow: scroll;height: 600px;">23</div>
<div id="proj24" class="conta" style="overflow: scroll;height: 600px;">24</div>
<div id="proj25" class="conta" style="overflow: scroll;height: 600px;">25</div>
<div id="proj26" class="conta" style="overflow: scroll;height: 600px;">26</div>
<div id="proj27" class="conta" style="overflow: scroll;height: 600px;">27</div>
<div id="proj28" class="conta" style="overflow: scroll;height: 600px;">28</div>
<div id="proj29" class="conta" style="overflow: scroll;height: 600px;">29</div>
<div id="proj30" class="conta" style="overflow: scroll;height: 600px;">30</div>
<div id="proj31" class="conta" style="overflow: scroll;height: 600px;">31</div>
<div id="proj32" class="conta" style="overflow: scroll;height: 600px;">32</div></div>
  
</div>
</div>
</div>
<script>
function ope(evt, cityName) {
    var i, conta, ta;
    conta = document.getElementsByClassName("conta");
    for (i = 0; i < conta.length; i++) {
        conta[i].style.display = "none";
    }
    ta = document.getElementsByClassName("ta");
    for (i = 0; i < ta.length; i++) {
        ta[i].className = ta[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpe" and click on it
document.getElementById("defaul").click();
</script>

</div>
</div>
</div>
<div id="Tok" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

<!-- Sidebar -->
<div id="rightMenu4" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(15, 161, 46, 0.35); display: block;">
 <a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
 <h3 class="w3-bar-item">املاك</h3>
<div class="tab5" style="overflow: scroll;height: 550px;">
 
<button class="tabn" onclick="opet(event, 'projc1')" id="defau">القاهرة</button>
<button class="tabn" onclick="opet(event, 'projc2')">الاسكندرية</button>
<button class="tabn" onclick="opet(event, 'projc3')">الفيوم</button>
<button class="tabn" onclick="opet(event, 'projc4')">طنطا</button>
<button class="tabn" onclick="opet(event, 'projc5')">قنا</button>
<button class="tabn" onclick="opet(event, 'projc6')">دمنهور</button>
<button class="tabn" onclick="opet(event, 'projc7')">السويس</button>
<button class="tabn" onclick="opet(event, 'projc8')">الجيزة</button>
<button class="tabn" onclick="opet(event, 'projc9')">اسوان</button>
<button class="tabn" onclick="opet(event, 'projc10')">الاسماعلية</button>
<button class="tabn" onclick="opet(event, 'projc11')">بورسعيد</button>
<button class="tabn" onclick="opet(event, 'projc12')">جنوب سيناء</button>
<button class="tabn" onclick="opet(event, 'projc13')">الوادى الجديد</button>
<button class="tabn" onclick="opet(event, 'projc14')">دمياط</button>
<button class="tabn" onclick="opet(event, 'projc15')">مرسي مطروح</button>
<button class="tabn" onclick="opet(event, 'projc16')">مشروع 16</button>
<button class="tabn" onclick="opet(event, 'projc17')">مشروع 17</button>
<button class="tabn" onclick="opet(event, 'projc18')">مشروع 18</button>
<button class="tabn" onclick="opet(event, 'projc19')">مشروع 19</button>
<button class="tabn" onclick="opet(event, 'projc20')">مشروع 20</button>
<button class="tabn" onclick="opet(event, 'projc21')">مشروع 21</button>
<button class="tabn" onclick="opet(event, 'projc22')">مشروع 22</button>
<button class="tabn" onclick="opet(event, 'projc23')">مشروع 23</button>
<button class="tabn" onclick="opet(event, 'projc24')">مشروع 24</button>
<button class="tabn" onclick="opet(event, 'projc25')">مشروع 25</button>
<button class="tabn" onclick="opet(event, 'projc26')">مشروع 26</button>
<button class="tabn" onclick="opet(event, 'projc27')">مشروع 27</button>
<button class="tabn" onclick="opet(event, 'projc28')">مشروع 28</button>
<button class="tabn" onclick="opet(event, 'projc29')">مشروع 29</button>
<button class="tabn" onclick="opet(event, 'projc30')">مشروع 30</button>
<button class="tabn" onclick="opet(event, 'projc31')">مشروع 31</button>
<button class="tabn" onclick="opet(event, 'projc32')">مشروع 32</button>
</div>
</div>

<!-- Page Content -->
<div id="to2" style="margin-right: 10.76%; width: 89.4%;">

<div class="w3-container w3-teal">
  <h1 style="
    margin-left: 50%;
">My Page</h1>
</div>


<div class="w3-container">
  
    <div id="projc1" class="con" style=" overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع ري الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

  </div>
</div>
<div id="projc2" class="con" style="overflow: scroll;height: 600px;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع استصلاح الاراضي<h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

</div>
</div>

<div id="projc3" class="con" style="overflow: scroll;height: 600px;">3</div>
<div id="projc4" class="con" style="overflow: scroll;height: 600px;">4</div>
<div id="projc5" class="con" style="overflow: scroll;height: 600px;">5</div>
<div id="projc6" class="con" style="overflow: scroll;height: 600px;">6</div>
<div id="projc7" class="con" style="overflow: scroll;height: 600px;">7</div>
<div id="projc8" class="con" style="overflow: scroll;height: 600px;">8</div>
<div id="projc9" class="con" style="overflow: scroll;height: 600px;">9</div>
<div id="projc10" class="con" style="overflow: scroll;height: 600px;">10</div>
<div id="projc11" class="con" style="overflow: scroll;height: 600px;">11</div>
<div id="projc12" class="con" style="overflow: scroll;height: 600px;">12</div>
<div id="projc13" class="con" style="overflow: scroll;height: 600px;">13</div>
<div id="projc14" class="con" style="overflow: scroll;height: 600px;">14</div>
<div id="projc15" class="con" style="overflow: scroll;height: 600px;">15</div>
<div id="projc16" class="con" style="overflow: scroll;height: 600px;">16</div>
<div id="projc17" class="con" style="overflow: scroll;height: 600px;">17</div>
<div id="projc18" class="con" style="overflow: scroll;height: 600px;">18</div>
<div id="projc19" class="con" style="overflow: scroll;height: 600px;">19</div>
<div id="projc20" class="con" style="overflow: scroll;height: 600px;">20</div>
<div id="projc21" class="con" style="overflow: scroll;height: 600px;">21</div>
<div id="projc22" class="con" style="overflow: scroll;height: 600px;">22</div>
<div id="projc23" class="con" style="overflow: scroll;height: 600px;">23</div>
<div id="projc24" class="con" style="overflow: scroll;height: 600px;">24</div>
<div id="projc25" class="con" style="overflow: scroll;height: 600px;">25</div>
<div id="projc26" class="con" style="overflow: scroll;height: 600px;">26</div>
<div id="projc27" class="con" style="overflow: scroll;height: 600px;">27</div>
<div id="projc28" class="con" style="overflow: scroll;height: 600px;">28</div>
<div id="projc29" class="con" style="overflow: scroll;height: 600px;">29</div>
<div id="projc30" class="con" style="overflow: scroll;height: 600px;">30</div>
<div id="projc31" class="con" style="overflow: scroll;height: 600px;">31</div>
<div id="projc32" class="con" style="overflow: scroll;height: 600px;">32</div></div>
  
  <script>
function opet(evt, cityName) {
    var i, con, tabn;
    con = document.getElementsByClassName("con");
    for (i = 0; i < con.length; i++) {
        con[i].style.display = "none";
    }
    tabn = document.getElementsByClassName("ta");
    for (i = 0; i < tabn.length; i++) {
        tabn[i].className = tabn[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpe" and click on it
document.getElementById("defaul").click();
</script>
</div>
</div>
</div>


<script>

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
	document.getElementById("rightMenu1").style.display = "block";
	document.getElementById("rightMenu2").style.display = "block";
    document.getElementById("rightMenu3").style.display = "block";
    document.getElementById("rightMenu4").style.display = "block";
	document.getElementById("lo").style.width = "89.4%";
	document.getElementById("pa").style.width = "89.4%";
	document.getElementById("to").style.width = "89.4%";
    document.getElementById("to1").style.width = "89.4%";
    document.getElementById("to2").style.width = "89.4%";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
	document.getElementById("rightMenu1").style.display = "none";
	document.getElementById("rightMenu2").style.display = "none";
    document.getElementById("rightMenu3").style.display = "none";
    document.getElementById("rightMenu4").style.display = "none";
	document.getElementById("lo").style.width = "100%";
	document.getElementById("pa").style.width = "100%";
	document.getElementById("to").style.width = "100%";
    document.getElementById("to1").style.width = "100%";
    document.getElementById("to2").style.width = "100%";
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
  
  
  
  
  
  
  function PopupCenter(url, title, w, h) {  
    // Fixes dual-screen position                         Most browsers      Firefox  
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
              
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
              
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
  
    // Puts focus on the newWindow  
    if (window.focus) {  
        newWindow.focus();  
    }  
}  
</script>
<!-- jQuery -->
    <script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
<style type="text/css">
    /* For the "inset" look only */
   html {
      overflow: auto;
    }
    body {
      position: absolute;
      top: 0px;
      left: 0px;
      bottom: 0px;
      right: 0px;
      padding: 0px; 
      overflow-y: scroll;
      overflow-x: scroll;
    }
    /* Let's get this party started */
    ::-webkit-scrollbar {
      width: 10px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px transparent; 
      -webkit-border-radius: 10px;
      border-radius: 10px;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
      -webkit-border-radius: 10px;
      border-radius: 10px;
     background: #172d44;
     webkit-box-shadow: inset 0 0 6px #2a3f54; 
    }
    ::-webkit-scrollbar-thumb:window-inactive {
      background: #3f3f3f; 
    }
  </style>
    <script src="./Gentallela Alela! __files/jsdatabase.js"></script>
    <script src="./Gentallela Alela! __files/dataTables.bootstrap.min.js"></script>
    <script src="./Gentallela Alela! __files/dataTables.buttons.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="./Gentallela Alela! __files/buttons.flash.min.js"></script>
    <script src="./Gentallela Alela! __files/buttons.html5.min.js"></script>
    <script src="./Gentallela Alela! __files/buttons.print.min.js"></script>
    <script src="./Gentallela Alela! __files/dataTables.fixedHeader.min.js"></script>
    <script src="./Gentallela Alela! __files/dataTables.keyTable.min.js"></script>
    <script src="./Gentallela Alela! __files/dataTables.responsive.min.js"></script>
    <script src="./Gentallela Alela! __files/responsive.bootstrap.js"></script>
    <script src="./Gentallela Alela! __files/datatables.scroller.min.js"></script>
    <script src="./Gentallela Alela! __files/jszip.min.js"></script>
    <script src="./Gentallela Alela! __files/pdfmake.min.js"></script>
    <script src="./Gentallela Alela! __files/vfs_fonts.js"></script>
	
    <script src="./Gentallela Alela! __files/custom.min.js"></script>
	<script src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>
 
</body></html>