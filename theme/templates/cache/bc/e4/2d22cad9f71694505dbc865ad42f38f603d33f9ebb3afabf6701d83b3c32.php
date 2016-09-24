<?php

/* base.html */
class __TwigTemplate_bce42d22cad9f71694505dbc865ad42f38f603d33f9ebb3afabf6701d83b3c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_styles' => array($this, 'block_page_styles'),
            'content' => array($this, 'block_content'),
            'page_level_scripts' => array($this, 'block_page_level_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->

<!--<![endif]-->
<!-- BEGIN HEAD -->
     <head>
        <meta charset=\"utf-8\"/>
        <title>
            ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "        </title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
        <meta content=\"\" name=\"description\"/>
        <meta content=\"\" name=\"author\"/>


         <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/uniform/css/uniform.default.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        ";
        // line 31
        $this->displayBlock('page_styles', $context, $blocks);
        // line 42
        echo "        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href=\"theme/assets/admin/pages/css/tasks.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
        <link href=\"theme/assets/global/css/components.css\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/admin/layout/css/layout.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/admin/layout/css/themes/darkblue.css\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
        <link href=\"theme/assets/admin/layout/css/custom.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END THEME STYLES -->
        <link rel= \"icon\" href=\"favicon .ico\">
            </head>
     <!-- END HEAD -->
    
    <!-- BEGIN BODY -->
    <!-- DOC: Apply \"page-header-fixed-mobile\" and \"page-footer-fixed-mobile\" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply \"page-sidebar-closed\" class to the body and \"page-sidebar-menu-closed\" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply \"page-sidebar-hide\" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply \"page-sidebar-closed-hide-logo\" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply \"page-sidebar-hide\" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply \"page-sidebar-fixed\" class to have fixed sidebar -->
    <!-- DOC: Apply \"page-footer-fixed\" class to the body element to have fixed footer -->
    <!-- DOC: Apply \"page-sidebar-reversed\" class to put the sidebar on the right side -->
    <!-- DOC: Apply \"page-full-width\" class to the body element to have full width page without the sidebar menu -->
    <body class=\"page-header-fixed page-quick-sidebar-over-content page-style-square\">

    <!-- BEGIN HEADER -->
    <div class=\"page-header navbar navbar-fixed-top\">
        <!-- BEGIN HEADER INNER -->
        <div class=\"page-header-inner\">
            <!-- BEGIN LOGO -->
            <div class=\"page-logo\">
                <a href=\"index.php\">
                <img src=\"theme/assets/admin/layout/img/logo.jpg\" alt=\"logo\" class=\"logo-default\"/>
                </a>
                <div class=\"menu-toggler sidebar-toggler hide\">
                    <!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown style -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                        <img alt=\"\" class=\"img-circle\" src=\"theme/assets/admin/layout/img/avatar3_small.jpg\"/>
                        <span class=\"username username-hide-on-mobile\">
                        ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo " </span>
                        <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">

                            <li>
                                <a href=\"logout.php\">
                                <i class=\"icon-key\"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class=\"clearfix\">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN SIDEBAR -->
\t<div class=\"page-sidebar-wrapper\">
\t\t<div class=\"page-sidebar navbar-collapse collapse\">
\t\t\t<!-- BEGIN SIDEBAR MENU -->
\t\t\t<!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
\t\t\t<!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
\t\t\t<!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
\t\t\t<!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
\t\t\t<!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
\t\t\t<!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
\t\t\t<ul class=\"page-sidebar-menu\" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
\t\t\t\t<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
\t\t\t\t<li class=\"sidebar-toggler-wrapper\">
\t\t\t\t\t<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
\t\t\t\t\t<div class=\"sidebar-toggler\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- END SIDEBAR TOGGLER BUTTON -->
\t\t\t\t</li>
\t\t\t\t<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
\t\t\t\t<li class=\"sidebar-search-wrapper\">
\t\t\t\t\t<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
\t\t\t\t\t<!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
\t\t\t\t\t<!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
\t\t\t\t\t<form class=\"sidebar-search \" action=\"extra_search.html\" method=\"POST\">
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"remove\">
\t\t\t\t\t\t<i class=\"icon-close\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn submit\"><i class=\"icon-magnifier\"></i></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<!-- END RESPONSIVE QUICK SEARCH FORM -->
\t\t\t\t</li>
\t\t\t\t<li class=\"start active open\">
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<span class=\"title\">Dashboard</span>
\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t<span class=\"arrow open\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t\t\t<i class=\"icon-users\"></i>
\t\t\t\t\t\t\tDashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-users\"></i>
\t\t\t\t\t<span class=\"title\">Ασθενείς</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
                                    <ul class=\"sub-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"patient.php\">
                                                        <i class=\"icon-user-follow \"></i>
\t\t\t\t\t\t\tΝέος Ασθενής</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php\">
                                                        <i class=\"icon-users\"></i>
\t\t\t\t\t\t\tΑρχείο Ασθενών</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t
\t\t\t\t

\t\t\t\t<li class=\"heading\">
\t\t\t\t\t<h3 class=\"uppercase\">ΣΤΑΤΙΣΤΙΚΑ</h3>
\t\t\t\t</li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t<li class=\"last \">
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-pointer\"></i>
\t\t\t\t\t<span class=\"title\">Εξετάσεις</span>
\t\t\t\t\t<span class=\"arrow \"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"maps_google.html\">
\t\t\t\t\t\t\t'Εντυπα</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"uploadFile.php\">
\t\t\t\t\t\t\tΕπισύναψη Αρχείων</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- END SIDEBAR MENU -->
\t\t</div>
\t</div>

\t    <!-- END SIDEBAR -->
\t\t<!-- BEGIN CONTENT -->
\t\t";
        // line 225
        $this->displayBlock('content', $context, $blocks);
        // line 227
        echo "        <!-- END CONTENT -->
\t</div>

        <!-- BEGIN FOOTER -->
        <div class=\"page-footer\">
\t<div class=\"page-footer-inner\">
\t\t 2015 &copy; PATIENT +
\t</div>
\t<div class=\"scroll-to-top\">
\t\t<i class=\"icon-arrow-up\"></i>
\t</div>
</div>
        <!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"theme/assets/global/plugins/respond.min.js\"></script>
<script src=\"theme/assets/global/plugins/excanvas.min.js\"></script>
<![endif]-->

<script src=\"theme/assets/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"theme/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<!--<script src=\"theme/assets/global/plugins/jquery.cokie.min.js\" type=\"text/javascript\"></script> -->
<script src=\"theme/assets/global/plugins/uniform/jquery.uniform.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src=\"theme/assets/global/plugins/flot/jquery.flot.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/flot/jquery.flot.resize.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/flot/jquery.flot.categories.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery.pulsate.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/bootstrap-daterangepicker/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src=\"theme/assets/global/plugins/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/global/plugins/jquery.sparkline.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/dankan.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/clockface/js/clockface.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/bootstrap-daterangepicker/moment.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js\"></script>

<!-- END PAGE LEVEL PLUGINS -->
";
        // line 281
        $this->displayBlock('page_level_scripts', $context, $blocks);
        // line 295
        echo "<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features
   Index.init();
   Index.initDashboardDaterange();
   FormSamples.init();
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts  
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
   TableAdvanced.init();
   ComponentsPickers.init();
   FormiCheck.init(); // init page demo
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        // line 13
        echo "            ";
    }

    // line 31
    public function block_page_styles($context, array $blocks = array())
    {
        // line 32
        echo "        <link href=\"theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/fullcalendar/fullcalendar.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/clockface/css/clockface.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css\"/>
        ";
    }

    // line 225
    public function block_content($context, array $blocks = array())
    {
        // line 226
        echo "\t\t";
    }

    // line 281
    public function block_page_level_scripts($context, array $blocks = array())
    {
        // line 282
        echo "<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"theme/assets/global/scripts/metronic.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/layout.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/quick-sidebar.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/demo.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/pages/scripts/index.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/pages/scripts/tasks.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/pages/scripts/components-pickers.js\"></script>
<script src=\"theme/assets/admin/pages/scripts/form-samples.js\"></script>
<script src=\"theme/assets/admin/pages/scripts/form-icheck.js\"></script>
<script src=\"theme/assets/global/plugins/icheck/icheck.min.js\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 282,  362 => 281,  358 => 226,  355 => 225,  342 => 32,  339 => 31,  335 => 13,  332 => 12,  307 => 295,  305 => 281,  249 => 227,  247 => 225,  116 => 97,  59 => 42,  57 => 31,  38 => 14,  36 => 12,  23 => 1,);
    }
}
