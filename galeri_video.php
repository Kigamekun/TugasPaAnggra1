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


/* <!-- second slider -->  */
.carousel {
  padding: .3em .3em 0;
  background: rgb(240,240,240);
  text-align: center;
}
.carousel div {
  position: relative;
  margin-bottom: .3em;
  padding-top: 56.25%;
}
.carousel iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.carousel span {
  display: inline-block;
  word-spacing: 1em;  

  overflow: auto;
  white-space: nowrap;
  word-wrap: normal;

}
.carousel a {
  position: relative;
  display: inline-block;
  max-width: 120px;  
  width: 25%;  
  border: 1px solid blue;  
  opacity: .7;  
  text-decoration: none;
}
.carousel a:visited,
.carousel a:nth-of-type(1) {
  border-color: #555;  
}
.carousel a:hover { 
  opacity: 1;
}
.carousel a:not(:active):focus {
  pointer-events: none;
}
.carousel a::before {
  content: "";
  position: absolute;
  top: 0em;
  right: 0em;
  bottom: 0em;
  left: 0em;
  background: rgba(0,0,1,.1);
  transition: background 0s 9999999s;
}
.carousel a:nth-of-type(1)::before {
  background: rgba(255,255,254,.7);
}
.carousel span:active a::before {
  background: rgba(0,0,0,0);
  transition: background 0s;
}
.carousel span:active a:active::before {
  background: rgba(255,255,255,.7);
  transition: background 0s;
}
.carousel img {
  max-width: 100%;
  vertical-align: middle;  
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
                    <a style="text-decoration:none;" href="galeri_vidio.php"><i class="fas fa-photo-video"></i> Galeri Vidio</a>
                    <a style="text-decoration:none;" href="kontak.php"><i class="fas fa-address-book"></i> <b>Kontak</b></a>
                    <!-- dibawah ini adalah termasuk dalam jenis external link-->
                
                </td>    
            </tr>
        
        
        
         <tr height="450px">
                <td align="top">
                    
   <div class="col-lg-4">
<div class="carousel">
  <div><iframe src="https://www.youtube.com/embed/5Per60XwWoU" allowfullscreen frameborder="0" name="slider1"></iframe></div>
  <span>
    <a href="https://www.youtube.com/embed/pyDCubgU57g" target="slider1"><img src="http://i3.ytimg.com/vi/pyDCubgU57g/maxresdefault.jpg"></a>
    <a href="https://www.youtube.com/embed/FR91CB5SBWU" target="slider1"><img src="http://i3.ytimg.com/vi/FR91CB5SBWU/maxresdefault.jpg"></a>
    <a href="https://www.youtube.com/embed/9nCkUgTO5x4" target="slider1"><img src="http://i3.ytimg.com/vi/9nCkUgTO5x4/maxresdefault.jpg"></a>
    <a href="//www.youtube.com/embed/WFhzzJjRncI?rel=0&autoplay=1" target="slider1"><img src="//img.youtube.com/vi/WFhzzJjRncI/default.jpg"></a>
  </span>
</div>
</div>

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
