<?php

class site {
    public function gen_opening()
    {
        echo <<<ENDL
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>
        Peachy Docs
    </TITLE>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
</HEAD>
<BODY>
<div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> Peachy Docs</a>
        </div>
      </div>
      </nav>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row marketing">
                <div class="col-md-12">
ENDL;
                }


                public function gen_closing() {
                print <<< ENDL
                <hr>
                <div class="footer">
                    <p style="text-align:right"><small><a href='https://github.com/MW-Peachy/docs-web'>Fork us!</a></small>
                    </p>
                </div>
            </div>

        </div> <!-- /col-md-10 -->

    </div>

</div> <!-- /container -->
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</BODY>
</HTML>
ENDL;
    }
}