<!DOCTYPE HTML>
<html>

<head>

    <?php include '../header.php';?>


    <script>
        var digitalData = digitalData || {};
        digitalData = {
            page: {
                pageName:"Shipping Page",
                siteSection:"Checkout Section",
                server:"USA Server"
            },
			product: {
				productEvent:"Checkout",
				productID:"201233",
				productName:"Tuxedo"
            },
        };
    </script>


    <title>Global Clothiers|Checkout|Shipping Step 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <script type="text/javascript" src="http://ats-sb.adobe.com/jjsite/include/scripts/menu.js"></script>
    <!--<script type="text/javascript" src="http://ats-sb.adobe.com/jjsite/include/scripts/searchfield.js"></script> -->
    <script type="text/javascript" src="http://ats-sb.adobe.com/jjsite/include/scripts/simpleCart.js"></script>
    <script language="JavaScript" type="text/javascript">
        window.onunload = function() {
            void(0)
        }
    </script>
    <script language="JavaScript">
        <!--if (document.images) {pic1= new Image(200,70); pic1.src="http://localhost:8080/globalclothiers/images/gc_logo.png";}//-->
    </script>

    <style type="text/css">
        @import url(http://ats-sb.adobe.com/jjsite/include/css/jje.css);
        @import url(http://ats-sb.adobe.com/jjsite/include/css/menu.css);
    </style>
    <link rel="shortcut icon" href="http://ats-sb.adobe.com/jjsite/include/images/jj1.ico">
</head>

<body>

    <div id="superwrap">
        <div id="wrapper">
            <!--start logo and head-->

            <div class="head_logo">
                <a href="../index.php" onmouseover="document.jj.src='http://localhost:8080/globalclothiers/images/gc_logo.png'" onmouseout="document.jj.src='http://localhost:8080/globalclothiers/images/gc_logo_black.png'">
                    <img src="http://localhost:8080/globalclothiers/images/gc_logo_black.png" border="0" name="jj" />
                </a>
                <br />
            </div>


            <!--start search box-->

            <div class="rightheader">

                <div class="search_box">

                    <form action="../search/searchresults.php">
                        <input type="text" id="searchfield" name="q" />
                        <input type="submit" Value="Go" class="button">
                    </form>
                </div>

                <div class="checkout"><a href="../checkout/shoppingcart.php">shopping cart</a>
                    <a href="../checkout/shipping1.php">checkout</a>
                </div>
            </div>
            <!--end search box-->

            <!--end logo and head-->



            <!--start top nav-->

            <table width=800>
                <tr>
                    <div class="head_tabs_bar">
                        <div id="menu">
                            <!--Menu Start-->
                            <ul id="sddm">

                                <li><a href="../women/women.php" onmouseover="mopen('m2')" onmouseout="mclosetime()">WOMEN</a>
                                    <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="../women/activewear/activewear.php">Activewear</a>
                                        <a href="../women/fineapparel/fineapparel.php">Fine Apparel</a>
                                        <a href="#">Footwear</a>
                                        <a href="#">Handbags</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="../men/men.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">MEN</a>
                                    <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="../men/activewear/activewear.php">Activewear</a>
                                        <a href="../men/fineapparel/fineapparel.php">Fine Apparel</a>
                                        <a href="#">Footwear</a>
                                        <a href="#">Accessories</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">JEWELRY</a>
                                    <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Anniversary</a>
                                        <a href="#">Broaches</a>
                                        <a href="#">Forgive Me</a>
                                        <a href="#">Necklaces</a>
                                        <a href="#">Rings</a>
                                        <a href="#">Watches</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">HOME</a>
                                    <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Artwork</a>
                                        <a href="#">Bed & Bath</a>
                                        <a href="#">Chotskies</a>
                                        <a href="#">Floor Clocks</a>
                                        <a href="#">Furniture</a>
                                        <a href="#">Gourmet Food</a>
                                        <a href="#">Home Scents</a>
                                        <a href="#">Kitchen</a>
                                        <a href="#">Lighting</a>
                                        <a href="#">Patio & Garden</a>
                                        <a href="#">Wall Decor</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">CHILDREN</a>
                                    <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Accessories</a>
                                        <a href="#">Apparel</a>
                                        <a href="#">Bed & Bath</a>
                                        <a href="#">Shoes</a>
                                        <a href="#">Toys</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">ELECTRONICS</a>
                                    <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Audio</a>
                                        <a href="#">Cameras</a>
                                        <a href="#">Computers</a>
                                        <a href="#">Gadgets</a>
                                        <a href="#">Home Appliance</a>
                                        <a href="#">Home Theater</a>
                                        <a href="#">TV & Video</a>
                                    </div>
                                    <li>
                                        <a href="../company/company.php" onmouseover="mopen('m8')" onmouseout="mclosetime()">COMPANY</a>
                                        <div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                            <a href="../company/chargecard_application1.php">GC Charge Card</a>
                                            <a href="../company/travel1.php">GC Travel</a>
                                            <a href="../company/newsletter1.php">GC Newsletter</a>
                                            <a href="../company/activation.php">Activation</a>
                                            <a href="../company/courselinks.php">Course Links</a>
                                        </div>
                                    </li>
                                </li>
                            </ul>

                            <!--Menu End-->
                        </div>
                    </div>
                    <br clear="all">
                </tr>
            </table>
            <!--end top nav-->
            <!---------------------->
            <!--start page content-->
            <!---------------------->

            <br>
            <table border="0" height="250" width="800" style="margin-left:20px;">
                <td>
                    <table>
                        <tr>
                            <td>
                                <img src="http://ats-sb.adobe.com/jjsite/include/images/shipping.jpg" class="photo" height="380" width="327">
                            </td>
                        </tr>
                    </table>
                </td>

                <!---Form Start--->
                <td class="search_title">
                    <table>

                        <div class="form">
                            <form action="payment2.php">
                                <tr>
                                    <td>

                                        First Name:
                                    </td>
                                    <td>
                                        <input type="text" name="firstname" class="textinput" value="Col">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Last Name:
                                    </td>
                                    <td>
                                        <input type="text" name="lastname" class="textinput" value="Douglas">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Address Line 1:
                                    </td>
                                    <td>
                                        <input type="text" name="address1" class="textinput" value="ABC Systems">
                                        <div style="font: 9px Verdana">
                                            Street address, post office box, company name, c/o</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Address Line 2:
                                    </td>
                                    <td>
                                        <input type="text" name="address2" class="textinput" value="300 Delphi Road">
                                        <div style="font: 9px Verdana">
                                            Apartment, suite, unit, building, floor, etc.</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        City:
                                    </td>
                                    <td>
                                        <input type="text" name="city" class="textinput" value="Dallas">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        State, Province
                                        <br />or Region:
                                    </td>
                                    <td>
                                        <input type="text" name="state" class="textinput" value="">
                                    </td>
                                </tr>




                                <tr>
                                    <td>
                                        Postal Code:
                                    </td>
                                    <td>
                                        <input type="text" name="postalcode" class="textinput" value="8041">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Country:
                                    </td>
                                    <td>
                                        <select name="country" size="1" class="textinput">
                                            <option>Afghanistan</option>
                                            <option>&Aring;land Islands</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                            <option>Angola</option>
                                            <option>Anguilla</option>
                                            <option>Antarctica</option>
                                            <option>Antigua and Barbuda</option>
                                            <option>Argentina</option>
                                            <option>Armenia</option>
                                            <option>Aruba</option>
                                            <option>Australia</option>
                                            <option>Austria</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                            <option>Belarus</option>
                                            <option>Belgium</option>
                                            <option>Belize</option>
                                            <option>Benin</option>
                                            <option>Bermuda</option>
                                            <option>Bhutan</option>
                                            <option>Bolivia</option>
                                            <option>Bosnia and Herzegovina</option>
                                            <option>Botswana</option>
                                            <option>Bouvet Island</option>
                                            <option>Brazil</option>
                                            <option>British Indian Ocean territory</option>
                                            <option>Brunei Darussalam</option>
                                            <option>Bulgaria</option>
                                            <option>Burkina Faso</option>
                                            <option>Burundi</option>
                                            <option>Cambodia</option>
                                            <option>Cameroon</option>
                                            <option>Canada</option>
                                            <option>Cape Verde</option>
                                            <option>Cayman Islands</option>
                                            <option>Central African Republic</option>
                                            <option>Chad</option>
                                            <option>Chile</option>
                                            <option>China</option>
                                            <option>Christmas Island</option>
                                            <option>Cocos (Keeling) Islands</option>
                                            <option>Colombia</option>
                                            <option>Comoros</option>
                                            <option>Congo</option>
                                            <option>Congo, Democratic Republic</option>
                                            <option>Cook Islands</option>
                                            <option>Costa Rica</option>
                                            <option>C&ocirc;te d'Ivoire (Ivory Coast)</option>
                                            <option>Croatia (Hrvatska)</option>
                                            <option>Cuba</option>
                                            <option>Cyprus</option>
                                            <option>Czech Republic</option>
                                            <option>Denmark</option>
                                            <option>Djibouti</option>
                                            <option>Dominica</option>
                                            <option>Dominican Republic</option>
                                            <option>East Timor</option>
                                            <option>Ecuador</option>
                                            <option>Egypt</option>
                                            <option>El Salvador</option>
                                            <option>Equatorial Guinea</option>
                                            <option>Eritrea</option>
                                            <option>Estonia</option>
                                            <option>Ethiopia</option>
                                            <option>Falkland Islands</option>
                                            <option>Faroe Islands</option>
                                            <option>Fiji</option>
                                            <option>Finland</option>
                                            <option>France</option>
                                            <option>French Guiana</option>
                                            <option>French Polynesia</option>
                                            <option>French Southern Territories</option>
                                            <option>Gabon</option>
                                            <option>Gambia</option>
                                            <option>Georgia</option>
                                            <option>Germany</option>
                                            <option>Ghana</option>
                                            <option>Gibraltar</option>
                                            <option>Greece</option>
                                            <option>Greenland</option>
                                            <option>Grenada</option>
                                            <option>Guadeloupe</option>
                                            <option>Guam</option>
                                            <option>Guatemala</option>
                                            <option>Guinea</option>
                                            <option>Guinea-Bissau</option>
                                            <option>Guyana</option>
                                            <option>Haiti</option>
                                            <option>Heard and McDonald Islands</option>
                                            <option>Honduras</option>
                                            <option>Hong Kong</option>
                                            <option>Hungary</option>
                                            <option>Iceland</option>
                                            <option>India</option>
                                            <option>Indonesia</option>
                                            <!-- copyright Felgall Pty Ltd -->
                                            <option>Iran</option>
                                            <option>Iraq</option>
                                            <option>Ireland</option>
                                            <option>Israel</option>
                                            <option>Italy</option>
                                            <option>Jamaica</option>
                                            <option>Japan</option>
                                            <option>Jordan</option>
                                            <option>Kazakhstan</option>
                                            <option>Kenya</option>
                                            <option>Kiribati</option>
                                            <option>Korea (north)</option>
                                            <option>Korea (south)</option>
                                            <option>Kuwait</option>
                                            <option>Kyrgyzstan</option>
                                            <option>Lao People's Democratic Republic</option>
                                            <option>Latvia</option>
                                            <option>Lebanon</option>
                                            <option>Lesotho</option>
                                            <option>Liberia</option>
                                            <option>Libyan Arab Jamahiriya</option>
                                            <option>Liechtenstein</option>
                                            <option>Lithuania</option>
                                            <option>Luxembourg</option>
                                            <option>Macao</option>
                                            <option>Macedonia</option>
                                            <option>Madagascar</option>
                                            <option>Malawi</option>
                                            <option>Malaysia</option>
                                            <option>Maldives</option>
                                            <option>Mali</option>
                                            <option>Malta</option>
                                            <option>Marshall Islands</option>
                                            <option>Martinique</option>
                                            <option>Mauritania</option>
                                            <option>Mauritius</option>
                                            <option>Mayotte</option>
                                            <option>Mexico</option>
                                            <option>Micronesia</option>
                                            <option>Moldova</option>
                                            <option>Monaco</option>
                                            <option>Mongolia</option>
                                            <option>Montenegro</option>
                                            <option>Montserrat</option>
                                            <option>Morocco</option>
                                            <option>Mozambique</option>
                                            <option>Myanmar</option>
                                            <option>Namibia</option>
                                            <option>Nauru</option>
                                            <option>Nepal</option>
                                            <option>Netherlands</option>
                                            <option>Netherlands Antilles</option>
                                            <option>New Caledonia</option>
                                            <option>New Zealand</option>
                                            <option>Nicaragua</option>
                                            <option>Niger</option>
                                            <option>Nigeria</option>
                                            <option>Niue</option>
                                            <option>Norfolk Island</option>
                                            <option>Northern Mariana Islands</option>
                                            <option>Norway</option>
                                            <option>Oman</option>
                                            <option>Pakistan</option>
                                            <option>Palau</option>
                                            <option>Palestinian Territories</option>
                                            <option>Panama</option>
                                            <option>Papua New Guinea</option>
                                            <option>Paraguay</option>
                                            <option>Peru</option>
                                            <option>Philippines</option>
                                            <option>Pitcairn</option>
                                            <option>Poland</option>
                                            <option>Portugal</option>
                                            <option>Puerto Rico</option>
                                            <option>Qatar</option>
                                            <option>R&eacute;union</option>
                                            <option>Romania</option>
                                            <option>Russian Federation</option>
                                            <option>Rwanda</option>
                                            <option>Saint Helena</option>
                                            <option>Saint Kitts and Nevis</option>
                                            <option>Saint Lucia</option>
                                            <option>Saint Pierre and Miquelon</option>
                                            <option>Saint Vincent and the Grenadines</option>
                                            <option>Samoa</option>
                                            <option>San Marino</option>
                                            <option>Sao Tome and Principe</option>
                                            <!-- copyright Felgall Pty Ltd -->
                                            <option>Saudi Arabia</option>
                                            <option>Senegal</option>
                                            <option>Serbia</option>
                                            <option>Seychelles</option>
                                            <option>Sierra Leone</option>
                                            <option>Singapore</option>
                                            <option>Slovakia</option>
                                            <option>Slovenia</option>
                                            <option>Solomon Islands</option>
                                            <option>Somalia</option>
                                            <option>South Africa</option>
                                            <option>South Georgia</option>
                                            <option>Spain</option>
                                            <option>Sri Lanka</option>
                                            <option>Sudan</option>
                                            <option>Suriname</option>
                                            <option>Svalbard and Jan Mayen Islands</option>
                                            <option>Swaziland</option>
                                            <option>Sweden</option>
                                            <option>Switzerland</option>
                                            <option>Syria</option>
                                            <option>Taiwan</option>
                                            <option>Tajikistan</option>
                                            <option>Tanzania</option>
                                            <option>Thailand</option>
                                            <option>Togo</option>
                                            <option>Tokelau</option>
                                            <option>Tonga</option>
                                            <option>Trinidad and Tobago</option>
                                            <option>Tunisia</option>
                                            <option>Turkey</option>
                                            <option>Turkmenistan</option>
                                            <option>Turks and Caicos Islands</option>
                                            <option>Tuvalu</option>
                                            <option>Uganda</option>
                                            <option>Ukraine</option>
                                            <option>United Arab Emirates</option>
                                            <option>United Kingdom</option>
                                            <option selected="selected">United States of America</option>
                                            <option>Uruguay</option>
                                            <option>Uzbekistan</option>
                                            <option>Vanuatu</option>
                                            <option>Vatican City</option>
                                            <option>Venezuela</option>
                                            <option>Vietnam</option>
                                            <option>Virgin Islands (British)</option>
                                            <option>Virgin Islands (US)</option>
                                            <option>Wallis and Futuna Islands</option>
                                            <option>Western Sahara</option>
                                            <option>Yemen</option>
                                            <option>Zaire</option>
                                            <option>Zambia</option>
                                            <option>Zimbabwe</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Telephone
                                        <br />Number:
                                    </td>
                                    <td>
                                        <input type="text" name="phone1" class="textinput" size="4" value="1-385">
                                        <input type="text" name="phone2" class="textinput" size="13" value="123-0000">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        &nbsp; &nbsp;
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="submit" value="Next" class="button">
                                    </td>
                                </tr>

                            </form>
                        </div>

                </td>
                </tr>
                </table>
                </td>

            </table>

            <!---Form End--->

        </div>
        <!--start footer-->
        <span class="footer">
        </span>
    </div>
    <!--End footer-->

	<?php include '../footer.php';?>

</body>

</html>