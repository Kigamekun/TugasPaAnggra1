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


.profile-card{
  width: 400px;
  text-align: center;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 0 10px #9ecaed;
}


.card-header{
  background: #2d2f40;
  padding: 60px 40px;
}

.pic{
  display: inline-block;
  padding: 8px;
  background: linear-gradient(130deg, #74b9ff, #e66767);
  margin: auto;
  border-radius: 50%;
  background-size: 200% 200%;
  animation: animated-gradient 2s linear infinite;
}

@keyframes animated-gradient{
  25%{
    background-position: left bottom;
  }
  50%{
    background-position: right bottom;
  }
  75%{
    background-position: right top;
  }
  100%{
    background-position: left top;
  }
}

.pic img{
  display: block;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.name{
  color: #EEEDF0 ;
  font-size: 28px;
  font-weight: 600;
  margin: 10px 0;
}

.desc{
  font-size: 18px;
  color: #ffbcd9;
}

.location {
  margin: 10px 0;
  color: #6C72CB ;
}

.icons{
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

.icons a{
  color: #f2f2f2;
  width: 56px;
  font-size: 22px;
  transition: .3s linear;
}

.icons a:hover{
  color: #6C72CB;
}

.contact-btn{
  display: inline-block;
  padding: 12px 50px;
  color: #ffbcd9;
  border: 2px solid #6C72CB;
  border-radius: 6px;
  margin-top: 16px;
  transition: .3s linear;
}

.contact-btn:hover{
  background:#6C72CB;
  color: #f2f2f2;
}

.card-footer{
  background: #EEEDF0;
  padding: 60px 10px;
}

.numbers{
  display: flex;
  align-items: center;
}

.item{
  flex: 1;
  text-transform: uppercase;
  font-size: 13px;
  color: #CB69C1 ;
  font-weight: 500;
}

.item span{
  display: block;
  color: #2c3a47;
  font-size: 30px;
}

.border{
  width: 2px;
  height: 30px;
/*   background: #bbb; */
  background: linear-gradient(130deg, #74b9ff, #e66767);
}

.instagram-account{
  margin-top: 50px;
  font-size: 15px;
}</style>

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
                    <a style="text-decoration:none;" href="galeri_vidio.php"><i class="fas fa-photo-video"></i> Galeri Vidio</a>
                    <a style="text-decoration:none;" href="kontak.php"><i class="fas fa-address-book"></i> <b>Kontak</b></a>
                    <!-- dibawah ini adalah termasuk dalam jenis external link-->
                
                </td>    
            </tr>
        
        
        
         <tr height="450px">
                <td align="top">
                
                
                <center>
                    <div class="profile-card">
    <div class="card-header">
      <div class="pic">
        <img src="https://2.bp.blogspot.com/-gYHHmX6KCRo/XHE0VVI42dI/AAAAAAAABR8/l66pE8GV90UqEIo6Z88jdRDIkTpQaCjmACLcBGAs/s1600/kanna%2Bkamui%2Bloli%2Bmalam-3-2%2Bsakuranime.com.JPG" alt=""/>
      </div>
      <div class="name">Reksa | Kiga</div>
      <div class="desc">Fullstack Developer </div>
      <div class="location"><i class="fas fa-map-marker-alt"></i> Bogor</div>
      <div class="icons">
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
      </div>
      <a href="#" class="contact-btn">Contact Me</a>
    </div>
    <div class="card-footer">
      <div class="numbers">
        <div class="item">
          <span>74</span>
          Posts
        </div>
        <div class="border"></div>
         <div class="item">
          <span>194</span>
          Following
        </div>
         <div class="border"></div>
        <div class="item">
          <span>198</span>
          Followers
        </div>
      </div>
      <div class="instagram-account">@puppetreaper</div>
    </div>
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
