<?php
include 'mysql.php';

if(!empty($_POST)) {
	if(mysql_safe_query('UPDATE programs SET program_title=%s, program_language=%s, program=%s, date=%s WHERE id=%s', $_POST['programtitle'], $_POST['programlanguage'], $_POST['program'] ,time(), $_GET['id']))
		redirect('ShowPrograms.php');
	else
		echo mysql_error();
}

$result = mysql_safe_query('SELECT * FROM programs WHERE id=%s', $_GET['id']);

if(!mysql_num_rows($result)) {
	echo 'Program #'.$_GET['id'].' not found';
	exit;
}

$row = mysql_fetch_assoc($result);

echo <<<HTML
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rajdeep's Programs Repository</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/bootstrap-fileupload.css" rel="stylesheet">
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

   <script src="assets/js/jquery-1.9.0.js"></script>
   <style type="text/css">
   .footer{
    margin: 0px;
   }
   </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>
    <div class="container">
      <div class="row-fluid">
        <div class="span8 offset2">
          <div>
            <form class="form-horizontal"  method="POST">
              <legend>Enter Program Details</legend>
              <div class="control-group">
                <label class="control-label" for="programtitle">Program Title</label>
                <div class="controls">
                  <input class="input-xxlarge" type="text" name="programtitle" id="programtitle" value="{$row['program_title']}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="programlanguage">Language</label>
                <div class="controls">
                  <select name="programlanguage" id="programlanguage" value="{$row['program_language']}">
                  <option>C</option>
                  <option>C++</option>
                  <option>Java</option>
                  <option>Ruby</option>
                  <option>PHP</option>
                </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="program">Program</label>
                <div class="controls">
                  <textarea class="input-xxlarge" name="program" rows="15" id="program">{$row['program']}</textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls" >
                  <input class="btn btn-primary btn-large" type="submit" value="Submit"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p></p>
        <p>&copy; Copyrights by Rajdeep Mandrekar&#8482;</p>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/bootstrap-fileupload.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



  </body>
</html>
HTML;
