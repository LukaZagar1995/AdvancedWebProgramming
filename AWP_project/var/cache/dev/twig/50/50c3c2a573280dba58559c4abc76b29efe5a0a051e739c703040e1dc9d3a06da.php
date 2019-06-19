<?php

/* invoice/details.html.twig */
class __TwigTemplate_e3c4abdae36b75b2623ca3107cef7fc3c96361b8b9a8bc9537f6d8a72393732e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/details.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoice/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoice/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 3, $this->source); })()), "id", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <h1>Invoice ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 6, $this->source); })()), "invoiceNumber", []), "html", null, true);
        echo "
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 7, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"btn\">
            Edit
        </a>
    </h1>

    <div>
        Order date: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 13, $this->source); })()), "date", []), "d-M-Y"), "html", null, true);
        echo "
    </div>

    <table class=\"table\" id=\"inv-details-table\" style=\"empty-cells: hide\">
            <thead>
                <tr>

                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>


                </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context["fullPrice"] = 0;
        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoice_products"]) || array_key_exists("invoice_products", $context) ? $context["invoice_products"] : (function () { throw new Twig_Error_Runtime('Variable "invoice_products" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice_product"]) {
            // line 30
            echo "                ";
            $context["fullPrice"] = ((isset($context["fullPrice"]) || array_key_exists("fullPrice", $context) ? $context["fullPrice"] : (function () { throw new Twig_Error_Runtime('Variable "fullPrice" does not exist.', 30, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["invoice_product"], "quantity", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "productId", []), "price", [])));
            // line 31
            echo "
                    <tr valign=\"middle\">
                        <td>

                            ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "productId", []), "name", []), "html", null, true);
            echo "

                        </td>
                        <td>
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "quantity", []), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 43
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["invoice_product"], "quantity", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "productId", []), "price", [])), "html", null, true);
            echo "
                        </td>




                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>





    <div>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->source); })()), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\" class=\"btn btn-light\">Back</a>
        ";
        // line 60
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 60, $this->source); })()), "locked", [])) {
            // line 61
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_product_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 61, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\">Add a product to this invoice</a>
        ";
        } else {
            // line 63
            echo "        <button class=\"btn btnPrint btn-outline-primary btn-sm\" onclick=\"printInvoice()\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 63, $this->source); })()), "id", []), "html", null, true);
            echo "\">Print this invoice</button>
        ";
        }
        // line 65
        echo "</div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "
    <script>
    let printString = \"\";

    \$(document).ready(function () {
            \$('#invoice-details-table').DataTable( {
            });


        });
    
    
    function printInvoice() {
        ";
        // line 84
        $context["fullPrice"] = 0;
        // line 85
        echo "        let win = window.open('');

        printString += '<h3>Invoice ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 87, $this->source); })()), "invoiceNumber", []), "html", null, true);
        echo "</h3><br>';

        printString += '<p>Date: ";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 89, $this->source); })()), "date", []), "d-M-Y"), "html", null, true);
        echo "</p>';
        printString += '<table class=\"table\" border=\"1\">';
        printString += '<thead><tr><th>Product</th><th>Quantity</th><th>Price</th></tr></thead>';
        printString += '<tbody>';

        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoice_products"]) || array_key_exists("invoice_products", $context) ? $context["invoice_products"] : (function () { throw new Twig_Error_Runtime('Variable "invoice_products" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice_product"]) {
            // line 95
            echo "        ";
            $context["fullPrice"] = ((isset($context["fullPrice"]) || array_key_exists("fullPrice", $context) ? $context["fullPrice"] : (function () { throw new Twig_Error_Runtime('Variable "fullPrice" does not exist.', 95, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["invoice_product"], "quantity", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "productId", []), "price", [])));
            // line 96
            echo "        printString += '<tr valign=\"middle\"><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "productId", []), "name", []), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "quantity", []), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["invoice_product"], "quantity", []) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice_product"], "productId", []), "price", [])), "html", null, true);
            echo "</td></tr>';

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        printString += '</tbody></table>';
        printString += '<p>Price: ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["fullPrice"]) || array_key_exists("fullPrice", $context) ? $context["fullPrice"] : (function () { throw new Twig_Error_Runtime('Variable "fullPrice" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "</p>';

        win.document.write(printString);
        win.document.close();
        win.print();


      
    }
    
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 100,  256 => 99,  242 => 96,  239 => 95,  235 => 94,  227 => 89,  222 => 87,  218 => 85,  216 => 84,  201 => 71,  192 => 70,  179 => 65,  173 => 63,  167 => 61,  165 => 60,  161 => 59,  151 => 51,  137 => 43,  130 => 39,  123 => 35,  117 => 31,  114 => 30,  109 => 29,  107 => 28,  89 => 13,  80 => 7,  76 => 6,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ invoice.id }}{% endblock %}
{% block body %}
<div class=\"container\">
    <h1>Invoice {{ invoice.invoiceNumber }}
        <a href=\"{{ path('invoice_edit', {id: invoice.id}) }}\" class=\"btn\">
            Edit
        </a>
    </h1>

    <div>
        Order date: {{ invoice.date|date('d-M-Y') }}
    </div>

    <table class=\"table\" id=\"inv-details-table\" style=\"empty-cells: hide\">
            <thead>
                <tr>

                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>


                </tr>
            </thead>
            <tbody>
            {% set fullPrice = 0 %}
                {% for invoice_product in invoice_products %}
                {% set fullPrice = fullPrice + invoice_product.quantity * invoice_product.productId.price %}

                    <tr valign=\"middle\">
                        <td>

                            {{ invoice_product.productId.name }}

                        </td>
                        <td>
                            {{ invoice_product.quantity  }}
                        </td>

                        <td>
                            {{  invoice_product.quantity * invoice_product.productId.price }}
                        </td>




                    </tr>
                {% endfor %}
            </tbody>
        </table>





    <div>
        <a href=\"{{ app.request.headers.get('referer') }}\" class=\"btn btn-light\">Back</a>
        {% if not invoice.locked %}
        <a href=\"{{ path('invoice_product_add', {id: invoice.id}) }}\" class=\"btn btn-success\">Add a product to this invoice</a>
        {% else %}
        <button class=\"btn btnPrint btn-outline-primary btn-sm\" onclick=\"printInvoice()\" data-id=\"{{ invoice.id }}\">Print this invoice</button>
        {% endif %}
</div>


    {% endblock %}

    {% block javascripts %}

    <script>
    let printString = \"\";

    \$(document).ready(function () {
            \$('#invoice-details-table').DataTable( {
            });


        });
    
    
    function printInvoice() {
        {% set fullPrice = 0 %}
        let win = window.open('');

        printString += '<h3>Invoice {{ invoice.invoiceNumber }}</h3><br>';

        printString += '<p>Date: {{ invoice.date|date('d-M-Y') }}</p>';
        printString += '<table class=\"table\" border=\"1\">';
        printString += '<thead><tr><th>Product</th><th>Quantity</th><th>Price</th></tr></thead>';
        printString += '<tbody>';

        {% for invoice_product in invoice_products %}
        {% set fullPrice = fullPrice + invoice_product.quantity * invoice_product.productId.price %}
        printString += '<tr valign=\"middle\"><td>{{ invoice_product.productId.name }}</td><td>{{ invoice_product.quantity  }}</td><td>{{  invoice_product.quantity * invoice_product.productId.price }}</td></tr>';

        {% endfor %}
        printString += '</tbody></table>';
        printString += '<p>Price: {{ fullPrice }}</p>';

        win.document.write(printString);
        win.document.close();
        win.print();


      
    }
    
    </script>
    {% endblock %}", "invoice/details.html.twig", "C:\\AWP_project\\app\\Resources\\views\\invoice\\details.html.twig");
    }
}
