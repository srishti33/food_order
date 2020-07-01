<!DOCTYPE html>
<html>
<head>
<title>Payment Gateway</title>
</head>
<body>
<body background="bowl.jpg">
<nav align="left"><a href="login.php?ac=logout" style="color:#3ec038">Logout</a></nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.13462" type="text/javascript"></script>
<script type="text/javascript"> JotForm.init(function(){
JotForm.description('input_21', 'This is the address where the meal(s) will be delivered.');
setTimeout(function() {
$('input_23').hint('ex: myname@example.com');
}, 20);
setTimeout(function() {
$('input_19').hint('ex: myname@example.com');
}, 20);
productID = {"0":"input_24_1001","1":"input_24_1002","2":"input_24_1003"};
paymentType = "product"; JotForm.setCurrencyFormat('USD',true, 'point');

JotForm.totalCounter({"input_24_1001":{"price":"150.00","quantityField":"input_24_quantity_1001_0"},"input_24_1002":{"price":"175.00","quantityField":"input_24_quantity_1002_0"},"input_24_1003":{"price":"147.00","quantityField":"input_24_quantity_1003_0"}, "input_24_1004":{"price":"250.00","quantityField":"input_24_quantity_1004_0"}, "input_24_1005":{"price":"295.00","quantityField":"input_24_quantity_1005_0"},
"input_24_1006":{"price":"300.00","quantityField":"input_24_quantity_1006_0"}, "input_24_1007":{"price":"325.00","quantityField":"input_24_quantity_1007_0"}});
$$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
$$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
/*INIT-END*/
});


JotForm.prepareCalculationsOnTheFly([null,{"name":"image","qid":"1","text":"Image","type":"co ntrol_image"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,null,null
,null,{"name":"doubleclickTo","qid":"7","text":"Online Ordering Form","type":"control_text"},null,null,{"name":"doubleclickTo10","qid":"10","text":"Delivery Details","type":"control_text"},null,null,null,null,{"name":"doubleclickTo15","qid":"15","text":"P ayment Details","type":"control_text"},{"name":"fullName16","qid":"16","text":"Full Name","type":"control_fullname"},{"name":"address17","qid":"17","text":"Address","type":"con trol_address"},{"name":"phoneNumber18","qid":"18","text":"Phone Number","type":"control_phone"},{"name":"email19","qid":"19","text":"E- mail","type":"control_email"},{"name":"fullName20","qid":"20","text":"Full Name","type":"control_fullname"},{"description":"This is the address where the meal(s) will be delivered.","name":"address21","qid":"21","text":"Address","type":"control_address"},{"name": "phoneNumber22","qid":"22","text":"Phone Number","type":"control_phone"},{"name":"email23","qid":"23","text":"E- mail","type":"control_email"},{"name":"mealChoices","qid":"24","text":"Meal Choices","type":"control_authnet"},{"name":"enterThe25","qid":"25","text":"Enter the message as it's shown","type":"control_captcha"}]);
setTimeout(function() { JotForm.paymentExtrasOnTheFly([null,{"name":"image","qid":"1","text":"Image","type":"control_image"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,null,null,null
,{"name":"doubleclickTo","qid":"7","text":"Online Ordering Form","type":"control_text"},null,null,{"name":"doubleclickTo10","qid":"10","text":"Delivery Details","type":"control_text"},null,null,null,null,{"name":"doubleclickTo15","qid":"15","text":"P ayment Details","type":"control_text"},{"name":"fullName16","qid":"16","text":"Full Name","type":"control_fullname"},{"name":"address17","qid":"17","text":"Address","type":"con trol_address"},{"name":"phoneNumber18","qid":"18","text":"Phone Number","type":"control_phone"},{"name":"email19","qid":"19","text":"E- mail","type":"control_email"},{"name":"fullName20","qid":"20","text":"Full Name","type":"control_fullname"},{"description":"This is the address where the meal(s) will be delivered.","name":"address21","qid":"21","text":"Address","type":"control_address"},{"name":
"phoneNumber22","qid":"22","text":"Phone Number","type":"control_phone"},{"name":"email23","qid":"23","text":"E- mail","type":"control_email"},{"name":"mealChoices","qid":"24","text":"Meal Choices","type":"control_authnet"},{"name":"enterThe25","qid":"25","text":"Enter the message as it's shown","type":"control_captcha"}]);}, 20);
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.13462" rel="stylesheet" type="text/css"
/>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.13462" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.13462"
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
<div id="text_7" class="form-html" data-component="text">
</div>
</div>
</li>
<li class="form-line" data-type="control_text" id="id_10">
<div id="cid_10" class="form-input-wide">
<div id="text_10" class="form-html" data-component="text">
<li class="form-line jf-required" data-type="control_authnet" id="id_24">
<label class="form-label form-label-left form-label-auto" id="label_24" for="input_24"> Menu
<span class="form-required">
*
</span>
</label>
<div id="cid_24" class="form-input jf-required">
<div data-wrapper-react="true">
<div data-wrapper-react="true">

<input type="hidden" name="simple_fpc" data-payment_type="authnet" data- component="payment1" value="24" />
<input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
<div data-wrapper-react="true">
<span class="form-product-item hover-product-item">
<img src="plain_naan.jpg" width="300" height="200" border="2">
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1001" name="q24_mealChoices[][id]" value="1001" />
<label for="input_24_1001" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1001"> Plain Naan
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true"> Rs
<span id="input_24_1001_price">
150.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1001_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1001][item_0]" id="input_24_quantity_1001_0" value="1" />
</span>

</span>
</div>
</span>
<br/>
<span class="form-product-item hover-product-item">
<img src="fish.jpg" width="300" height="200" border="2"><br/>
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1002" name="q24_mealChoices[][id]" value="1002" />
<label for="input_24_1002" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1002"> Fried Pomfret
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true"> Rs
<span id="input_24_1002_price">
195.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1002_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1002][item_0]" id="input_24_quantity_1002_0" value="1" />
</span>


</div>
</span>
<br/>
<span class="form-product-item hover-product-item">
<img src="prawn_biryani.jpg" width="300" height="200" border="2"><br/>
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1003" name="q24_mealChoices[][id]" value="1003" />
<label for="input_24_1003" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1003"> Prawn Biryani
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true"> Rs
<span id="input_24_1003_price">
215.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1003_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1003][item_0]" id="input_24_quantity_1003_0" value="1" />
</span>

</div>
</span>


<span class="form-product-item hover-product-item">
<img src="mutton_dum_biryani.jpg" width="300" height="200" border="2"><br/>
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1004" name="q24_mealChoices[][id]" value="1004" />
<label for="input_24_1004" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1004"> Dum Biryani
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true"> Rs
<span id="input_24_1004_price">
250.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1004_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1004][item_0]" id="input_24_quantity_1004_0" value="1" />
</span>

</div>
</span>


<span class="form-product-item hover-product-item">
<img src="pizza.jpg" width="300" height="200" border="2"><br/>
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1005" name="q24_mealChoices[][id]" value="1005" />
<label for="input_24_1005" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1005"> Pizza
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true">
Rs
<span id="input_24_1005_price">
295.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1005_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1005][item_0]" id="input_24_quantity_1005_0" value="1" />
</span>

</div>
</span>


<span class="form-product-item hover-product-item">
<img src="fish.jpg" width="300" height="200" border="2"><br/>
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1006" name="q24_mealChoices[][id]" value="1006" />
<label for="input_24_1006" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1006"> Roasted Fish
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true"> Rs
<span id="input_24_1006_price">
300.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1006_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1006][item_0]" id="input_24_quantity_1006_0" value="1" />
</span>

</div>
</span>


<span class="form-product-item hover-product-item">
<img src="pizza.jpg" width="300" height="200" border="2"><br/>
<div data-wrapper-react="true" class="form-product-item-detail">
<input type="checkbox" class="form-checkbox validate[required] " id="input_24_1007" name="q24_mealChoices[][id]" value="1007" />
<label for="input_24_1007" class="form-product-container">
<span data-wrapper-react="true">
<span class="form-product-name" id="product-name-input_24_1007"> Cheese pizza
</span>
<span class="form-product-details">
<b>
<span data-wrapper-react="true"> Rs
<span id="input_24_1007_price">
325.00
</span>
</span>
</b>
</span>
</span>
</label>
<br/>
<br/>
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_quantity_1007_0" style="min- height:13px"> Quantity </label>
<input type="text" size="3" class="form-textbox validate[required] form-product- custom_quantity" name="q24_mealChoices[special_1007][item_0]" id="input_24_quantity_1007_0" value="1" />
</span>

</div>
</span>



<br/>
<span class="form-payment-total">
<b>
<span id="total-text"> Total
</span>
<span class="form-payment-price">
<span data-wrapper-react="true"> Rs
<span id="payment_total">
0.00
</span>
</span>
</span>
</b>
</span>
</div>
<hr/>
</div>
<button id="input_2" type="submit" class="form-submit-button" data- component="button">
Submit
</button>
</div>
</div>
</li>
</ul>
</div>
</form>
</center>
</body>
</html>


	
	
	
