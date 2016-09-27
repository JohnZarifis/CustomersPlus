<?php

/* login.html */
class __TwigTemplate_f1aa4bf05d2343a18758bfd3da7784d0e3afdc3eef68ae0a16e360dec1db9a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.0
Version: 3.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset=\"utf-8\"/>
<title>CustomerPlus | Login</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
<meta content=\"\" name=\"description\"/>
<meta content=\"\" name=\"author\"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/global/plugins/uniform/css/uniform.default.css\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href=\"theme/assets/global/plugins/select2/select2.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/admin/pages/css/login-soft.css\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href=\"theme/assets/global/css/components.css\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/global/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/admin/layout/css/layout.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link id=\"style_color\" href=\"theme/assets/admin/layout/css/themes/default.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"theme/assets/admin/layout/css/custom.css\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END THEME STYLES -->

<link rel= \"icon\" href=\"favicon.ico\">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
\t<a href=\"index.php\">
\t<img src=\"theme/assets/admin/layout/img/logo_over - main.png\" alt=\"\"/>
\t</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class=\"menu-toggler sidebar-toggler\">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
\t<!-- BEGIN LOGIN FORM -->
\t<form class=\"login-form\" action=\"login.php\" method=\"post\">
\t\t<h3 class=\"form-title\">Sign In Customer 
                <span aria-hidden=\"true\" class=\"icon-plus\"></span>
                <span class=\"bs-glyphicon-class\" >
                   
                </h3>
\t\t<div class=\"alert alert-danger display-hide\">
\t\t\t<button class=\"close\" data-close=\"alert\"></button>
\t\t\t<span>
\t\t\tEnter a username and password. </span>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
\t\t\t<label class=\"control-label visible-ie8 visible-ie9\">Username</label>
\t\t\t<input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\"/>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label visible-ie8 visible-ie9\">Password</label>
\t\t\t<input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"password\"/>
\t\t</div>
\t\t<div class=\"form-actions\">
\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn blue pull-right\">
\t\t\tLogin <i class=\"m-icon-swapright m-icon-white\"></i>
\t\t\t</button>

\t\t</div>

\t</form>
\t<!-- END LOGIN FORM -->
\t<p>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo " <p>
\t
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class=\"copyright\">
\t 2016 &copy; Customer +
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"theme/assets/global/plugins/respond.min.js\"></script>
<script src=\"theme/assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
<script src=\"theme/assets/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/uniform/jquery.uniform.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery.cokie.min.js\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"theme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/backstretch/jquery.backstretch.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/select2/select2.min.js\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"theme/assets/global/scripts/metronic.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/layout.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/demo.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/pages/scripts/login-soft.js\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
\tLayout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       \$.backstretch([
        \"theme/assets/admin/pages/media/bg/1.jpg\",
        \"theme/assets/admin/pages/media/bg/2.jpg\",
        \"theme/assets/admin/pages/media/bg/3.jpg\",
        \"theme/assets/admin/pages/media/bg/4.jpg\"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 94,  19 => 1,);
    }
}
