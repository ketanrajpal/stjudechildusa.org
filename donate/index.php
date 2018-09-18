<?php
ob_start();
$page="donate";
if(!isset($_GET["slug"]))
{
	$_GET["slug"]="";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="content" class="clear">
  <h1>Donation</h1>
  <p>You can also help us raise funds in other ways:</p>
  <ul class="list">
   <li>By holding a fundraiser in your area</li>
   <li>Participating in events such as marathons</li>
   <li>Spreading the word at other events where people gather together, such as Diwali Pooja</li>
   <li>Spreading the word about passive contributionsthrough Amazon Smile</li>
  </ul>
  <br>
  <p>St. Jude India ChildCare Centres USA (SJICC) is a 501(c)3 federally, tax exempt organization (tax id # 26-3243340).  Individuals may deduct donations up to 50% of the individual taxpayer's contribution base, which is the taxpayer's adjusted gross income (AGI), computed without regard to any net operating loss carryback.<br><br>Corporations are allowed deductions equal to 10% of the operating net income before income taxes.<br><br><strong>Payment methods:</strong> The following are the ways to donate to SJICC USA which will get you a tax benefit in the US. You can send a cheque made out to St.Jude India Childcare Centres USA, make a bank transfer or donate  using your credit card through Paypal.
<br><br>
<strong>Mailing address for Donations:</strong><br>
St Jude Childcare Centres USA<br>
C/o Charlie Hilsabeck<br>
540 W. State Avenue<br>
Phoenix, AZ 85021<br>
C: 602-361-1199<br><br>
<strong>Wire Transfers and direct deposits</strong><br>
Name: ST JUDE INDIA CHILDCARE CENTRES USA<br>
Bank: Wells Fargo Bank, N.A.<br>
Account: 6070085060<br>
Routing Number (RTN): 121000248  (for Wire Transfers)<br>
Routing Number (RTN): 121042882 (for Direct Deposit and Automatic Payments use)<br><br>
<strong>For online donations <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=A4MDCX8LW88F4">Click Here(PayPal)</a></strong>
</p>

<h1>Support SJICC USA when you shop on Amazon.com</h1>

<p>St. Jude India ChildCare Centres USA is a registered charity on <a href="http://smile.amazon.com">smile.amazon.com</a>, the charity wing of amazon.com.<br><br>While you get the same products, price and service, amazon donates a percentage of the sale to SJICC USA.<br><br>Please register on <a href="http://smile.amazon.com">smile.amazon.com</a> and select St. Jude India ChildCare Centres USA as the charity of your choice. You shop, Amazon gives!</p>

</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>