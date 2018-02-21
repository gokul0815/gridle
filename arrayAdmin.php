<?php 
$uservalue = $_GET['uservalue'];
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/nextPage.js"></script>
  <style> 
  *{
    box-sizing: border-box;
  } 
  body {

  font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff; 
    font-family: Roboto!important;  
}   
.gridle-theme-one {
    background-image: linear-gradient(to bottom,#7b4397,#dc2430);
    width: 100%;
    padding: 20px;
    position: absolute;
    color: #fff;
    height: 100%;
}
.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
 .row:before {
    display: table;
    content: " ";
}
.row:after {
    clear: both;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
}
@media (min-width: 992px)
bootstrap.min.css:5
.col-md-3 {
    width: 25%;
}
@media (min-width: 992px)
 .col-md-3 {
    float: left;
}
@media (min-width: 768px)
.col-md-3, .col-sm-3 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
a {
    cursor: pointer;
}
.gridle-common-logo a img {
    width: 150px;
}
img {
    vertical-align: middle;
}
img {
    border: 0;
}
@media (min-width: 992px)
.col-md-9 {
    width: 75%;
}
@media (min-width: 992px)
.col-md-9{
    float: left;
}
@media (min-width: 768px)
.col-sm-9{
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 992px)
.col-md-push-10 {
    left: 83.33333333%;
}
.gridle-common-header-buttons {
    padding: 0;
    margin: 0;
    display: inline-block;
    float: right;
    line-height: 106px;
}
ul {
    list-style: none;
}
.gridle-common-header-buttons li {
    display: inline-block;
    padding-left: 10px;
}
.gridle-common-header-buttons{
  line-height: 106px;
}

.gridle-common-header-buttons li a {
    color: #fff;
    border: 1px solid #fff;
    padding: 5px 10px;
    border-radius: 3px!important;
}
@media (min-width: 1200px)
.container {
    width: 1170px;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.gridle-common-main-head h2 {
    font-weight: 100;
    text-align: center;
    margin: 20px 0;
    font-size: 38px;
}
h2{
    font-family: inherit;
    line-height: 1.1;
    color: inherit;
    display: block;
}
text-center {
    text-align: center!important;
}
ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: block;

}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
form {
    display: block;
    margin-top: 0em;
}
.gridle-common-main-box {
    max-width: 500px;
    margin: 30px auto;
    padding: 30px;
}
.gridle-common-main-box li {
    position: relative;
} 
.gridle-common-main-box li input {
    padding: 10px;
    width: 100%;
    border-radius: 3px!important;
    border: 0;
    color: #333;
    text-transform: lowercase;
}
input{
      font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    font: inherit;
    text-rendering: auto;
    letter-spacing: normal;
    word-spacing: normal;
    text-indent: 0px;
    text-shadow: none;
}
.gridle-common-main-box li button {
    display: block;
    margin: auto;
    border-radius: 30px!important;
    background: #fdc94a;
    color: #333!important;
    padding: 8px 20px;
    outline: 0;
    border: 2px solid transparent;
    position: relative;
}
button[disabled]{
    cursor: default;

}
button {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    -webkit-appearance: button;
    text-transform: none;
    overflow: visible;
    font: inherit;
}
.gridle-common-main-box li span {
    color: #fdc94a;
    text-align: center;
    display: block;
    font-weight: 400;
    margin-top: 10px;
}
.gridle-common-main-box li span a {
    color: #fff;
}
.gridle-common-footer {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0;
}
@media (min-width: 992px)
.col-md-4 {
    width: 33.33333333%;
}
@media (min-width: 992px)
.col-md-4{
  float:left;
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.gridle-common-footer div ul {
    padding: 0;
}
.gridle-common-footer div ul li a {
    color: #fff;
    display: inline-block;
}
.gridle-common-footer div ul li span {
    color: #fdc94a;
    padding: 0 5px;
  }

 </style>
</head>
<body>
  <div class="container-fluid gridle-theme-one">
  </div>
  <!-- inner container starts -->
  <div class="row">
      <div class="row">
          <ul class="gridle-common-main-box">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li>
            <input type="hidden" class="form-control" id="length" value="<?php echo $uservalue ?>">
            <input type="text" placeholder="Enter the numbers" id="arrayvalues" style="max-width: 230px; text-align: center; margin: 0 auto 20px; display: block;">             
            </li>
            <li>
              <button onclick="getValue()">Click me</button>
            </li>
          </ul>
      </div>
    </div>
  </div>
  <div class="form-group" id="outputvalues"   style="margin-left: 600px;"></div>
  <!-- inner container ends -->
</div>
</body>
</html>