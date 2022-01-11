<?php include("../head-news.php");?>
<?php
$host = 'localhost';  
$user = 'ct11162_ips';  
$pass = 'Newyearips1';  
$dbname = 'ct11162_ips';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die();  
}  
echo '';
// using PHP PDO
$ip =$_SERVER['REMOTE_ADDR'];


$sql = "INSERT INTO ips(IP) VALUES ('".$_SERVER['REMOTE_ADDR']."')";  
if(mysqli_query($conn, $sql)){  
}else{   
}

mysqli_close($conn);  
?>

        <div class="section-empty section-item">
            <div class="container content" id="history-info" style="margin: 0; padding:0; width: 100vw;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lnmy41X3hvs" style="width: 57%; height:32%; position:absolute;left: 22vw;top: 7vw;z-index: 1;" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <img  src="../images/bg_ver_3.png" alt="" style="width: 100vw; z-index:2; position:relative; pointer-events: none;">
            </div>
        </div>
        
<script>
var vid = document.querySelector('#phVideo');

const popup = document.querySelector('.full-screen');

function closePopup(){
  popup.classList.add('hidden');
  vid.autoplay = true;
  vid.load();
}

</script>
        <?php include("../footer-news.php");?>