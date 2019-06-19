<?php

/* invoice/list.html.twig */
class __TwigTemplate_6b1ae723ea058ceef8540154dd8fab3b734f8aefb5deb3c7bf42ef61d2639f6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoice/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoice/list.html.twig"));

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

        echo "Product list";
        
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
        echo "    <div class=\"container-fluid\" style=\"padding: 1% 10%\">
        <div class=\"d-flex justify-content-between\">
            <h1>
                Invoices
            </h1>
            <span>
                <a class=\"btn btn-success float-right\" style=\"margin:10px 0 10px 10px;\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_create");
        echo "\">Add Invoice</a>
            </span>
        </div>

        <table class=\"table\" id=\"invoice-table\" style=\"empty-cells: hide\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Invoice Number</th>
                    <th>Date</th>
                    <th>Locked</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new Twig_Error_Runtime('Variable "invoices" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 27
            echo "                    <tr valign=\"middle\">
                        <td>
                            ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", []), "html", null, true);
            echo "
                        </td>
                        <td>

                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "invoiceNumber", []), "html", null, true);
            echo "

                        </td>
                        <td>
                            ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "date", []), "d M Y"), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["invoice"], "locked", [])) {
                // line 42
                echo "                                Yes
                            ";
            } else {
                // line 44
                echo "                                No
                            ";
            }
            // line 46
            echo "                        </td>

                        <td>


                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_details", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [])]), "html", null, true);
            echo "\">Details</a>
                            ";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, $context["invoice"], "locked", [])) {
                // line 53
                echo "                                |
                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [])]), "html", null, true);
                echo "\">Edit</a>
                                |
                                <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_lock", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [])]), "html", null, true);
                echo "\">Lock</a>


                            ";
            }
            // line 60
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    <script>
        \$(document).ready(function () {
            \$('#invoice-table').DataTable( {
            });


        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 69,  187 => 68,  174 => 63,  166 => 60,  159 => 56,  154 => 54,  151 => 53,  149 => 52,  145 => 51,  138 => 46,  134 => 44,  130 => 42,  128 => 41,  121 => 37,  114 => 33,  107 => 29,  103 => 27,  99 => 26,  81 => 11,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Product list{% endblock %}
{% block body %}
    <div class=\"container-fluid\" style=\"padding: 1% 10%\">
        <div class=\"d-flex justify-content-between\">
            <h1>
                Invoices
            </h1>
            <span>
                <a class=\"btn btn-success float-right\" style=\"margin:10px 0 10px 10px;\" href=\"{{ path('invoice_create') }}\">Add Invoice</a>
            </span>
        </div>

        <table class=\"table\" id=\"invoice-table\" style=\"empty-cells: hide\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Invoice Number</th>
                    <th>Date</th>
                    <th>Locked</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for invoice in invoices %}
                    <tr valign=\"middle\">
                        <td>
                            {{ invoice.id }}
                        </td>
                        <td>

                            {{ invoice.invoiceNumber }}

                        </td>
                        <td>
                            {{ invoice.date|date(\"d M Y\") }}
                        </td>

                        <td>
                            {% if invoice.locked %}
                                Yes
                            {% else %}
                                No
                            {% endif %}
                        </td>

                        <td>


                                <a href=\"{{ path('invoice_details', {id:invoice.id}) }}\">Details</a>
                            {% if not invoice.locked %}
                                |
                                <a href=\"{{ path('invoice_edit', {id:invoice.id}) }}\">Edit</a>
                                |
                                <a href=\"{{ path('invoice_lock', {id:invoice.id}) }}\">Lock</a>


                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function () {
            \$('#invoice-table').DataTable( {
            });


        });

    </script>
{% endblock %}", "invoice/list.html.twig", "E:\\xampp\\htdocs\\AWP_project\\app\\Resources\\views\\invoice\\list.html.twig");
    }
}
