<html  lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
</style>
</head>
<body style="background: #2A3F54;background-image: linear-gradient(rgba(255,255,255,.05) 2px, transparent 2px), linear-gradient(90deg, rgba(255,255,255,.04) 2px, transparent 2px), linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(0deg, rgba(0,0,0,.3) 0, transparent 100px);background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px, 100% 100%;color: #009688;">

<div class="tab">
 
 <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">☰</button>
   
  <button class="tablinks active" onclick="openCity(event, 'London')"><div class="toolbar-icon"></div><div class="toolbar-label">الدخول بالمناقصة</div></button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">كراسة التفاصيل</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">المبالغ والعمالة</button>
</div>

<div id="London" class="tabcontent" style="display: block;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar -->
<div id="rightMenu" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display: none;">
<a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
  <h3 class="w3-bar-item">قوائم العمل</h3>
  <a href="#" class="w3-bar-item w3-button">المناقصات</a>
  <a href="#" class="w3-bar-item w3-button">الشروط</a>
  <a href="#" class="w3-bar-item w3-button">التقديم</a>
</div>
<div id="lo" style="margin-right: 10.76%; width: 100%;">

<table style="
    text-align: center;
">
  <tbody><tr>
    
<th>المناقصة</th>
<th>المناقصة</th>
<th>المناقصة</th>
<th style="
    text-align: center;
">المناقصة</th>
<th>المناقصة</th>
<th>المناقصة</th><th>المناقصة</th>
    <th>تاريخ البدء</th>
    <th>العنوان</th>
  </tr>
  <tr>
    
      <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
      <td>Alfreds Futterkiste</td><td>Alfreds Futterkiste</td>
    
    <td>Maria Anders</td><td>Maria Anders</td>
    
    <td>Germany</td><td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  <td>Centro comercial Moctezuma</td><td>Centro comercial Moctezuma</td>
    
    <td>Francisco Chang</td><td>Francisco Chang</td>
    
    <td>Mexico</td><td>Mexico</td>
  
  </tr>
  <tr>
    
   <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
   <td>Ernst Handel</td><td>Ernst Handel</td>
    
    <td>Roland Mendel</td><td>Roland Mendel</td>
    
    <td>Austria</td><td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  <td>Island Trading</td><td>Island Trading</td>
    
    <td>Helen Bennett</td><td>Helen Bennett</td>
    
    <td>UK</td><td>UK</td>
  
  </tr>
  <tr>
    
  
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  
    <td>Laughing Bacchus Winecellars</td><td>Laughing Bacchus Winecellars</td>
    
    <td>Yoshi Tannamuri</td><td>Yoshi Tannamuri</td>
    
    <td>Canada</td><td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  <td>Magazzini Alimentari Riuniti</td><td>Magazzini Alimentari Riuniti</td>
    
    <td>Giovanni Rovelli</td><td>Giovanni Rovelli</td>
    
    <td>Italy</td><td>Italy</td>
  
  </tr>
</tbody></table>
</div>

<!-- Page Content -->
</div>

<div id="Paris" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar -->
<div id="rightMenu1" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(50, 99, 114, 0.42); display: none;">
<a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
  <h3 class="w3-bar-item">كرسات العمل</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div id="pa" style="margin-right: 10.76%; width: 100%;">

<table>
  <tbody><tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</tbody></table>
</div>
</div>

<div id="Tokyo" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

<!-- Sidebar -->
<div id="rightMenu2" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(0, 150, 136, 0.35); display: none;">
 <a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
 <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div id="to" style="margin-right: 10.76%; width: 100%;">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>


<div class="w3-container">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  
</div>
</div>
</div>


<script>

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
	document.getElementById("rightMenu1").style.display = "block";
	document.getElementById("rightMenu2").style.display = "block";
	document.getElementById("lo").style.width = "89.4%";
	document.getElementById("pa").style.width = "89.4%";
	document.getElementById("to").style.width = "89.4%";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
	document.getElementById("rightMenu1").style.display = "none";
	document.getElementById("rightMenu2").style.display = "none";
	document.getElementById("lo").style.width = "100%";
	document.getElementById("pa").style.width = "100%";
	document.getElementById("to").style.width = "100%";
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

 
</body></html>