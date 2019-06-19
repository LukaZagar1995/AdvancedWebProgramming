<?php

/* product/list.html.twig */
class __TwigTemplate_447bc1eed0bcbfcde1e930800b791fa30accd3fd934d4202610d2ad67914cf30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/list.html.twig"));

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
                Products
            </h1>
            <span>
                <a class=\"btn btn-success float-right\" style=\"margin:10px 0 10px 10px;\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_create");
        echo "\">Add Product</a>
            </span>
        </div>

        <table class=\"table\" id=\"product-table\" style=\"empty-cells: hide\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Serial Number</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "                    <tr valign=\"middle\">
                        <td>
                            ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
            echo "
                            </a>
                        </td>

                        <td>
                            ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", []), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock", []), "html", null, true);
            echo "
                        </td>

                        <td>
                            ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "serialNumber", []), "html", null, true);
            echo "
                        </td>


                        <td>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\">Details</a>
                            |
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\">Edit</a>
                            |
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [])]), "html", null, true);
            echo "\">Delete</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    <script>
        let checkboxList = [];

        \$(document).ready(function () {
            \$('#product-table').DataTable( {
            });


        });



        function printInvoice() {
            let printString = \"\";
            printString += '<table style=\"margin-bottom:10px;\" border=\"1\">';
            let counter = 0;
            checkboxList.forEach(function (checkBox) {
                if (counter % 5 === 0) {
                    printString += '<tr style=\"page-break-inside:avoid;\">';
                }
                console.log(checkBox[0] + \"  \" + checkBox[1]  + \"  \" + checkBox[2]);
                printString += '<td style=\"padding:10px;\"><h5>ID: ' + checkBox[0] + '</h5><h5>Name: ' + checkBox[1] + '</h5><img src=\"' + checkBox[2] + '\"/></td>';
                counter += 1;
                if (counter % 5 === 0) {
                    printString += '</tr>';
                }
            });
            printString += '</table>';
            printQ(printString);
        }



        function printQ(printString) {
            let win = window.open('');
            win.document.write(printString);
            win.document.close();
            win.print();
            win.close();
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  182 => 66,  169 => 61,  159 => 57,  154 => 55,  149 => 53,  141 => 48,  134 => 44,  127 => 40,  119 => 35,  115 => 34,  109 => 31,  105 => 29,  101 => 28,  81 => 11,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Product list{% endblock %}
{% block body %}
    <div class=\"container-fluid\" style=\"padding: 1% 10%\">
        <div class=\"d-flex justify-content-between\">
            <h1>
                Products
            </h1>
            <span>
                <a class=\"btn btn-success float-right\" style=\"margin:10px 0 10px 10px;\" href=\"{{ path('product_create') }}\">Add Product</a>
            </span>
        </div>

        <table class=\"table\" id=\"product-table\" style=\"empty-cells: hide\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Serial Number</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for product in products %}
                    <tr valign=\"middle\">
                        <td>
                            {{ product.id }}
                        </td>
                        <td>
                            <a href=\"{{ path('product_details', {id:product.id}) }}\">
                                {{ product.name }}
                            </a>
                        </td>

                        <td>
                            {{ product.price }}
                        </td>

                        <td>
                            {{ product.stock }}
                        </td>

                        <td>
                            {{ product.serialNumber }}
                        </td>


                        <td>
                            <a href=\"{{ path('product_details', {id:product.id}) }}\">Details</a>
                            |
                            <a href=\"{{ path('product_edit', {id:product.id}) }}\">Edit</a>
                            |
                            <a href=\"{{ path('product_delete', {id:product.id}) }}\">Delete</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        let checkboxList = [];

        \$(document).ready(function () {
            \$('#product-table').DataTable( {
            });


        });



        function printInvoice() {
            let printString = \"\";
            printString += '<table style=\"margin-bottom:10px;\" border=\"1\">';
            let counter = 0;
            checkboxList.forEach(function (checkBox) {
                if (counter % 5 === 0) {
                    printString += '<tr style=\"page-break-inside:avoid;\">';
                }
                console.log(checkBox[0] + \"  \" + checkBox[1]  + \"  \" + checkBox[2]);
                printString += '<td style=\"padding:10px;\"><h5>ID: ' + checkBox[0] + '</h5><h5>Name: ' + checkBox[1] + '</h5><img src=\"' + checkBox[2] + '\"/></td>';
                counter += 1;
                if (counter % 5 === 0) {
                    printString += '</tr>';
                }
            });
            printString += '</table>';
            printQ(printString);
        }



        function printQ(printString) {
            let win = window.open('');
            win.document.write(printString);
            win.document.close();
            win.print();
            win.close();
        }

    </script>
{% endblock %}", "product/list.html.twig", "E:\\xampp\\htdocs\\AWP_project\\app\\Resources\\views\\product\\list.html.twig");
    }
}
