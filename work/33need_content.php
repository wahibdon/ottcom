<!DOCTYPE html>
<html>
	<head>
		<title>33 Degrees Convenience Connect - OTT Communications</title>
    </head>
    <?php require_once("../header.php"); ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68015543-1', 'auto');
      ga('send', 'pageview');

    </script>
    <div id="header-img">
            <div id="pdf-img">
                <a href="/documents/Digital_Signage_Media_Kit_v3.pdf" target="_blank">Content Delivery Manual</a>
            </div>
			<img src="/images/33degrees/33Degrees_480x167.jpg">
		</div>
    <h2 class="gray-txt text-center center xtra-margin-top sixteen-pt">Contact Our Creative Team For Information</h2>

    <script language="JavaScript">
            var frmvalidator  = new Validator("contact-form");
            frmvalidator.addValidation("companyname","req","Please provide your company name");
            frmvalidator.addValidation("name","req","Please provide your name");
            frmvalidator.addValidation("email","req","Please provide your email");
            frmvalidator.addValidation("email","email",
                "Please enter a valid email address");
            frmvalidator.addValidation("description","req","Please provide a description");
    </script>
	<form method="post" onsubmit="return validate()" action="handler.php" id="contact-form" class="center xtra-margin-top sixteen-pt">
		<input type="text" name="companyname" placeholder="Company Name">
		<br>
        <input type="text" name="name" placeholder="Name">
		<br>
		<input type="text" name="email" placeholder="Email">
		<br>
		<textarea name="description" placeholder="Describe your project"></textarea>
		<br>
		<input type="submit" value="Send Message" placeholder="Send Message">
		<br>
	</form>
    <div id="email">
        <a id="austin-email" href="mailto:creative@ottcom.com" target="_top">Please email creative@ottcom.com to get started with creative work.</a>
    </div>
    <?php require_once("../footer.php"); ?>
