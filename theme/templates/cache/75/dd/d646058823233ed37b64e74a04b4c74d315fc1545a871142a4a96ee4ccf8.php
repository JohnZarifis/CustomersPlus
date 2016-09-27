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
                            <h3 class=\"form-section\">Στοιχεία Πελάτη</h3>
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
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Τηλέφωνο-3</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" class=\"form-control\" name=\"phone3\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["phone3"]) ? $context["phone3"] : null), "html", null, true);
        echo "\" pattern=\"[0-9]{10}\">
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
        // line 112
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>

                                        </div>
\t\t\t\t\t
\t\t\t\t\t<!--/span-->
\t\t\t\t\t<div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                            <label class=\"control-label col-md-3\">Ημ.Γέννησης</label>
                                            <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" 
\t\t\t\t\t\t\t\t\t\t\t\tpattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\"
                                                   placeholder=\"ΗΗ-ΜΜ-ΕΕΕΕ\"
                                                   name=\"birthdate\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["birthdate"]) ? $context["birthdate"] : null), "html", null, true);
        echo "\">
                                            </div>
                                            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/span-->
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Λοιπά Σχόλια  / Μετρήσεις :</label>
                                        <div class=\"col-md-12\">
                                        <textarea class=\"form-control\" rows=\"3\" name=\"comments\">";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
        echo "</textarea>
                                        
                                        </div>
                                        </div>                                    
                                        </div>
                                    </div>
\t\t\t\t<h3 class=\"form-section\">Ατομικό Ιστορικό</h3>
\t\t\t\t<!--/row-->
                                <div class=\"row\">
                                 <!--/span-->
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Κάπνισμα</label>
                                        <div class=\"col-md-9\">
                                        <div class=\"radio-list\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"smoking\" value=\"1\" ";
        // line 153
        echo ((((isset($context["smoking"]) ? $context["smoking"] : null) == 1)) ? ("checked") : (""));
        echo "  />
                                        Ναι </label>
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"smoking\" value=\"0\" ";
        // line 156
        echo ((((isset($context["smoking"]) ? $context["smoking"] : null) == 0)) ? ("checked") : (""));
        echo "/>
                                        Όχι </label>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t<!--/span-->                                                                                                        
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Αλκοόλ</label>
                                        <div class=\"col-md-9\">
                                        <div class=\"radio-list\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"alcohol\" value=\"1\" ";
        // line 169
        echo ((((isset($context["alcohol"]) ? $context["alcohol"] : null) == 1)) ? ("checked") : (""));
        echo " />
                                        Ναι </label>
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"alcohol\" value=\"0\" ";
        // line 172
        echo ((((isset($context["alcohol"]) ? $context["alcohol"] : null) == 0)) ? ("checked") : (""));
        echo " />
                                        Όχι </label>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t<!--/span-->
                                </div>
                                <div class=\"row\">
                                 <!--/span-->
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Αλεργίες</label>
                                        <div class=\"col-md-9\">
                                        <div class=\"radio-list\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"alergies\" value=\"1\" ";
        // line 188
        echo ((((isset($context["alergies"]) ? $context["alergies"] : null) == 1)) ? ("checked") : (""));
        echo "  />
                                        Ναι </label>
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"alergies\" value=\"0\" ";
        // line 191
        echo ((((isset($context["alergies"]) ? $context["alergies"] : null) == 0)) ? ("checked") : (""));
        echo "/>
                                        Όχι </label>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t<!--/span-->                                                                                                        
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Παθήσεις</label>
                                        <div class=\"col-md-9\">
                                        <div class=\"radio-list\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"diseases\" value=\"1\" ";
        // line 204
        echo ((((isset($context["diseases"]) ? $context["diseases"] : null) == 1)) ? ("checked") : (""));
        echo " />
                                        Ναι </label>
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"diseases\" value=\"0\" ";
        // line 207
        echo ((((isset($context["diseases"]) ? $context["diseases"] : null) == 0)) ? ("checked") : (""));
        echo " />
                                        Όχι </label>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t<!--/span-->
                                </div>
                                
\t\t\t\t
\t\t\t\t<!--/row-->
\t\t\t\t<div class=\"row\">                                                                                           
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\"> Κατηγορίες</label>
                                        <div class=\"col-md-9\">
                                        <input type=\"hidden\" class=\"form-control select2_sample3\"  name=\"categories\"
                                            value= \"";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null), "html", null, true);
        echo "\"
                                            
                                            
                                            >
                                        </div>
                                        </div>
                                    </div>
\t\t\t\t<!--/span-->
        
\t\t\t\t<!--/span-->
\t\t\t\t</div>
                                <h3 class=\"form-section\">Σωματομετρικά Χαρακτηριστικά:</h3>
                                <!--/row-->
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <label class=\"control-label col-md-3\">Υψος</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"height\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\">
                                    </div>
                                    </div>
                                    </div>
                                    <!--/span--> 
                                    <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <label class=\"control-label col-md-3\">Βάρος</label>
                                    <div class=\"col-md-9\">
                                    <input type=\"text\" class=\"form-control\" name=\"weight\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : null), "html", null, true);
        echo "\">
                                    </div>
                                    </div>
                                    </div>
\t\t\t\t</div>
                                <!--/row-->
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <label class=\"control-label col-md-3\">% Λίπους</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"bodyfat\" value=\"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["bodyfat"]) ? $context["bodyfat"] : null), "html", null, true);
        echo "\">
                                    </div>
                                    </div>
                                    </div>
                                    <!--/span--> 
                                    <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                    <label class=\"control-label col-md-3\">Λοιπές Μετρήσεις</label>
                                    <div class=\"col-md-9\">
                                    <input type=\"text\" class=\"form-control\" name=\"measurments\" value=\"";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["measurments"]) ? $context["measurments"] : null), "html", null, true);
        echo "\">
                                    </div>
                                    </div>
                                    </div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t <input type=\"hidden\" name=\"id\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--/row-->
                                                                                               <!-- <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">Category</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"select2_category form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Category 1\">Category 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Category 2\">Category 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Category 3\">Category 5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Category 4\">Category 4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/span-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<div class=\"col-md-6\">
                                                                                                            <div class=\"form-group\">
                                                                                                            <div class=\"col-md-9\">
                                                                                                            <select name=\"foo\" class=\"select2me form-control\">
                                                                                                            <option value=\"1\">Abc</option>
                                                                                                            <option value=\"1\">Abc</option>
                                                                                                            <option value=\"1\">This is a really long value that breaks the fluid design for a select2</option>
                                                                                                            </select>
                                                                                                            <span class=\"help-block\">
                                                                                                                This field has error. </span> <label class=\"control-label col-md-3\">Last Name</label>

                                                                                                            </div>
                                                                                                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/span-->
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
        // line 319
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 320
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"customerHandling.php?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btn red\"  onclick=\"return confirm('Είστε σίγουροι ?')\"> Διαγραφή  </a>
                                        ";
        }
        // line 322
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

    // line 342
    public function block_page_level_scripts($context, array $blocks = array())
    {
        // line 343
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
        return array (  480 => 343,  477 => 342,  454 => 322,  448 => 320,  446 => 319,  400 => 276,  392 => 271,  380 => 262,  366 => 251,  354 => 242,  333 => 224,  313 => 207,  307 => 204,  291 => 191,  285 => 188,  266 => 172,  260 => 169,  244 => 156,  238 => 153,  219 => 137,  205 => 126,  188 => 112,  173 => 100,  160 => 90,  141 => 74,  137 => 73,  124 => 63,  110 => 52,  98 => 43,  76 => 24,  65 => 15,  62 => 14,  57 => 12,  54 => 11,  42 => 3,  39 => 2,  11 => 1,);
    }
}
