<!DOCTYPE html>
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
    background-color: #d8d8d8;
   }
   #editor {
    height: 275px;
   }
   </style>
   <script type="text/javascript">
     function SelectMode(value) 
     {
      if (value != "--None--") 
      {   
        var mode = "ace/mode/";
        mode = mode.concat(value);
        editor.getSession().setMode(mode);
      };
        
    }
</script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
<a href="https://github.com/rajdeep26"><img style="position: absolute; top: 15; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png" alt="Fork me on GitHub"></a>
    <!-- Navbar
    ================================================== -->
      <div id="nav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="./index.html">My Program Repository</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li><a href="ShowPrograms.php" >Programs</a></li>
                <li><a href="AddProgram.php" >Add Programs</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <br><br>
    <div class="container">
      <div class="row-fluid">
        <a href="ShowPrograms.php" class="btn btn-primary">Programs</a>
        <div class="span8 offset2">
          <div>
            <form class="form-horizontal" action="add_into_database.php" method="POST">
              <legend>Enter Program Details</legend>
              <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> All fields are NECESSARY!!
              </div>
              <div class="control-group">
                <label class="control-label" for="programtitle">Program Title</label>
                <div class="controls">
                  <input class="input-xxlarge" type="text" name="programtitle" id="programtitle" placeholder="Program Title" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="programlanguage">Language</label>
                <div class="controls">
                  <select name="programlanguage" id="programlanguage" onchange="SelectMode(this.value)">
                  <option>--None--</option>
                  <option>c_cpp</option>
                  <option>java</option>
                  <option>ruby</option>
                  <option>php</option>
                  <option>html</option>
                  <option>css</option>
                </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" >Program</label>
                <div class="controls" id="editor" ></div>
                <input type="hidden" id="program" name="program">
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
        <p>&copy; Copyrights by Rajdeep Mandrekar</p>
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
    <script src="./ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.on("blur", function() 
        {
          var text = editor.getSession().getValue();
          // alert(text);
          $('#program').val(text);
        });
    </script>

    <script src="assets/js/application.js"></script>



  </body>
</html>
