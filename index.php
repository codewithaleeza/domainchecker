<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="icon.ico" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins|Work+Sans&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
<title>Domain Checker </title>
</head>

<body>

<div class="container ">


  <center> <img src="icon.ico" style="height:100px;"> <h1>Check Domain Name Availability</h1></center>
<hr>
<div class="wrap">
  <form action="" method="GET">
   <div class="search">

     <label class="col-sm-5"><b>Please Enter Domain Name: </b></label>

      <input type="text" name="domain" class="searchTerm" placeholder="DomainName">
      <select name="suffix">
<option value=".com">.com</option>
<option value=".ph">.ph</option>
<option value=".co.ph">.co.ph</option>
<option value=".net">.net</option>
<option value=".org">.org</option>
<option value=".biz">.biz</option>
<option value=".info">.info</option>
<option value=".mobi">.mobi</option>
<option value=".ws">.ws</option>
<option value=".edu">.edu</option>
<option value=".gov">.gov</option>
<option value=".inc">.go.id</option>
<option value=".tv">.tv</option>
<option value=".cn">.cn</option>
<option value=".cc">.cc</option>
</select>
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>

   </div></form>
   <?php
 error_reporting(0);
 if(isset($_GET['domain'])){
  $domain2=$_GET['domain'];
  $domain = trim($_GET['domain']).$_GET['suffix'];
  $hover='https://www.hover.com/domains/results?utf8=%E2%9C%93&q='.$domain.'';
  $godaddycheck = 'https://ph.godaddy.com/domains/searchresults.aspx?checkAvail=1&tmskey=&domainToCheck='.$domain.'';
  $namecomcheck = 'https://www.name.com/domain/search/'.$domain.'';
  $registercomcheck = 'http://www.register.com/domain/search/wizard.rcmx?searchDomainName='.$domain.'&searchPath=Default&searchTlds=';
  if(empty($domain2)){
    echo "<p style='font-size:20px;text-align:center;'>Field Empty. Please enter domain name.
    </p>";
  }
 else if ( gethostbyname($domain) != $domain ) {
  echo "<p style='font-size:20px;text-align:center;'>Sorry but <u>$domain</u> is already Registered!</p>";
 }
 else {
  echo "<p style='font-size:20px;text-align:center;'>Congratulations <u>$domain</u> is not taken, You can register it.
  </p>";
 }

 }
?><hr>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
