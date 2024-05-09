<?php
    // Assume you start the session and retrieve the username during login
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $displayName = isset($_SESSION['display_name']) ? $_SESSION['display_name'] : null;
?>
<!DOCTYPE html>
<html>
<head>
<title>USER_PRODUCT_PAGE </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="style.css">
</head>

<style>
     h1{
            color: rgb(23, 241, 23);
            text-align: center;
            letter-spacing: 20PX;
            padding-bottom: -1px;
            text-shadow: 5PX 5PX black ;
            margin-top: -125px;
            font-size: 70px;
            
        }
       
        .main{
            width: 100px;
               height: -1000px;
               width: 1500Px;
               padding: -620px;
               background-color: greenyellow;
               padding-bottom: -5PX;
               letter-spacing: 20PX;
        }
        
        
        nav {
  background-color: #333;
  margin-left: 1175px;
}
ul {
  list-style-type: none;
  margin: 1pc;
  padding: 0px;
  overflow: hidden;
  
}
li {
  float: left;   
}
a {
  display: block;
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 05px 16px;
  text-decoration: none;
}
a:hover {
 background-color: #ddd;
color:rgb(2, 2, 2);

}
  
input {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px 0 10px 0;
  }
    body{
    margin: 0;
    font-family: sans-serif;
    background:#f2f2f2;
}
label{
    font-size:x-large;
    font-style: italic;
}
 h3{
    text-align: center;
    font-size: 30px;
    margin: 0;
    padding-top: 10px;
}    
a{
    text-decoration: none;
}
.gallery{
   
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin: 50px 0;
}
.content {
    width: 23%;
    margin: 15px;
    box-sizing: border-box;
    float: left;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding-top: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),
    0 10px 10px rgba(0,0,0,0.22);
    transition: .4s;
    background:#f2f2f2;
    }
    .content:hover{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16),
    0 3px 6px rgba(0,0,0,0.23);
    transform: translate(0px, -8px);
    }
    img{
    width: 200px;
    height: 200px;
    text-align: center;
    margin: 0 auto;
    display: block
    }
    p{
    text-align: center;
    color: #b2bec3;
    padding-top: 0 8px;
    }
   
 body{
    margin: 0;
    font-family: sans-serif;
    background:#f2f2f2;
}
h3{
    text-align: center;
    font-size: 30px;
    margin: 0;
    padding-top: 60px;
}    
a{
    text-decoration: none;
}
   
   .nuts{
    width: 23%;
    margin: 15px;
    box-sizing: border-box;
    float: left;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding-top: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),
    0 10px 10px rgba(0,0,0,0.22);
    transition: .4s;
    background:#f2f2f2;
    }
    .nuts:hover{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16),
    0 3px 6px rgba(0,0,0,0.23);
    transform: translate(0px, -8px);
    }
    h3{
        color: #000000;
    text-align: center;
    font-size: 30px;
    margin: 0;
    padding-top: 60px;
}  
    
    .fruit{
    width: 23%;
    margin: 15px;
    box-sizing: border-box;
    float: left;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding-top: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),
    0 10px 10px rgba(0,0,0,0.22);
    transition: .4s;
    background:#f2f2f2;
    }
    .fruit:hover{
        box-shadow: 0 3px 6px rgba(0,0,0,0.16),
    0 3px 6px rgba(0,0,0,0.23);
    transform: translate(0px, -8px);
    }
    .camp{
        display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin: 50px 0;
    }
    a{
    text-decoration: none;
}
    .sound{
        display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin: 50px 0;
    }

    img{
    width: 200px;
    height: 200px;
    text-align: center;
    margin: 0 auto;
    display: block
    }
    p{
    text-align: center;
    color: #08a5e8;
    padding-top: 0 8px;
    }
    
    @media(max-width:1000px){
.content{
    width: 45px;
    }
    } 
    @media(max-width: 750px){
.content{    
    width: 100%;
    }
    }   

    @media(max-width:1000px){
.content{
    width: 45px;
    }
    } 
    @media(max-width: 750px){
.content{    
    width: 100%;
    }
}
    b{
        color: #333;
    }
    P{
        color: red;
    }
    .logo{
        padding-right: 1000px;
    }
    .B{
        color: black;
    }
</style>
<body>
      <img class="logo" src="InShot_20230831_211534274.png" height="200" width="200">
    <h1>DIRECT FARMER</h1>
    <div CLASS="main">
         <Marquee>ORGANIC FOOD IS A ORGANIC HEALTH</Marquee>
    </div>
    </form>
 </form>
 <nav class="navbar">
     <ul>
       <li><a href="user_subscription.html">SUBSCRIPTION_PAGE</a></li>
       <li><a href="user_login.php">BACK</a></li>
   </ul>
</nav>
 
<CENTER><label><B><I>VEGETABLES</B></I></label></CENTER>
<div class="gallery"> 
    
<div class="content">
<img src="Tom.jpg">
<h3>Tomoto</h3>
<p>FARMER NAME: <B><i>Ganeshan</i></B><BR>
    AREA: <B><I>Villupuram</I></B><BR>
    MOBILE NO: <B><i>8838818193</i></B><BR> </p>
</div>

<div class="content">
    <img src="Oni.jpg">
    <h3>Onion1</h3>
    <p>FARMER NAME: <B><i>Kumaravel</i></B><BR>
        AREA: <B><I>Coimbatore</I></B><BR>
        MOBILE NO: <B><i>7859645218</i></B><BR> </p>
    </div>
    <div class="content">
        <img src="Car.jpg">
        <h3>Carrot</h3>
        <p>FARMER NAME: <B><i>Sakthivel</i></B><BR>
            AREA: <B><I>Kancheepuram</I></B><BR>
            MOBILE NO: <B><i>9685452537</i></B><BR> </p>
        </div>
        <a href="veg.php"> <input type="button" value="View more"></a>
        
</div>
<CENTER><label><B><I>FRUITS</B></I></label></CENTER>
    <div class="camp">
            <div class="fruit">
                <img src="Man.jpg">
                <h3>Mango</h3>
                <p>FARMER NAME: <B><i>Kumar</i></B><BR>
                    AREA: <B><I>Namakkal</I></B><BR>
                    MOBILE NO: <B><i>8567954259</i></B><BR> </p>
                </div>
                <div class="fruit">
                    <img src="Jac.jpg">
                    <h3>JackFruit</h3>
                    <p>FARMER NAME: <B><i>Ranga</i></B><BR>
                        AREA: <B><I>salem</I></B><BR>
                        MOBILE NO: <B><i>7458954865</i></B><BR> </p>
                    </div>
                        <div class="fruit">
                            <img src="Ban.jpg">
                            <h3>Banana</h3>
                            <p>FARMER NAME: <B><i>KUPPUSAMI</i></B><BR>
                                AREA: <B><I>VALAVANUR</I></B><BR>
                                MOBILE NO: <B><i>6985745894</i></B><BR> </p>
                            </div>
                            <a href="fruits.php"> <input type="button" value=" View more"></a>
    </div>
    <CENTER><label><B><I>NUTS</B></I> </label></CENTER>
                           <div class="sound">
                                <div class="nuts">
                                    <img src="cas.jpg">
                                    <h3>Cashew Nuts</h3>
                                    <p>FARMER NAME: <B><i>Siva Moorthi</i></B><BR>
                                        AREA: <B><I>Vellore</I></B><BR>
                                        MOBILE NO: <B><i>7589685948</i></B><BR> </p>
                                  </div>
                                    <div class="nuts">
                                        <img src="nut.jpg">
                                        <h3>Peanut</h3>
                                        <p>FARMER NAME: <B><i>Abdul</i></B><BR>
                                            AREA: <B><I>Pudukkottai</I></B><BR>
                                            MOBILE NO: <B><i>7859684596</i></B><BR> </p>
                                        </div>
                                        <div class="nuts">
                                            <img src="almond.jpeg">
                                            <h3>Almond</h3>
                                            <p>FARMER NAME: <B><i>Devarasu</i></B><BR>
                                                AREA: <B><I>Madurai</I></B><BR>
                                                MOBILE NO: <B><i>8574625813</i></B><BR> </p>
                                            </div>
                                            <a href="nuts.php"> <input type="button" value="View more"></a>
                                        </div>                                     
</body>
