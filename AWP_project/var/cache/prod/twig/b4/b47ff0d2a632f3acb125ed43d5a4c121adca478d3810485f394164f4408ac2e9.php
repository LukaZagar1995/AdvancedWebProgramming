<?php

/* base.html.twig */
class __TwigTemplate_1ce59d3daa1b56a4067fd5c879f93528f0f10306be74d7f403ae0fa71b8cbbea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-html5-1.5.4/datatables.min.css\"/>
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/site.css"), "html", null, true);
        echo "\" />

        <script
                src=\"https://code.jquery.com/jquery-3.3.1.js\"
                integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-html5-1.5.4/datatables.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>

    </head>

    <body style=\"margin-bottom:80px;\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                    <ul class=\"navbar-nav mr-auto\">
                        ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 37
                echo "                            <li class=\"nav-item ";
                if (twig_in_filter("product", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"nav-link\" href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_list");
                echo "\">Products</a>
                            </li>
                            <li class=\"nav-item ";
                // line 40
                if (twig_in_filter("employee", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"nav-link\" href=\" ";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
                echo " \">Employees</a>
                            </li>

                            <li class=\"nav-item ";
                // line 44
                if (twig_in_filter("assignment", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"nav-link\" href=\"";
                // line 45
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assignment_list");
                echo "\">Assignments</a>
                            </li>
                            <li class=\"nav-item ";
                // line 47
                if (twig_in_filter("inventory", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"nav-link\" href=\"";
                // line 48
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory_list", ["id" => 0]);
                echo "\">Inventories</a>
                            </li>
                            ";
                // line 50
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 51
                    echo "                                <li class=\"nav-item ";
                    if (twig_in_filter("user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
                        echo "active";
                    }
                    echo "\">
                                    <a class=\"nav-link\" href=\"";
                    // line 52
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
                    echo "\">Users</a>
                                </li>
                            ";
                }
                // line 55
                echo "                        ";
            }
            // line 56
            echo "                    </ul>

                    <ul class=\"navbar-nav navbar-right\">
                        ";
            // line 59
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 60
                echo "                            <li class=\"nav-link\">
                                Hello, ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "username", []), "html", null, true);
                echo "!
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
                echo "\">Logout</a>
                            </li>
                        ";
            } else {
                // line 67
                echo "                            <li class=\"nav-link float-right\">
                                <a href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
                echo "\">
                                    Log In
                                </a>
                            </li>
                        ";
            }
            // line 73
            echo "                    </ul>
                </div>
            ";
        }
        // line 76
        echo "        </nav>

        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "

    </body>

    ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        echo "        ";
    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        // line 79
        echo "        ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        // line 85
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 85,  220 => 84,  216 => 79,  213 => 78,  207 => 6,  201 => 5,  196 => 86,  194 => 84,  188 => 80,  186 => 78,  182 => 76,  177 => 73,  169 => 68,  166 => 67,  160 => 64,  154 => 61,  151 => 60,  149 => 59,  144 => 56,  141 => 55,  135 => 52,  128 => 51,  126 => 50,  121 => 48,  115 => 47,  110 => 45,  104 => 44,  98 => 41,  92 => 40,  87 => 38,  80 => 37,  78 => 36,  74 => 34,  72 => 33,  48 => 12,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "E:\\xampp\\htdocs\\AWP_project\\app\\Resources\\views\\base.html.twig");
    }
}
