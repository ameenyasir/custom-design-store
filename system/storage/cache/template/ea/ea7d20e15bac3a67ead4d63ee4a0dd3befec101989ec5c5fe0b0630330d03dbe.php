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
class __TwigTemplate_419d5c61163a8339f5495ebbbe069808844b47ddaefc7085f830d8d8d54a3749 extends \Twig\Template
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
                <button type=\"button\" class=\"btn btn-primary shadow-sm\" data-toggle=\"modal\" data-target=\"#productEditorModal\"
                  ";
            // line 445
            if (twig_in_filter("no_image", ($context["thumb_mockup_image"] ?? null))) {
                echo "disabled";
            }
            echo ">
                  Configure
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
            // line 462
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
            // line 476
            echo ($context["entry_mockup_upload"] ?? null);
            echo "</td>
                      <td class=\"text-right\" style=\"color:red;\">";
            // line 477
            echo ($context["entry_text_info"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-mockup-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 482
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
            // line 487
            echo ($context["entry_text_add_element"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-add-element\">";
            // line 489
            echo ($context["entry_restrict_add_element"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_add_element\" id=\"input-add-element\" class=\"form-control\">


                      ";
            // line 494
            if (($context["restrict_add_element"] ?? null)) {
                // line 495
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 497
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 498
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 502
                echo "

                        <option value=\"1\">";
                // line 504
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 505
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 509
            echo "

                    </select>
                  </div>
                </div>
 
                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 515
            echo ($context["entry_text_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-size\">";
            // line 517
            echo ($context["entry_restrict_text_size"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_size\" id=\"input-text-size\" class=\"form-control\">


                      ";
            // line 522
            if (($context["restrict_text_size"] ?? null)) {
                // line 523
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 525
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 526
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 530
                echo "

                        <option value=\"1\">";
                // line 532
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 533
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 537
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-color\">";
            // line 543
            echo ($context["entry_restrict_text_color"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_color\" id=\"input-text-color\" class=\"form-control\">


                      ";
            // line 548
            if (($context["restrict_text_color"] ?? null)) {
                // line 549
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 551
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 552
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 556
                echo "

                        <option value=\"1\">";
                // line 558
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 559
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 563
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-rotation\">";
            // line 569
            echo ($context["entry_restrict_text_rotation"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_rotation\" id=\"input-text-rotation\" class=\"form-control\">


                      ";
            // line 574
            if (($context["restrict_text_rotation"] ?? null)) {
                // line 575
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 577
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 578
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 582
                echo "

                        <option value=\"1\">";
                // line 584
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 585
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 589
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 595
            echo ($context["entry_restrict_text_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_position\" id=\"input-text-position\" class=\"form-control\">


                      ";
            // line 600
            if (($context["restrict_text_position"] ?? null)) {
                // line 601
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 603
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 604
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 608
                echo "

                        <option value=\"1\">";
                // line 610
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 611
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 615
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-font\">";
            // line 621
            echo ($context["entry_restrict_text_font"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_text_font\" id=\"input-text-font\" class=\"form-control\">


                      ";
            // line 626
            if (($context["restrict_text_font"] ?? null)) {
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

                <h1 class=\"text-center\" style=\"margin-top: 20px;\">";
            // line 647
            echo ($context["entry_image_restriction"] ?? null);
            echo "</h1>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-rotation\">";
            // line 649
            echo ($context["entry_restrict_image_rotation"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_rotation\" id=\"input-image-rotation\" class=\"form-control\">


                      ";
            // line 654
            if (($context["restrict_image_rotation"] ?? null)) {
                // line 655
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 657
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 658
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 662
                echo "

                        <option value=\"1\">";
                // line 664
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 665
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 669
            echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-position\">";
            // line 675
            echo ($context["entry_restrict_image_position"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"restrict_image_position\" id=\"input-image-position\" class=\"form-control\">


                      ";
            // line 680
            if (($context["restrict_image_position"] ?? null)) {
                // line 681
                echo "

                        <option value=\"1\" selected=\"selected\">";
                // line 683
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 684
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            } else {
                // line 688
                echo "

                        <option value=\"1\">";
                // line 690
                echo ($context["text_yes"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 691
                echo ($context["text_no"] ?? null);
                echo "</option>


                      ";
            }
            // line 695
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
        // line 731
        echo "
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 735
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 737
        echo ($context["manufacturer"] ?? null);
        echo "\"
                    placeholder=\"";
        // line 738
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" /> <input
                    type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 739
        echo ($context["manufacturer_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 744
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 746
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\"
                    class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 748
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 749
($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 750
            echo "                    <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 750);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 751
$context["product_category"], "name", [], "any", false, false, false, 751);
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 752
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 752);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 760
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 762
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\"
                    class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 765
($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 766
            echo "                    <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 766);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 767
$context["product_filter"], "name", [], "any", false, false, false, 767);
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 768
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 768);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 771
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 775
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 777
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 778
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 779
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 779), ($context["product_store"] ?? null))) {
                // line 780
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 780);
                echo "\" checked=\"checked\" />
                        ";
                // line 781
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 781);
                echo "
                        ";
            } else {
                // line 783
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 783);
                echo "\" />
                        ";
                // line 784
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 784);
                echo "
                        ";
            }
            // line 785
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 788
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 793
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 795
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\"
                    class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 798
($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 799
            echo "                    <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 799);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 800
$context["product_download"], "name", [], "any", false, false, false, 800);
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 801
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 801);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 804
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                    title=\"";
        // line 809
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 811
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\"
                    class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 813
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(        // line 814
($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 815
            echo "                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 815);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source,             // line 816
$context["product_related"], "name", [], "any", false, false, false, 816);
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 817
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 817);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 820
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
        // line 829
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 830
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 836
        $context["attribute_row"] = 0;
        // line 837
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 838
            echo "                    <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                      <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                          name=\"product_attribute[";
            // line 840
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 840);
            echo "\"
                          placeholder=\"";
            // line 841
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /> <input type=\"hidden\"
                          name=\"product_attribute[";
            // line 842
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                          value=\"";
            // line 843
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 843);
            echo "\" /></td>
                      <td class=\"text-left\">";
            // line 844
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 845
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 846
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 846);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 846);
                echo ".png\"
                              title=\"";
                // line 847
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 847);
                echo "\" /></span> <textarea
                            name=\"product_attribute[";
                // line 848
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 848);
                echo "][text]\"
                            rows=\"5\" placeholder=\"";
                // line 849
                echo ($context["entry_text"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 850
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 850)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 850)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 850)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 850)] ?? null) : null), "text", [], "any", false, false, false, 850)) : (""));
                echo "</textarea>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 853
            echo "                      </td>
                      <td class=\"text-right\"><button type=\"button\"
                          onclick=\"\$('#attribute-row";
            // line 855
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 856
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 859
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 860
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 867
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
        // line 878
        $context["option_row"] = 0;
        // line 879
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 880
            echo "                    <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\"
                          onclick=\"\$('a[href=\\'#tab-option";
            // line 881
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i>
                        ";
            // line 882
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 882);
            echo "</a></li>
                    ";
            // line 883
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 884
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 885
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 886
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\"
                        class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 892
        $context["option_row"] = 0;
        // line 893
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 894
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 895
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 896
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                        value=\"";
            // line 897
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 897);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 898
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 898);
            echo "\" /> <input
                        type=\"hidden\" name=\"product_option[";
            // line 899
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                        value=\"";
            // line 900
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 900);
            echo "\" /> <input type=\"hidden\"
                        name=\"product_option[";
            // line 901
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 901);
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 903
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            // line 904
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 906
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\"
                            class=\"form-control\">


                            ";
            // line 910
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 910)) {
                // line 911
                echo "

                            <option value=\"1\" selected=\"selected\">";
                // line 913
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\">";
                // line 914
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            } else {
                // line 918
                echo "

                            <option value=\"1\">";
                // line 920
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 921
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            }
            // line 925
            echo "

                          </select>
                        </div>
                      </div>
                      ";
            // line 930
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 930) == "text")) {
                // line 931
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 932
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 933
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 935
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 936
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 936);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 937
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 941
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 941) == "textarea")) {
                // line 942
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 943
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 944
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 946
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\"
                            placeholder=\"";
                // line 947
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\"
                            class=\"form-control\">";
                // line 948
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 948);
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 952
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 952) == "file")) {
                // line 953
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 954
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 955
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 957
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                            value=\"";
                // line 958
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 958);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                            id=\"input-value";
                // line 959
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 963
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 963) == "date")) {
                // line 964
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 965
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 966
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 969
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 970
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 970);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                // line 971
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
            // line 979
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 979) == "time")) {
                // line 980
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 981
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 982
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 985
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 986
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 986);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"HH:mm\" id=\"input-value";
                // line 987
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
            // line 995
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 995) == "datetime")) {
                // line 996
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 997
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                // line 998
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 1001
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                              value=\"";
                // line 1002
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1002);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                              data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                // line 1003
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
            // line 1011
            echo "                      ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1011) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1011) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1011) == "checkbox")) || (twig_get_attribute($this->env, $this->source,             // line 1012
$context["product_option"], "type", [], "any", false, false, false, 1012) == "image"))) {
                // line 1013
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 1014
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 1017
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1018
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 1019
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1020
                echo ($context["entry_price"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1021
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 1022
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>

                            ";
                // line 1028
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1028));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 1029
                    echo "                            <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1031
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                  class=\"form-control\">


                                  ";
                    // line 1035
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1035)] ?? null) : null)) {
                        // line 1036
                        echo "
                                  ";
                        // line 1037
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1037)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1038
                            echo "
                                  ";
                            // line 1039
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1039) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1039))) {
                                // line 1040
                                echo "

                                  <option value=\"";
                                // line 1042
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1042);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source,                                 // line 1043
$context["option_value"], "name", [], "any", false, false, false, 1043);
                                echo "</option>


                                  ";
                            } else {
                                // line 1047
                                echo "

                                  <option value=\"";
                                // line 1049
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1049);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1049);
                                echo "</option>


                                  ";
                            }
                            // line 1053
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1054
                        echo "                                  ";
                    }
                    // line 1055
                    echo "

                                </select> <input type=\"hidden\"
                                  name=\"product_option[";
                    // line 1058
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                  value=\"";
                    // line 1059
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1059);
                    echo "\" /></td>
                              <td class=\"text-right\"><input type=\"text\"
                                  name=\"product_option[";
                    // line 1061
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                  value=\"";
                    // line 1062
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1062);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-left\"><select
                                  name=\"product_option[";
                    // line 1065
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                  class=\"form-control\">


                                  ";
                    // line 1069
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1069)) {
                        // line 1070
                        echo "

                                  <option value=\"1\" selected=\"selected\">";
                        // line 1072
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\">";
                        // line 1073
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    } else {
                        // line 1077
                        echo "

                                  <option value=\"1\">";
                        // line 1079
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                  <option value=\"0\" selected=\"selected\">";
                        // line 1080
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                  ";
                    }
                    // line 1084
                    echo "

                                </select></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1088
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1092
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1092) == "+")) {
                        // line 1093
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1099
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1105
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1105) == "-")) {
                        // line 1106
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1112
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1118
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1121
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                  value=\"";
                    // line 1122
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1122);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1125
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1129
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1129) == "+")) {
                        // line 1130
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1136
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1142
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1142) == "-")) {
                        // line 1143
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1149
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1155
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1158
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                  value=\"";
                    // line 1159
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 1159);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><select
                                  name=\"product_option[";
                    // line 1162
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                  class=\"form-control\">


                                  ";
                    // line 1166
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1166) == "+")) {
                        // line 1167
                        echo "

                                  <option value=\"+\" selected=\"selected\">+</option>


                                  ";
                    } else {
                        // line 1173
                        echo "

                                  <option value=\"+\">+</option>


                                  ";
                    }
                    // line 1179
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 1179) == "-")) {
                        // line 1180
                        echo "

                                  <option value=\"-\" selected=\"selected\">-</option>


                                  ";
                    } else {
                        // line 1186
                        echo "

                                  <option value=\"-\">-</option>


                                  ";
                    }
                    // line 1192
                    echo "

                                </select> <input type=\"text\"
                                  name=\"product_option[";
                    // line 1195
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                  value=\"";
                    // line 1196
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 1196);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                  class=\"form-control\" /></td>
                              <td class=\"text-right\"><button type=\"button\"
                                  onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 1199
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                  data-toggle=\"tooltip\" title=\"";
                    // line 1200
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i
                                    class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
                    // line 1203
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 1204
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1205
                echo "                          </tbody>

                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 1210
                echo ($context["option_row"] ?? null);
                echo "');\"
                                  data-toggle=\"tooltip\" title=\"";
                // line 1211
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 1217
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                        ";
                // line 1220
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1220)] ?? null) : null)) {
                    // line 1221
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1221)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1222
                        echo "

                        <option value=\"";
                        // line 1224
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1224);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1224);
                        echo "</option>


                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1228
                    echo "                        ";
                }
                // line 1229
                echo "

                      </select>
                      ";
            }
            // line 1233
            echo "                    </div>
                    ";
            // line 1234
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1235
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1236
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
        // line 1245
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1246
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1252
        $context["recurring_row"] = 0;
        // line 1253
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1254
            echo "                    <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1255
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                          class=\"form-control\">


                          ";
            // line 1259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1260
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1260) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 1260))) {
                    // line 1261
                    echo "

                          <option value=\"";
                    // line 1263
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1263);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1263);
                    echo "</option>


                          ";
                } else {
                    // line 1267
                    echo "

                          <option value=\"";
                    // line 1269
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1269);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1269);
                    echo "</option>


                          ";
                }
                // line 1273
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1274
            echo "

                        </select></td>
                      <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1277
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1282
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1282) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 1282))) {
                    // line 1283
                    echo "

                          <option value=\"";
                    // line 1285
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1285);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1286
$context["customer_group"], "name", [], "any", false, false, false, 1286);
                    echo "</option>


                          ";
                } else {
                    // line 1290
                    echo "

                          <option value=\"";
                    // line 1292
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1292);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1292);
                    echo "</option>


                          ";
                }
                // line 1296
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1297
            echo "

                        </select></td>
                      <td class=\"text-left\"><button type=\"button\"
                          onclick=\"\$('#recurring-row";
            // line 1301
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1302
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1305
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1306
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1307
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1313
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
        // line 1325
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1326
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1327
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1328
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1329
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1330
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1336
        $context["discount_row"] = 0;
        // line 1337
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1338
            echo "                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_discount[";
            // line 1339
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">
                          ";
            // line 1341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1342
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1342) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1342))) {
                    // line 1343
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1343);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1344
$context["customer_group"], "name", [], "any", false, false, false, 1344);
                    echo "</option>
                          ";
                } else {
                    // line 1346
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1346);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1346);
                    echo "</option>
                          ";
                }
                // line 1348
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1349
            echo "                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1350
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                          value=\"";
            // line 1351
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1351);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1353
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1354
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1354);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1356
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1357
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1357);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_discount[";
            // line 1361
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1362
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1362);
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
            // line 1370
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1371
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1371);
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
            // line 1378
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                          title=\"";
            // line 1379
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                      </td>
                    </tr>
                    ";
            // line 1382
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1383
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1384
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1390
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
        // line 1402
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1403
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1404
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1405
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1406
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1412
        $context["special_row"] = 0;
        // line 1413
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1414
            echo "                    <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><select name=\"product_special[";
            // line 1415
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                          class=\"form-control\">


                          ";
            // line 1419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1420
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1420) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1420))) {
                    // line 1421
                    echo "

                          <option value=\"";
                    // line 1423
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1423);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 1424
$context["customer_group"], "name", [], "any", false, false, false, 1424);
                    echo "</option>


                          ";
                } else {
                    // line 1428
                    echo "

                          <option value=\"";
                    // line 1430
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1430);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1430);
                    echo "</option>


                          ";
                }
                // line 1434
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1435
            echo "

                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1438
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                          value=\"";
            // line 1439
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1439);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1441
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                          value=\"";
            // line 1442
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1442);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                      </td>
                      <td class=\"text-left\" style=\"width: 20%;\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"product_special[";
            // line 1446
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                            value=\"";
            // line 1447
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1447);
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
            // line 1455
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                            value=\"";
            // line 1456
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1456);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1462
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1463
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1466
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1467
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1468
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1474
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
        // line 1486
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img
                            src=\"";
        // line 1492
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a> <input
                          type=\"hidden\" name=\"image\" value=\"";
        // line 1493
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
        // line 1502
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1503
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1509
        $context["image_row"] = 0;
        // line 1510
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1511
            echo "                    <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1512
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\"
                          class=\"img-thumbnail\"><img src=\"";
            // line 1513
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1513);
            echo "\" alt=\"\" title=\"\"
                            data-placeholder=\"";
            // line 1514
            echo ($context["placeholder"] ?? null);
            echo "\" /></a> <input type=\"hidden\"
                          name=\"product_image[";
            // line 1515
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1515);
            echo "\"
                          id=\"input-image";
            // line 1516
            echo ($context["image_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1517
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                          value=\"";
            // line 1518
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1518);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                          class=\"form-control\" /></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1520
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                          data-toggle=\"tooltip\" title=\"";
            // line 1521
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                            class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 1524
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1525
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1526
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                          title=\"";
        // line 1532
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
        // line 1542
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1544
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
        // line 1552
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1553
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1559
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1560
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1560);
            echo "</td>
                      <td class=\"text-right\"><input type=\"text\"
                          name=\"product_reward[";
            // line 1562
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1562);
            echo "][points]\"
                          value=\"";
            // line 1563
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1563)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1563)] ?? null) : null), "points", [], "any", false, false, false, 1563)) : (""));
            echo "\"
                          class=\"form-control\" /></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1567
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1573
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1578
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1579
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1583
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1584
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1585
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1585);
            echo "</td>
                      <td class=\"text-left\">";
            // line 1586
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1587
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img
                              src=\"language/";
                // line 1588
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1588);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1588);
                echo ".png\"
                              title=\"";
                // line 1589
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1589);
                echo "\" /></span> <input type=\"text\"
                            name=\"product_seo_url[";
                // line 1590
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1590);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1590);
                echo "]\"
                            value=\"";
                // line 1591
                if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1591)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product_seo_url"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1591)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591)] ?? null) : null);
                }
                echo "\"
                            placeholder=\"";
                // line 1592
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                        ";
                // line 1594
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_keyword"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1594)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1594)] ?? null) : null)) {
                    // line 1595
                    echo "                        <div class=\"text-danger\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_keyword"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1595)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1595)] ?? null) : null);
                    echo "</div>
                        ";
                }
                // line 1597
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1598
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1601
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
        // line 1611
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1612
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1616
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1617
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1618
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1618);
            echo "</td>
                      <td class=\"text-left\"><select name=\"product_layout[";
            // line 1619
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1619);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>


                          ";
            // line 1623
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1624
                echo "                          ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1624)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["product_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1624)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1624)))) {
                    // line 1625
                    echo "

                          <option value=\"";
                    // line 1627
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1627);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1627);
                    echo "</option>


                          ";
                } else {
                    // line 1631
                    echo "

                          <option value=\"";
                    // line 1633
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1633);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1633);
                    echo "</option>


                          ";
                }
                // line 1637
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1638
            echo "

                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1643
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
        // line 1666
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function(json) {
json.unshift({
manufacturer_id: 0,
name: '";
        // line 1671
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
        // line 1693
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
        // line 1722
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
        // line 1751
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
        // line 1780
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
        // line 1806
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
html = '<tr id=\"attribute-row' + attribute_row + '\">';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1810
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
html += '  <td class=\"text-left\">';
";
        // line 1812
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1813
            echo "html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1813);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1813);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1813);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1813);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1815
        echo "html += '  </td>';
html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1816
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
        // line 1830
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
        // line 1855
        echo ($context["option_row"] ?? null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
'source': function(request, response) {
\$.ajax({
url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1860
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
        // line 1883
        echo ($context["entry_required"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
html += '\t      <option value=\"1\">";
        // line 1885
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '\t      <option value=\"0\">";
        // line 1886
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '\t  </select></div>';
html += '\t</div>';

if (item['type'] == 'text') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1892
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1893
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'textarea') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1899
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1900
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
html += '\t</div>';
}

if (item['type'] == 'file') {
html += '\t<div class=\"form-group\" style=\"display: none;\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1906
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1907
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
html += '\t</div>';
}

if (item['type'] == 'date') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1913
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1914
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'time') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1920
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1921
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
html += '\t</div>';
}

if (item['type'] == 'datetime') {
html += '\t<div class=\"form-group\">';
html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1927
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1928
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
        // line 1937
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1938
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
html += '        <td class=\"text-left\">";
        // line 1939
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1940
        echo ($context["entry_price"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1941
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
html += '        <td class=\"text-right\">";
        // line 1942
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
        // line 1951
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
        // line 1979
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 1984
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 1989
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
        // line 1999
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue(option_row) {
html = '<tr id=\"option-value-row' + option_value_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
html += \$('#option-values' + option_row).html();
html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2006
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
html += '    <option value=\"1\">";
        // line 2008
        echo ($context["text_yes"] ?? null);
        echo "</option>';
html += '    <option value=\"0\">";
        // line 2009
        echo ($context["text_no"] ?? null);
        echo "</option>';
html += '  </select></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 2015
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 2020
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
html += '    <option value=\"+\">+</option>';
html += '    <option value=\"-\">-</option>';
html += '  </select>';
html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 2025
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 2026
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
        // line 2037
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
html = '<tr id=\"discount-row' + discount_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2042
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2043
            echo "html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2043);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2043), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2045
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2046
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2047
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2048
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2049
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2050
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2051
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
        // line 2065
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
html = '<tr id=\"special-row' + special_row + '\">';
html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
";
        // line 2070
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2071
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2071);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2071), "js");
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2073
        echo "html += '  </select></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2074
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2075
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2076
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2077
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2078
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#special tbody').append(html);

\$('.date').datetimepicker({
language: '";
        // line 2084
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

special_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 2093
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
html = '<tr id=\"image-row' + image_row + '\">';
html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2097
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2098
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2099
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#images tbody').append(html);

image_row++;
}

//--></script>
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 2109
        echo ($context["recurring_row"] ?? null);
        echo ";

function addRecurring() {
html = '<tr id=\"recurring-row' + recurring_row + '\">';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
";
        // line 2115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2116
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2116);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2116);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2118
        echo "html += '    </select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
";
        // line 2122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2123
            echo "html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2123);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2123);
            echo "</option>';
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2125
        echo "html += '    <select>';
html += '  </td>';
html += '  <td class=\"left\">';
html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2128
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
        // line 2140
        echo ($context["datepicker"] ?? null);
        echo "',
pickTime: false
});

\$('.time').datetimepicker({
language: '";
        // line 2145
        echo ($context["datepicker"] ?? null);
        echo "',
pickDate: false
});

\$('.datetime').datetimepicker({
language: '";
        // line 2150
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
        // line 2160
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
        return array (  4464 => 2160,  4451 => 2150,  4443 => 2145,  4435 => 2140,  4420 => 2128,  4415 => 2125,  4404 => 2123,  4400 => 2122,  4394 => 2118,  4383 => 2116,  4379 => 2115,  4370 => 2109,  4357 => 2099,  4353 => 2098,  4347 => 2097,  4340 => 2093,  4328 => 2084,  4319 => 2078,  4315 => 2077,  4311 => 2076,  4307 => 2075,  4303 => 2074,  4300 => 2073,  4289 => 2071,  4285 => 2070,  4277 => 2065,  4260 => 2051,  4256 => 2050,  4252 => 2049,  4248 => 2048,  4244 => 2047,  4240 => 2046,  4237 => 2045,  4226 => 2043,  4222 => 2042,  4214 => 2037,  4200 => 2026,  4196 => 2025,  4188 => 2020,  4180 => 2015,  4171 => 2009,  4167 => 2008,  4162 => 2006,  4152 => 1999,  4139 => 1989,  4131 => 1984,  4123 => 1979,  4092 => 1951,  4080 => 1942,  4076 => 1941,  4072 => 1940,  4068 => 1939,  4064 => 1938,  4060 => 1937,  4048 => 1928,  4044 => 1927,  4035 => 1921,  4031 => 1920,  4022 => 1914,  4018 => 1913,  4009 => 1907,  4005 => 1906,  3996 => 1900,  3992 => 1899,  3983 => 1893,  3979 => 1892,  3970 => 1886,  3966 => 1885,  3961 => 1883,  3935 => 1860,  3927 => 1855,  3899 => 1830,  3882 => 1816,  3879 => 1815,  3862 => 1813,  3858 => 1812,  3853 => 1810,  3846 => 1806,  3817 => 1780,  3785 => 1751,  3753 => 1722,  3721 => 1693,  3696 => 1671,  3688 => 1666,  3663 => 1643,  3653 => 1638,  3647 => 1637,  3638 => 1633,  3634 => 1631,  3625 => 1627,  3621 => 1625,  3618 => 1624,  3614 => 1623,  3607 => 1619,  3603 => 1618,  3600 => 1617,  3596 => 1616,  3589 => 1612,  3585 => 1611,  3573 => 1601,  3565 => 1598,  3559 => 1597,  3553 => 1595,  3551 => 1594,  3546 => 1592,  3540 => 1591,  3534 => 1590,  3530 => 1589,  3524 => 1588,  3521 => 1587,  3517 => 1586,  3513 => 1585,  3510 => 1584,  3506 => 1583,  3499 => 1579,  3495 => 1578,  3487 => 1573,  3479 => 1567,  3469 => 1563,  3465 => 1562,  3460 => 1560,  3457 => 1559,  3453 => 1558,  3445 => 1553,  3441 => 1552,  3428 => 1544,  3421 => 1542,  3408 => 1532,  3400 => 1526,  3394 => 1525,  3392 => 1524,  3386 => 1521,  3382 => 1520,  3375 => 1518,  3371 => 1517,  3367 => 1516,  3361 => 1515,  3357 => 1514,  3353 => 1513,  3349 => 1512,  3344 => 1511,  3339 => 1510,  3337 => 1509,  3328 => 1503,  3324 => 1502,  3312 => 1493,  3306 => 1492,  3297 => 1486,  3282 => 1474,  3274 => 1468,  3268 => 1467,  3266 => 1466,  3260 => 1463,  3256 => 1462,  3245 => 1456,  3241 => 1455,  3228 => 1447,  3224 => 1446,  3215 => 1442,  3211 => 1441,  3204 => 1439,  3200 => 1438,  3195 => 1435,  3189 => 1434,  3180 => 1430,  3176 => 1428,  3169 => 1424,  3166 => 1423,  3162 => 1421,  3159 => 1420,  3155 => 1419,  3148 => 1415,  3143 => 1414,  3138 => 1413,  3136 => 1412,  3127 => 1406,  3123 => 1405,  3119 => 1404,  3115 => 1403,  3111 => 1402,  3096 => 1390,  3088 => 1384,  3082 => 1383,  3080 => 1382,  3074 => 1379,  3070 => 1378,  3058 => 1371,  3054 => 1370,  3041 => 1362,  3037 => 1361,  3028 => 1357,  3024 => 1356,  3017 => 1354,  3013 => 1353,  3006 => 1351,  3002 => 1350,  2999 => 1349,  2993 => 1348,  2985 => 1346,  2980 => 1344,  2976 => 1343,  2973 => 1342,  2969 => 1341,  2964 => 1339,  2959 => 1338,  2954 => 1337,  2952 => 1336,  2943 => 1330,  2939 => 1329,  2935 => 1328,  2931 => 1327,  2927 => 1326,  2923 => 1325,  2908 => 1313,  2900 => 1307,  2894 => 1306,  2892 => 1305,  2886 => 1302,  2882 => 1301,  2876 => 1297,  2870 => 1296,  2861 => 1292,  2857 => 1290,  2850 => 1286,  2847 => 1285,  2843 => 1283,  2840 => 1282,  2836 => 1281,  2829 => 1277,  2824 => 1274,  2818 => 1273,  2809 => 1269,  2805 => 1267,  2796 => 1263,  2792 => 1261,  2789 => 1260,  2785 => 1259,  2778 => 1255,  2773 => 1254,  2768 => 1253,  2766 => 1252,  2757 => 1246,  2753 => 1245,  2742 => 1236,  2736 => 1235,  2734 => 1234,  2731 => 1233,  2725 => 1229,  2722 => 1228,  2710 => 1224,  2706 => 1222,  2701 => 1221,  2699 => 1220,  2693 => 1217,  2684 => 1211,  2680 => 1210,  2673 => 1205,  2667 => 1204,  2665 => 1203,  2659 => 1200,  2655 => 1199,  2647 => 1196,  2641 => 1195,  2636 => 1192,  2628 => 1186,  2620 => 1180,  2617 => 1179,  2609 => 1173,  2601 => 1167,  2599 => 1166,  2590 => 1162,  2582 => 1159,  2576 => 1158,  2571 => 1155,  2563 => 1149,  2555 => 1143,  2552 => 1142,  2544 => 1136,  2536 => 1130,  2534 => 1129,  2525 => 1125,  2517 => 1122,  2511 => 1121,  2506 => 1118,  2498 => 1112,  2490 => 1106,  2487 => 1105,  2479 => 1099,  2471 => 1093,  2469 => 1092,  2460 => 1088,  2454 => 1084,  2447 => 1080,  2443 => 1079,  2439 => 1077,  2432 => 1073,  2428 => 1072,  2424 => 1070,  2422 => 1069,  2413 => 1065,  2405 => 1062,  2399 => 1061,  2394 => 1059,  2388 => 1058,  2383 => 1055,  2380 => 1054,  2374 => 1053,  2365 => 1049,  2361 => 1047,  2354 => 1043,  2351 => 1042,  2347 => 1040,  2345 => 1039,  2342 => 1038,  2338 => 1037,  2335 => 1036,  2333 => 1035,  2324 => 1031,  2318 => 1029,  2314 => 1028,  2305 => 1022,  2301 => 1021,  2297 => 1020,  2293 => 1019,  2289 => 1018,  2285 => 1017,  2279 => 1014,  2276 => 1013,  2274 => 1012,  2272 => 1011,  2261 => 1003,  2255 => 1002,  2251 => 1001,  2246 => 998,  2242 => 997,  2239 => 996,  2236 => 995,  2225 => 987,  2219 => 986,  2215 => 985,  2210 => 982,  2206 => 981,  2203 => 980,  2200 => 979,  2189 => 971,  2183 => 970,  2179 => 969,  2174 => 966,  2170 => 965,  2167 => 964,  2164 => 963,  2157 => 959,  2151 => 958,  2147 => 957,  2143 => 955,  2139 => 954,  2136 => 953,  2133 => 952,  2126 => 948,  2120 => 947,  2116 => 946,  2112 => 944,  2108 => 943,  2105 => 942,  2102 => 941,  2095 => 937,  2089 => 936,  2085 => 935,  2081 => 933,  2077 => 932,  2074 => 931,  2072 => 930,  2065 => 925,  2058 => 921,  2054 => 920,  2050 => 918,  2043 => 914,  2039 => 913,  2035 => 911,  2033 => 910,  2024 => 906,  2020 => 904,  2016 => 903,  2009 => 901,  2005 => 900,  2001 => 899,  1995 => 898,  1991 => 897,  1987 => 896,  1982 => 895,  1977 => 894,  1974 => 893,  1972 => 892,  1963 => 886,  1960 => 885,  1954 => 884,  1952 => 883,  1948 => 882,  1942 => 881,  1937 => 880,  1932 => 879,  1930 => 878,  1916 => 867,  1908 => 861,  1902 => 860,  1900 => 859,  1894 => 856,  1890 => 855,  1886 => 853,  1877 => 850,  1873 => 849,  1867 => 848,  1863 => 847,  1857 => 846,  1854 => 845,  1850 => 844,  1846 => 843,  1842 => 842,  1838 => 841,  1832 => 840,  1826 => 838,  1821 => 837,  1819 => 836,  1810 => 830,  1806 => 829,  1795 => 820,  1786 => 817,  1782 => 816,  1778 => 815,  1775 => 814,  1773 => 813,  1768 => 811,  1761 => 809,  1754 => 804,  1745 => 801,  1741 => 800,  1737 => 799,  1734 => 798,  1732 => 797,  1727 => 795,  1720 => 793,  1713 => 788,  1705 => 785,  1700 => 784,  1695 => 783,  1690 => 781,  1685 => 780,  1683 => 779,  1680 => 778,  1676 => 777,  1671 => 775,  1665 => 771,  1656 => 768,  1652 => 767,  1648 => 766,  1645 => 765,  1643 => 764,  1638 => 762,  1631 => 760,  1624 => 755,  1615 => 752,  1611 => 751,  1607 => 750,  1604 => 749,  1602 => 748,  1597 => 746,  1590 => 744,  1582 => 739,  1578 => 738,  1574 => 737,  1567 => 735,  1561 => 731,  1523 => 695,  1516 => 691,  1512 => 690,  1508 => 688,  1501 => 684,  1497 => 683,  1493 => 681,  1491 => 680,  1483 => 675,  1475 => 669,  1468 => 665,  1464 => 664,  1460 => 662,  1453 => 658,  1449 => 657,  1445 => 655,  1443 => 654,  1435 => 649,  1430 => 647,  1422 => 641,  1415 => 637,  1411 => 636,  1407 => 634,  1400 => 630,  1396 => 629,  1392 => 627,  1390 => 626,  1382 => 621,  1374 => 615,  1367 => 611,  1363 => 610,  1359 => 608,  1352 => 604,  1348 => 603,  1344 => 601,  1342 => 600,  1334 => 595,  1326 => 589,  1319 => 585,  1315 => 584,  1311 => 582,  1304 => 578,  1300 => 577,  1296 => 575,  1294 => 574,  1286 => 569,  1278 => 563,  1271 => 559,  1267 => 558,  1263 => 556,  1256 => 552,  1252 => 551,  1248 => 549,  1246 => 548,  1238 => 543,  1230 => 537,  1223 => 533,  1219 => 532,  1215 => 530,  1208 => 526,  1204 => 525,  1200 => 523,  1198 => 522,  1190 => 517,  1185 => 515,  1177 => 509,  1170 => 505,  1166 => 504,  1162 => 502,  1155 => 498,  1151 => 497,  1147 => 495,  1145 => 494,  1137 => 489,  1132 => 487,  1120 => 482,  1112 => 477,  1108 => 476,  1087 => 462,  1065 => 445,  1057 => 439,  1055 => 438,  1045 => 433,  1040 => 431,  1032 => 425,  1025 => 421,  1021 => 420,  1017 => 418,  1010 => 414,  1006 => 413,  1002 => 411,  1000 => 410,  992 => 405,  984 => 399,  978 => 398,  969 => 394,  965 => 392,  955 => 387,  951 => 385,  948 => 384,  944 => 383,  936 => 378,  926 => 373,  921 => 371,  913 => 365,  907 => 364,  898 => 360,  894 => 358,  884 => 353,  880 => 351,  877 => 350,  873 => 349,  865 => 344,  853 => 337,  844 => 333,  835 => 329,  828 => 325,  817 => 317,  813 => 316,  807 => 313,  801 => 309,  796 => 308,  793 => 307,  788 => 305,  785 => 304,  782 => 303,  777 => 302,  774 => 301,  769 => 299,  766 => 298,  764 => 297,  759 => 295,  751 => 289,  745 => 288,  736 => 284,  732 => 282,  722 => 277,  718 => 275,  715 => 274,  711 => 273,  701 => 268,  692 => 261,  685 => 257,  681 => 256,  677 => 254,  670 => 250,  666 => 249,  662 => 247,  660 => 246,  652 => 241,  642 => 236,  635 => 234,  624 => 228,  619 => 226,  611 => 220,  605 => 219,  596 => 215,  592 => 213,  583 => 209,  579 => 207,  576 => 206,  572 => 205,  566 => 202,  560 => 199,  550 => 194,  545 => 192,  535 => 187,  530 => 185,  520 => 180,  513 => 178,  502 => 172,  495 => 170,  484 => 164,  477 => 162,  466 => 156,  459 => 154,  448 => 148,  441 => 146,  430 => 140,  423 => 138,  417 => 134,  411 => 132,  409 => 131,  402 => 129,  397 => 127,  391 => 123,  378 => 118,  374 => 117,  370 => 116,  363 => 114,  359 => 113,  352 => 109,  346 => 108,  342 => 107,  337 => 105,  334 => 104,  327 => 100,  321 => 99,  317 => 98,  312 => 96,  309 => 95,  304 => 92,  298 => 90,  296 => 89,  289 => 87,  285 => 86,  281 => 85,  276 => 83,  273 => 82,  266 => 78,  262 => 77,  256 => 76,  252 => 75,  247 => 73,  244 => 72,  239 => 69,  233 => 67,  231 => 66,  225 => 65,  221 => 64,  217 => 63,  213 => 61,  209 => 60,  203 => 58,  199 => 57,  196 => 56,  188 => 54,  181 => 53,  176 => 52,  172 => 51,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  125 => 36,  119 => 35,  114 => 33,  110 => 32,  104 => 29,  98 => 26,  94 => 24,  86 => 20,  84 => 19,  79 => 16,  68 => 14,  64 => 13,  59 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
