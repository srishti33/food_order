<!DOCTYPE html>
<html>
<head>
<title>Payment Gateway</title>
</head>
<body>
<body background="bowl.jpg">
<nav align="left"><a href="login2.php" style="color:#3ec038">Logout</a></nav>
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
<form class="jotform-form" action="https://pci.jotform.com/submit/92905309131453" method="post" name="form_92905309131453" id="92905309131453" accept-charset="utf-8">
<input type="hidden" name="formID" value="92905309131453" />
<input type="hidden" id="JWTContainer" value="" />
<input type="hidden" id="cardinalOrderNumber" value="" />
<div role="main" class="form-all">
<ul class="form-section page-section">
<div id="cid_1" class="form-input-wide">
<center><img alt="" class="form-image" style="border:0" src="foodie.png" height="117px" width="160px" data-component="image" /></center>
</div>
<table class="form-address-table payment-form-table" cellPadding="0" cellSpacing="0">
<tbody>
<tr>
<th colSpan="2" style="text-align:left;margin-top:20px;display:table" id="ccTitle24"> Credit Card
</th>
</tr>
<tr>
<td width="50%">
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_cc_firstName" id="sublabel_cc_firstName" style="min-height:13px;margin:0 0 3px 0"> First Name </label>
<input type="text" id="input_24_cc_firstName" name="q24_mealChoices[cc_firstName]" class="form-textbox validate[required] cc_firstName" size="20" value="" data-component="cc_firstName" />
</span>
</td>
<td width="50%">
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_cc_lastName" id="sublabel_cc_lastName" style="min-height:13px;margin:0 0 3px 0"> Last Name </label>
<input type="text" id="input_24_cc_lastName" name="q24_mealChoices[cc_lastName]" class="form-textbox validate[required] cc_lastName" size="20" value="" data-component="cc_lastName" />
</span>
</td>
</tr>
<tr>
<td width="50%">
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_cc_number" id="sublabel_cc_number" style="min-height:13px;margin:0 0 3px 0"> Credit Card Number </label>
<input type="number" id="input_24_cc_number" name="q24_mealChoices[cc_number]" class="form-textbox validate[required] cc_number" autoComplete="off" size="20" value="" data-component="cc_number" />
</span>
</td>
<td width="50%">
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_cc_ccv" id="sublabel_cc_ccv" style="min- height:13px;margin:0 0 3px 0"> Security Code </label>
<input type="number" id="input_24_cc_ccv" name="q24_mealChoices[cc_ccv]" class="form-textbox validate[required] cc_ccv" autoComplete="off" style="width:52px" value="" data-component="cc_ccv" />
</span>
</td>
</tr>
<tr>
<td width="50%">
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_cc_exp_month" id="sublabel_cc_exp_month" style="min-height:13px;margin:0 0 3px 0"> Expiration Month
</label>
<select class="form-dropdown validate[required] cc_exp_month" name="q24_mealChoices[cc_exp_month]" id="input_24_cc_exp_month" data- component="cc_exp_month">
<option>  </option>
<option value="January"> January </option>
<option value="February"> February </option>
<option value="March"> March </option>
<option value="April"> April </option>
<option value="May"> May </option>
<option value="June"> June </option>
<option value="July"> July </option>
<option value="August"> August </option>
<option value="September"> September </option>
<option value="October"> October </option>
<option value="November"> November </option>
<option value="December"> December </option>
</select>
</span>
</td>
<td width="50%">
<span class="form-sub-label-container" style="vertical-align:top">
<label class="form-sub-label" for="input_24_cc_exp_year" id="sublabel_cc_exp_year" style="min-height:13px;margin:0 0 3px 0"> Expiration Year </label>
<select class="form-dropdown validate[required] cc_exp_year" name="q24_mealChoices[cc_exp_year]" id="input_24_cc_exp_year" data- component="cc_exp_year">
<option>  </option>
<option value="2019"> 2019 </option>
<option value="2020"> 2020 </option>
<option value="2021"> 2021 </option>
<option value="2022"> 2022 </option>
<option value="2023"> 2023 </option>
<option value="2024"> 2024 </option>
<option value="2025"> 2025 </option>
<option value="2026"> 2026 </option>
<option value="2027"> 2027 </option>
<option value="2028"> 2028 </option>
</select>
</span>
</td>
</tr>



</div>
</div>
</li>
<li class="form-line jf-required" data-type="control_captcha" id="id_25">
<label class="form-label form-label-left form-label-auto" id="label_25" for="input_25"> Enter the message as it's shown
<span class="form-required">
*
</span>
</label>
<div id="cid_25" class="form-input jf-required">
<section data-wrapper-react="true">
<div id="recaptcha_input_25" data-component="recaptcha" data- callback="recaptchaCallbackinput_25" data-expired- callback="recaptchaExpiredCallbackinput_25">
</div>
<input type="hidden" id="input_25" class="hidden validate[required]" name="recaptcha_visible" required="" />
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=explicit&amp;onload=recaptchaLoadedin put_25"></script>
<script type="text/javascript">
var recaptchaLoadedinput_25 = function()
{
window.grecaptcha.render($("recaptcha_input_25"), {
sitekey: '6LdU3CgUAAAAAB0nnFM3M3T0sy707slYYU51RroJ',
});
var grecaptchaBadge = document.querySelector('.grecaptcha-badge');
if (grecaptchaBadge)
{
grecaptchaBadge.style.boxShadow = 'gray 0px 0px 2px';
}
};


var recaptchaCallbackinput_25 = function()
{
var isInvisibleReCaptcha = false; var hiddenInput = $("input_25"); hiddenInput.setValue(1);
if (!isInvisibleReCaptcha)
{
if (hiddenInput.validateInput)
{
hiddenInput.validateInput();
}
}
else
{
triggerSubmit(hiddenInput.form)
}


function triggerSubmit(formElement)
{
var button = formElement.ownerDocument.createElement('input');
button.style.display = 'none'; button.type = 'submit'; formElement.appendChild(button).click(); formElement.removeChild(button);
}
}


// not really required for invisible recaptcha
var recaptchaExpiredCallbackinput_25 = function()
{
var hiddenInput = $("input_25"); hiddenInput.writeAttribute("value", false); if (hiddenInput.validateInput)
{
hiddenInput.validateInput();
}
}
</script>
</section>
</li>
<li class="form-line" data-type="control_button" id="id_2">
<div id="cid_2" class="form-input-wide">
<div style="margin-left:156px" class="form-buttons-wrapper ">
<button id="input_2" type="submit" class="form-submit-button" data- component="button">
Confirm
</button>
</div>
</div>
</li>

</tbody>
</table>
</ul>
</div>
</form>
</script>
</center>
</body>
</html>


	
	
	
