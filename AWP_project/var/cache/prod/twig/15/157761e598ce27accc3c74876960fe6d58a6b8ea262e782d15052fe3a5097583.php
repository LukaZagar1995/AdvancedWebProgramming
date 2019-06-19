<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1a69fb19ce9580a56279b87dbece0f0b89677dd9af8304ded76963de5a5cbd43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", []))) {
            // line 2
            echo twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", []);
            echo ":
";
            // line 3
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", []))) {
                // line 4
                echo twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", []);
                echo "
";
            }
            // line 6
            echo "
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", []));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 8
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", ["trace" => $context["trace"]], false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  31 => 4,  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/traces.txt.twig", "E:\\xampp\\htdocs\\AWP_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
