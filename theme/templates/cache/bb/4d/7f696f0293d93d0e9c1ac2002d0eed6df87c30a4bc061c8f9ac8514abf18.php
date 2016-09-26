<?php

/* index.html */
class __TwigTemplate_bb4d7f696f0293d93d0e9c1ac2002d0eed6df87c30a4bc061c8f9ac8514abf18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'page_level_scripts' => array($this, 'block_page_level_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_styles($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("page_styles", $context, $blocks);
        echo "
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/select2/select2.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"theme/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css\"/>


<!-- END PAGE LEVEL STYLES -->
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo " Patient +| Dashboard
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<!-- BEGIN CONTENT -->

\t<div class=\"page-content-wrapper\">
\t\t<div class=\"page-content\">
\t\t\t<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
\t\t\t<div class=\"modal fade\" id=\"portlet-config\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\">Modal title</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t Widget settings form goes here
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn blue\">Save changes</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.modal-content -->
\t\t\t\t</div>
\t\t\t\t<!-- /.modal-dialog -->
\t\t\t</div>
\t\t\t<!-- /.modal -->
\t\t\t<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
\t\t\t
\t\t\t<!-- BEGIN PAGE HEADER-->
\t\t\t<h3 class=\"page-title\">
\t\t\tDashboard <small>Aσθενών</small>
\t\t\t</h3>
\t\t\t<div class=\"page-bar\">
\t\t\t\t<ul class=\"page-breadcrumb\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t<a href=\"index.php\">Home</a>
\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- END PAGE HEADER-->
\t\t\t<!-- BEGIN DASHBOARD STATS -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"dashboard-stat blue-madison\">
\t\t\t\t\t\t<div class=\"visual\">
\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<div class=\"number\">
\t\t\t\t\t\t\t\t ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["patientno"]) ? $context["patientno"] : null), "html", null, true);
        echo " #
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t Ασθενείς
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"more\" href=\"#\">
\t\t\t\t\t\tView more <i class=\"m-icon-swapright m-icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"dashboard-stat red-intense\">
\t\t\t\t\t\t<div class=\"visual\">
\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<div class=\"number\">
\t\t\t\t\t\t\t\t ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : null), "html", null, true);
        echo " #
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t  Eξετάσεις
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"more\" href=\"#\">
\t\t\t\t\t\tView more <i class=\"m-icon-swapright m-icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"dashboard-stat green-haze\">
\t\t\t\t\t\t<div class=\"visual\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<div class=\"number\">
\t\t\t\t\t\t\t\t ";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : null), "html", null, true);
        echo " #
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t Αρχεία
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"more\" href=\"#\">
\t\t\t\t\t\tView more <i class=\"m-icon-swapright m-icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"dashboard-stat purple-plum\">
\t\t\t\t\t\t<div class=\"visual\">
\t\t\t\t\t\t\t<i class=\"fa fa-globe\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<div class=\"number\">
\t\t\t\t\t\t\t\t ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : null), "html", null, true);
        echo " #
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t Διαγνώσεις
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"more\" href=\"#\">
\t\t\t\t\t\tView more <i class=\"m-icon-swapright m-icon-white\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END DASHBOARD STATS -->
\t\t\t<div class=\"clearfix\">
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t<!-- BEGIN PORTLET-->
\t\t\t\t\t<div class=\"portlet solid bordered grey-cararra\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o\"></i> Ασθενείς
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn grey-steel btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Νέοι</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn grey-steel btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Όλοι</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body\">
\t\t\t\t\t\t\t<div id=\"site_statistics_loading\">
\t\t\t\t\t\t\t\t<img src=\"theme/assets/admin/layout/img/loading.gif\" alt=\"loading\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"site_statistics_content\" class=\"display-none\">
\t\t\t\t\t\t\t\t<div id=\"site_statistics\" class=\"chart\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- END PORTLET-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t<!-- BEGIN PORTLET-->
\t\t\t\t\t<div class=\"portlet solid grey-cararra bordered\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>Εξετάσεις
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn grey-steel btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
\t\t\t\t\t\t\t\t\tFilter <span class=\"fa fa-angle-down\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\tQ1 2014 <span class=\"label label-sm label-default\">
\t\t\t\t\t\t\t\t\t\t\tpast </span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\tQ2 2014 <span class=\"label label-sm label-default\">
\t\t\t\t\t\t\t\t\t\t\tpast </span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\tQ3 2014 <span class=\"label label-sm label-success\">
\t\t\t\t\t\t\t\t\t\t\tcurrent </span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\tQ4 2014 <span class=\"label label-sm label-warning\">
\t\t\t\t\t\t\t\t\t\t\tupcoming </span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body\">
\t\t\t\t\t\t\t<div id=\"site_activities_loading\">
\t\t\t\t\t\t\t\t<img src=\"theme/assets/admin/layout/img/loading.gif\" alt=\"loading\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"site_activities_content\" class=\"display-none\">
\t\t\t\t\t\t\t\t<div id=\"site_activities\" style=\"height: 228px;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div style=\"margin: 20px 0 10px 30px\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t                 <div class=\"col-md-12\">
\t\t\t\t\t<!-- BEGIN EXAMPLE TABLE PORTLET-->
\t\t\t\t\t<div class=\"portlet box blue-hoki\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-globe\"></i>Πίνακας Πελατών
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t ΑΜΚΑ
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t ΟΝΟΜΑ
\t\t\t\t\t\t\t\t</th>
                                                                <th>
\t\t\t\t\t\t\t\t\t ΕΠΩΝΥΜΟ
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t ΗΜ. ΓΕΝΝΗΣΗΣ
\t\t\t\t\t\t\t\t</th>
                                                                
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t Διεύθυνση
\t\t\t\t\t\t\t\t</th>
                                                                                                                           
                                                                <th>
\t\t\t\t\t\t\t\t\t Τηλέφωνο
\t\t\t\t\t\t\t\t</th>
                                                                <th>
                                                                        Στοιχεία
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
                                                                <th>
\t\t\t\t\t\t\t\t\tΙστορικό Εξετάσεων
\t\t\t\t\t\t\t\t</th>
                                                                <th>
\t\t\t\t\t\t\t\t\tΝεα Εξέταση
\t\t\t\t\t\t\t\t</th>
                                                               
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
                                                            ";
        // line 277
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 278
            echo "                                                         <tr>
                                                         <td>";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "amka", array(), "array"), "html", null, true);
            echo "</td>
                                                         <td>";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array(), "array"), "html", null, true);
            echo "</td>
                                                         
                                                         <td>";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "surname", array(), "array"), "html", null, true);
            echo "</td>
                                                         <td>";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "birthdate", array(), "array"), "html", null, true);
            echo "</td> 
                                                         <td>";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "address", array(), "array"), "html", null, true);
            echo "</td>
                                                         <td>";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "phone1", array(), "array"), "html", null, true);
            echo "</td>
                                                         <td><a href=\"patient.php?amka=";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "amka", array(), "array"), "html", null, true);
            echo "\"><span class=\"label label-warning\">Αλλαγή Στοιχείων </span></a></td>
                                                         <td><a href=\"examHistory.php?amka=";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "amka", array(), "array"), "html", null, true);
            echo "\"><span class=\"label label-info\">Ιστορικό </span></a></td>                                                       
                                                         <td><a href=\"examNew.php?amka=";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "amka", array(), "array"), "html", null, true);
            echo "\"><span class=\"label label-success\"> Νέα εξέταση </span></a></td>
                                                         </tr>
                                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- END EXAMPLE TABLE PORTLET-->
                                        
\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t</div>


\t\t\t\t\t<!-- END PORTLET-->
            <div class=\"row\">
\t\t\t\t
\t\t\t</div>



 </div>
</div>
<!-- END CONTENT -->

";
    }

    // line 317
    public function block_page_level_scripts($context, array $blocks = array())
    {
        // line 318
        $this->displayParentBlock("page_level_scripts", $context, $blocks);
        echo "
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/select2/select2.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js\"></script>
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js\"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"theme/assets/global/scripts/metronic.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/layout.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/quick-sidebar.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/layout/scripts/demo.js\" type=\"text/javascript\"></script>
<script src=\"theme/assets/admin/pages/scripts/table-advanced.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 318,  417 => 317,  389 => 291,  380 => 288,  376 => 287,  372 => 286,  368 => 285,  364 => 284,  360 => 283,  356 => 282,  351 => 280,  347 => 279,  344 => 278,  340 => 277,  186 => 126,  165 => 108,  144 => 90,  123 => 72,  67 => 18,  64 => 17,  59 => 14,  56 => 13,  42 => 3,  39 => 2,  11 => 1,);
    }
}
