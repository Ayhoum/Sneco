<?php
ob_start();
?>
<?php
include '../../include/phpscripts/DB.php'
?>
<?php
?>
<?php
if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: Agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: accountant_index.php");
}
?>
<?php
if(isset($_GET['t_id'])){
    $transaction_id = $_GET['t_id'];
}
$query = "SELECT * FROM TRANSACTION WHERE ID = $transaction_id ";
$select_trans_by_id = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_trans_by_id)){

    $transaction_ID = $row['ID'];
    $Agent_id     = $row['Agent_ID'];
    $seName       = $row['Sender_eName'];
    $saName       = $row['Sender_aName'];
    $sStreetName  = $row['Sender_StreetName'];
    $sHouseNumber = $row['Sender_HouseNo'];
    $sPostcode    = $row['Sender_Postcode'];
    $sCity        = $row['Sender_City'];
    $sCountry     = $row['Sender_Country'];
    $sPhone       = $row['Sender_Phone'];
    $sEmail       = $row['Sender_Email'];
    $sNationality = $row['Sender_Nationality'];
    $sIDNumber    = $row['Sender_IdNumber'];
    $sExpiary     = $row['Sender_IdExp'];
    // Receiver
    $reName       = $row['Receiver_eName'];
    $raName       = $row['Receiver_aName'];
    $rStreetName  = $row['Receiver_StreetName'];
    $rHouseNumber = $row['Receiver_HouseNo'];
    $rPostcode    = $row['Receiver_Postcode'];
    $rCity        = $row['Receiver_City'];
    $rCountry     = $row['Receiver_Country'];
    $rPhone       = $row['Receiver_Phone'];
    $rEmail       = $row['Receiver_Email'];
    //Other Data
    $SentAmount       = $row['Received_Amount'];
    $current      = $row['Current_Currency'];
    $payment      = $row['Payment_Currency'];
    $payoutAmount        = $row['Payout_Amount'];
    $rate         = $row['Rate'];
    $totalRecieved = $SentAmount + $rate;
    $charge       = $row['Charge'];
    $reason       = $row['Reason'];
    $comment      = $row['Comment'];


    if(isset($_POST['Update'])){

        $ID           = $_POST['ID'];
        $Agent_id     = $_POST['Agent_ID'];
        $seName       = $_POST['Sender_eName'];
        $saName       = $_POST['Sender_aName'];
        $sStreetName  = $_POST['Sender_StreetName'];
        $sHouseNumber = $_POST['Sender_HouseNumber'];
        $sPostcode    = $_POST['Sender_Postcode'];
        $sCity        = $_POST['Sender_City'];
        $sCountry     = $_POST['Sender_Country'];
        $sPhone       = $_POST['Sender_Phone'];
        $sEmail       = $_POST['Sender_Email'];
        $sNationality = $_POST['Sender_Nationality'];
        $sIDNumber    = $_POST['Sender_IDNumber'];
        $sExpiary     = $_POST['Sender_Expiary'];

        // Receiver
        $reName       = $_POST['Receiver_eName'];
        $raName       = $_POST['Receiver_aName'];
        $rStreetName  = $_POST['Receiver_StreetName'];
        $rHouseNumber = $_POST['Receiver_HouseNumber'];
        $rPostcode    = $_POST['Receiver_Postcode'];
        $rCity        = $_POST['Receiver_City'];
        $rCountry     = $_POST['Receiver_Country'];
        $rPhone       = $_POST['Receiver_Phone'];
        $rEmail       = $_POST['Receiver_Email'];
        //Other Data
        $sentAmount = $_POST['Amount'];
        $current = $_POST['Current_Currency'];
        $payment = $_POST['Payment_Currency'];
        $payoutAmount = $_POST['Totalg'];
        $rate = $_POST['Rate'];
        $charge = $_POST['ExRa'];
        $reason = $_POST['Reason'];
        $comment = $_POST['Comment'];

        $query = "UPDATE TRANSACTION SET ";
        $query .= "ID = '{$ID}', ";
        $query .= "Agent_ID = '{$Agent_id}', ";
        $query .= "Sender_eName = '{$seName}', ";
        $query .= "Sender_aName = '{$saName}', ";
        $query .= "Sender_Phone = '{$sPhone}', ";
        $query .= "Sender_Email = '{$sEmail}', ";
        $query .= "Sender_StreetName = '{$sStreetName}', ";
        $query .= "Sender_HouseNo = '{$sHouseNumber}', ";
        $query .= "Sender_Postcode = '{$sPostcode}', ";
        $query .= "Sender_City = '{$sCity}', ";
        $query .= "Sender_Country = '{$sCountry}', ";
        $query .= "Sender_IdNumber = '{$sIDNumber}', ";
        $query .= "Sender_Nationality = '{$sNationality}', ";
        $query .= "Sender_IdExp = '{$sExpiary}', ";

        $query .= "Receiver_eName = '{$reName}', ";
        $query .= "Receiver_aName = '{$raName}', ";
        $query .= "Receiver_Phone = '{$rPhone}', ";
        $query .= "Receiver_Email = '{$rEmail}', ";
        $query .= "Receiver_StreetName = '{$rStreetName}', ";
        $query .= "Receiver_HouseNo = '{$rHouseNumber}', ";
        $query .= "Receiver_Postcode = '{$rPostcode}', ";
        $query .= "Receiver_City = '{$rCity}', ";
        $query .= "Receiver_Country = '{$rCountry}', ";

        $query .= "Received_Amount = '{$sentAmount}', ";
        $query .= "Current_Currency = '{$current}', ";
        $query .= "Payment_Currency = '{$payment}', ";
        $query .= "Payout_Amount = '{$payoutAmount}', ";
        $query .= "Rate = '{$rate}', ";
        $query .= "Charge = '{$charge}', ";
        $query .= "Reason = '{$reason}', ";
        $query .= "Comment = '{$comment}' ";
        $query .= "WHERE ID = {$transaction_ID} ";


        $update_post = mysqli_query($mysqli, $query);

        header("Location: transaction.php");

    }
}
?>


<h1>EDIT TRANSACTION </h1>
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <form class="form-horizontal" method="post" action="#" name="basic_validate" contentType="charset=UTF-8" id="basic_validate" novalidate="novalidate">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Sender</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="#" method="get" class="form-horizontal">

                                <div class="control-group">
                                    <label class="control-label">Trans ID.</label>
                                    <div class="controls">
                                        <input type="text" name="ID" id="ID" value="<?php echo $transaction_ID; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Agent No.</label>
                                    <div class="controls">
                                        <input type="text" name="Agent_ID" id="Agent_ID" value="<?php echo $Agent_id; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Name (English)</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_eName" id="Sender_eName" value="<?php echo $seName; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Name (Arabic)</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_aName" id="Sender_aName" value="<?php echo $saName; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Street Name </label>
                                    <div class="controls">
                                        <input type="text" name="Sender_StreetName" id="Sender_StreetName" value="<?php echo $sStreetName; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">House Number</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_HouseNumber" id="Sender_HouseNumber" value="<?php echo $sHouseNumber; ?>" required>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Postcode </label>
                                        <div class="controls">
                                            <input type="text" name="Sender_Postcode" id="Sender_Postcode" value="<?php echo $sPostcode; ?>" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">City</label>
                                        <div class="controls">
                                            <input type="text" name="Sender_City" id="Sender_City" value="<?php echo $sCity; ?>" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Country</label>
                                        <div class="controls">
                                            <select style="width:215px;" name="Sender_Country" id="Sender_Country">
                                                <option value="">-- select one --</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antartica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                <option value="Croatia">Croatia (Hrvatska)</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="France Metropolitan">France, Metropolitan</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                <option value="Holy See">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran (Islamic Republic of)</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                <option value="Korea">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia, Federated States of</option>
                                                <option value="Moldova">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint LUCIA">Saint LUCIA</option>
                                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                <option value="Span">Spain</option>
                                                <option value="SriLanka">Sri Lanka</option>
                                                <option value="St. Helena">St. Helena</option>
                                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Viet Nam</option>
                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Yugoslavia">Yugoslavia</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Phone</label>
                                        <div class="controls">
                                            <input type="text" name="Sender_Phone" value="<?php echo $sPhone; ?>" id="Sender_Phone" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" name="Sender_Email" id="Sender_Email" value="<?php echo $sEmail; ?>" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nationality</label>
                                        <div class="controls">
                                            <select name="Sender_Nationality" id="Sender_Nationality" style="width:215px;">
                                                <option value="">-- select one --</option>
                                                <option value="afghan">Afghan</option>
                                                <option value="albanian">Albanian</option>
                                                <option value="algerian">Algerian</option>
                                                <option value="american">American</option>
                                                <option value="andorran">Andorran</option>
                                                <option value="angolan">Angolan</option>
                                                <option value="antiguans">Antiguans</option>
                                                <option value="argentinean">Argentinean</option>
                                                <option value="armenian">Armenian</option>
                                                <option value="australian">Australian</option>
                                                <option value="austrian">Austrian</option>
                                                <option value="azerbaijani">Azerbaijani</option>
                                                <option value="bahamian">Bahamian</option>
                                                <option value="bahraini">Bahraini</option>
                                                <option value="bangladeshi">Bangladeshi</option>
                                                <option value="barbadian">Barbadian</option>
                                                <option value="barbudans">Barbudans</option>
                                                <option value="batswana">Batswana</option>
                                                <option value="belarusian">Belarusian</option>
                                                <option value="belgian">Belgian</option>
                                                <option value="belizean">Belizean</option>
                                                <option value="beninese">Beninese</option>
                                                <option value="bhutanese">Bhutanese</option>
                                                <option value="bolivian">Bolivian</option>
                                                <option value="bosnian">Bosnian</option>
                                                <option value="brazilian">Brazilian</option>
                                                <option value="british">British</option>
                                                <option value="bruneian">Bruneian</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="burkinabe">Burkinabe</option>
                                                <option value="burmese">Burmese</option>
                                                <option value="burundian">Burundian</option>
                                                <option value="cambodian">Cambodian</option>
                                                <option value="cameroonian">Cameroonian</option>
                                                <option value="canadian">Canadian</option>
                                                <option value="cape verdean">Cape Verdean</option>
                                                <option value="central african">Central African</option>
                                                <option value="chadian">Chadian</option>
                                                <option value="chilean">Chilean</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="colombian">Colombian</option>
                                                <option value="comoran">Comoran</option>
                                                <option value="congolese">Congolese</option>
                                                <option value="costa rican">Costa Rican</option>
                                                <option value="croatian">Croatian</option>
                                                <option value="cuban">Cuban</option>
                                                <option value="cypriot">Cypriot</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominican">Dominican</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="east timorese">East Timorese</option>
                                                <option value="ecuadorean">Ecuadorean</option>
                                                <option value="egyptian">Egyptian</option>
                                                <option value="emirian">Emirian</option>
                                                <option value="equatorial guinean">Equatorial Guinean</option>
                                                <option value="eritrean">Eritrean</option>
                                                <option value="estonian">Estonian</option>
                                                <option value="ethiopian">Ethiopian</option>
                                                <option value="fijian">Fijian</option>
                                                <option value="filipino">Filipino</option>
                                                <option value="finnish">Finnish</option>
                                                <option value="french">French</option>
                                                <option value="gabonese">Gabonese</option>
                                                <option value="gambian">Gambian</option>
                                                <option value="georgian">Georgian</option>
                                                <option value="german">German</option>
                                                <option value="ghanaian">Ghanaian</option>
                                                <option value="greek">Greek</option>
                                                <option value="grenadian">Grenadian</option>
                                                <option value="guatemalan">Guatemalan</option>
                                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                <option value="guinean">Guinean</option>
                                                <option value="guyanese">Guyanese</option>
                                                <option value="haitian">Haitian</option>
                                                <option value="herzegovinian">Herzegovinian</option>
                                                <option value="honduran">Honduran</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="icelander">Icelander</option>
                                                <option value="indian">Indian</option>
                                                <option value="indonesian">Indonesian</option>
                                                <option value="iranian">Iranian</option>
                                                <option value="iraqi">Iraqi</option>
                                                <option value="irish">Irish</option>
                                                <option value="israeli">Israeli</option>
                                                <option value="italian">Italian</option>
                                                <option value="ivorian">Ivorian</option>
                                                <option value="jamaican">Jamaican</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="jordanian">Jordanian</option>
                                                <option value="kazakhstani">Kazakhstani</option>
                                                <option value="kenyan">Kenyan</option>
                                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                <option value="kuwaiti">Kuwaiti</option>
                                                <option value="kyrgyz">Kyrgyz</option>
                                                <option value="laotian">Laotian</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="lebanese">Lebanese</option>
                                                <option value="liberian">Liberian</option>
                                                <option value="libyan">Libyan</option>
                                                <option value="liechtensteiner">Liechtensteiner</option>
                                                <option value="lithuanian">Lithuanian</option>
                                                <option value="luxembourger">Luxembourger</option>
                                                <option value="macedonian">Macedonian</option>
                                                <option value="malagasy">Malagasy</option>
                                                <option value="malawian">Malawian</option>
                                                <option value="malaysian">Malaysian</option>
                                                <option value="maldivan">Maldivan</option>
                                                <option value="malian">Malian</option>
                                                <option value="maltese">Maltese</option>
                                                <option value="marshallese">Marshallese</option>
                                                <option value="mauritanian">Mauritanian</option>
                                                <option value="mauritian">Mauritian</option>
                                                <option value="mexican">Mexican</option>
                                                <option value="micronesian">Micronesian</option>
                                                <option value="moldovan">Moldovan</option>
                                                <option value="monacan">Monacan</option>
                                                <option value="mongolian">Mongolian</option>
                                                <option value="moroccan">Moroccan</option>
                                                <option value="mosotho">Mosotho</option>
                                                <option value="motswana">Motswana</option>
                                                <option value="mozambican">Mozambican</option>
                                                <option value="namibian">Namibian</option>
                                                <option value="nauruan">Nauruan</option>
                                                <option value="nepalese">Nepalese</option>
                                                <option value="new zealander">New Zealander</option>
                                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                <option value="nicaraguan">Nicaraguan</option>
                                                <option value="nigerien">Nigerien</option>
                                                <option value="north korean">North Korean</option>
                                                <option value="northern irish">Northern Irish</option>
                                                <option value="norwegian">Norwegian</option>
                                                <option value="omani">Omani</option>
                                                <option value="pakistani">Pakistani</option>
                                                <option value="palauan">Palauan</option>
                                                <option value="Palestinian">Palestinian</option>
                                                <option value="panamanian">Panamanian</option>
                                                <option value="papua new guinean">Papua New Guinean</option>
                                                <option value="paraguayan">Paraguayan</option>
                                                <option value="peruvian">Peruvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="qatari">Qatari</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="rwandan">Rwandan</option>
                                                <option value="saint lucian">Saint Lucian</option>
                                                <option value="salvadoran">Salvadoran</option>
                                                <option value="samoan">Samoan</option>
                                                <option value="san marinese">San Marinese</option>
                                                <option value="sao tomean">Sao Tomean</option>
                                                <option value="saudi">Saudi</option>
                                                <option value="scottish">Scottish</option>
                                                <option value="senegalese">Senegalese</option>
                                                <option value="serbian">Serbian</option>
                                                <option value="seychellois">Seychellois</option>
                                                <option value="sierra leonean">Sierra Leonean</option>
                                                <option value="singaporean">Singaporean</option>
                                                <option value="slovakian">Slovakian</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="solomon islander">Solomon Islander</option>
                                                <option value="somali">Somali</option>
                                                <option value="south african">South African</option>
                                                <option value="south korean">South Korean</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="sri lankan">Sri Lankan</option>
                                                <option value="stateless">Stateless</option>
                                                <option value="sudanese">Sudanese</option>
                                                <option value="surinamer">Surinamer</option>
                                                <option value="swazi">Swazi</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="swiss">Swiss</option>
                                                <option value="syrian">Syrian</option>
                                                <option value="taiwanese">Taiwanese</option>
                                                <option value="tajik">Tajik</option>
                                                <option value="tanzanian">Tanzanian</option>
                                                <option value="thai">Thai</option>
                                                <option value="togolese">Togolese</option>
                                                <option value="tongan">Tongan</option>
                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                <option value="tunisian">Tunisian</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="tuvaluan">Tuvaluan</option>
                                                <option value="ugandan">Ugandan</option>
                                                <option value="ukrainian">Ukrainian</option>
                                                <option value="uruguayan">Uruguayan</option>
                                                <option value="uzbekistani">Uzbekistani</option>
                                                <option value="venezuelan">Venezuelan</option>
                                                <option value="vietnamese">Vietnamese</option>
                                                <option value="welsh">Welsh</option>
                                                <option value="yemenite">Yemenite</option>
                                                <option value="zambian">Zambian</option>
                                                <option value="zimbabwean">Zimbabwean</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--                            <div class="control-group">-->
                                    <!--                                <label class="control-label">Bank Account</label>-->
                                    <!--                                <div class="controls">-->
                                    <!--                                    <input type="text" name="Sender_BankAccount" id="Sender_BankAccount" placeholder="XXXX XXXX XXXX XXXX XX" pattern="\w\w\d\d \w\w\w\w \d\d\d\d \d\d\d\d \d\d" class="masked" data-charset="__XX ____ XXXX XXXX XX">-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <div class="control-group">
                                        <label class="control-label">ID Number</label>
                                        <div class="controls">
                                            <input type="text" name="Sender_IDNumber" value="<?php echo $sIDNumber; ?>" id="Sender_IDNumber" required>
                                        </div>
                                    </div>
                                    <?php
                                    ?>
                                    <div class="control-group">
                                        <label class="control-label">Date picker (yyy-mm-dd)</label>
                                        <div class="controls">
                                            <input type="text" name="Sender_Expiary" id="Sender_Expiary" required data-date="<?php echo date('Y-n-j', strtotime('+1 months')); ?>" data-date-format="yyyy-mm-dd" value="<?php echo $sExpiary; ?>" class="datepicker span11" style="width:215px;">
                                            <span class="help-block">Date with Formate of  (yyy-mm-dd)</span> </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                <h5>Receiver</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="control-group">
                                    <label class="control-label">Name (English)</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_eName" value="<?php echo $reName; ?>" id="Receiver_eName" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Name (Arabic)</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_aName" id="Receiver_aName" value="<?php echo $raName; ?>" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Street Name</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_StreetName" value="<?php echo $rStreetName; ?>" id="Receiver_StreetName"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">House Number</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_HouseNumber" value="<?php echo $rHouseNumber; ?>" id="Receiver_HouseNumber"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Postcode</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_Postcode" value="<?php echo $rPostcode; ?>" id="Receiver_Postcode"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_City" value="<?php echo $rCity; ?>" id="Receiver_City" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Country</label>
                                    <div class="controls">
                                        <select style="width:215px;" name="Receiver_Country" id="Receiver_Country">
                                            <option value="">-- select one --</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antartica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France, Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia, Federated States of</option>
                                            <option value="Moldova">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                            <option value="Span">Spain</option>
                                            <option value="SriLanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Viet Nam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_Phone" value="<?php echo $rPhone; ?>" id="Receiver_Phone" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="Receiver_Email" value="<?php echo $rEmail; ?>" id="Receiver_Email" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget-box">
                                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                    <h5>Other</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <div class="control-group">
                                        <label class="control-label">Amount</label>
                                        <div class="controls">
                                            <input type="text" name="Amount" value=" " id="Amount" />
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label">Current Currency</label>
                                        <div class="controls">
                                            <select id="Current_Currency" style="width:215px;" onchange="var1(this)" name='Current_Currency' required>
                                                <option value='' disabled="disabled" selected>Select Currency</option>
                                                <option value='AED' title='United Arab Emirates Dirham'>AED (United Arab Emirates Dirham)</option>
                                                <option value='EUR' title='Euro'>EUR (Euro)</option>
                                                <option value='SAR' title='Saudi Riyal'>SAR (Saudi Riyal)</option>
                                                <option value='SYP' title='Syrian Pound'>SYP (Syrian Pound)</option>
                                                <option value='USD' title='United States Dollar'>USD (United States Dollar)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Payment Currency</label>
                                        <div class="controls">
                                            <select id="Payment_Currency" style="width:215px;" onchange="var2(this)" name='Payment_Currency' required>
                                                <option disabled="disabled" selected>Select Currency</option>
                                                <option value='AED' title='United Arab Emirates Dirham'>AED (United Arab Emirates Dirham)</option>
                                                <option value='EUR' title='Euro'>EUR (Euro)</option>
                                                <option value='SAR' title='Saudi Riyal'>SAR (Saudi Riyal)</option>
                                                <option value='SYP' title='Syrian Pound'>SYP (Syrian Pound)</option>
                                                <option value='USD' title='United States Dollar'>USD (United States Dollar)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Exchange Rate</label>
                                        <div class="controls">
                                            <input  type="text" name="ExRa" id="ExRa" value="<?php echo $charge; ?>" readonly required />
                                        </div>
                                        <div class="controls">
                                            <Button id="Calc" onclick="return false;" class="btn btn-success">Calculate</Button>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Rate</label>
                                        <div class="controls">
                                            <input  type="text" name="Rate" id="Rate" value="<?php echo $rate; ?>" readonly required />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Reason</label>
                                        <div class="controls">
                                            <textarea name="Reason" id="Reason" required> <?php echo $reason; ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Comment</label>
                                        <div class="controls">
                                            <textarea name="Comment" id="Comment" required> <?php echo $comment; ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Total Amount to Take</label>
                                        <div class="controls">
                                            <input  type="text" name="Totalt" id="Totalt" value="<?php echo $totalRecieved; ?>" readonly required />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Total Amount to Pay</label>
                                        <div class="controls">
                                            <input  type="text" name="Totalg" id="Totalg" value="<?php echo $payoutAmount; ?>" readonly required />
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input name="Update" type="submit" value="Update" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <script>
//
//                    $('#Rate').click(function(){
//                        $obj = $('#Amount');
//                        $var = Number($obj.val());
//
//                        if ($var > 0 && $var <= 150){
//                            $rate = 10;
//                            $total = $var + $rate;
//                        }
//
//                        else if  ($var >= 151 && $var <= 400){
//                            $rate = $var * 0.08;
//                            $total = $var + $rate;
//                        }
//                        else if ($var >= 401 && $var <= 1000){
//                            $rate = $var * 0.07;
//                            $total = $var + $rate;
//                        }
//                        else if ($var >= 1001 && $var <= 3000){
//                            $rate = $var * 0.06;
//                            $total = $var + $rate;
//                        }
//                        else if ($var >= 3001 && $var <= 7000) {
//                            $rate = $var * 0.05;
//                            $total = $var + $rate;
//                        }
//                        else if ($var >= 7001 && $var < 10000){
//                            $rate = $var * 0.04;
//                            $total = $var + $rate;
//                        }
//                        else{
//                            $total = 0;
//                        }
//
//                        $('#Rate').val($rate);
//                    });
//


                    $('#Amount').change(function() {

                        $var = Number($(this).val());

                        if ($var > 0 && $var <= 150){
                            $rate = 10;
                            $total = $var + $rate;
                        }

                        else if  ($var >= 151 && $var <= 400){
                            $rate = $var * 0.08;
                            $total = $var + $rate;
                        }
                        else if ($var >= 401 && $var <= 1000){
                            $rate = $var * 0.07;
                            $total = $var + $rate;
                        }
                        else if ($var >= 1001 && $var <= 3000){
                            $rate = $var * 0.06;
                            $total = $var + $rate;
                        }
                        else if ($var >= 3001 && $var <= 7000) {
                            $rate = $var * 0.05;
                            $total = $var + $rate;
                        }
                        else if ($var >= 7001 && $var < 10000){
                            $rate = $var * 0.04;
                            $total = $var + $rate;
                        }
                        else{
                            $total = 0;
                        }

                        $('#Rate').val($rate);

                        $('#Totalt').val($total);

                        $chvar = Number($('#ExRa').val());
                        $amtotal = $var * $chvar;

                        $('#Totalg').val($amtotal);

                    });



                    $("#Calc").on("click", function () {

                        var e = document.getElementById("Current_Currency");
                        var value1 = e.options[e.selectedIndex].value;


                        var f = document.getElementById("Payment_Currency");
                        var value2 = f.options[f.selectedIndex].value;


                        if (value1+value2 == 'AEDEUR'){
                            var id = 0;
                        }
                        else if  (value1+value2 == 'AEDSAR'){
                            var id = 1;
                        }
                        else if (value1+value2 == 'AEDSYP'){
                            var id = 2;
                        }
                        else if (value1+value2 == 'AEDUSD'){
                            var id = 3;
                        }
                        else if (value1+value2 == 'EURAED'){
                            var id = 4;
                        }
                        else if (value1+value2 == 'EURSAR'){
                            var id = 5;
                        }
                        else if (value1+value2 == 'EURSYP'){
                            var id = 6;
                        }
                        else if (value1+value2 == 'EURUSD'){
                            var id = 7;
                        }
                        else if (value1+value2 == 'SARAED'){
                            var id = 8;
                        }
                        else if  (value1+value2 == 'SAREUR'){
                            var id = 9;
                        }
                        else if (value1+value2 == 'SARSYP'){
                            var id = 10;
                        }
                        else if (value1+value2 == 'SARUSD'){
                            var id = 11;
                        }
                        else if (value1+value2 == 'SYPAED'){
                            var id = 12;
                        }
                        else if (value1+value2 == 'SYPEUR'){
                            var id = 13;
                        }
                        else if (value1+value2 == 'SYPSAR'){
                            var id = 14;
                        }
                        else if (value1+value2 == 'SYPUSD'){
                            var id = 15;
                        }
                        else if (value1+value2 == 'USDAED'){
                            var id = 16;
                        }
                        else if (value1+value2 == 'USDEUR'){
                            var id = 17;
                        }
                        else if (value1+value2 == 'USDSAR'){
                            var id = 18;
                        }
                        else if (value1+value2 == 'USDSYP'){
                            var id = 19;
                        }
                        else if ((value1+value2 == 'AEDAED') || (value1+value2 == 'EUREUR') || (value1+value2 == 'SARSAR') || (value1+value2 == 'SYPSYP') || (value1+value2 == 'USDUSD') ){
                            var id = 20;
                        }


                        $.ajax({
                            type: 'POST',
                            url: '../agentscripts/exchange.php',
                            data: 'id=testdata',
                            dataType: 'json',
                            cache: false,
                            success: function(result) {
                                $value = result[id]['Value'];
                            }
                        });


                        $("#ExRa").val($value);

                        $chvar = Number($('#ExRa').val());
                        $amtotal = $var * $chvar;

                        $('#Totalg').val($amtotal);
                    });



//$('#ExRa').change(function() {
//
//    $chvar = Number($('#ExRa').val());
//    $amtotal = $var * $chvar;
//
//    $('#Totalg').val($amtotal);
//
//});

//                    $("#Totalt").click(function(){
//                        $('#Totalt').val($total);
//                    });

//                    $("#Totalg").click(function(){
//
//                        $chvar = Number($("#ExRa").val());
//                        $amtotal = $var * $chvar;
//                        $('#Totalg').val($amtotal);
//
//                    });




                function setSelectedIndex(s, valsearch)
                {
// Loop through all the items in drop down list
                    for (i = 0; i< s.options.length; i++)
                    {
                        if (s.options[i].value == valsearch)
                        {
// Item is found. Set its property and exit
                            s.options[i].selected = true;
                            break;
                        }
                    }
                    return;
                }
                setSelectedIndex(document.getElementById("Receiver_Country"),"<?php echo $rCountry; ?>");
                setSelectedIndex(document.getElementById("Sender_Nationality"),"<?php echo $sNationality; ?>");
                setSelectedIndex(document.getElementById("Current_Currency"),"<?php echo $current; ?>");
                setSelectedIndex(document.getElementById("Payment_Currency"),"<?php echo $payment; ?>");
                setSelectedIndex(document.getElementById("Sender_Country"),"<?php echo $sCountry; ?>");





            </script>