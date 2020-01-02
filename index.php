<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>nanobyte </title>
        <link rel="stylesheet"type="text/css" href="/style.css">
        <link rel="shortcut icon" href="/img/favicon1.ico" type="image/x-icon">

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151378583-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151378583-1');
</script>

	</head>
	<body id="body" >
		<header>
        <h1>nanobyte</h1>
        <img src="/img/logo.png" alt="nanobyte" />
    </header>
        <nav>
            <ul>
                <?php
                    echo file_get_contents("list.txt");
                ?>
            </ul>
        </nav>
        
        
        <article>
            <?php
                if(empty($_GET['id'])==true){
                    echo file_get_contents("0.txt");
                }
                else {echo file_get_contents($_GET['id'].".txt");}
            ?>
            <ul>
                <li>아이콘 출처: <a href="https://www.iconfinder.com/icons/4373259/byte_logo_logos_icon">iconfinder</a>, 김태민 일러스트레이터</li>
                <li>배경한지사진 출처:<a href="https://ww.namu.la/s/080085d411541819182ffc3f10849bedc92ca30ea22dd1d3d26646006789ca361e7da16297fbd43c7ddbdce6f5971ed8361fddac369f17a6ec524fbffd06890c2985ed5b5c85d02b413df866d3e88a3abc6c40fc304dabf8dd71f9e99612be4a323df1862118a39ae362fda5f51b9a3b">구글이미지</a></li>
            </ul>
        </article>


        <div id="theme">
                <input type="button" value="라이트모드" onclick="document.getElementById('body').className='white'"/>
                <input type="button" value="다크모드" onclick="document.getElementById('body').className='black'"/>
                <input type="button" value="한지모드" onclick="document.getElementById('body').className='hanji'"/>
        </div>
        <script src="/script.js"></script>
        
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dbe4291e4c2fa4b6bd9b6ea/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        

		
	</body>
</html>
