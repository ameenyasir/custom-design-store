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
class __TwigTemplate_c2d64708ef2263e997d1ee87bd4e2e5dafda1617268ae964ee59adb9137af584 extends \Twig\Template
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
                <button type=\"button\" class=\"btn btn-primary shadow-sm\" data-toggle=\"modal\" data-target=\"#productEditorModal\">
                    Customize Product
                </button>

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
            // line 461
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
            // line 475
            echo ($context["entry_mockup_upload"] ?? null);
            echo "</td>
                      <td class=\"text-right\" style=\"color:red;\">";
            // line 476
            echo ($context["entry_text_info"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-mockup-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 481
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
            // line 486
            echo ($context["entry_text_add_element"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-add-element\">";
            // line 488
            echo ($context["entry_restrict_add_element"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_add_element\" id=\"input-add-element\" class=\"form-control\">


                      ";
            // line 493
            if (($context["restrict_add_element"] ?? null)) {
                // line 494
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 496
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 497
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 501
                echo "

                        <option value=\"1\">";
                // line 503
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 504
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 508
            echo "

                    </select>
                  </div>
                </div>
 
                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 514
            echo ($context["entry_text_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-size\">";
            // line 516
            echo ($context["entry_restrict_text_size"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_size\" id=\"input-text-size\" class=\"form-control\">


                      ";
            // line 521
            if (($context["restrict_text_size"] ?? null)) {
                // line 522
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 524
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 525
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 529
                echo "

                        <option value=\"1\">";
                // line 531
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 532
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 536
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-color\">";
            // line 542
            echo ($context["entry_restrict_text_color"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_color\" id=\"input-text-color\" class=\"form-control\">


                      ";
            // line 547
            if (($context["restrict_text_color"] ?? null)) {
                // line 548
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 550
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 551
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 555
                echo "

                        <option value=\"1\">";
                // line 557
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 558
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 562
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 568
            echo ($context["entry_restrict_text_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_position\" id=\"input-text-position\" class=\"form-control\">


                      ";
            // line 573
            if (($context["restrict_text_position"] ?? null)) {
                // line 574
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 576
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 577
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 581
                echo "

                        <option value=\"1\">";
                // line 583
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 584
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 588
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-font\">";
            // line 594
            echo ($context["entry_restrict_text_font"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_font\" id=\"input-text-font\" class=\"form-control\">


                      ";
            // line 599
            if (($context["restrict_text_font"] ?? null)) {
                // line 600
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 602
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 603
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 607
                echo "

                        <option value=\"1\">";
                // line 609
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 610
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 614
            echo "

                    </select>
                  </div>
                </div>

                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 620
            echo ($context["entry_image_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 622
            echo ($context["entry_restrict_image_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_position\" id=\"input-image-position\" class=\"form-control\">


                      ";
            // line 627
            if (($context["restrict_image_position"] ?? null)) {
                // line 628
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 630
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 631
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 635
                echo "

                        <option value=\"1\">";
                // line 637
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 638
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 642
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
        // line 678
        echo "
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 682
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 684
        echo ($context["manufacturer"] ?? null);
        echo "\"
                    placeholder=\"";
        // line 685
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" /> <input
                    type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 686
        echo ($context["manufacturer_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 691
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 693
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\"
                    class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 695
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 696
($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 697
            echo "                    <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 697);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 698
$context["product_category"], "name", [], "any", false, false, false, 698);
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 699
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 699);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 707
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 709
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\"
                    class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 712
($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 713
            echo "                    <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 713);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 714
$context["product_filter"], "name", [], "any", false, false, false, 714);
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 715
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 715);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 722
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 724
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 725
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 726
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 726), ($context["product_store"] ?? null))) {
                // line 727
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 727);
                echo "\" checked=\"checked\" />
                        ";
                // line 728
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 728);
                echo "
                        ";
            } else {
                // line 730
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 730);
                echo "\" />
                        ";
                // line 731
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 731);
                echo "
                        ";
            }
            // line 732
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 740
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 742
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\"
                    class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 745
($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 746
            echo "                    <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 746);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 747
$context["product_download"], "name", [], "any", false, false, false, 747);
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 748
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 748);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 751
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 756
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 758
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\"
                    class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 761
($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 762
            echo "                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 762);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 763
$context["product_related"], "name", [], "any", false, false, false, 763);
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 764
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 764);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
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
        // line 776
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 777
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 783
        $context["attribute_row"] = 0;
        // line 784
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 785
            echo "                    <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                      <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                          name=\"product_attribute[";
            // line 787
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 787);
            echo "\"
                          placeholder=\"";
            // line 788
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /> <input type=\"hidden\"
                          name=\"product_attribute[";
            // line 789
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                          value=\"";
            // line 790
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 790);
            echo "\" /></td>
                      <td class=\"text-left\">";
            // line 791
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 792
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 793
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 793);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 793);
                echo ".png\"
                              title=\"";
                // line 794
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 794);
                echo "\" /></span> <textarea
                            name=\"product_attribute[";
                // line 795
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 795);
                echo "][text]\"
                            rows=\"5\" placeholder=\"";
                // line 796
                echo ($context["entry_text"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 797
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 797)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 797)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 797)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 797)] ?? null) : null), "text", [], "any", false, false, false, 797)) : (""));
                echo "</textarea>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 800
            echo "                      </td>
                      <td class=\"text-right\"><button type=\"button\"
                          onclick=\"\$('#attribute-row";
            // line 802
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 803
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 806
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 807
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 808
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 814
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
        // line 825
        $context["option_row"] = 0;
        // line 826
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 827
            echo "                    <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\"
                          onclick=\"\$('a[href=\\'#tab-option";
            // line 828
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i>
                        ";
            // line 829
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 829);
            echo "</a></li>
                    ";
            // line 830
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 831
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 832
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 833
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\"
                        class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 839
        $context["option_row"] = 0;
        // line 840
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 841
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 842
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 843
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                        value=\"";
            // line 844
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 844);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 845
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 845);
            echo "\" /> <input
                        type=\"hidden\" name=\"product_option[";
            // line 846
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                        value=\"";
            // line 847
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 847);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 848
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 848);
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 850
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            // line 851
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 853
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\"
                            class=\"form-control\">


                            ";
            // line 857
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 857)) {
                // line 858
                echo "

                            <option value=\"1\" selected=\"selected\">";
                // line 860
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\">";
                // line 861
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            } else {
                // line 865
                echo "

                            <option value=\"1\">";
                // line 867
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 868
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            }
            // line 872
            echo "

                          </select>
                        </div>
                      </div>
                      ";
            // line 877
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 877) == "text")) {
                // line 878
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 879
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 880
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 882
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 883
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 883);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 884
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 888
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 888) == "textarea")) {
                // line 889
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 890
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 891
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 893
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\"
                            placeholder=\"";
                // line 894
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 895
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 895);
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 899
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 899) == "file")) {
                // line 900
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 901
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 902
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 904
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 905
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 905);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 906
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 910
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 910) == "date")) {
                // line 911
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 912
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 913
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 916
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 917
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 917);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                // line 918
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
            // line 926
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 926) == "time")) {
                // line 927
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 928
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 929
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
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
                              data-date-format=\"HH:mm\" id=\"input-value";
                // line 934
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
            // line 942
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 942) == "datetime")) {
                // line 943
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 944
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 945
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 948
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 949
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 949);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                // line 950
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
            // line 958
            echo "                      ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 958) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 958) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 958) == "checkbox")) || (twig_get_attribute($this->env, $this->source,             // line 959
$context["product_option"], "type", [], "any", false, false, false, 959) == "image"))) {
                // line 960
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 961
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 964
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 965
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 966
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 967
                echo ($context["entry_price"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 968
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 969
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>

                            ";
                // line 975
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 975));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 976
                    echo "                            <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 978
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                  class=\"form-control\">


                                  ";
                    // line 982
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 982)] ?? null) : null)) {
                        // line 983
                        echo "
                                  ";
                        // line 984
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 984)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 985
                            echo "
                                  ";
                            // line 986
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 986) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 986))) {
                                // line 987
                                echo "

                                  <option value=\"";
                                // line 989
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 989);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source,                                 // line 990
$context["option_value"], "name", [], "any", false, false, false, 990);
                                echo "</option>


                                  ";
                            } else {
                                // line 994
                                echo "

                                  <option value=\"";
                                // line 996
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 996);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 996);
                                echo "</option>


                                  ";
                            }
                            // line 1000
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1001
                        echo "                                  ";
                    }
                    // line 1002
                    echo "

                                </select> <input type=\"hidden\"
                                  name=\"product_option[";
                    // line 1005
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                  value=\"";
                    // line 1006
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1006);
                    echo "\" /></td>
                              <td class=\"text-right\"><input type=\"text\"
                                  name=\"product_option[";
                    // line 1008
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                  value=\"";
                    // line 1009
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1009);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1012
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                  class=\"form-control\">


                                  ";
                    // line 1016
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1016)) {
                        // line 1017
                        echo "

                                  <option value=\"1\" selected=\"selected\">";
                        // line 1019
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\">";
                        // line 1020
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    } else {
                        // line 1024
                        echo "

                                  <option value=\"1\">";
                        // line 1026
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\" selected=\"selected\">";
                        // line 1027
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    }
                    // line 1031
                    echo "

                                </select></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1035
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1039
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1039) == "+")) {
                        // line 1040
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1046
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1052
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1052) == "-")) {
                        // line 1053
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1059
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1065
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1068
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                  value=\"";
                    // line 1069
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1069);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1072
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1076
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1076) == "+")) {
                        // line 1077
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1083
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1089
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1089) == "-")) {
                        // line 1090
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1096
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1102
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1105
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                  value=\"";
                    // line 1106
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1106);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1109
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1113
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1113) == "+")) {
                        // line 1114
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1120
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1126
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1126) == "-")) {
                        // line 1127
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1133
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1139
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1142
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                  value=\"";
                    // line 1143
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1143);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><button type=\"button\"
                                  onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 1146
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                  data-toggle=\"tooltip\" title=\"";
                    // line 1147
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i
                                    class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
                    // line 1150
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 1151
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1152
                echo "                          </tbody>

                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 1157
                echo ($context["option_row"] ?? null);
                echo "');\"
                                  data-toggle=\"tooltip\" title=\"";
                // line 1158
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 1164
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                        ";
                // line 1167
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1167)] ?? null) : null)) {
                    // line 1168
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1168)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1169
                        echo "

                        <option value=\"";
                        // line 1171
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1171);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1171);
                        echo "</option>


                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1175
                    echo "                        ";
                }
                // line 1176
                echo "

                      </select>
                      ";
            }
            // line 1180
            echo "                    </div>
                    ";
            // line 1181
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1182
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1183
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
        // line 1192
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1193
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1199
        $context["recurring_row"] = 0;
        // line 1200
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1201
            echo "                    <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1202
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                          class=\"form-control\">


                          ";
            // line 1206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1207
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1207) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 1207))) {
                    // line 1208
                    echo "

                          <option value=\"";
                    // line 1210
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1210);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1210);
                    echo "</option>


                          ";
                } else {
                    // line 1214
                    echo "

                          <option value=\"";
                    // line 1216
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1216);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1216);
                    echo "</option>


                          ";
                }
                // line 1220
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1221
            echo "

                        </select></td>
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1224
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1229
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1229) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 1229))) {
                    // line 1230
                    echo "

                          <option value=\"";
                    // line 1232
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1232);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1233
$context["customer_group"], "name", [], "any", false, false, false, 1233);
                    echo "</option>


                          ";
                } else {
                    // line 1237
                    echo "

                          <option value=\"";
                    // line 1239
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1239);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1239);
                    echo "</option>


                          ";
                }
                // line 1243
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1244
            echo "

                        </select></td>
                      <td class=\"text-left\"><button type=\"button\"
                          onclick=\"\$('#recurring-row";
            // line 1248
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1249
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1252
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1253
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1254
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1260
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
        // line 1272
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1273
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1274
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1275
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1276
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1277
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1283
        $context["discount_row"] = 0;
        // line 1284
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1285
            echo "                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_discount[";
            // line 1286
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">
                          ";
            // line 1288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1289
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1289) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1289))) {
                    // line 1290
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1290);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1291
$context["customer_group"], "name", [], "any", false, false, false, 1291);
                    echo "</option>
                          ";
                } else {
                    // line 1293
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1293);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1293);
                    echo "</option>
                          ";
                }
                // line 1295
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1296
            echo "                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1297
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                          value=\"";
            // line 1298
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1298);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1300
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1301
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1301);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1303
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1304
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1304);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 1308
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1309
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1309);
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
            // line 1317
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1318
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1318);
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
            // line 1325
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1326
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1329
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1330
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1331
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1337
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
        // line 1349
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1350
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1351
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1352
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1353
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1359
        $context["special_row"] = 0;
        // line 1360
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1361
            echo "                    <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_special[";
            // line 1362
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1367
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1367) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1367))) {
                    // line 1368
                    echo "

                          <option value=\"";
                    // line 1370
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1370);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1371
$context["customer_group"], "name", [], "any", false, false, false, 1371);
                    echo "</option>


                          ";
                } else {
                    // line 1375
                    echo "

                          <option value=\"";
                    // line 1377
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1377);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1377);
                    echo "</option>


                          ";
                }
                // line 1381
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1382
            echo "

                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1385
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1386
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1386);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1388
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1389
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1389);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 1393
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1394
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1394);
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
            // line 1402
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1403
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1403);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1409
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1410
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1413
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1414
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1415
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1421
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
        // line 1433
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img
                            src=\"";
        // line 1439
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a> <input
                          type=\"hidden\" name=\"image\" value=\"";
        // line 1440
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
        // line 1449
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1450
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1456
        $context["image_row"] = 0;
        // line 1457
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1458
            echo "                    <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1459
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\"
                          class=\"img-thumbnail\"><img src=\"";
            // line 1460
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1460);
            echo "\" alt=\"\" title=\"\"
                            data-placeholder=\"";
            // line 1461
            echo ($context["placeholder"] ?? null);
            echo "\" /></a> <input type=\"hidden\"
                          name=\"product_image[";
            // line 1462
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1462);
            echo "\"
                          id=\"input-image";
            // line 1463
            echo ($context["image_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1464
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                          value=\"";
            // line 1465
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1465);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1467
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1468
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1471
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1472
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1473
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1479
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
        // line 1489
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1491
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
        // line 1499
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1500
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1506
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1507
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1507);
            echo "</td>
                      <td class=\"text-right\"><input type=\"text\"
                          name=\"product_reward[";
            // line 1509
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1509);
            echo "][points]\"
                          value=\"";
            // line 1510
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1510)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1510)] ?? null) : null), "points", [], "any", false, false, false, 1510)) : (""));
            echo "\"
                          class=\"form-control\" /></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1514
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1520
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1525
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1526
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1531
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1532
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1532);
            echo "</td>
                      <td class=\"text-left\">";
            // line 1533
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1534
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 1535
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1535);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1535);
                echo ".png\"
                              title=\"";
                // line 1536
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1536);
                echo "\" /></span> <input type=\"text\"
                            name=\"product_seo_url[";
                // line 1537
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1537);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1537);
                echo "]\"
                            value=\"";
                // line 1538
                if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1538)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1538)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product_seo_url"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1538)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1538)] ?? null) : null);
                }
                echo "\"
                            placeholder=\"";
                // line 1539
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                        ";
                // line 1541
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_keyword"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1541)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1541)] ?? null) : null)) {
                    // line 1542
                    echo "                        <div class=\"text-danger\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_keyword"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1542)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1542)] ?? null) : null);
                    echo "</div>
                        ";
                }
                // line 1544
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1545
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1548
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
        // line 1558
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1559
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1564
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1565
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1565);
            echo "</td>
                      <td class=\"text-left\"><select name=\"product_layout[";
            // line 1566
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1566);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>


                          ";
            // line 1570
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1571
                echo "                          ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1571)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["product_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1571)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1571)))) {
                    // line 1572
                    echo "

                          <option value=\"";
                    // line 1574
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1574);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1574);
                    echo "</option>


                          ";
                } else {
                    // line 1578
                    echo "

                          <option value=\"";
                    // line 1580
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1580);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1580);
                    echo "</option>


                          ";
                }
                // line 1584
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1585
            echo "

                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1590
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
        // line 1613
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
json.unshift({
manufacturer_id: 0,
name: '";
        // line 1618
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
        // line 1640
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
        // line 1669
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
        // line 1698
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
        // line 1727
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
        // line 1753
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
html = '<tr id=\"attribute-row' + attribute_row + '\">';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1757
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
html += '  <td class=\"text-left\">';
";
        // line 1759
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1760
            echo "html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1760);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1760);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1760);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1760);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1762
        echo "html += '  </td>';
html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1763
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
        // line 1777
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
        // line 1802
        echo ($context["option_row"] ?? null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1807
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
        // line 1830
        echo ($context["entry_required"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
html += '\t      <option value=\"1\">";
        // line 1832
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '\t      <option value=\"0\">";
        // line 1833
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '\t  </select></div>';
html += '\t</div>';

if (item['type'] == 'text') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1839
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1840
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'textarea') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1846
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1847
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
html += '\t</div>';
}

if (item['type'] == 'file') {
html += '\t<div class=\"form-group\" style=\"display: none;\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1853
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1854
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'date') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1860
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1861
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'time') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1867
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1868
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'datetime') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1874
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1875
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
        // line 1884
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1885
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
html += '        <td class=\"text-left\">";
        // line 1886
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1887
        echo ($context["entry_price"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1888
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1889
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
        // line 1898
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
        // line 1926
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 1931
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 1936
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
        // line 1946
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue(option_row) {
html = '<tr id=\"option-value-row' + option_value_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
html += \$('#option-values' + option_row).html();
html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1953
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
html += '    <option value=\"1\">";
        // line 1955
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '    <option value=\"0\">";
        // line 1956
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '  </select></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1962
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1967
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1972
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1973
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
        // line 1984
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
html = '<tr id=\"discount-row' + discount_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 1989
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1990
            echo "html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1990);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1990), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1992
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1993
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1994
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1995
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1996
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1997
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1998
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
        // line 2012
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
html = '<tr id=\"special-row' + special_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2017
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2018
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2018);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2018), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2020
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2021
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2022
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2023
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2024
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2025
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#special tbody').append(html);

\$('.date').datetimepicker({
language: '";
        // line 2031
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

special_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 2040
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
html = '<tr id=\"image-row' + image_row + '\">';
html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2044
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2045
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2046
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#images tbody').append(html);

image_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 2056
        echo ($context["recurring_row"] ?? null);
        echo ";

function addRecurring() {
html = '<tr id=\"recurring-row' + recurring_row + '\">';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
";
        // line 2062
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2063
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2063);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2063);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2065
        echo "html += '    </select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
";
        // line 2069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2070
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2070);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2070);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2072
        echo "html += '    <select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2075
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
        // line 2087
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 2092
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 2097
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
        // line 2107
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
        return array (  4362 => 2107,  4349 => 2097,  4341 => 2092,  4333 => 2087,  4318 => 2075,  4313 => 2072,  4302 => 2070,  4298 => 2069,  4292 => 2065,  4281 => 2063,  4277 => 2062,  4268 => 2056,  4255 => 2046,  4251 => 2045,  4245 => 2044,  4238 => 2040,  4226 => 2031,  4217 => 2025,  4213 => 2024,  4209 => 2023,  4205 => 2022,  4201 => 2021,  4198 => 2020,  4187 => 2018,  4183 => 2017,  4175 => 2012,  4158 => 1998,  4154 => 1997,  4150 => 1996,  4146 => 1995,  4142 => 1994,  4138 => 1993,  4135 => 1992,  4124 => 1990,  4120 => 1989,  4112 => 1984,  4098 => 1973,  4094 => 1972,  4086 => 1967,  4078 => 1962,  4069 => 1956,  4065 => 1955,  4060 => 1953,  4050 => 1946,  4037 => 1936,  4029 => 1931,  4021 => 1926,  3990 => 1898,  3978 => 1889,  3974 => 1888,  3970 => 1887,  3966 => 1886,  3962 => 1885,  3958 => 1884,  3946 => 1875,  3942 => 1874,  3933 => 1868,  3929 => 1867,  3920 => 1861,  3916 => 1860,  3907 => 1854,  3903 => 1853,  3894 => 1847,  3890 => 1846,  3881 => 1840,  3877 => 1839,  3868 => 1833,  3864 => 1832,  3859 => 1830,  3833 => 1807,  3825 => 1802,  3797 => 1777,  3780 => 1763,  3777 => 1762,  3760 => 1760,  3756 => 1759,  3751 => 1757,  3744 => 1753,  3715 => 1727,  3683 => 1698,  3651 => 1669,  3619 => 1640,  3594 => 1618,  3586 => 1613,  3561 => 1590,  3551 => 1585,  3545 => 1584,  3536 => 1580,  3532 => 1578,  3523 => 1574,  3519 => 1572,  3516 => 1571,  3512 => 1570,  3505 => 1566,  3501 => 1565,  3498 => 1564,  3494 => 1563,  3487 => 1559,  3483 => 1558,  3471 => 1548,  3463 => 1545,  3457 => 1544,  3451 => 1542,  3449 => 1541,  3444 => 1539,  3438 => 1538,  3432 => 1537,  3428 => 1536,  3422 => 1535,  3419 => 1534,  3415 => 1533,  3411 => 1532,  3408 => 1531,  3404 => 1530,  3397 => 1526,  3393 => 1525,  3385 => 1520,  3377 => 1514,  3367 => 1510,  3363 => 1509,  3358 => 1507,  3355 => 1506,  3351 => 1505,  3343 => 1500,  3339 => 1499,  3326 => 1491,  3319 => 1489,  3306 => 1479,  3298 => 1473,  3292 => 1472,  3290 => 1471,  3284 => 1468,  3280 => 1467,  3273 => 1465,  3269 => 1464,  3265 => 1463,  3259 => 1462,  3255 => 1461,  3251 => 1460,  3247 => 1459,  3242 => 1458,  3237 => 1457,  3235 => 1456,  3226 => 1450,  3222 => 1449,  3210 => 1440,  3204 => 1439,  3195 => 1433,  3180 => 1421,  3172 => 1415,  3166 => 1414,  3164 => 1413,  3158 => 1410,  3154 => 1409,  3143 => 1403,  3139 => 1402,  3126 => 1394,  3122 => 1393,  3113 => 1389,  3109 => 1388,  3102 => 1386,  3098 => 1385,  3093 => 1382,  3087 => 1381,  3078 => 1377,  3074 => 1375,  3067 => 1371,  3064 => 1370,  3060 => 1368,  3057 => 1367,  3053 => 1366,  3046 => 1362,  3041 => 1361,  3036 => 1360,  3034 => 1359,  3025 => 1353,  3021 => 1352,  3017 => 1351,  3013 => 1350,  3009 => 1349,  2994 => 1337,  2986 => 1331,  2980 => 1330,  2978 => 1329,  2972 => 1326,  2968 => 1325,  2956 => 1318,  2952 => 1317,  2939 => 1309,  2935 => 1308,  2926 => 1304,  2922 => 1303,  2915 => 1301,  2911 => 1300,  2904 => 1298,  2900 => 1297,  2897 => 1296,  2891 => 1295,  2883 => 1293,  2878 => 1291,  2874 => 1290,  2871 => 1289,  2867 => 1288,  2862 => 1286,  2857 => 1285,  2852 => 1284,  2850 => 1283,  2841 => 1277,  2837 => 1276,  2833 => 1275,  2829 => 1274,  2825 => 1273,  2821 => 1272,  2806 => 1260,  2798 => 1254,  2792 => 1253,  2790 => 1252,  2784 => 1249,  2780 => 1248,  2774 => 1244,  2768 => 1243,  2759 => 1239,  2755 => 1237,  2748 => 1233,  2745 => 1232,  2741 => 1230,  2738 => 1229,  2734 => 1228,  2727 => 1224,  2722 => 1221,  2716 => 1220,  2707 => 1216,  2703 => 1214,  2694 => 1210,  2690 => 1208,  2687 => 1207,  2683 => 1206,  2676 => 1202,  2671 => 1201,  2666 => 1200,  2664 => 1199,  2655 => 1193,  2651 => 1192,  2640 => 1183,  2634 => 1182,  2632 => 1181,  2629 => 1180,  2623 => 1176,  2620 => 1175,  2608 => 1171,  2604 => 1169,  2599 => 1168,  2597 => 1167,  2591 => 1164,  2582 => 1158,  2578 => 1157,  2571 => 1152,  2565 => 1151,  2563 => 1150,  2557 => 1147,  2553 => 1146,  2545 => 1143,  2539 => 1142,  2534 => 1139,  2526 => 1133,  2518 => 1127,  2515 => 1126,  2507 => 1120,  2499 => 1114,  2497 => 1113,  2488 => 1109,  2480 => 1106,  2474 => 1105,  2469 => 1102,  2461 => 1096,  2453 => 1090,  2450 => 1089,  2442 => 1083,  2434 => 1077,  2432 => 1076,  2423 => 1072,  2415 => 1069,  2409 => 1068,  2404 => 1065,  2396 => 1059,  2388 => 1053,  2385 => 1052,  2377 => 1046,  2369 => 1040,  2367 => 1039,  2358 => 1035,  2352 => 1031,  2345 => 1027,  2341 => 1026,  2337 => 1024,  2330 => 1020,  2326 => 1019,  2322 => 1017,  2320 => 1016,  2311 => 1012,  2303 => 1009,  2297 => 1008,  2292 => 1006,  2286 => 1005,  2281 => 1002,  2278 => 1001,  2272 => 1000,  2263 => 996,  2259 => 994,  2252 => 990,  2249 => 989,  2245 => 987,  2243 => 986,  2240 => 985,  2236 => 984,  2233 => 983,  2231 => 982,  2222 => 978,  2216 => 976,  2212 => 975,  2203 => 969,  2199 => 968,  2195 => 967,  2191 => 966,  2187 => 965,  2183 => 964,  2177 => 961,  2174 => 960,  2172 => 959,  2170 => 958,  2159 => 950,  2153 => 949,  2149 => 948,  2144 => 945,  2140 => 944,  2137 => 943,  2134 => 942,  2123 => 934,  2117 => 933,  2113 => 932,  2108 => 929,  2104 => 928,  2101 => 927,  2098 => 926,  2087 => 918,  2081 => 917,  2077 => 916,  2072 => 913,  2068 => 912,  2065 => 911,  2062 => 910,  2055 => 906,  2049 => 905,  2045 => 904,  2041 => 902,  2037 => 901,  2034 => 900,  2031 => 899,  2024 => 895,  2018 => 894,  2014 => 893,  2010 => 891,  2006 => 890,  2003 => 889,  2000 => 888,  1993 => 884,  1987 => 883,  1983 => 882,  1979 => 880,  1975 => 879,  1972 => 878,  1970 => 877,  1963 => 872,  1956 => 868,  1952 => 867,  1948 => 865,  1941 => 861,  1937 => 860,  1933 => 858,  1931 => 857,  1922 => 853,  1918 => 851,  1914 => 850,  1907 => 848,  1903 => 847,  1899 => 846,  1893 => 845,  1889 => 844,  1885 => 843,  1880 => 842,  1875 => 841,  1872 => 840,  1870 => 839,  1861 => 833,  1858 => 832,  1852 => 831,  1850 => 830,  1846 => 829,  1840 => 828,  1835 => 827,  1830 => 826,  1828 => 825,  1814 => 814,  1806 => 808,  1800 => 807,  1798 => 806,  1792 => 803,  1788 => 802,  1784 => 800,  1775 => 797,  1771 => 796,  1765 => 795,  1761 => 794,  1755 => 793,  1752 => 792,  1748 => 791,  1744 => 790,  1740 => 789,  1736 => 788,  1730 => 787,  1724 => 785,  1719 => 784,  1717 => 783,  1708 => 777,  1704 => 776,  1693 => 767,  1684 => 764,  1680 => 763,  1676 => 762,  1673 => 761,  1671 => 760,  1666 => 758,  1659 => 756,  1652 => 751,  1643 => 748,  1639 => 747,  1635 => 746,  1632 => 745,  1630 => 744,  1625 => 742,  1618 => 740,  1611 => 735,  1603 => 732,  1598 => 731,  1593 => 730,  1588 => 728,  1583 => 727,  1581 => 726,  1578 => 725,  1574 => 724,  1569 => 722,  1563 => 718,  1554 => 715,  1550 => 714,  1546 => 713,  1543 => 712,  1541 => 711,  1536 => 709,  1529 => 707,  1522 => 702,  1513 => 699,  1509 => 698,  1505 => 697,  1502 => 696,  1500 => 695,  1495 => 693,  1488 => 691,  1480 => 686,  1476 => 685,  1472 => 684,  1465 => 682,  1459 => 678,  1421 => 642,  1414 => 638,  1410 => 637,  1406 => 635,  1399 => 631,  1395 => 630,  1391 => 628,  1389 => 627,  1381 => 622,  1376 => 620,  1368 => 614,  1361 => 610,  1357 => 609,  1353 => 607,  1346 => 603,  1342 => 602,  1338 => 600,  1336 => 599,  1328 => 594,  1320 => 588,  1313 => 584,  1309 => 583,  1305 => 581,  1298 => 577,  1294 => 576,  1290 => 574,  1288 => 573,  1280 => 568,  1272 => 562,  1265 => 558,  1261 => 557,  1257 => 555,  1250 => 551,  1246 => 550,  1242 => 548,  1240 => 547,  1232 => 542,  1224 => 536,  1217 => 532,  1213 => 531,  1209 => 529,  1202 => 525,  1198 => 524,  1194 => 522,  1192 => 521,  1184 => 516,  1179 => 514,  1171 => 508,  1164 => 504,  1160 => 503,  1156 => 501,  1149 => 497,  1145 => 496,  1141 => 494,  1139 => 493,  1131 => 488,  1126 => 486,  1114 => 481,  1106 => 476,  1102 => 475,  1081 => 461,  1057 => 439,  1055 => 438,  1045 => 433,  1040 => 431,  1032 => 425,  1025 => 421,  1021 => 420,  1017 => 418,  1010 => 414,  1006 => 413,  1002 => 411,  1000 => 410,  992 => 405,  984 => 399,  978 => 398,  969 => 394,  965 => 392,  955 => 387,  951 => 385,  948 => 384,  944 => 383,  936 => 378,  926 => 373,  921 => 371,  913 => 365,  907 => 364,  898 => 360,  894 => 358,  884 => 353,  880 => 351,  877 => 350,  873 => 349,  865 => 344,  853 => 337,  844 => 333,  835 => 329,  828 => 325,  817 => 317,  813 => 316,  807 => 313,  801 => 309,  796 => 308,  793 => 307,  788 => 305,  785 => 304,  782 => 303,  777 => 302,  774 => 301,  769 => 299,  766 => 298,  764 => 297,  759 => 295,  751 => 289,  745 => 288,  736 => 284,  732 => 282,  722 => 277,  718 => 275,  715 => 274,  711 => 273,  701 => 268,  692 => 261,  685 => 257,  681 => 256,  677 => 254,  670 => 250,  666 => 249,  662 => 247,  660 => 246,  652 => 241,  642 => 236,  635 => 234,  624 => 228,  619 => 226,  611 => 220,  605 => 219,  596 => 215,  592 => 213,  583 => 209,  579 => 207,  576 => 206,  572 => 205,  566 => 202,  560 => 199,  550 => 194,  545 => 192,  535 => 187,  530 => 185,  520 => 180,  513 => 178,  502 => 172,  495 => 170,  484 => 164,  477 => 162,  466 => 156,  459 => 154,  448 => 148,  441 => 146,  430 => 140,  423 => 138,  417 => 134,  411 => 132,  409 => 131,  402 => 129,  397 => 127,  391 => 123,  378 => 118,  374 => 117,  370 => 116,  363 => 114,  359 => 113,  352 => 109,  346 => 108,  342 => 107,  337 => 105,  334 => 104,  327 => 100,  321 => 99,  317 => 98,  312 => 96,  309 => 95,  304 => 92,  298 => 90,  296 => 89,  289 => 87,  285 => 86,  281 => 85,  276 => 83,  273 => 82,  266 => 78,  262 => 77,  256 => 76,  252 => 75,  247 => 73,  244 => 72,  239 => 69,  233 => 67,  231 => 66,  225 => 65,  221 => 64,  217 => 63,  213 => 61,  209 => 60,  203 => 58,  199 => 57,  196 => 56,  188 => 54,  181 => 53,  176 => 52,  172 => 51,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  125 => 36,  119 => 35,  114 => 33,  110 => 32,  104 => 29,  98 => 26,  94 => 24,  86 => 20,  84 => 19,  79 => 16,  68 => 14,  64 => 13,  59 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
