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

/* default/template/account/order_info.twig */
class __TwigTemplate_b4420a6654d99559df77539845befc91aea81ac70bf795445f5b29f05c22dd08 extends \Twig\Template
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
        echo "
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 31
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 36
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
              ";
        }
        // line 37
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br/>
              <b>";
        // line 38
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 39
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 41
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 48
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 49
        if (($context["shipping_address"] ?? null)) {
            // line 50
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 51
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 55
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 56
        if (($context["shipping_address"] ?? null)) {
            // line 57
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 58
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 65
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 66
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 67
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 68
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 69
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 72
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 77
            echo "          <tr>
            <td class=\"text-left\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
            echo "
              ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &
          &nbsp;<small> - ";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 81);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 81);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
          ";
            // line 83
            if (($context["custom_design_cart"] ?? null)) {
                // line 84
                echo "          <div class=\"text-center\">
                <button type=\"button\" class=\"btn btn-primary shadow-sm\" data-toggle=\"modal\" data-target=\"#productEditorModal";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "order_product_id", [], "any", false, false, false, 85);
                echo "\">
                    Preview Customized Product
                </button>

                <div class=\"mt-5 p-3 bg-light rounded shadow-sm\">
                  <textarea style=\"display:none;\" name=\"custom_data\" id=\"iframeDataDisplay\" rows=\"20\" class=\"form-control p-3 bg-white border rounded mt-5\"></textarea>
                    
                </div>
            </div>

            <div class=\"modal fade\" id=\"productEditorModal";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "order_product_id", [], "any", false, false, false, 95);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productEditorModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\"></div>
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                  </div>
                  <div class=\"modal-body\" style=\"padding:0;\">
                    <iframe id=\"productEditorIframe";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["product"], "order_product_id", [], "any", false, false, false, 101);
                echo "\" src=\"";
                echo ($context["iframe_url"] ?? null);
                echo "?order_product_id=";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "order_product_id", [], "any", false, false, false, 101);
                echo "&base=";
                echo ($context["base"] ?? null);
                echo "&preview=true&strict=true&zoom=100\" allowfullscreen style=\"width:100%;height:75vh;border:none;\"></iframe>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close Preview</button>
                  </div>
                </div>
              </div>
              ";
            }
            // line 109
            echo "            </div>          
          </td>
      
            <td class=\"text-left\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 112);
            echo "</td>
            <td class=\"text-right\">";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 113);
            echo "</td>
            <td class=\"text-right\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114);
            echo "</td>
            <td class=\"text-right\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 115);
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 116
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 116)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 116);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 116);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 120
            echo "          <tr>
            <td class=\"text-left\">";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 121);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 124);
            echo "</td>
            <td class=\"text-right\">";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 125);
            echo "</td>
            ";
            // line 126
            if (($context["products"] ?? null)) {
                // line 127
                echo "            <td></td>
            ";
            }
            // line 128
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 135
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 137);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 138);
            echo "</td>
            ";
            // line 139
            if (($context["products"] ?? null)) {
                // line 140
                echo "            <td></td>
            ";
            }
            // line 141
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 147
        if (($context["comment"] ?? null)) {
            // line 148
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 151
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 156
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 161
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 162
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 166
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 167
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 168
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 173
            if (($context["histories"] ?? null)) {
                // line 174
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 175
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 176);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 177);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 178);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "        ";
            } else {
                // line 182
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 183
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 186
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 190
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 191
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 193
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 194
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 196
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 196,  547 => 194,  543 => 193,  536 => 191,  533 => 190,  527 => 186,  521 => 183,  518 => 182,  515 => 181,  506 => 178,  502 => 177,  498 => 176,  495 => 175,  490 => 174,  488 => 173,  480 => 168,  476 => 167,  472 => 166,  464 => 162,  461 => 161,  453 => 156,  445 => 151,  440 => 148,  438 => 147,  432 => 143,  425 => 141,  421 => 140,  419 => 139,  415 => 138,  411 => 137,  407 => 135,  403 => 134,  397 => 130,  390 => 128,  386 => 127,  384 => 126,  380 => 125,  376 => 124,  370 => 121,  367 => 120,  362 => 119,  343 => 116,  339 => 115,  335 => 114,  331 => 113,  327 => 112,  322 => 109,  305 => 101,  296 => 95,  283 => 85,  280 => 84,  278 => 83,  275 => 82,  266 => 81,  259 => 79,  255 => 78,  252 => 77,  248 => 76,  242 => 72,  238 => 71,  236 => 70,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  207 => 58,  201 => 57,  199 => 56,  195 => 55,  189 => 51,  183 => 50,  181 => 49,  177 => 48,  160 => 41,  151 => 39,  145 => 38,  138 => 37,  129 => 36,  121 => 31,  114 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_info.twig", "");
    }
}
