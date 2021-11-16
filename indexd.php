<?php
$curl = curl_init();

$urll = "https://rukminim1.flixcart.com/image/312/312/krtjgcw0/mobile/s/8/9/smart-5a-x657c-infinix-original-imag5gnzeygmt9fh.jpeg?q=70";

$search_string = "q=mobiles&as=on&as-show=on&otracker=AS_Query_TrendingAutoSuggest_1_0_na_na_na&otracker1=AS_Query_TrendingAutoSuggest_1_0_na_na_na&as-pos=1&as-type=TRENDING&suggestionId=mobiles&requestId=a163a237-1c1c-4deb-9fe1-825ae861d3a7";

$url = "https://www.flipkart.com/search?$search_string";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
print_r($result);

// preg_match_all("https://rukminim1.flixcart.com/image/312/312/krtjgcw0/mobile/s/8/9/smart-5a-x657c-infinix-original-imag/'[^\s]*?'/.jpeg?q=70", $result,$matches);
// print_r($matches);
// $image = array_values(array_unique($matches[0]));
// print_r($image);
// echo $result;



https://rukminim1.flixcart.com/image/312/312/ksnjp8w0/mobile/h/u/u/c21y-rmx3261-realme-original-imag65kcafgjqknz.jpeg?q=70

https://rukminim1.flixcart.com/image/312/312/kqjtd3k0/mobile/s/b/8/c11-2021-rmx3231-realme-original-imag4j4xkqchhfxk.jpeg?q=70



for($i=0;$i < count($images);$i++)
{
echo "<div style='float:left;margin:10 0 0 0;'>";
echo "<img src='$images[$i]'><br/>";
echo "</div>";
}
curl_close($curl);


?>