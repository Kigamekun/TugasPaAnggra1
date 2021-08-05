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
.gallery {
 
  width:100%;
  margin: 0 auto;
  display: grid;
  grid-gap: 5px;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  
  grid-auto-flow: dense; /* Controls how the auto-placement algorithm works, specifying exactly how auto-placed items get flowed into the grid. */
}

/* Stretch vertically */
.v-stretch {
  grid-row: span 2;
}

/* Stretch horizontally */
.h-stretch {
  grid-column: span 2;
}

/* Stretch vertically and horizontally */
.big-stretch {
  grid-column: span 2;
  grid-row: span 2;
}

.gallery div img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Make the gallery items all matchy matchy on smaller screen sizes */
@media screen and (max-width: 515px) {
  .v-stretch {
    grid-row: span 1;
  }

  .h-stretch {
    grid-column: span 1;
  }

  .big-stretch {
    grid-column: span 1;
    grid-row: span 1;
  }
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
                     <div class="gallery">
  <div><img src="https://images.unsplash.com/photo-1623772892441-15ee6fde6f8e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div class="v-stretch"><img src="https://images.unsplash.com/photo-1579550973101-0cbb102afb56?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div class="h-stretch"><img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1113&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1623722824919-cea517d678e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1623360623339-d36b23c61ef0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div class="v-stretch"><img src="https://images.unsplash.com/photo-1623692747804-45f4d300a8be?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div class="big-stretch"><img src="https://images.unsplash.com/photo-1502899576159-f224dc2349fa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1623770072404-bb5d7d2d0912?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" alt=""/></div>
  <div class="h-stretch"><img src="https://images.unsplash.com/photo-1491904768633-2b7e3e7fede5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1623705868049-415863305add?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1581014023865-4209099f2b71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1504298032419-2e78164cf76e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt=""/></div>
  <div class="v-stretch"><img src="https://images.unsplash.com/photo-1516905365385-7f89706faaf8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1505015353489-1759d3cc24e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
  <div class="big-stretch"><img src="https://images.unsplash.com/photo-1622890276840-8eabe803e2bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1621468444006-a2a0117b7c0a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=676&q=80" alt=""/></div>
  <div class="h-stretch"><img src="https://images.unsplash.com/photo-1471931452361-f5ff1faa15ad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1515863149848-223cbed59017?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" alt=""/></div>
  <div class="big-stretch"><img src="https://images.unsplash.com/photo-1443632864897-14973fa006cf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1535224206242-487f7090b5bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt=""/></div>
  <div><img src="https://images.unsplash.com/photo-1620055374842-145f66ec4652?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt=""/></div>
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
