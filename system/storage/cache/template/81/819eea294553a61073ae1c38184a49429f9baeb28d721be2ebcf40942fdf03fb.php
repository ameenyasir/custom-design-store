<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/product_form.twig */
class __TwigTemplate_e6520787ccf8861dbd3863f5a5f96627877e40af1cc41dac9424357370f9a988 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"
          class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
            class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\"
          class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_data"] ?? null);
        echo "</a></li>

            ";
        // line 35
        if (($context["custom_design_cart"] ?? null)) {
            echo "<li><a href=\"#tab-custom\" data-toggle=\"tab\">";
            echo ($context["entry_add_custom_product"] ?? null);
            echo "</a></li>";
        }
        // line 36
        echo "
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            echo "\" data-toggle=\"tab\"><img
                      src=\"language/";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 53);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 53);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 53);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source,             // line 54
$context["language"], "name", [], "any", false, false, false, 54);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 58
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            // line 61
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "][name]\"
                        value=\"";
            // line 64
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64)] ?? null) : null), "name", [], "any", false, false, false, 64)) : (""));
            echo "\"
                        placeholder=\"";
            // line 65
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\" class=\"form-control\" />
                      ";
            // line 66
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) {
                // line 67
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 69
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\">";
            echo             // line 73
($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][description]\"
                        placeholder=\"";
            // line 76
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
            echo "\"
                        data-toggle=\"summernote\" data-lang=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["language"], "locale", [], "any", false, false, false, 77);
            echo "\"
                        class=\"form-control\">";
            // line 78
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "description", [], "any", false, false, false, 78)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
            echo "\">";
            echo             // line 83
($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "][meta_title]\"
                        value=\"";
            // line 86
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null), "meta_title", [], "any", false, false, false, 86)) : (""));
            echo "\"
                        placeholder=\"";
            // line 87
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\"
                        class=\"form-control\" />
                      ";
            // line 89
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null)) {
                // line 90
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 92
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\">";
            echo             // line 96
($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "][meta_description]\" rows=\"5\"
                        placeholder=\"";
            // line 99
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            echo "\"
                        class=\"form-control\">";
            // line 100
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["product_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["product_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null), "meta_description", [], "any", false, false, false, 100)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "\">";
            echo             // line 105
($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
            echo "][meta_keyword]\" rows=\"5\"
                        placeholder=\"";
            // line 108
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
            echo "\"
                        class=\"form-control\">";
            // line 109
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["product_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 109)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            echo "\"><span
                        data-toggle=\"tooltip\" title=\"";
            // line 114
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            echo "][tag]\"
                        value=\"";
            // line 117
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["product_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null), "tag", [], "any", false, false, false, 117)) : (""));
            echo "\"
                        placeholder=\"";
            // line 118
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 127
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 129
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\"
                    class=\"form-control\" />
                  ";
        // line 131
        if (($context["error_model"] ?? null)) {
            // line 132
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 134
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 138
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 140
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 146
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 148
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 154
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 156
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 162
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 164
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 170
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 172
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 178
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 180
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 185
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 187
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\"
                    id=\"input-location\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 192
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 194
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\"
                    class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 199
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 202
        echo ($context["text_none"] ?? null);
        echo "</option>


                    ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 206
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 206) == ($context["tax_class_id"] ?? null))) {
                // line 207
                echo "

                    <option value=\"";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 209);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 209);
                echo "</option>


                    ";
            } else {
                // line 213
                echo "

                    <option value=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 215);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 215);
                echo "</option>


                    ";
            }
            // line 219
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 226
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 228
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\"
                    id=\"input-quantity\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 234
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 236
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\"
                    id=\"input-minimum\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 241
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 246
        if (($context["subtract"] ?? null)) {
            // line 247
            echo "

                    <option value=\"1\" selected=\"selected\">";
            // line 249
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 250
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 254
            echo "

                    <option value=\"1\">";
            // line 256
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 257
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 261
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 268
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 274
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 274) == ($context["stock_status_id"] ?? null))) {
                // line 275
                echo "

                    <option value=\"";
                // line 277
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 277);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 277);
                echo "
                    </option>


                    ";
            } else {
                // line 282
                echo "

                    <option value=\"";
                // line 284
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 284);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 284);
                echo "</option>


                    ";
            }
            // line 288
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 295
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 297
        if (($context["shipping"] ?? null)) {
            // line 298
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                    ";
            // line 299
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 301
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />
                    ";
            // line 302
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 303
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 304
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                    ";
            // line 305
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 307
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />
                    ";
            // line 308
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 309
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 313
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 316
        echo ($context["date_available"] ?? null);
        echo "\"
                      placeholder=\"";
        // line 317
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\"
                      class=\"form-control\" /> <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 325
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 329
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\"
                        id=\"input-length\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 333
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\"
                        id=\"input-width\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 337
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\"
                        id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 344
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 350
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 350) == ($context["length_class_id"] ?? null))) {
                // line 351
                echo "

                    <option value=\"";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 353);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 353);
                echo "
                    </option>


                    ";
            } else {
                // line 358
                echo "

                    <option value=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 360);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 360);
                echo "</option>


                    ";
            }
            // line 364
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 371
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 373
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\"
                    id=\"input-weight\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 378
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 384
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 384) == ($context["weight_class_id"] ?? null))) {
                // line 385
                echo "

                    <option value=\"";
                // line 387
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 387);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 387);
                echo "
                    </option>


                    ";
            } else {
                // line 392
                echo "

                    <option value=\"";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 394);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 394);
                echo "</option>


                    ";
            }
            // line 398
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 405
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 410
        if (($context["status"] ?? null)) {
            // line 411
            echo "

                    <option value=\"1\" selected=\"selected\">";
            // line 413
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 414
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 418
            echo "

                    <option value=\"1\">";
            // line 420
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 421
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 425
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 431
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 433
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\"
                    id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            ";
        // line 438
        if (($context["custom_design_cart"] ?? null)) {
            // line 439
            echo "            <div class=\"tab-pane\" id=\"tab-custom\">
              
              <div class=\"text-center\">
                <h1 class=\"mb-4\">Product Customization</h1>
                <p class=\"lead\">Click the button below to open the product editor.</p>
                <button type=\"button\" class=\"btn btn-primary shadow-sm\" data-toggle=\"modal\" data-target=\"#productEditorModal\">Configure</button>

                <div class=\"mt-5 p-3 bg-light rounded shadow-sm\">
                  <textarea style=\"display:none;\" name=\"custom_data\" id=\"iframeDataDisplay\" rows=\"20\" class=\"form-control p-3 bg-white border rounded mt-5\"></textarea>
                    
                </div>
            </div>

            <div class=\"modal fade\" id=\"productEditorModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productEditorModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\"></div>
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h2 class=\"modal-title text-center\" id=\"productEditorModalLabel\">Product Editor</h2>
                  </div>
                  <div class=\"modal-body\" style=\"padding:0;\">
                    <iframe id=\"productEditorIframe\" src=\"";
            // line 459
            echo ($context["iframe_url"] ?? null);
            echo "?product_id=";
            echo ($context["product_id"] ?? null);
            echo "&base=";
            echo ($context["base"] ?? null);
            echo "\" allowfullscreen style=\"width:100%;height:75vh;border:none;\"></iframe>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-success\" id=\"saveInModalHeader\">Save</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close Editor</button>
                  </div>
                </div>
              </div>

              <div class=\"row col-sm-12\">
                
                <table class=\"table table-striped table-bordered table-hover\" style=\"margin-top: 20px;\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
            // line 473
            echo ($context["entry_mockup_upload"] ?? null);
            echo "</td>
                      <td class=\"text-right\" style=\"color:red;\">";
            // line 474
            echo ($context["entry_text_info"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-mockup-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 479
            echo ($context["thumb_mockup_image"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"mockup_image\" value=\"";
            echo ($context["mockup_image"] ?? null);
            echo "\" id=\"input-mockup-image\"/></td>
                    </tr>
                  </tbody>
                </table>

                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 484
            echo ($context["entry_text_add_element"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-add-element\">";
            // line 486
            echo ($context["entry_restrict_add_element"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_add_element\" id=\"input-add-element\" class=\"form-control\">


                      ";
            // line 491
            if (($context["restrict_add_element"] ?? null)) {
                // line 492
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 494
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 495
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 499
                echo "

                        <option value=\"1\">";
                // line 501
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 502
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 506
            echo "

                    </select>
                  </div>
                </div>
 
                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 512
            echo ($context["entry_text_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-size\">";
            // line 514
            echo ($context["entry_restrict_text_size"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_size\" id=\"input-text-size\" class=\"form-control\">


                      ";
            // line 519
            if (($context["restrict_text_size"] ?? null)) {
                // line 520
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 522
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 523
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 527
                echo "

                        <option value=\"1\">";
                // line 529
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 530
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 534
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-color\">";
            // line 540
            echo ($context["entry_restrict_text_color"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_color\" id=\"input-text-color\" class=\"form-control\">


                      ";
            // line 545
            if (($context["restrict_text_color"] ?? null)) {
                // line 546
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 548
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 549
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 553
                echo "

                        <option value=\"1\">";
                // line 555
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 556
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 560
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-rotation\">";
            // line 566
            echo ($context["entry_restrict_text_rotation"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_rotation\" id=\"input-text-rotation\" class=\"form-control\">


                      ";
            // line 571
            if (($context["restrict_text_rotation"] ?? null)) {
                // line 572
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 574
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 575
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 579
                echo "

                        <option value=\"1\">";
                // line 581
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 582
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 586
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 592
            echo ($context["entry_restrict_text_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_position\" id=\"input-text-position\" class=\"form-control\">


                      ";
            // line 597
            if (($context["restrict_text_position"] ?? null)) {
                // line 598
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 600
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 601
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 605
                echo "

                        <option value=\"1\">";
                // line 607
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 608
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 612
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-font\">";
            // line 618
            echo ($context["entry_restrict_text_font"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_font\" id=\"input-text-font\" class=\"form-control\">


                      ";
            // line 623
            if (($context["restrict_text_font"] ?? null)) {
                // line 624
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 626
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 627
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 631
                echo "

                        <option value=\"1\">";
                // line 633
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 634
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 638
            echo "

                    </select>
                  </div>
                </div>

                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 644
            echo ($context["entry_image_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-rotation\">";
            // line 646
            echo ($context["entry_restrict_image_rotation"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_rotation\" id=\"input-image-rotation\" class=\"form-control\">


                      ";
            // line 651
            if (($context["restrict_image_rotation"] ?? null)) {
                // line 652
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 654
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 655
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 659
                echo "

                        <option value=\"1\">";
                // line 661
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 662
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 666
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 672
            echo ($context["entry_restrict_image_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_position\" id=\"input-image-position\" class=\"form-control\">


                      ";
            // line 677
            if (($context["restrict_image_position"] ?? null)) {
                // line 678
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 680
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 681
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 685
                echo "

                        <option value=\"1\">";
                // line 687
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 688
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 692
            echo "

                    </select>
                  </div>
                </div>
                
              </div>

            </div>

            <script>
              window.designState = null;

              \$(document).ready(function() {
                  const productEditorModal = \$('#productEditorModal');
                  const saveInModalHeaderBtn = \$('#saveInModalHeader');
                  const iframeDataDisplay = \$('#iframeDataDisplay');

                  window.addEventListener('message', function(event) {
                  if (event.data && event.data.type === 'DESIGN_STATE') {
                    window.designState = event.data.data;
                    iframeDataDisplay.text(JSON.stringify(window.designState, null, 2));
                    console.log('Received from iframe:', designState);
                    }
                  });

                  saveInModalHeaderBtn.on('click', function() {
                      productEditorModal.modal('hide');
                  });

                  productEditorModal.on('show.bs.modal', function () {
                      iframeDataDisplay.text(\"No data received yet.\");
                  });
              });
            </script>
            ";
        }
        // line 728
        echo "
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 732
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 734
        echo ($context["manufacturer"] ?? null);
        echo "\"
                    placeholder=\"";
        // line 735
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" /> <input
                    type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 736
        echo ($context["manufacturer_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 741
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 743
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\"
                    class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 746
($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 747
            echo "                    <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 747);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 748
$context["product_category"], "name", [], "any", false, false, false, 748);
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 749
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 749);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 752
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 757
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 759
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\"
                    class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 761
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 762
($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 763
            echo "                    <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 763);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 764
$context["product_filter"], "name", [], "any", false, false, false, 764);
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 765
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 765);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 768
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 772
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 774
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 775
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 776
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 776), ($context["product_store"] ?? null))) {
                // line 777
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 777);
                echo "\" checked=\"checked\" />
                        ";
                // line 778
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 778);
                echo "
                        ";
            } else {
                // line 780
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 780);
                echo "\" />
                        ";
                // line 781
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 781);
                echo "
                        ";
            }
            // line 782
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 790
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 792
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\"
                    class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 795
($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 796
            echo "                    <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 796);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 797
$context["product_download"], "name", [], "any", false, false, false, 797);
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 798
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 798);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 801
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 806
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 808
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\"
                    class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 811
($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 812
            echo "                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 812);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 813
$context["product_related"], "name", [], "any", false, false, false, 813);
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 814
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 814);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 826
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 827
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 833
        $context["attribute_row"] = 0;
        // line 834
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 835
            echo "                    <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                      <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                          name=\"product_attribute[";
            // line 837
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 837);
            echo "\"
                          placeholder=\"";
            // line 838
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /> <input type=\"hidden\"
                          name=\"product_attribute[";
            // line 839
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                          value=\"";
            // line 840
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 840);
            echo "\" /></td>
                      <td class=\"text-left\">";
            // line 841
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 842
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 843
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 843);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 843);
                echo ".png\"
                              title=\"";
                // line 844
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 844);
                echo "\" /></span> <textarea
                            name=\"product_attribute[";
                // line 845
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 845);
                echo "][text]\"
                            rows=\"5\" placeholder=\"";
                // line 846
                echo ($context["entry_text"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 847
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 847)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 847)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 847)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 847)] ?? null) : null), "text", [], "any", false, false, false, 847)) : (""));
                echo "</textarea>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 850
            echo "                      </td>
                      <td class=\"text-right\"><button type=\"button\"
                          onclick=\"\$('#attribute-row";
            // line 852
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 853
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 856
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 857
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 864
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 875
        $context["option_row"] = 0;
        // line 876
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 877
            echo "                    <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\"
                          onclick=\"\$('a[href=\\'#tab-option";
            // line 878
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i>
                        ";
            // line 879
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 879);
            echo "</a></li>
                    ";
            // line 880
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 881
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 882
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 883
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\"
                        class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 889
        $context["option_row"] = 0;
        // line 890
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 891
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 892
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 893
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                        value=\"";
            // line 894
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 894);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 895
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 895);
            echo "\" /> <input
                        type=\"hidden\" name=\"product_option[";
            // line 896
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                        value=\"";
            // line 897
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 897);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 898
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 898);
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 900
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            // line 901
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 903
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\"
                            class=\"form-control\">


                            ";
            // line 907
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 907)) {
                // line 908
                echo "

                            <option value=\"1\" selected=\"selected\">";
                // line 910
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\">";
                // line 911
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            } else {
                // line 915
                echo "

                            <option value=\"1\">";
                // line 917
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 918
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            }
            // line 922
            echo "

                          </select>
                        </div>
                      </div>
                      ";
            // line 927
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 927) == "text")) {
                // line 928
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 929
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 930
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 932
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 933
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 933);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 934
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 938
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 938) == "textarea")) {
                // line 939
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 940
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 941
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 943
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\"
                            placeholder=\"";
                // line 944
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 945
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 945);
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 949
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 949) == "file")) {
                // line 950
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 951
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 952
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 954
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 955
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 955);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 956
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 960
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 960) == "date")) {
                // line 961
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 962
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 963
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 966
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 967
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 967);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                // line 968
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 976
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 976) == "time")) {
                // line 977
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 978
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 979
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 982
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 983
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 983);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"HH:mm\" id=\"input-value";
                // line 984
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" /> <span
                              class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 992
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 992) == "datetime")) {
                // line 993
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 994
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 995
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 998
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 999
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 999);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                // line 1000
                echo ($context["option_row"] ?? null);
                echo "\"
                              class=\"form-control\" /> <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 1008
            echo "                      ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1008) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1008) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1008) == "checkbox")) || (twig_get_attribute($this->env, $this->source,             // line 1009
$context["product_option"], "type", [], "any", false, false, false, 1009) == "image"))) {
                // line 1010
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 1011
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 1014
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1015
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 1016
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1017
                echo ($context["entry_price"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1018
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1019
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>

                            ";
                // line 1025
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1025));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 1026
                    echo "                            <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1028
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                  class=\"form-control\">


                                  ";
                    // line 1032
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1032)] ?? null) : null)) {
                        // line 1033
                        echo "
                                  ";
                        // line 1034
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1034)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1035
                            echo "
                                  ";
                            // line 1036
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1036) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1036))) {
                                // line 1037
                                echo "

                                  <option value=\"";
                                // line 1039
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1039);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source,                                 // line 1040
$context["option_value"], "name", [], "any", false, false, false, 1040);
                                echo "</option>


                                  ";
                            } else {
                                // line 1044
                                echo "

                                  <option value=\"";
                                // line 1046
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1046);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1046);
                                echo "</option>


                                  ";
                            }
                            // line 1050
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1051
                        echo "                                  ";
                    }
                    // line 1052
                    echo "

                                </select> <input type=\"hidden\"
                                  name=\"product_option[";
                    // line 1055
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                  value=\"";
                    // line 1056
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1056);
                    echo "\" /></td>
                              <td class=\"text-right\"><input type=\"text\"
                                  name=\"product_option[";
                    // line 1058
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                  value=\"";
                    // line 1059
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1059);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1062
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                  class=\"form-control\">


                                  ";
                    // line 1066
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1066)) {
                        // line 1067
                        echo "

                                  <option value=\"1\" selected=\"selected\">";
                        // line 1069
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\">";
                        // line 1070
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    } else {
                        // line 1074
                        echo "

                                  <option value=\"1\">";
                        // line 1076
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\" selected=\"selected\">";
                        // line 1077
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    }
                    // line 1081
                    echo "

                                </select></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1085
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1089
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1089) == "+")) {
                        // line 1090
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1096
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1102
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1102) == "-")) {
                        // line 1103
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1109
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1115
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1118
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                  value=\"";
                    // line 1119
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1119);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1122
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1126
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1126) == "+")) {
                        // line 1127
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1133
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1139
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1139) == "-")) {
                        // line 1140
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1146
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1152
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1155
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                  value=\"";
                    // line 1156
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1156);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1159
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1163
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1163) == "+")) {
                        // line 1164
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1170
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1176
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1176) == "-")) {
                        // line 1177
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1183
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1189
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1192
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                  value=\"";
                    // line 1193
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1193);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><button type=\"button\"
                                  onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 1196
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                  data-toggle=\"tooltip\" title=\"";
                    // line 1197
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i
                                    class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
                    // line 1200
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 1201
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1202
                echo "                          </tbody>

                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 1207
                echo ($context["option_row"] ?? null);
                echo "');\"
                                  data-toggle=\"tooltip\" title=\"";
                // line 1208
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 1214
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                        ";
                // line 1217
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1217)] ?? null) : null)) {
                    // line 1218
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1218)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1219
                        echo "

                        <option value=\"";
                        // line 1221
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1221);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1221);
                        echo "</option>


                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1225
                    echo "                        ";
                }
                // line 1226
                echo "

                      </select>
                      ";
            }
            // line 1230
            echo "                    </div>
                    ";
            // line 1231
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1232
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1233
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1242
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1243
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1249
        $context["recurring_row"] = 0;
        // line 1250
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1251
            echo "                    <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1252
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                          class=\"form-control\">


                          ";
            // line 1256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1257
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1257) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 1257))) {
                    // line 1258
                    echo "

                          <option value=\"";
                    // line 1260
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1260);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1260);
                    echo "</option>


                          ";
                } else {
                    // line 1264
                    echo "

                          <option value=\"";
                    // line 1266
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1266);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1266);
                    echo "</option>


                          ";
                }
                // line 1270
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1271
            echo "

                        </select></td>
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1274
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1279
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1279) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 1279))) {
                    // line 1280
                    echo "

                          <option value=\"";
                    // line 1282
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1282);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1283
$context["customer_group"], "name", [], "any", false, false, false, 1283);
                    echo "</option>


                          ";
                } else {
                    // line 1287
                    echo "

                          <option value=\"";
                    // line 1289
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1289);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1289);
                    echo "</option>


                          ";
                }
                // line 1293
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1294
            echo "

                        </select></td>
                      <td class=\"text-left\"><button type=\"button\"
                          onclick=\"\$('#recurring-row";
            // line 1298
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1299
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1302
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1303
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1304
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1310
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1322
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1323
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1324
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1325
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1326
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1327
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1333
        $context["discount_row"] = 0;
        // line 1334
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1335
            echo "                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_discount[";
            // line 1336
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">
                          ";
            // line 1338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1339
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1339) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1339))) {
                    // line 1340
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1340);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1341
$context["customer_group"], "name", [], "any", false, false, false, 1341);
                    echo "</option>
                          ";
                } else {
                    // line 1343
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1343);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1343);
                    echo "</option>
                          ";
                }
                // line 1345
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1346
            echo "                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1347
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                          value=\"";
            // line 1348
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1348);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1350
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1351
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1351);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1353
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1354
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1354);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 1358
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1359
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1359);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 1367
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1368
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1368);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\"
                          onclick=\"\$('#discount-row";
            // line 1375
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1376
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1379
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1380
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1381
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1387
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1399
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1400
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1401
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1402
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1403
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1409
        $context["special_row"] = 0;
        // line 1410
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1411
            echo "                    <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_special[";
            // line 1412
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1416
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1417
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1417) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1417))) {
                    // line 1418
                    echo "

                          <option value=\"";
                    // line 1420
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1420);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1421
$context["customer_group"], "name", [], "any", false, false, false, 1421);
                    echo "</option>


                          ";
                } else {
                    // line 1425
                    echo "

                          <option value=\"";
                    // line 1427
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1427);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1427);
                    echo "</option>


                          ";
                }
                // line 1431
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1432
            echo "

                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1435
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1436
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1436);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1438
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1439
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1439);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 1443
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1444
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1444);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 1452
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1453
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1453);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1459
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1460
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1463
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1464
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1465
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1471
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1483
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img
                            src=\"";
        // line 1489
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a> <input
                          type=\"hidden\" name=\"image\" value=\"";
        // line 1490
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1499
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1500
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1506
        $context["image_row"] = 0;
        // line 1507
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1508
            echo "                    <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1509
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\"
                          class=\"img-thumbnail\"><img src=\"";
            // line 1510
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1510);
            echo "\" alt=\"\" title=\"\"
                            data-placeholder=\"";
            // line 1511
            echo ($context["placeholder"] ?? null);
            echo "\" /></a> <input type=\"hidden\"
                          name=\"product_image[";
            // line 1512
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1512);
            echo "\"
                          id=\"input-image";
            // line 1513
            echo ($context["image_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1514
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                          value=\"";
            // line 1515
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1515);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1517
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1518
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1521
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1522
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1523
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1529
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 1539
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1541
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\"
                    id=\"input-points\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1549
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1550
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1556
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1557
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1557);
            echo "</td>
                      <td class=\"text-right\"><input type=\"text\"
                          name=\"product_reward[";
            // line 1559
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1559);
            echo "][points]\"
                          value=\"";
            // line 1560
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1560)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1560)] ?? null) : null), "points", [], "any", false, false, false, 1560)) : (""));
            echo "\"
                          class=\"form-control\" /></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1564
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1570
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1575
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1576
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1581
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1582
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1582);
            echo "</td>
                      <td class=\"text-left\">";
            // line 1583
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1584
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 1585
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1585);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1585);
                echo ".png\"
                              title=\"";
                // line 1586
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1586);
                echo "\" /></span> <input type=\"text\"
                            name=\"product_seo_url[";
                // line 1587
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1587);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1587);
                echo "]\"
                            value=\"";
                // line 1588
                if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1588)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1588)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product_seo_url"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1588)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1588)] ?? null) : null);
                }
                echo "\"
                            placeholder=\"";
                // line 1589
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                        ";
                // line 1591
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_keyword"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1591)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591)] ?? null) : null)) {
                    // line 1592
                    echo "                        <div class=\"text-danger\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_keyword"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1592)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1592)] ?? null) : null);
                    echo "</div>
                        ";
                }
                // line 1594
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1595
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1598
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1608
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1609
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1614
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1615
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1615);
            echo "</td>
                      <td class=\"text-left\"><select name=\"product_layout[";
            // line 1616
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1616);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>


                          ";
            // line 1620
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1621
                echo "                          ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1621)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["product_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1621)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1621)))) {
                    // line 1622
                    echo "

                          <option value=\"";
                    // line 1624
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1624);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1624);
                    echo "</option>


                          ";
                } else {
                    // line 1628
                    echo "

                          <option value=\"";
                    // line 1630
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1630);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1630);
                    echo "</option>


                          ";
                }
                // line 1634
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1635
            echo "

                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1640
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1663
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
json.unshift({
manufacturer_id: 0,
name: '";
        // line 1668
        echo ($context["text_none"] ?? null);
        echo "'
});

response(\$.map(json, function(item) {
return {
label: item['name'],
value: item['manufacturer_id']
}
}));
}
});
},
'select': function(item) {
\$('input[name=\\'manufacturer\\']').val(item['label']);
\$('input[name=\\'manufacturer_id\\']').val(item['value']);
}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1690
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
response(\$.map(json, function(item) {
return {
label: item['name'],
value: item['category_id']
}
}));
}
});
},
'select': function(item) {
\$('input[name=\\'category\\']').val('');

\$('#product-category' + item['value']).remove();

\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\$(this).parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1719
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
response(\$.map(json, function(item) {
return {
label: item['name'],
value: item['filter_id']
}
}));
}
});
},
'select': function(item) {
\$('input[name=\\'filter\\']').val('');

\$('#product-filter' + item['value']).remove();

\$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
}
});

\$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\$(this).parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1748
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
response(\$.map(json, function(item) {
return {
label: item['name'],
value: item['download_id']
}
}));
}
});
},
'select': function(item) {
\$('input[name=\\'download\\']').val('');

\$('#product-download' + item['value']).remove();

\$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
}
});

\$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1777
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
response(\$.map(json, function(item) {
return {
label: item['name'],
value: item['product_id']
}
}));
}
});
},
'select': function(item) {
\$('input[name=\\'related\\']').val('');

\$('#product-related' + item['value']).remove();

\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
}
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 1803
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
html = '<tr id=\"attribute-row' + attribute_row + '\">';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1807
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
html += '  <td class=\"text-left\">';
";
        // line 1809
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1810
            echo "html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1810);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1810);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1810);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1810);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1812
        echo "html += '  </td>';
html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1813
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#attribute tbody').append(html);

attributeautocomplete(attribute_row);

attribute_row++;
}

function attributeautocomplete(attribute_row) {
\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1827
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
response(\$.map(json, function(item) {
return {
category: item.attribute_group,
label: item.name,
value: item.attribute_id
}
}));
}
});
},
'select': function(item) {
\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
}
});
}

\$('#attribute tbody tr').each(function(index, element) {
attributeautocomplete(index);
});
//--></script>
  <script type=\"text/javascript\"><!--
var option_row = ";
        // line 1852
        echo ($context["option_row"] ?? null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1857
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
response(\$.map(json, function(item) {
return {
category: item['category'],
label: item['name'],
value: item['option_id'],
type: item['type'],
option_value: item['option_value']
}
}));
}
});
},
'select': function(item) {
html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1880
        echo ($context["entry_required"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
html += '\t      <option value=\"1\">";
        // line 1882
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '\t      <option value=\"0\">";
        // line 1883
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '\t  </select></div>';
html += '\t</div>';

if (item['type'] == 'text') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1889
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1890
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'textarea') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1896
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1897
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
html += '\t</div>';
}

if (item['type'] == 'file') {
html += '\t<div class=\"form-group\" style=\"display: none;\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1903
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1904
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'date') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1910
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1911
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'time') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1917
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1918
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'datetime') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1924
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1925
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
html += '<div class=\"table-responsive\">';
html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
html += '  \t <thead>';
html += '      <tr>';
html += '        <td class=\"text-left\">";
        // line 1934
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1935
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
html += '        <td class=\"text-left\">";
        // line 1936
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1937
        echo ($context["entry_price"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1938
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1939
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
html += '        <td></td>';
html += '      </tr>';
html += '  \t </thead>';
html += '  \t <tbody>';
html += '    </tbody>';
html += '    <tfoot>';
html += '      <tr>';
html += '        <td colspan=\"6\"></td>';
html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1948
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
html += '      </tr>';
html += '    </tfoot>';
html += '  </table>';
html += '</div>';

html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

for (i = 0; i < item['option_value'].length; i++) {
html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
}

html += '  </select>';
html += '</div>';
}

\$('#tab-option .tab-content').append(html);

\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\$('[data-toggle=\\'tooltip\\']').tooltip({
container: 'body',
html: true
});

\$('.date').datetimepicker({
language: '";
        // line 1976
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 1981
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 1986
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: true,
pickTime: true
});

option_row++;
}
});
//--></script>
  <script type=\"text/javascript\"><!--
var option_value_row = ";
        // line 1996
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue(option_row) {
html = '<tr id=\"option-value-row' + option_value_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
html += \$('#option-values' + option_row).html();
html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2003
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
html += '    <option value=\"1\">";
        // line 2005
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '    <option value=\"0\">";
        // line 2006
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '  </select></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 2012
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 2017
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 2022
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 2023
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#option-value' + option_row + ' tbody').append(html);
\$('[rel=tooltip]').tooltip();

option_value_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var discount_row = ";
        // line 2034
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
html = '<tr id=\"discount-row' + discount_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2040
            echo "html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2040);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2040), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2042
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2043
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2044
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2045
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2046
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2047
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2048
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#discount tbody').append(html);

\$('.date').datetimepicker({
pickTime: false
});

discount_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var special_row = ";
        // line 2062
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
html = '<tr id=\"special-row' + special_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2067
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2068
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2068);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2068), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2070
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2071
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2072
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2073
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2074
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2075
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#special tbody').append(html);

\$('.date').datetimepicker({
language: '";
        // line 2081
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

special_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 2090
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
html = '<tr id=\"image-row' + image_row + '\">';
html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2094
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2095
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2096
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#images tbody').append(html);

image_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 2106
        echo ($context["recurring_row"] ?? null);
        echo ";

function addRecurring() {
html = '<tr id=\"recurring-row' + recurring_row + '\">';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
";
        // line 2112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2113
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2113);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2113);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2115
        echo "html += '    </select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
";
        // line 2119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2120
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2120);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2120);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2122
        echo "html += '    <select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2125
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
html += '  </td>';
html += '</tr>';

\$('#tab-recurring table tbody').append(html);

recurring_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
language: '";
        // line 2137
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 2142
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 2147
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: true,
pickTime: true
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script>
</div>
";
        // line 2157
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4456 => 2157,  4443 => 2147,  4435 => 2142,  4427 => 2137,  4412 => 2125,  4407 => 2122,  4396 => 2120,  4392 => 2119,  4386 => 2115,  4375 => 2113,  4371 => 2112,  4362 => 2106,  4349 => 2096,  4345 => 2095,  4339 => 2094,  4332 => 2090,  4320 => 2081,  4311 => 2075,  4307 => 2074,  4303 => 2073,  4299 => 2072,  4295 => 2071,  4292 => 2070,  4281 => 2068,  4277 => 2067,  4269 => 2062,  4252 => 2048,  4248 => 2047,  4244 => 2046,  4240 => 2045,  4236 => 2044,  4232 => 2043,  4229 => 2042,  4218 => 2040,  4214 => 2039,  4206 => 2034,  4192 => 2023,  4188 => 2022,  4180 => 2017,  4172 => 2012,  4163 => 2006,  4159 => 2005,  4154 => 2003,  4144 => 1996,  4131 => 1986,  4123 => 1981,  4115 => 1976,  4084 => 1948,  4072 => 1939,  4068 => 1938,  4064 => 1937,  4060 => 1936,  4056 => 1935,  4052 => 1934,  4040 => 1925,  4036 => 1924,  4027 => 1918,  4023 => 1917,  4014 => 1911,  4010 => 1910,  4001 => 1904,  3997 => 1903,  3988 => 1897,  3984 => 1896,  3975 => 1890,  3971 => 1889,  3962 => 1883,  3958 => 1882,  3953 => 1880,  3927 => 1857,  3919 => 1852,  3891 => 1827,  3874 => 1813,  3871 => 1812,  3854 => 1810,  3850 => 1809,  3845 => 1807,  3838 => 1803,  3809 => 1777,  3777 => 1748,  3745 => 1719,  3713 => 1690,  3688 => 1668,  3680 => 1663,  3655 => 1640,  3645 => 1635,  3639 => 1634,  3630 => 1630,  3626 => 1628,  3617 => 1624,  3613 => 1622,  3610 => 1621,  3606 => 1620,  3599 => 1616,  3595 => 1615,  3592 => 1614,  3588 => 1613,  3581 => 1609,  3577 => 1608,  3565 => 1598,  3557 => 1595,  3551 => 1594,  3545 => 1592,  3543 => 1591,  3538 => 1589,  3532 => 1588,  3526 => 1587,  3522 => 1586,  3516 => 1585,  3513 => 1584,  3509 => 1583,  3505 => 1582,  3502 => 1581,  3498 => 1580,  3491 => 1576,  3487 => 1575,  3479 => 1570,  3471 => 1564,  3461 => 1560,  3457 => 1559,  3452 => 1557,  3449 => 1556,  3445 => 1555,  3437 => 1550,  3433 => 1549,  3420 => 1541,  3413 => 1539,  3400 => 1529,  3392 => 1523,  3386 => 1522,  3384 => 1521,  3378 => 1518,  3374 => 1517,  3367 => 1515,  3363 => 1514,  3359 => 1513,  3353 => 1512,  3349 => 1511,  3345 => 1510,  3341 => 1509,  3336 => 1508,  3331 => 1507,  3329 => 1506,  3320 => 1500,  3316 => 1499,  3304 => 1490,  3298 => 1489,  3289 => 1483,  3274 => 1471,  3266 => 1465,  3260 => 1464,  3258 => 1463,  3252 => 1460,  3248 => 1459,  3237 => 1453,  3233 => 1452,  3220 => 1444,  3216 => 1443,  3207 => 1439,  3203 => 1438,  3196 => 1436,  3192 => 1435,  3187 => 1432,  3181 => 1431,  3172 => 1427,  3168 => 1425,  3161 => 1421,  3158 => 1420,  3154 => 1418,  3151 => 1417,  3147 => 1416,  3140 => 1412,  3135 => 1411,  3130 => 1410,  3128 => 1409,  3119 => 1403,  3115 => 1402,  3111 => 1401,  3107 => 1400,  3103 => 1399,  3088 => 1387,  3080 => 1381,  3074 => 1380,  3072 => 1379,  3066 => 1376,  3062 => 1375,  3050 => 1368,  3046 => 1367,  3033 => 1359,  3029 => 1358,  3020 => 1354,  3016 => 1353,  3009 => 1351,  3005 => 1350,  2998 => 1348,  2994 => 1347,  2991 => 1346,  2985 => 1345,  2977 => 1343,  2972 => 1341,  2968 => 1340,  2965 => 1339,  2961 => 1338,  2956 => 1336,  2951 => 1335,  2946 => 1334,  2944 => 1333,  2935 => 1327,  2931 => 1326,  2927 => 1325,  2923 => 1324,  2919 => 1323,  2915 => 1322,  2900 => 1310,  2892 => 1304,  2886 => 1303,  2884 => 1302,  2878 => 1299,  2874 => 1298,  2868 => 1294,  2862 => 1293,  2853 => 1289,  2849 => 1287,  2842 => 1283,  2839 => 1282,  2835 => 1280,  2832 => 1279,  2828 => 1278,  2821 => 1274,  2816 => 1271,  2810 => 1270,  2801 => 1266,  2797 => 1264,  2788 => 1260,  2784 => 1258,  2781 => 1257,  2777 => 1256,  2770 => 1252,  2765 => 1251,  2760 => 1250,  2758 => 1249,  2749 => 1243,  2745 => 1242,  2734 => 1233,  2728 => 1232,  2726 => 1231,  2723 => 1230,  2717 => 1226,  2714 => 1225,  2702 => 1221,  2698 => 1219,  2693 => 1218,  2691 => 1217,  2685 => 1214,  2676 => 1208,  2672 => 1207,  2665 => 1202,  2659 => 1201,  2657 => 1200,  2651 => 1197,  2647 => 1196,  2639 => 1193,  2633 => 1192,  2628 => 1189,  2620 => 1183,  2612 => 1177,  2609 => 1176,  2601 => 1170,  2593 => 1164,  2591 => 1163,  2582 => 1159,  2574 => 1156,  2568 => 1155,  2563 => 1152,  2555 => 1146,  2547 => 1140,  2544 => 1139,  2536 => 1133,  2528 => 1127,  2526 => 1126,  2517 => 1122,  2509 => 1119,  2503 => 1118,  2498 => 1115,  2490 => 1109,  2482 => 1103,  2479 => 1102,  2471 => 1096,  2463 => 1090,  2461 => 1089,  2452 => 1085,  2446 => 1081,  2439 => 1077,  2435 => 1076,  2431 => 1074,  2424 => 1070,  2420 => 1069,  2416 => 1067,  2414 => 1066,  2405 => 1062,  2397 => 1059,  2391 => 1058,  2386 => 1056,  2380 => 1055,  2375 => 1052,  2372 => 1051,  2366 => 1050,  2357 => 1046,  2353 => 1044,  2346 => 1040,  2343 => 1039,  2339 => 1037,  2337 => 1036,  2334 => 1035,  2330 => 1034,  2327 => 1033,  2325 => 1032,  2316 => 1028,  2310 => 1026,  2306 => 1025,  2297 => 1019,  2293 => 1018,  2289 => 1017,  2285 => 1016,  2281 => 1015,  2277 => 1014,  2271 => 1011,  2268 => 1010,  2266 => 1009,  2264 => 1008,  2253 => 1000,  2247 => 999,  2243 => 998,  2238 => 995,  2234 => 994,  2231 => 993,  2228 => 992,  2217 => 984,  2211 => 983,  2207 => 982,  2202 => 979,  2198 => 978,  2195 => 977,  2192 => 976,  2181 => 968,  2175 => 967,  2171 => 966,  2166 => 963,  2162 => 962,  2159 => 961,  2156 => 960,  2149 => 956,  2143 => 955,  2139 => 954,  2135 => 952,  2131 => 951,  2128 => 950,  2125 => 949,  2118 => 945,  2112 => 944,  2108 => 943,  2104 => 941,  2100 => 940,  2097 => 939,  2094 => 938,  2087 => 934,  2081 => 933,  2077 => 932,  2073 => 930,  2069 => 929,  2066 => 928,  2064 => 927,  2057 => 922,  2050 => 918,  2046 => 917,  2042 => 915,  2035 => 911,  2031 => 910,  2027 => 908,  2025 => 907,  2016 => 903,  2012 => 901,  2008 => 900,  2001 => 898,  1997 => 897,  1993 => 896,  1987 => 895,  1983 => 894,  1979 => 893,  1974 => 892,  1969 => 891,  1966 => 890,  1964 => 889,  1955 => 883,  1952 => 882,  1946 => 881,  1944 => 880,  1940 => 879,  1934 => 878,  1929 => 877,  1924 => 876,  1922 => 875,  1908 => 864,  1900 => 858,  1894 => 857,  1892 => 856,  1886 => 853,  1882 => 852,  1878 => 850,  1869 => 847,  1865 => 846,  1859 => 845,  1855 => 844,  1849 => 843,  1846 => 842,  1842 => 841,  1838 => 840,  1834 => 839,  1830 => 838,  1824 => 837,  1818 => 835,  1813 => 834,  1811 => 833,  1802 => 827,  1798 => 826,  1787 => 817,  1778 => 814,  1774 => 813,  1770 => 812,  1767 => 811,  1765 => 810,  1760 => 808,  1753 => 806,  1746 => 801,  1737 => 798,  1733 => 797,  1729 => 796,  1726 => 795,  1724 => 794,  1719 => 792,  1712 => 790,  1705 => 785,  1697 => 782,  1692 => 781,  1687 => 780,  1682 => 778,  1677 => 777,  1675 => 776,  1672 => 775,  1668 => 774,  1663 => 772,  1657 => 768,  1648 => 765,  1644 => 764,  1640 => 763,  1637 => 762,  1635 => 761,  1630 => 759,  1623 => 757,  1616 => 752,  1607 => 749,  1603 => 748,  1599 => 747,  1596 => 746,  1594 => 745,  1589 => 743,  1582 => 741,  1574 => 736,  1570 => 735,  1566 => 734,  1559 => 732,  1553 => 728,  1515 => 692,  1508 => 688,  1504 => 687,  1500 => 685,  1493 => 681,  1489 => 680,  1485 => 678,  1483 => 677,  1475 => 672,  1467 => 666,  1460 => 662,  1456 => 661,  1452 => 659,  1445 => 655,  1441 => 654,  1437 => 652,  1435 => 651,  1427 => 646,  1422 => 644,  1414 => 638,  1407 => 634,  1403 => 633,  1399 => 631,  1392 => 627,  1388 => 626,  1384 => 624,  1382 => 623,  1374 => 618,  1366 => 612,  1359 => 608,  1355 => 607,  1351 => 605,  1344 => 601,  1340 => 600,  1336 => 598,  1334 => 597,  1326 => 592,  1318 => 586,  1311 => 582,  1307 => 581,  1303 => 579,  1296 => 575,  1292 => 574,  1288 => 572,  1286 => 571,  1278 => 566,  1270 => 560,  1263 => 556,  1259 => 555,  1255 => 553,  1248 => 549,  1244 => 548,  1240 => 546,  1238 => 545,  1230 => 540,  1222 => 534,  1215 => 530,  1211 => 529,  1207 => 527,  1200 => 523,  1196 => 522,  1192 => 520,  1190 => 519,  1182 => 514,  1177 => 512,  1169 => 506,  1162 => 502,  1158 => 501,  1154 => 499,  1147 => 495,  1143 => 494,  1139 => 492,  1137 => 491,  1129 => 486,  1124 => 484,  1112 => 479,  1104 => 474,  1100 => 473,  1079 => 459,  1057 => 439,  1055 => 438,  1045 => 433,  1040 => 431,  1032 => 425,  1025 => 421,  1021 => 420,  1017 => 418,  1010 => 414,  1006 => 413,  1002 => 411,  1000 => 410,  992 => 405,  984 => 399,  978 => 398,  969 => 394,  965 => 392,  955 => 387,  951 => 385,  948 => 384,  944 => 383,  936 => 378,  926 => 373,  921 => 371,  913 => 365,  907 => 364,  898 => 360,  894 => 358,  884 => 353,  880 => 351,  877 => 350,  873 => 349,  865 => 344,  853 => 337,  844 => 333,  835 => 329,  828 => 325,  817 => 317,  813 => 316,  807 => 313,  801 => 309,  796 => 308,  793 => 307,  788 => 305,  785 => 304,  782 => 303,  777 => 302,  774 => 301,  769 => 299,  766 => 298,  764 => 297,  759 => 295,  751 => 289,  745 => 288,  736 => 284,  732 => 282,  722 => 277,  718 => 275,  715 => 274,  711 => 273,  701 => 268,  692 => 261,  685 => 257,  681 => 256,  677 => 254,  670 => 250,  666 => 249,  662 => 247,  660 => 246,  652 => 241,  642 => 236,  635 => 234,  624 => 228,  619 => 226,  611 => 220,  605 => 219,  596 => 215,  592 => 213,  583 => 209,  579 => 207,  576 => 206,  572 => 205,  566 => 202,  560 => 199,  550 => 194,  545 => 192,  535 => 187,  530 => 185,  520 => 180,  513 => 178,  502 => 172,  495 => 170,  484 => 164,  477 => 162,  466 => 156,  459 => 154,  448 => 148,  441 => 146,  430 => 140,  423 => 138,  417 => 134,  411 => 132,  409 => 131,  402 => 129,  397 => 127,  391 => 123,  378 => 118,  374 => 117,  370 => 116,  363 => 114,  359 => 113,  352 => 109,  346 => 108,  342 => 107,  337 => 105,  334 => 104,  327 => 100,  321 => 99,  317 => 98,  312 => 96,  309 => 95,  304 => 92,  298 => 90,  296 => 89,  289 => 87,  285 => 86,  281 => 85,  276 => 83,  273 => 82,  266 => 78,  262 => 77,  256 => 76,  252 => 75,  247 => 73,  244 => 72,  239 => 69,  233 => 67,  231 => 66,  225 => 65,  221 => 64,  217 => 63,  213 => 61,  209 => 60,  203 => 58,  199 => 57,  196 => 56,  188 => 54,  181 => 53,  176 => 52,  172 => 51,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  125 => 36,  119 => 35,  114 => 33,  110 => 32,  104 => 29,  98 => 26,  94 => 24,  86 => 20,  84 => 19,  79 => 16,  68 => 14,  64 => 13,  59 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
