<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
    <meta charset="UTF-8">
        <meta name="description" content="Masukan profile singkat tentang website anda">
        <meta name="keywords" content="HTML,CSS,Website">
        <meta name="author" content="Nama anda">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
<style>
.container{
    width: 500px;
    max-width: 500px;
    height: 450px;
    background:white;
    border-radius: 10px;
}
.container h2{
    text-align: center;
    margin-top: 20px;
    font-weight: 800;
    font-size: 30px;
}
.container p{
    text-align: center;
    margin: 15px 20px;
    color: rgb(82, 81, 81);
}
form{
    display: flex;
    flex-direction: column;
    margin: 0 30px;
}
form input{
    margin: 5px 0;
    height: 35px;
    padding-left: 7px;
    outline: none;
    border-radius: 5px;
    border: 1px solid rgb(82, 81, 81);
    font-size: 16px;
}
form input:focus{
    border: 2px solid black;
}
form #msg{
    margin: 5px 0;
    outline: none;
    padding: 7px 7px;
    z-index: 999;
    resize: none;
    border-radius: 5px;
    border: 1px solid rgb(51, 51, 51);
    font-size: 16px;
}
form #msg:focus{
    border: 2px solid black;
}
#btn{
    background-color: black;
    color: white;
    font-weight: bold;
    font-size: 17.5px;
    height: 45px;
    cursor: pointer;
    transition: .3s ease;
}
#btn:hover{
    background-color: rgb(22, 22, 22);
}

</style>
<table width="80%" border="1" cellspacing="0" align="center">
<tr height="150px">
                <td>
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/fc612687613367.5dfd308bad94d.png" width="100%" height="100%">
                </td>    
            </tr>
   
   <tr height="50px">
                <td style="height:100%;border:none;padding:10px; display:flex;justify-content:space-between
                ;">
                    <!-- dibawah ini adalah termasuk dalam jenis internal link-->
                    <a style="text-decoration:none;" href="index.php"><i class="fa fa-home"></i> <strong>Beranda</strong></a>
                    <a style="text-decoration:none;" href="profile.php"><i class="fa fa-user"></i> Profile</a>
                    <a style="text-decoration:none;" href="galeri_gambar.php"><i class="fas fa-images"></i> Galeri Gambar</a>
                    <a style="text-decoration:none;" href="galeri_video.php"><i class="fas fa-photo-video"></i> Galeri Vidio</a>
                    <a style="text-decoration:none;" href="contact.php"><i class="fas fa-address-book"></i> <b>Kontak</b></a>
                    <!-- dibawah ini adalah termasuk dalam jenis external link-->
                
                </td>    
            </tr>
        
        
        
         <tr height="450px">
                <td align="top">
                  <center>
                        <div class="container">
        <h2>Contact Us</h2>
        <p>Hubungi saya di reksa.prayoga1012@gmail.com</p>
        <form action="index.html" method="POST">
            <input type="text" placeholder="Your name" required>
            <input type="email" placeholder="Email address" required>
            <input type="texr" placeholder="Subject" required>
            <textarea name="msg" id="msg" cols="30" rows="3" placeholder="Message"></textarea>
            <input type="submit" id="btn" value="Send">
        </form>
    </div>
                  </center>
                </td>    
            </tr>
            
                        
                      <tr height="50px">
                <td>
                <center><h6>Copyright Kigame </h6></center>
                </td>    
            </tr>
</table>
   
</body>
</html>
