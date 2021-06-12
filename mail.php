<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"content="ie=edge">
  <title>Mail Inbox</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  background-color: #a2defc;
  opacity: 0.9;
}

img {
  opacity: 0.7;
}

img:hover {
  opacity: 1.0;
}

input[type=text] {
  width: 500px;
  box-sizing: border-box;
  border: 2px solid #3658FB;
  border-radius: 10px;
  font-size: 16px;
  background-color: #ECF5FD;
  background-image: url('loupe.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #F6F6FA;
}

td, th {

  text-align: left;
  padding: 8px;
  color: black;
  font-style: bold;
}

tr{
     border: 1px solid #dddddd;
}

tr:hover{
  background-color: #DDDDDF
}


a.label {
  color: white;
  padding: 8px;
  font-family: calibri;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #023E57;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  color: white;
}


li a:hover:not(.active) {
  background-color: #008DFE ;
  color: white;
}

li a.active {
  background-color: #008DFE;
  color: white;
}


</style>
</head>
<body>

<ul>
  <li><a href="compose_mail.php">+ Compose Mail</a></li>
  <li><a class="#active" href="#Inbox">Inbox</a></li>
  <li><a href="#news">Starred</a></li>
  <li><a href="#contact">Important</a></li>
  <li><a href="#about">Sent</a></li>
  <li><a href="#about">Drafts</a></li>
  <li><a href="#about">Caragories</a></li>
  <li><a href="#about">Personal</a></li>
  <li><a href="chat.php">Chat</a></li>
  <li><a href="#about">More</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <table>
    <tr>
      <td width="500"><input type="text" name="search" placeholder="Search here"></td>
      <td><button style="background-color: black; color: whitesmoke; padding: 10px; border-radius: 5px;"><i class="fa fa-search"></i></button></td>
      <td width="200px"></td>
      <td><img src="profile.png"></td>
    </tr>
  </table>
    <table>
  <tr>
    <td width="40"><input type="checkbox" name=""></td>
    <td width="30"><img src="refresh.png"></td>
    <td width="30"><img src="trash.png"></td>
    <td width="680"><img src="inbox.png"></td>
    <td width="">< 10 of 5000 ></td>
  </tr>
  </table>
  <br>
  <table>
    <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>SBI Insurance</td>
      <td>State Bank of India: Annual Report 2020 – 21 and Notice of 66th Annual General Meeting</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Bajaj Finserv EMIcard</td>
      <td>Hello, Get your Insta EMIcard in 30Seconds...</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Freelancer.com</td>
      <td>We want you for an exciting new project!</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Angel broking</td>
      <td>Dear sir/madam,Open your freeDemat account in just 5minutes</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Big Bazaar</td>
      <td>Big Bazaar Sale is live Now- Get Flat 50% off</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>HDFC securities</td>
      <td>Hi, Open a Demat A/c with HDFC securities Today. Open Demat account Now.</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Find-yourPartner</td>
      <td>Hi,JoinUs in your search for your Perfect-Partner.</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Police recruitment</td>
      <td>Police notification for job openings of SI, ASI..</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Kotak VideoKYC</td>
      <td>Hi,Planning toOpen a Zero balance SavingsA/c?</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>ICICIPrudential</td>
      <td>Ensure CompleteProtection for your loved ones with ICICIPrudential iProtect Smart.</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>HealthInsurance</td>
      <td>Save TaxUnder Section 80D and Protect Your Family.</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Freelancer.com</td>
      <td>Be a NASA Judge and Earn $25 USD</td>
    </tr>
        <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>LendingKart</td>
      <td>Hi, Your A/C can beCredited with Rs.550,000..</td>
    </tr>
      <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Freelancer.com</td>
      <td>Be a NASA Judge and Earn $25 USD</td>
    </tr>
      <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>Care HealthInsurance</td>
      <td>Save taxUnder section80D and Protect yourfamily</td>
    </tr>
      <tr>
      <td><input type="checkbox" name="" value=""></td>
      <td>LendingKart</td>
      <td>Hi, Your A/C can beCredited with Rs.550,000..</td>
    </tr>
  </table>


</div>

</body>
</html>
