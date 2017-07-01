<input type="text" id="here" readonly/>
<a style="cursor:pointer;background: #5bb75b;color: white;padding: 6px;" class="butt">Calculate</a>
<p id="demo">Hi</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>


//
//    $(".butt").click(function(){
//
//        // get the most recent exchange rates via the "live" endpoint:
//        $.ajax({
//            url: "https://postcode-api.apiwise.nl/v2/addresses/?postcode=9679EP&number=21",
//            dataType: 'jsonp',
//            headers: {"X-Api-Key": "I6SVkme8py32Z52QJNIiT1tBifN9lZpO3hwSFbh0"},
//            success: function(json) {
//             alert('Success');
//             $value = json.['_embedded'].['addresses'].['0'].['nen5825'].['street'];
//            }, error: function() {
//                alert('ERROR');
//            }
//        });
//
//        $("#here").val($value);
//    });


$(".butt").click(function(){
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "https://postcode-api.apiwise.nl/v2/addresses/?postcode=9679EP&number=21", true);
    xhttp.setRequestHeader("X-Api-Key" , "I6SVkme8py32Z52QJNIiT1tBifN9lZpO3hwSFbh0");
    xhttp.onreadystatechange = function() {
        alert(this.responseText);

    };
    xhttp.send();
    });

</script>

<?php

// De headers worden altijd meegestuurd als array
$headers = array();
$headers[] = 'X-Api-Key: I6SVkme8py32Z52QJNIiT1tBifN9lZpO3hwSFbh0';

// De URL naar de API call
$url = 'https://postcode-api.apiwise.nl/v2/addresses/?postcode=9679EP&number=21';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Indien de server geen TLS ondersteunt kun je met
// onderstaande optie een onveilige verbinding forceren.
// Meestal is dit probleem te herkennen aan een lege response.
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// De ruwe JSON response
$response = curl_exec($curl);
//echo $response;
// Gebruik json_decode() om de response naar een PHP array te converteren

curl_close($curl);

$json = json_decode($response, true);
?>
<br/>
<br/>
<br/>
<?php
print_r($json['_embedded']['addresses'][0]['nen5825']['street']);
echo "<br/>";
print_r($json['_embedded']['addresses'][0]['city']['label']);
?>