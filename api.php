<?php
 
function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file 
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
 
$website =  bacaHTML('https://corona.jatengprov.go.id/');
$odp = explode('<p class="card-text" style="color:green;">', $website);
$odpx = explode('</p>', $odp[1]);
$pdp = explode('<p class="card-text" style="color:#0373fc;">', $website);
$pdpx = explode('</p>', $pdp[1]);
$positif = explode('<h5 class="card-title"></h5> <p class="card-text" style="color:red;">', $website);
$positifx = explode('</p>', $positif[1]);
$rawat = explode('<div class="col-4"> <p class="card-text" style="color:red;">', $website);
$rawatx = explode('</p>', $rawat[1]);
$sembuh = explode('</div> <div class="col-4"> <p class="card-text" style="color:red;">', $website);
$sembuhx = explode('</p>', $sembuh[1]);
$mati = explode('</div> <div class="col-4"> <p class="card-text" style="color:red;">', $website);
$matix = explode('</p>', $mati[2]);

echo "[{";
echo "\"id\":";
echo json_encode("1");
echo ",\"logo\":";
echo json_encode("https://corona.jatengprov.go.id/assets/logo_jateng.png");
echo ",\"odp\":";
echo json_encode($odpx[0]);
echo ",\"pdp\":";
echo json_encode($pdpx[0]);
echo ",\"positif\":";
echo json_encode($positifx[0]);
echo ",\"rawat\":";
echo json_encode($rawatx[0]);
echo ",\"sembuh\":";
echo json_encode($sembuhx[0]);
echo ",\"mati\":";
echo json_encode($matix[0]);
echo "}]";
?>