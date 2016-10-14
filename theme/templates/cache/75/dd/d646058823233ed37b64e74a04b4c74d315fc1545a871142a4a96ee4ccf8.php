<?php

/* customer.html */
class __TwigTemplate_75ddd646058823233ed37b64e74a04b4c74d315fc1545a871142a4a96ee4ccf8 extends Twig_Template
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



<!-- END PAGE LEVEL STYLES -->
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo " Customer +| Customer Info
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<!-- BEGIN CONTENT -->

\t<div class=\"page-content-wrapper\">
\t\t<div class=\"page-content\">
                  <div class=\"portlet light bg-inverse\">
                    <div class=\"portlet-title\">
\t\t\t<div class=\"caption\">
\t\t\t<i class=\"icon-equalizer font-green-haze\"></i>
\t\t\t<span class=\"caption-subject font-green-haze bold uppercase\">ΣΤΟΙΧΕΙΑ ΠΕΛΑΤΗ</span>
\t\t\t<span class=\"caption-helper\">";
        // line 24
        echo twig_escape_filter($this->env, (((isset($context["surname"]) ? $context["surname"] : null)) ? (((((" :  " . (isset($context["surname"]) ? $context["surname"] : null)) . " ") . (isset($context["name"]) ? $context["name"] : null)) . " ")) : ("")), "html", null, true);
        echo "</span>
\t\t\t</div>
                            <div class=\"tools\">
\t\t\t\t<a href=\"\" class=\"collapse\"></a>
\t\t\t\t<a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"></a>
\t\t\t\t<a href=\"\" class=\"reload\"></a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t    </div>
\t\t    </div>
\t\t\t<div class=\"portlet-body form\">
\t\t\t<!-- BEGIN FORM-->
\t\t\t<form action=\"customerHandling.php\" class=\"form-horizontal\" method=\"post\">
                            <div class=\"form-body\">
                            <!--<h3 class=\"form-section\">Στοιχεία Πελάτη</h3>-->
\t\t\t\t\t\t\t                               <div class=\"row\">
                                    <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <label class=\"control-label col-md-3\">Όνομα</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
                                    </div>
                                    </div>
                                    </div>
                                    <!--/span--> 
                                    <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <label class=\"control-label col-md-3\">Επώνυμο</label>
                                    <div class=\"col-md-9\">
                                    <input type=\"text\" class=\"form-control\" name=\"surname\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : null), "html", null, true);
        echo "\">
                                    </div>
                                    </div>
                                    </div>
\t\t\t\t</div>
                                <!--/row-->
\t\t\t\t<div class=\"row\">
                                    <div class=\"col-md-6\">
\t\t\t\t                        <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Τηλέφωνο-1</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" class=\"form-control\" name=\"phone1\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["phone1"]) ? $context["phone1"] : null), "html", null, true);
        echo "\" pattern=\"[0-9]{10}\">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-3\">Φύλο</label>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<select name = \"gender\" class=\"form-control\" >
\t\t\t\t\t<option ";
        // line 73
        echo ((((isset($context["gender"]) ? $context["gender"] : null) == "Ανδρας")) ? ("selected") : (""));
        echo " value=\"Ανδρας\" >Ανδρας</option>
\t\t\t\t\t<option ";
        // line 74
        echo ((((isset($context["gender"]) ? $context["gender"] : null) == "Γυναίκα")) ? ("selected") : (""));
        echo " value=\"Γυναίκα\" >Γυναίκα</option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                    </div>
                                    <!--/span-->                                                                    
\t\t\t\t</div>
\t\t\t\t<!--/row-->
 
\t\t\t\t<div class=\"row\">
                                        <!--/span-->
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Τηλέφωνο-2</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" class=\"form-control\" name=\"phone2\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["phone2"]) ? $context["phone2"] : null), "html", null, true);
        echo "\" pattern=\"[0-9]{10}\">
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <!--/span-->
                                        <div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Ημ.Γέννησης</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" 
\t\t\t\t\t\t\t\t\t\t\t\tpattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\"
                                                   placeholder=\"ΗΗ-ΜΜ-ΕΕΕΕ\"
                                                   name=\"birthdate\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["birthdate"]) ? $context["birthdate"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                </div>
                                    <!--/row-->
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Διεύθυνση</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"address\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>

                                        </div>
\t\t\t\t\t
\t\t\t\t\t<!--/span-->
\t\t\t\t\t<div class=\"col-md-6\">
                              <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">T.K.</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"zipcode\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["zipcode"]) ? $context["zipcode"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>             
\t\t\t\t\t</div>
\t\t\t\t\t<!--/span-->
                                    </div>
\t\t\t\t\t\t\t\t\t <!--/row-->
\t\t\t\t\t\t\t\t\t<div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Περιοχή</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"region\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["region"]) ? $context["region"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>

                                        </div>
\t\t\t\t\t
\t\t\t\t\t<!--/span-->
\t\t\t\t\t<div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Επάγγελμα</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" 
                                                   name=\"profession\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["profession"]) ? $context["profession"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>
\t\t\t\t\t</div>
\t\t\t\t\t <!--/row-->
\t\t\t\t\t                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                          <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-icon\">
\t\t\t\t\t\t\t\t\t\t\t       <i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t       <input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t           </div>
\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

                                        </div>
\t\t\t\t\t
\t\t\t\t\t<!--/span-->
\t\t\t\t\t<div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Facebook</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" 
\t\t\t\t\t\t\t\t\t\t\t\t
                                        
                                                   name=\"facebook\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/span-->
                                    </div>
\t\t\t\t\t<!--/span-->
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Λοιπά Σχόλια  :</label>
                                        <div class=\"col-md-12\">
                                        <textarea class=\"form-control\" rows=\"3\" name=\"comments\">";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
        echo "</textarea>
                                        
                                        </div>
                                        </div>                                    
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t<div class=\"row\">                                                                                           
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-1\"> Υπηρεσίες</label>
                                        <div class=\"col-md-11\">
                                        <input type=\"hidden\" class=\"form-control select2_sample3\"  name=\"categories\"
                                            value= \"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null), "html", null, true);
        echo "\"
                                            
                                            
                                            >
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t<!--/span-->
        
\t\t\t\t<!--/span-->
\t\t\t\t</div>
\t\t\t\t<h3 class=\"form-section\">Γνωριμία με το Kaliston </h3>
\t\t\t\t<!--/row-->
                                <div class=\"row\">
                                 <!--/span-->
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                        <div class=\"col-md-12\">
                                        <div class=\"radio-list\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"advChannel\" value=\"Internet\" ";
        // line 222
        echo ((((isset($context["advChannel"]) ? $context["advChannel"] : null) == "Internet")) ? ("checked") : (""));
        echo "  />
                                        Internet </label>
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"advChannel\" value=\"Facebook\" ";
        // line 225
        echo ((((isset($context["advChannel"]) ? $context["advChannel"] : null) == "Facebook")) ? ("checked") : (""));
        echo "/>
                                        Facebook </label>
\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"advChannel\" value=\"Δρόμος\" ";
        // line 228
        echo ((((isset($context["advChannel"]) ? $context["advChannel"] : null) == "Δρόμος")) ? ("checked") : (""));
        echo "  />
                                        Δρόμος </label>
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"advChannel\" value=\"Έντυπο\" ";
        // line 231
        echo ((((isset($context["advChannel"]) ? $context["advChannel"] : null) == "Έντυπο")) ? ("checked") : (""));
        echo "/>
                                        Έντυπο </label>
\t\t\t\t\t\t\t\t\t\t <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"advChannel\" value=\"Σύσταση\" ";
        // line 234
        echo ((((isset($context["advChannel"]) ? $context["advChannel"] : null) == "Σύσταση")) ? ("checked") : (""));
        echo "/>
                                        Σύσταση </label>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t                 <!--/span-->                                                                                                        
                        
\t\t\t\t<!--/span-->
                                </div>
\t\t\t\t\t\t\t\t<!--/row-->
                                <div class=\"row\">
                                     <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Συστάθηκε από : </label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"ContactPerson\" value=\"";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["ContactPerson"]) ? $context["ContactPerson"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>

                                        </div>
   
\t\t\t
                                </div>
                                

\t\t\t\t\t\t\t\t <input type=\"hidden\" name=\"id\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                        <div class=\"row\">
                                        <div class=\"col-md-offset-3 col-md-9\">
                                        <button type=\"submit\" class=\"btn blue-madison\" name=\"save\" >Αποθήκευση</button>
                                        <a href=\"index.php\" class=\"btn green\"  > Άκυρο  </a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 272
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 273
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"customerHandling.php?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btn red\"  onclick=\"return confirm('Είστε σίγουροι ?')\"> Διαγραφή  </a>
                                        ";
        }
        // line 275
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        </div>
                                        </div>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
\t\t\t\t</div>
                    </form>
\t\t\t\t\t\t\t\t\t\t<!-- END FORM-->
\t\t</div>
\t</div>
\t\t\t\t\t\t\t
    </div>
</div>
        
<!-- END CONTENT -->

";
    }

    // line 295
    public function block_page_level_scripts($context, array $blocks = array())
    {
        // line 296
        $this->displayParentBlock("page_level_scripts", $context, $blocks);
        echo "

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"theme/assets/global/plugins/select2/select2.min.js\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
";
    }

    public function getTemplateName()
    {
        return "customer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 296,  424 => 295,  401 => 275,  395 => 273,  393 => 272,  378 => 260,  365 => 250,  346 => 234,  340 => 231,  334 => 228,  328 => 225,  322 => 222,  299 => 202,  284 => 190,  268 => 177,  250 => 162,  235 => 150,  220 => 138,  205 => 126,  191 => 115,  176 => 103,  160 => 90,  141 => 74,  137 => 73,  124 => 63,  110 => 52,  98 => 43,  76 => 24,  65 => 15,  62 => 14,  57 => 12,  54 => 11,  42 => 3,  39 => 2,  11 => 1,);
    }
}
