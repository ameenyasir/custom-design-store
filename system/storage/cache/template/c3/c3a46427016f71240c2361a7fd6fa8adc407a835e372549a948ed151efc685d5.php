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
class __TwigTemplate_d7440ee3ce2240d555f3276be46d1e12fec054caacd82cfc003b4edb5f549402 extends \Twig\Template
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-mockup-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 480
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
            // line 485
            echo ($context["entry_text_add_element"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-add-element\">";
            // line 487
            echo ($context["entry_restrict_add_element"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_add_element\" id=\"input-add-element\" class=\"form-control\">


                      ";
            // line 492
            if (($context["restrict_add_element"] ?? null)) {
                // line 493
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 495
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 496
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 500
                echo "

                        <option value=\"1\">";
                // line 502
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 503
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 507
            echo "

                    </select>
                  </div>
                </div>
 
                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 513
            echo ($context["entry_text_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-size\">";
            // line 515
            echo ($context["entry_restrict_text_size"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_size\" id=\"input-text-size\" class=\"form-control\">


                      ";
            // line 520
            if (($context["restrict_text_size"] ?? null)) {
                // line 521
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 523
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 524
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 528
                echo "

                        <option value=\"1\">";
                // line 530
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 531
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 535
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-rotation\">";
            // line 541
            echo ($context["entry_restrict_text_rotation"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_rotation\" id=\"input-text-rotation\" class=\"form-control\">


                      ";
            // line 546
            if (($context["restrict_text_rotation"] ?? null)) {
                // line 547
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 549
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 550
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 554
                echo "

                        <option value=\"1\">";
                // line 556
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 557
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 561
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 567
            echo ($context["entry_restrict_text_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_position\" id=\"input-text-position\" class=\"form-control\">


                      ";
            // line 572
            if (($context["restrict_text_position"] ?? null)) {
                // line 573
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 575
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 576
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 580
                echo "

                        <option value=\"1\">";
                // line 582
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 583
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 587
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-font\">";
            // line 593
            echo ($context["entry_restrict_text_font"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_font\" id=\"input-text-font\" class=\"form-control\">


                      ";
            // line 598
            if (($context["restrict_text_font"] ?? null)) {
                // line 599
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 601
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 602
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 606
                echo "

                        <option value=\"1\">";
                // line 608
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 609
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 613
            echo "

                    </select>
                  </div>
                </div>

                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 619
            echo ($context["entry_image_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-upload\">";
            // line 621
            echo ($context["entry_restrict_image_upload"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_upload\" id=\"input-image-upload\" class=\"form-control\">


                      ";
            // line 626
            if (($context["restrict_image_upload"] ?? null)) {
                // line 627
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 629
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 630
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 634
                echo "

                        <option value=\"1\">";
                // line 636
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 637
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 641
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-rotation\">";
            // line 647
            echo ($context["entry_restrict_image_rotation"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_rotation\" id=\"input-image-rotation\" class=\"form-control\">


                      ";
            // line 652
            if (($context["restrict_image_rotation"] ?? null)) {
                // line 653
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 655
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 656
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 660
                echo "

                        <option value=\"1\">";
                // line 662
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 663
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 667
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 673
            echo ($context["entry_restrict_image_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_position\" id=\"input-image-position\" class=\"form-control\">


                      ";
            // line 678
            if (($context["restrict_image_position"] ?? null)) {
                // line 679
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 681
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 682
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 686
                echo "

                        <option value=\"1\">";
                // line 688
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 689
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 693
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
        // line 729
        echo "
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 733
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 735
        echo ($context["manufacturer"] ?? null);
        echo "\"
                    placeholder=\"";
        // line 736
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" /> <input
                    type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 737
        echo ($context["manufacturer_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 742
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 744
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\"
                    class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 746
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 747
($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 748
            echo "                    <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 748);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 749
$context["product_category"], "name", [], "any", false, false, false, 749);
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 750
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 750);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 758
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 760
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\"
                    class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 763
($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 764
            echo "                    <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 764);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 765
$context["product_filter"], "name", [], "any", false, false, false, 765);
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 766
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 766);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 769
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 773
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 775
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 776
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 777
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 777), ($context["product_store"] ?? null))) {
                // line 778
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 778);
                echo "\" checked=\"checked\" />
                        ";
                // line 779
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 779);
                echo "
                        ";
            } else {
                // line 781
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 781);
                echo "\" />
                        ";
                // line 782
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 782);
                echo "
                        ";
            }
            // line 783
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 786
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 791
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 793
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\"
                    class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 796
($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 797
            echo "                    <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 797);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 798
$context["product_download"], "name", [], "any", false, false, false, 798);
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 799
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 799);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 802
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 807
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 809
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\"
                    class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 812
($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 813
            echo "                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 813);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 814
$context["product_related"], "name", [], "any", false, false, false, 814);
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 815
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 815);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 818
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
        // line 827
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 828
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 834
        $context["attribute_row"] = 0;
        // line 835
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 836
            echo "                    <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                      <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                          name=\"product_attribute[";
            // line 838
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 838);
            echo "\"
                          placeholder=\"";
            // line 839
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /> <input type=\"hidden\"
                          name=\"product_attribute[";
            // line 840
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                          value=\"";
            // line 841
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 841);
            echo "\" /></td>
                      <td class=\"text-left\">";
            // line 842
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 843
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 844
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 844);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 844);
                echo ".png\"
                              title=\"";
                // line 845
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 845);
                echo "\" /></span> <textarea
                            name=\"product_attribute[";
                // line 846
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 846);
                echo "][text]\"
                            rows=\"5\" placeholder=\"";
                // line 847
                echo ($context["entry_text"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 848
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 848)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 848)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 848)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 848)] ?? null) : null), "text", [], "any", false, false, false, 848)) : (""));
                echo "</textarea>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 851
            echo "                      </td>
                      <td class=\"text-right\"><button type=\"button\"
                          onclick=\"\$('#attribute-row";
            // line 853
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 854
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 857
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 858
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 859
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 865
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
        // line 876
        $context["option_row"] = 0;
        // line 877
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 878
            echo "                    <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\"
                          onclick=\"\$('a[href=\\'#tab-option";
            // line 879
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i>
                        ";
            // line 880
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 880);
            echo "</a></li>
                    ";
            // line 881
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 882
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 884
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\"
                        class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 890
        $context["option_row"] = 0;
        // line 891
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 892
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 893
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 894
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                        value=\"";
            // line 895
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 895);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 896
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 896);
            echo "\" /> <input
                        type=\"hidden\" name=\"product_option[";
            // line 897
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                        value=\"";
            // line 898
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 898);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 899
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 899);
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 901
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            // line 902
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 904
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\"
                            class=\"form-control\">


                            ";
            // line 908
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 908)) {
                // line 909
                echo "

                            <option value=\"1\" selected=\"selected\">";
                // line 911
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\">";
                // line 912
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            } else {
                // line 916
                echo "

                            <option value=\"1\">";
                // line 918
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 919
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            }
            // line 923
            echo "

                          </select>
                        </div>
                      </div>
                      ";
            // line 928
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 928) == "text")) {
                // line 929
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 930
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 931
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 933
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 934
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 934);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 935
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 939
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 939) == "textarea")) {
                // line 940
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 941
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 942
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 944
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\"
                            placeholder=\"";
                // line 945
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 946
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 946);
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 950
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 950) == "file")) {
                // line 951
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 952
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 953
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 955
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 956
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 956);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 957
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 961
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 961) == "date")) {
                // line 962
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 963
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 964
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 967
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 968
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 968);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                // line 969
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
            // line 977
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 977) == "time")) {
                // line 978
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 979
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 980
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 983
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 984
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 984);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"HH:mm\" id=\"input-value";
                // line 985
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
            // line 993
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 993) == "datetime")) {
                // line 994
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 995
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 996
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 999
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 1000
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1000);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                // line 1001
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
            // line 1009
            echo "                      ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1009) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1009) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1009) == "checkbox")) || (twig_get_attribute($this->env, $this->source,             // line 1010
$context["product_option"], "type", [], "any", false, false, false, 1010) == "image"))) {
                // line 1011
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 1012
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 1015
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1016
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 1017
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1018
                echo ($context["entry_price"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1019
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1020
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>

                            ";
                // line 1026
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1026));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 1027
                    echo "                            <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1029
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                  class=\"form-control\">


                                  ";
                    // line 1033
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1033)] ?? null) : null)) {
                        // line 1034
                        echo "
                                  ";
                        // line 1035
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1035)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1036
                            echo "
                                  ";
                            // line 1037
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1037) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1037))) {
                                // line 1038
                                echo "

                                  <option value=\"";
                                // line 1040
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1040);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source,                                 // line 1041
$context["option_value"], "name", [], "any", false, false, false, 1041);
                                echo "</option>


                                  ";
                            } else {
                                // line 1045
                                echo "

                                  <option value=\"";
                                // line 1047
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1047);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1047);
                                echo "</option>


                                  ";
                            }
                            // line 1051
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1052
                        echo "                                  ";
                    }
                    // line 1053
                    echo "

                                </select> <input type=\"hidden\"
                                  name=\"product_option[";
                    // line 1056
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                  value=\"";
                    // line 1057
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1057);
                    echo "\" /></td>
                              <td class=\"text-right\"><input type=\"text\"
                                  name=\"product_option[";
                    // line 1059
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                  value=\"";
                    // line 1060
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1060);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1063
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                  class=\"form-control\">


                                  ";
                    // line 1067
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1067)) {
                        // line 1068
                        echo "

                                  <option value=\"1\" selected=\"selected\">";
                        // line 1070
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\">";
                        // line 1071
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    } else {
                        // line 1075
                        echo "

                                  <option value=\"1\">";
                        // line 1077
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\" selected=\"selected\">";
                        // line 1078
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    }
                    // line 1082
                    echo "

                                </select></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1086
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1090
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1090) == "+")) {
                        // line 1091
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1097
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1103
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1103) == "-")) {
                        // line 1104
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1110
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1116
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1119
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                  value=\"";
                    // line 1120
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1120);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1123
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1127
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1127) == "+")) {
                        // line 1128
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1134
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1140
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1140) == "-")) {
                        // line 1141
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1147
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1153
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1156
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                  value=\"";
                    // line 1157
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1157);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1160
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1164
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1164) == "+")) {
                        // line 1165
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1171
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1177
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1177) == "-")) {
                        // line 1178
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1184
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1190
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1193
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                  value=\"";
                    // line 1194
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1194);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><button type=\"button\"
                                  onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 1197
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                  data-toggle=\"tooltip\" title=\"";
                    // line 1198
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i
                                    class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
                    // line 1201
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 1202
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1203
                echo "                          </tbody>

                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 1208
                echo ($context["option_row"] ?? null);
                echo "');\"
                                  data-toggle=\"tooltip\" title=\"";
                // line 1209
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 1215
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                        ";
                // line 1218
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1218)] ?? null) : null)) {
                    // line 1219
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1219)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1220
                        echo "

                        <option value=\"";
                        // line 1222
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1222);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1222);
                        echo "</option>


                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1226
                    echo "                        ";
                }
                // line 1227
                echo "

                      </select>
                      ";
            }
            // line 1231
            echo "                    </div>
                    ";
            // line 1232
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1233
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1234
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
        // line 1243
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1244
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1250
        $context["recurring_row"] = 0;
        // line 1251
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1252
            echo "                    <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1253
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                          class=\"form-control\">


                          ";
            // line 1257
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1258
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1258) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 1258))) {
                    // line 1259
                    echo "

                          <option value=\"";
                    // line 1261
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1261);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1261);
                    echo "</option>


                          ";
                } else {
                    // line 1265
                    echo "

                          <option value=\"";
                    // line 1267
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1267);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1267);
                    echo "</option>


                          ";
                }
                // line 1271
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1272
            echo "

                        </select></td>
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1275
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1280
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1280) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 1280))) {
                    // line 1281
                    echo "

                          <option value=\"";
                    // line 1283
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1283);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1284
$context["customer_group"], "name", [], "any", false, false, false, 1284);
                    echo "</option>


                          ";
                } else {
                    // line 1288
                    echo "

                          <option value=\"";
                    // line 1290
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1290);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1290);
                    echo "</option>


                          ";
                }
                // line 1294
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1295
            echo "

                        </select></td>
                      <td class=\"text-left\"><button type=\"button\"
                          onclick=\"\$('#recurring-row";
            // line 1299
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1300
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1303
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1304
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1305
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1311
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
        // line 1323
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1324
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1325
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1326
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1327
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1328
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1334
        $context["discount_row"] = 0;
        // line 1335
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1336
            echo "                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_discount[";
            // line 1337
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">
                          ";
            // line 1339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1340
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1340) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1340))) {
                    // line 1341
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1341);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1342
$context["customer_group"], "name", [], "any", false, false, false, 1342);
                    echo "</option>
                          ";
                } else {
                    // line 1344
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1344);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1344);
                    echo "</option>
                          ";
                }
                // line 1346
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1347
            echo "                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1348
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                          value=\"";
            // line 1349
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1349);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1351
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1352
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1352);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1354
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1355
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1355);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 1359
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1360
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1360);
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
            // line 1368
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1369
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1369);
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
            // line 1376
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1377
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1380
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1381
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1382
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1388
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
        // line 1400
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1401
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1402
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1403
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1404
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1410
        $context["special_row"] = 0;
        // line 1411
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1412
            echo "                    <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_special[";
            // line 1413
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1417
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1418
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1418) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1418))) {
                    // line 1419
                    echo "

                          <option value=\"";
                    // line 1421
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1421);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1422
$context["customer_group"], "name", [], "any", false, false, false, 1422);
                    echo "</option>


                          ";
                } else {
                    // line 1426
                    echo "

                          <option value=\"";
                    // line 1428
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1428);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1428);
                    echo "</option>


                          ";
                }
                // line 1432
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1433
            echo "

                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1436
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1437
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1437);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1439
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1440
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1440);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 1444
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1445
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1445);
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
            // line 1453
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1454
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1454);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1460
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1461
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1464
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1465
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1466
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1472
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
        // line 1484
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img
                            src=\"";
        // line 1490
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a> <input
                          type=\"hidden\" name=\"image\" value=\"";
        // line 1491
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
        // line 1500
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1501
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1507
        $context["image_row"] = 0;
        // line 1508
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1509
            echo "                    <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1510
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\"
                          class=\"img-thumbnail\"><img src=\"";
            // line 1511
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1511);
            echo "\" alt=\"\" title=\"\"
                            data-placeholder=\"";
            // line 1512
            echo ($context["placeholder"] ?? null);
            echo "\" /></a> <input type=\"hidden\"
                          name=\"product_image[";
            // line 1513
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1513);
            echo "\"
                          id=\"input-image";
            // line 1514
            echo ($context["image_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1515
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                          value=\"";
            // line 1516
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1516);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1518
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1519
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1522
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1523
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1524
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1530
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
        // line 1540
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1542
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
        // line 1550
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1551
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1556
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1557
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1558
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1558);
            echo "</td>
                      <td class=\"text-right\"><input type=\"text\"
                          name=\"product_reward[";
            // line 1560
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1560);
            echo "][points]\"
                          value=\"";
            // line 1561
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1561)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1561)] ?? null) : null), "points", [], "any", false, false, false, 1561)) : (""));
            echo "\"
                          class=\"form-control\" /></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1565
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1571
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1576
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1577
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1581
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1582
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1583
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1583);
            echo "</td>
                      <td class=\"text-left\">";
            // line 1584
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1585
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 1586
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1586);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1586);
                echo ".png\"
                              title=\"";
                // line 1587
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1587);
                echo "\" /></span> <input type=\"text\"
                            name=\"product_seo_url[";
                // line 1588
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1588);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1588);
                echo "]\"
                            value=\"";
                // line 1589
                if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1589)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1589)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product_seo_url"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1589)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1589)] ?? null) : null);
                }
                echo "\"
                            placeholder=\"";
                // line 1590
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                        ";
                // line 1592
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_keyword"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1592)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1592)] ?? null) : null)) {
                    // line 1593
                    echo "                        <div class=\"text-danger\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_keyword"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1593)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1593)] ?? null) : null);
                    echo "</div>
                        ";
                }
                // line 1595
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1596
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1599
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
        // line 1609
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1610
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1614
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1615
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1616
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1616);
            echo "</td>
                      <td class=\"text-left\"><select name=\"product_layout[";
            // line 1617
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1617);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>


                          ";
            // line 1621
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1622
                echo "                          ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1622)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["product_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1622)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1622)))) {
                    // line 1623
                    echo "

                          <option value=\"";
                    // line 1625
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1625);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1625);
                    echo "</option>


                          ";
                } else {
                    // line 1629
                    echo "

                          <option value=\"";
                    // line 1631
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1631);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1631);
                    echo "</option>


                          ";
                }
                // line 1635
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1636
            echo "

                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1641
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
        // line 1664
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
json.unshift({
manufacturer_id: 0,
name: '";
        // line 1669
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
        // line 1691
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
        // line 1720
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
        // line 1749
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
        // line 1778
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
        // line 1804
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
html = '<tr id=\"attribute-row' + attribute_row + '\">';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1808
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
html += '  <td class=\"text-left\">';
";
        // line 1810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1811
            echo "html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1811);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1811);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1811);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1811);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1813
        echo "html += '  </td>';
html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1814
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
        // line 1828
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
        // line 1853
        echo ($context["option_row"] ?? null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1858
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
        // line 1881
        echo ($context["entry_required"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
html += '\t      <option value=\"1\">";
        // line 1883
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '\t      <option value=\"0\">";
        // line 1884
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '\t  </select></div>';
html += '\t</div>';

if (item['type'] == 'text') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1890
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1891
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'textarea') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1897
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1898
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
html += '\t</div>';
}

if (item['type'] == 'file') {
html += '\t<div class=\"form-group\" style=\"display: none;\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1904
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1905
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'date') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1911
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1912
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'time') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1918
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1919
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'datetime') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1925
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1926
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
        // line 1935
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1936
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
html += '        <td class=\"text-left\">";
        // line 1937
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1938
        echo ($context["entry_price"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1939
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1940
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
        // line 1949
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
        // line 1977
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 1982
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 1987
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
        // line 1997
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue(option_row) {
html = '<tr id=\"option-value-row' + option_value_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
html += \$('#option-values' + option_row).html();
html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2004
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
html += '    <option value=\"1\">";
        // line 2006
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '    <option value=\"0\">";
        // line 2007
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '  </select></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 2013
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 2018
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 2023
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 2024
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
        // line 2035
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
html = '<tr id=\"discount-row' + discount_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2040
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2041
            echo "html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2041);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2041), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2043
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2044
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2045
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2046
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2047
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2048
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2049
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
        // line 2063
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
html = '<tr id=\"special-row' + special_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2068
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2069
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2069);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2069), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2071
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2072
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2073
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2074
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2075
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2076
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#special tbody').append(html);

\$('.date').datetimepicker({
language: '";
        // line 2082
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

special_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 2091
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
html = '<tr id=\"image-row' + image_row + '\">';
html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2095
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2096
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2097
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#images tbody').append(html);

image_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 2107
        echo ($context["recurring_row"] ?? null);
        echo ";

function addRecurring() {
html = '<tr id=\"recurring-row' + recurring_row + '\">';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
";
        // line 2113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2114
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2114);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2114);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2116
        echo "html += '    </select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
";
        // line 2120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2121
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2121);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2121);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2123
        echo "html += '    <select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2126
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
        // line 2138
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 2143
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 2148
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
        // line 2158
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
        return array (  4454 => 2158,  4441 => 2148,  4433 => 2143,  4425 => 2138,  4410 => 2126,  4405 => 2123,  4394 => 2121,  4390 => 2120,  4384 => 2116,  4373 => 2114,  4369 => 2113,  4360 => 2107,  4347 => 2097,  4343 => 2096,  4337 => 2095,  4330 => 2091,  4318 => 2082,  4309 => 2076,  4305 => 2075,  4301 => 2074,  4297 => 2073,  4293 => 2072,  4290 => 2071,  4279 => 2069,  4275 => 2068,  4267 => 2063,  4250 => 2049,  4246 => 2048,  4242 => 2047,  4238 => 2046,  4234 => 2045,  4230 => 2044,  4227 => 2043,  4216 => 2041,  4212 => 2040,  4204 => 2035,  4190 => 2024,  4186 => 2023,  4178 => 2018,  4170 => 2013,  4161 => 2007,  4157 => 2006,  4152 => 2004,  4142 => 1997,  4129 => 1987,  4121 => 1982,  4113 => 1977,  4082 => 1949,  4070 => 1940,  4066 => 1939,  4062 => 1938,  4058 => 1937,  4054 => 1936,  4050 => 1935,  4038 => 1926,  4034 => 1925,  4025 => 1919,  4021 => 1918,  4012 => 1912,  4008 => 1911,  3999 => 1905,  3995 => 1904,  3986 => 1898,  3982 => 1897,  3973 => 1891,  3969 => 1890,  3960 => 1884,  3956 => 1883,  3951 => 1881,  3925 => 1858,  3917 => 1853,  3889 => 1828,  3872 => 1814,  3869 => 1813,  3852 => 1811,  3848 => 1810,  3843 => 1808,  3836 => 1804,  3807 => 1778,  3775 => 1749,  3743 => 1720,  3711 => 1691,  3686 => 1669,  3678 => 1664,  3653 => 1641,  3643 => 1636,  3637 => 1635,  3628 => 1631,  3624 => 1629,  3615 => 1625,  3611 => 1623,  3608 => 1622,  3604 => 1621,  3597 => 1617,  3593 => 1616,  3590 => 1615,  3586 => 1614,  3579 => 1610,  3575 => 1609,  3563 => 1599,  3555 => 1596,  3549 => 1595,  3543 => 1593,  3541 => 1592,  3536 => 1590,  3530 => 1589,  3524 => 1588,  3520 => 1587,  3514 => 1586,  3511 => 1585,  3507 => 1584,  3503 => 1583,  3500 => 1582,  3496 => 1581,  3489 => 1577,  3485 => 1576,  3477 => 1571,  3469 => 1565,  3459 => 1561,  3455 => 1560,  3450 => 1558,  3447 => 1557,  3443 => 1556,  3435 => 1551,  3431 => 1550,  3418 => 1542,  3411 => 1540,  3398 => 1530,  3390 => 1524,  3384 => 1523,  3382 => 1522,  3376 => 1519,  3372 => 1518,  3365 => 1516,  3361 => 1515,  3357 => 1514,  3351 => 1513,  3347 => 1512,  3343 => 1511,  3339 => 1510,  3334 => 1509,  3329 => 1508,  3327 => 1507,  3318 => 1501,  3314 => 1500,  3302 => 1491,  3296 => 1490,  3287 => 1484,  3272 => 1472,  3264 => 1466,  3258 => 1465,  3256 => 1464,  3250 => 1461,  3246 => 1460,  3235 => 1454,  3231 => 1453,  3218 => 1445,  3214 => 1444,  3205 => 1440,  3201 => 1439,  3194 => 1437,  3190 => 1436,  3185 => 1433,  3179 => 1432,  3170 => 1428,  3166 => 1426,  3159 => 1422,  3156 => 1421,  3152 => 1419,  3149 => 1418,  3145 => 1417,  3138 => 1413,  3133 => 1412,  3128 => 1411,  3126 => 1410,  3117 => 1404,  3113 => 1403,  3109 => 1402,  3105 => 1401,  3101 => 1400,  3086 => 1388,  3078 => 1382,  3072 => 1381,  3070 => 1380,  3064 => 1377,  3060 => 1376,  3048 => 1369,  3044 => 1368,  3031 => 1360,  3027 => 1359,  3018 => 1355,  3014 => 1354,  3007 => 1352,  3003 => 1351,  2996 => 1349,  2992 => 1348,  2989 => 1347,  2983 => 1346,  2975 => 1344,  2970 => 1342,  2966 => 1341,  2963 => 1340,  2959 => 1339,  2954 => 1337,  2949 => 1336,  2944 => 1335,  2942 => 1334,  2933 => 1328,  2929 => 1327,  2925 => 1326,  2921 => 1325,  2917 => 1324,  2913 => 1323,  2898 => 1311,  2890 => 1305,  2884 => 1304,  2882 => 1303,  2876 => 1300,  2872 => 1299,  2866 => 1295,  2860 => 1294,  2851 => 1290,  2847 => 1288,  2840 => 1284,  2837 => 1283,  2833 => 1281,  2830 => 1280,  2826 => 1279,  2819 => 1275,  2814 => 1272,  2808 => 1271,  2799 => 1267,  2795 => 1265,  2786 => 1261,  2782 => 1259,  2779 => 1258,  2775 => 1257,  2768 => 1253,  2763 => 1252,  2758 => 1251,  2756 => 1250,  2747 => 1244,  2743 => 1243,  2732 => 1234,  2726 => 1233,  2724 => 1232,  2721 => 1231,  2715 => 1227,  2712 => 1226,  2700 => 1222,  2696 => 1220,  2691 => 1219,  2689 => 1218,  2683 => 1215,  2674 => 1209,  2670 => 1208,  2663 => 1203,  2657 => 1202,  2655 => 1201,  2649 => 1198,  2645 => 1197,  2637 => 1194,  2631 => 1193,  2626 => 1190,  2618 => 1184,  2610 => 1178,  2607 => 1177,  2599 => 1171,  2591 => 1165,  2589 => 1164,  2580 => 1160,  2572 => 1157,  2566 => 1156,  2561 => 1153,  2553 => 1147,  2545 => 1141,  2542 => 1140,  2534 => 1134,  2526 => 1128,  2524 => 1127,  2515 => 1123,  2507 => 1120,  2501 => 1119,  2496 => 1116,  2488 => 1110,  2480 => 1104,  2477 => 1103,  2469 => 1097,  2461 => 1091,  2459 => 1090,  2450 => 1086,  2444 => 1082,  2437 => 1078,  2433 => 1077,  2429 => 1075,  2422 => 1071,  2418 => 1070,  2414 => 1068,  2412 => 1067,  2403 => 1063,  2395 => 1060,  2389 => 1059,  2384 => 1057,  2378 => 1056,  2373 => 1053,  2370 => 1052,  2364 => 1051,  2355 => 1047,  2351 => 1045,  2344 => 1041,  2341 => 1040,  2337 => 1038,  2335 => 1037,  2332 => 1036,  2328 => 1035,  2325 => 1034,  2323 => 1033,  2314 => 1029,  2308 => 1027,  2304 => 1026,  2295 => 1020,  2291 => 1019,  2287 => 1018,  2283 => 1017,  2279 => 1016,  2275 => 1015,  2269 => 1012,  2266 => 1011,  2264 => 1010,  2262 => 1009,  2251 => 1001,  2245 => 1000,  2241 => 999,  2236 => 996,  2232 => 995,  2229 => 994,  2226 => 993,  2215 => 985,  2209 => 984,  2205 => 983,  2200 => 980,  2196 => 979,  2193 => 978,  2190 => 977,  2179 => 969,  2173 => 968,  2169 => 967,  2164 => 964,  2160 => 963,  2157 => 962,  2154 => 961,  2147 => 957,  2141 => 956,  2137 => 955,  2133 => 953,  2129 => 952,  2126 => 951,  2123 => 950,  2116 => 946,  2110 => 945,  2106 => 944,  2102 => 942,  2098 => 941,  2095 => 940,  2092 => 939,  2085 => 935,  2079 => 934,  2075 => 933,  2071 => 931,  2067 => 930,  2064 => 929,  2062 => 928,  2055 => 923,  2048 => 919,  2044 => 918,  2040 => 916,  2033 => 912,  2029 => 911,  2025 => 909,  2023 => 908,  2014 => 904,  2010 => 902,  2006 => 901,  1999 => 899,  1995 => 898,  1991 => 897,  1985 => 896,  1981 => 895,  1977 => 894,  1972 => 893,  1967 => 892,  1964 => 891,  1962 => 890,  1953 => 884,  1950 => 883,  1944 => 882,  1942 => 881,  1938 => 880,  1932 => 879,  1927 => 878,  1922 => 877,  1920 => 876,  1906 => 865,  1898 => 859,  1892 => 858,  1890 => 857,  1884 => 854,  1880 => 853,  1876 => 851,  1867 => 848,  1863 => 847,  1857 => 846,  1853 => 845,  1847 => 844,  1844 => 843,  1840 => 842,  1836 => 841,  1832 => 840,  1828 => 839,  1822 => 838,  1816 => 836,  1811 => 835,  1809 => 834,  1800 => 828,  1796 => 827,  1785 => 818,  1776 => 815,  1772 => 814,  1768 => 813,  1765 => 812,  1763 => 811,  1758 => 809,  1751 => 807,  1744 => 802,  1735 => 799,  1731 => 798,  1727 => 797,  1724 => 796,  1722 => 795,  1717 => 793,  1710 => 791,  1703 => 786,  1695 => 783,  1690 => 782,  1685 => 781,  1680 => 779,  1675 => 778,  1673 => 777,  1670 => 776,  1666 => 775,  1661 => 773,  1655 => 769,  1646 => 766,  1642 => 765,  1638 => 764,  1635 => 763,  1633 => 762,  1628 => 760,  1621 => 758,  1614 => 753,  1605 => 750,  1601 => 749,  1597 => 748,  1594 => 747,  1592 => 746,  1587 => 744,  1580 => 742,  1572 => 737,  1568 => 736,  1564 => 735,  1557 => 733,  1551 => 729,  1513 => 693,  1506 => 689,  1502 => 688,  1498 => 686,  1491 => 682,  1487 => 681,  1483 => 679,  1481 => 678,  1473 => 673,  1465 => 667,  1458 => 663,  1454 => 662,  1450 => 660,  1443 => 656,  1439 => 655,  1435 => 653,  1433 => 652,  1425 => 647,  1417 => 641,  1410 => 637,  1406 => 636,  1402 => 634,  1395 => 630,  1391 => 629,  1387 => 627,  1385 => 626,  1377 => 621,  1372 => 619,  1364 => 613,  1357 => 609,  1353 => 608,  1349 => 606,  1342 => 602,  1338 => 601,  1334 => 599,  1332 => 598,  1324 => 593,  1316 => 587,  1309 => 583,  1305 => 582,  1301 => 580,  1294 => 576,  1290 => 575,  1286 => 573,  1284 => 572,  1276 => 567,  1268 => 561,  1261 => 557,  1257 => 556,  1253 => 554,  1246 => 550,  1242 => 549,  1238 => 547,  1236 => 546,  1228 => 541,  1220 => 535,  1213 => 531,  1209 => 530,  1205 => 528,  1198 => 524,  1194 => 523,  1190 => 521,  1188 => 520,  1180 => 515,  1175 => 513,  1167 => 507,  1160 => 503,  1156 => 502,  1152 => 500,  1145 => 496,  1141 => 495,  1137 => 493,  1135 => 492,  1127 => 487,  1122 => 485,  1110 => 480,  1102 => 475,  1081 => 461,  1057 => 439,  1055 => 438,  1045 => 433,  1040 => 431,  1032 => 425,  1025 => 421,  1021 => 420,  1017 => 418,  1010 => 414,  1006 => 413,  1002 => 411,  1000 => 410,  992 => 405,  984 => 399,  978 => 398,  969 => 394,  965 => 392,  955 => 387,  951 => 385,  948 => 384,  944 => 383,  936 => 378,  926 => 373,  921 => 371,  913 => 365,  907 => 364,  898 => 360,  894 => 358,  884 => 353,  880 => 351,  877 => 350,  873 => 349,  865 => 344,  853 => 337,  844 => 333,  835 => 329,  828 => 325,  817 => 317,  813 => 316,  807 => 313,  801 => 309,  796 => 308,  793 => 307,  788 => 305,  785 => 304,  782 => 303,  777 => 302,  774 => 301,  769 => 299,  766 => 298,  764 => 297,  759 => 295,  751 => 289,  745 => 288,  736 => 284,  732 => 282,  722 => 277,  718 => 275,  715 => 274,  711 => 273,  701 => 268,  692 => 261,  685 => 257,  681 => 256,  677 => 254,  670 => 250,  666 => 249,  662 => 247,  660 => 246,  652 => 241,  642 => 236,  635 => 234,  624 => 228,  619 => 226,  611 => 220,  605 => 219,  596 => 215,  592 => 213,  583 => 209,  579 => 207,  576 => 206,  572 => 205,  566 => 202,  560 => 199,  550 => 194,  545 => 192,  535 => 187,  530 => 185,  520 => 180,  513 => 178,  502 => 172,  495 => 170,  484 => 164,  477 => 162,  466 => 156,  459 => 154,  448 => 148,  441 => 146,  430 => 140,  423 => 138,  417 => 134,  411 => 132,  409 => 131,  402 => 129,  397 => 127,  391 => 123,  378 => 118,  374 => 117,  370 => 116,  363 => 114,  359 => 113,  352 => 109,  346 => 108,  342 => 107,  337 => 105,  334 => 104,  327 => 100,  321 => 99,  317 => 98,  312 => 96,  309 => 95,  304 => 92,  298 => 90,  296 => 89,  289 => 87,  285 => 86,  281 => 85,  276 => 83,  273 => 82,  266 => 78,  262 => 77,  256 => 76,  252 => 75,  247 => 73,  244 => 72,  239 => 69,  233 => 67,  231 => 66,  225 => 65,  221 => 64,  217 => 63,  213 => 61,  209 => 60,  203 => 58,  199 => 57,  196 => 56,  188 => 54,  181 => 53,  176 => 52,  172 => 51,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  125 => 36,  119 => 35,  114 => 33,  110 => 32,  104 => 29,  98 => 26,  94 => 24,  86 => 20,  84 => 19,  79 => 16,  68 => 14,  64 => 13,  59 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
