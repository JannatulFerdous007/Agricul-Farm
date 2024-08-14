<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agricul Farm</title>
</head>
<style>
html{
	overflow-x: hidden;
	font-size: 62.5%;
  }
  
  .heading{
	color:rgb(255 255 255);
	font-size: 3.5rem;
	padding: 1rem;
	padding-top: 6rem;
	text-align: center;
	letter-spacing: .2rem;
  }
  .heading span{
	color:#ffffff;
  }
  
  header{
    background:#0f8d39;
	font-family: cursive;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: space-between;
	top:1.5rem; left:50%;
	border-radius: .5rem;
	box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
	padding:.3rem 2rem;
	transition: .2s linear;
	z-index: 1000;
  }
  .header-active{
	top:0;
	width:100%;
	border-radius: 0;
  }
  
  header .logo{
	color:#fff;
	font-size: 3rem;
  }
  
  header .logo span{
	color:#f6ffff;
  }
  
  header .navbar ul{
	list-style: none;
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin:0; padding:0;
  }
  header .navbar ul li{
	margin:0 1rem;
  }
  
  header .navbar ul li a{
	font-size: 2rem;
	color:#fff;
	transition: .2s linear;
  }
  
  
  header .navbar ul li .active,
  header .navbar ul li a:hover{
	color: #ffffff;
  }
  
  header .fa-bars{
	font-size: 3rem;
	color:#f6f6f6;
	cursor: pointer;
	display: none;
  }
	
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
	text-decoration: none;
	list-style: none;
	scroll-behavior: smooth;
}

.logo{
	font-size: 20px;
	font-weight: 600;
	letter-spacing: 1px;
	color: var(--bg-color);
}
.navbar{
	display: flex;
}
.navbar a{
	color: var(--bg-color);
	font-size: var(--p-font);
	font-weight: 500;
	padding: 10px 22px;
	border-radius: 4px;
	transition: ease .40s;
}
.navbar a:hover{
	background: var(--bg-color);
	color: var(--text-color);
	box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
	border-radius: 4px;
}
@media (max-width: 1400px){
	header{
		padding: 17px 3%;
		transition: .2s;
	}
	header.sticky{
		padding: 5px 3%;
		transition: .2s;
	}

}
</style>
<body>
	<!--header--->
	<header>
		<a href="#" class="logo">Agricul Farm <span>.</span></a>

		<nav class="navbar">
			<ul>
				<li><a data-scroll="home" href="index.php" class="active">home</a></li>
				<li><a data-scroll="services" href="#services">services</a></li>
				<li><a data-scroll="about" href="#about">about</a></li>
				<li><a data-scroll="destination" href="#destination">destination</a></li>
				<li><a data-scroll="contact" href="contact.php">contact</a></li>
			</ul>
		</nav>

   </div>
	</header>

</body>

</html>