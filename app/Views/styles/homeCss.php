<style> 
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.navLeo{
background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(45,60,253,1) 100%);
height: 15vh;
box-shadow: 0px 0px 78px 0px rgba(0,101,145,0.57);

}

.main{
  position: relative;
    display: flex;
    top: 15vh;
  
}
.subMain{
  width: 100%;
}
.blue {
  background: #2abdfc;
  color: #fff;
}

#logo {
  display: inline-block;
  margin-top: 7px;
  color: #fff;
}
#link {
  color: #fff;
  font-weight: bold;
  margin: 0 10px;
}
i { margin: 0 7px; }
#sidebarCollapse {
  color: #fff;
  background: transparent;
  outline: none;
  margin: 0 20px;
}
#sidebarCollapse:hover {
  color: #2abdfc;
  background: #fff;
  outline: none;
}
#sidebar {
    min-width: 200px;
    max-width: 200px;
 
    background: #6a76f8;
    color: #fff;
    transition: all 0.3s;
}
#sidebar.active{
	margin-left: -200px;
  animation: all 0.5s ;

  
}



#sidebar .sidebar-header{
	padding: 20px;
	background: #6a76f8;
}
#sidebar ul.components{
	padding: 20px 0px;
}

#sidebar ul p{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}

#sidebar ul li a{
	padding: 10px 10px 10px 20px;
	font-size: 1.1em;
	display: block;
    color: #fff;
    font-weight: bold;
}
#sidebar ul li a:hover {
    color: #6240bd;
    background: #fff;
    text-decoration: none;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #8a5fff;
}
a[data-toggle="collapse"] {
    position: relative;
}
.dropdown-toggle::after {
   
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}


#content {

    width: 100%;
    min-height: 100vh;
    transition: all 0.3s;
}
@media (max-width:800px) {
  #sidebar {
    margin-left: -250px;}
  #sidebar.active{
	margin-left: 0px;
  }
  #sidebarCollapse span{
	display: none;
  }
  .card {
    width:100%;
  }
}
@media (max-width:400px) {
  #sidebar {
    margin-top: -20px;
  }
  #logo {
    display: none;
  }
}
 </style>