<?php
session_start();
$conn = mysqli_connect("localhost","root","","foodies");
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql = "INSERT INTO deliver VALUES ('$fname', '$street', '$city', '$state', '$zip', '$country', '$phone', '$email');";
	if(mysqli_query($conn, $sql))
{  
    $message = "Food will be delivered to the address specified!";
    header("Location: payment3.php");
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<html>
<head>
   
<title>Delivery details</title>
</head>
<body>
<body background="bowl.jpg">
<nav align="left"><a href="login.php?ac=logout" style="color:#3ec038">Logout</a></nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.13462" type="text/javascript"></script>
<script>
    function op(){
       if(document.getElementById("op").checked == true)
        window.location.href = 'login2.php';}
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.13462" rel="stylesheet" type="text/css"
/>

<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5da5 f5afbdb53a02c94de4b1"/>
<style type="text/css">
.form-label-left{
width:150px;
}
.form-line{
padding-top:12px;
padding-bottom:12px;
}
.form-label-right{
width:150px;
}
.form-all{ width:690px; color:#555 !important;
font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
font-size:14px;
}
.form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
color: #141414;
}


</style>


<style type="text/css" id="form-designer-style">
/* Injected CSS Code */
/*PREFERENCES STYLE*/
.form-all {
font-family: Arial, sans-serif;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
font-family: Arial, sans-serif;
}
.form-all .form-pagebreak-back-container,
.form-all .form-pagebreak-next-container {
font-family: Arial, sans-serif;
}
.form-header-group {
font-family: Arial, sans-serif;
}
.form-label {
font-family: Arial, sans-serif;
}


.form-label.form-label-auto {


display: inline-block;
float: left;
text-align: left;


}


.form-line {
margin-top: 12px;
margin-bottom: 12px;
}


.form-all {
width: 650px;
}


.form-label-left,
.form-label-right,
.form-label-left.form-label-auto,
.form-label-right.form-label-auto {
width: 150px;
}
.form-all {
font-size: 18px
}
.form-all .qq-upload-button,
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
font-size: 18px
}
.form-all .form-pagebreak-back-container,
.form-all .form-pagebreak-next-container {
font-size: 18px
}


.supernova .form-all, .form-all {
    margin: 30px;
  background-color: #ffffff;
  
  opacity: 0.7;
  filter: alpha(opacity=70); 
border: 1px solid transparent;
}


.form-all {
color: #555;
}
.form-header-group .form-header {
color: #555;
}
.form-header-group .form-subHeader {
color: #555;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html,
.form-checkbox-item label,
.form-radio-item label {
color: #555;
}
.form-sub-label {
color: #6f6f6f;
}


.supernova {
background-color: undefined;
}
.supernova body {
background: transparent;
}


.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
background-color: undefined;
}

</style>

<center>
<form class="jotform-form" action="http://localhost/software/payment2.php" method="post" name="form_92905309131453" id="92905309131453" accept-charset="utf-8">
<input type="hidden" name="formID" value="92905309131453" />
<input type="hidden" id="JWTContainer" value="" />
<input type="hidden" id="cardinalOrderNumber" value="" />
<div role="main" class="form-all">
<ul class="form-section page-section">
<li class="form-line" data-type="control_image" id="id_1">
<div id="cid_1" class="form-input-wide">
<center><img alt="" class="form-image" style="border:0" src="foodie.png" height="117px" width="160px" data-component="image" /></center>
</div>
</li>
<li class="form-line" data-type="control_text" id="id_7">
<div id="cid_7" class="form-input-wide">
</div>
</li>
<li class="form-line" data-type="control_text" id="id_10">
<div id="cid_10" class="form-input-wide">
<div id="text_10" class="form-html" data-component="text">
<p><em><span style="font-size:medium;">Delivery Details</span></em></p>
</div>
</div>
</li>
<li class="form-line jf-required" data-type="control_fullname" id="id_20">
<label class="form-label form-label-left form-label-auto" id="label_20" for="first_20"> Full Name
<span class="form-required">
*
</span>
</label>
<div id="cid_20" class="form-input jf-required">
<div data-wrapper-react="true">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="first_20" name="fname" class="form-textbox validate[required]" size="35" value="" data-component="first" aria-labelledby="label_20 sublabel_20_first" required="" />
</span>

</div>
</div>
</li>
<li class="form-line jf-required" data-type="control_address" id="id_21">
<label class="form-label form-label-left form-label-auto" id="label_21" for="input_21_addr_line1">
Address
<span class="form-required">
*
</span>
</label>
<div id="cid_21" class="form-input jf-required">
<table summary="" class="form-address-table">
<tbody>
<tr>
<td colSpan="2">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_21_addr_line1" name="street" class="form-textbox validate[required] form-address-line" autoComplete="address-line1" value="" data-component="address_line_1" aria-labelledby="label_21 sublabel_21_addr_line1" required="" />
<label class="form-sub-label" for="input_21_addr_line1" id="sublabel_21_addr_line1" style="min-height:13px"> Street Address </label>
</span>
</td>
</tr>
<tr>
<td colSpan="2">
</td>
</tr>
<tr>
<td>
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_21_city" name="city" class="form- textbox validate[required] form-address-city" autoComplete="address-level2" size="21" value="" data-component="city" aria-labelledby="label_21 sublabel_21_city" required="" />
<label class="form-sub-label" for="input_21_city" id="sublabel_21_city" style="min- height:13px"> City </label>
</span>
</td>
<td>
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_21_state" name="state" class="form- textbox validate[required] form-address-state" autoComplete="address-level1" size="22" value="" data-component="state" aria-labelledby="label_21 sublabel_21_state" required="" />
<label class="form-sub-label" for="input_21_state" id="sublabel_21_state" style="min- height:13px"> State / Province </label>
</span>
</td>
</tr>
<tr>
<td>
<span class="form-sub-label-container" style="vertical-align:top">
<input type="text" id="input_21_postal" name="zip" class="form- textbox form-address-postal" autoComplete="postal-code" size="10" value="" data- component="zip" aria-labelledby="label_21 sublabel_21_postal" required="" />
<label class="form-sub-label" for="input_21_postal" id="sublabel_21_postal" style="min-height:13px"> Postal / Zip Code </label>
</span>
</td>
<td>
<span class="form-sub-label-container" style="vertical-align:top">
<select class="form-dropdown validate[required] form-address-country noTranslate" name="country" id="input_21_country" data-component="country" required="" aria-labelledby="label_21 sublabel_21_country" autoComplete="country">
<option value=""> Please Select </option>
<option value="India" name="India"> India </option>
</select>
<label class="form-sub-label" for="input_21_country" id="sublabel_21_country" style="min-height:13px"> Country </label>
</span>
</td>
</tr>
</tbody>
</table>
</div>
</li>
<li class="form-line jf-required" data-type="control_phone" id="id_22">
<label class="form-label form-label-left form-label-auto" id="label_22" for="input_22_area"> Phone Number
<span class="form-required">
*
</span>
</label>
<div id="cid_22" class="form-input jf-required">
<div data-wrapper-react="true">
<span class="form-sub-label-container" style="vertical-align:top">
<input type="tel" id="input_22_phone" name="phone" class="form-textbox validate[required]" size="32" value="" data-component="phone" aria- labelledby="label_22 sublabel_22_phone" required="" />
</span>
</div>
</div>
</li>
<li class="form-line" data-type="control_email" id="id_23">
<label class="form-label form-label-left form-label-auto" id="label_23" for="input_23"> E- mail </label>
<div id="cid_23" class="form-input">
<input type="email" id="input_23" name="email" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: myname@example.com" data- component="email" aria-labelledby="label_23" />
</div>
</li>
</li>
<li class="form-line" data-type="control_button" id="id_2">
<div id="cid_2" class="form-input-wide">
<div style="margin-left:156px" class="form-buttons-wrapper ">
<button id="input_2" type="submit" value="submit" name="submit" class="form-submit-button" data- component="button" onclick="op();">
Proceed
</button>
</div>
</div>
</li>
</ul>
</div>
</script>
</form>
</center>
</body>
</html>


	
	
	
