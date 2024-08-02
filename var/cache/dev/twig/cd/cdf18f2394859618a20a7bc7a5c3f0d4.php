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

/* ristournes/detail.html.twig */
class __TwigTemplate_0050f2ebbe182a0e11ff5747bb79759a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'PageTitre' => [$this, 'block_PageTitre'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ristournes/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ristournes/detail.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "ristournes/detail.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<table class=\"table table-striped\">
    <thead  style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th>Dates</th>
            <th>Année</th>
            <th>Mois</th> 
            <th>Montant Mensuel</th>
            <th>Montant Annuel</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monthlyAmounts"]) || array_key_exists("monthlyAmounts", $context) ? $context["monthlyAmounts"] : (function () { throw new RuntimeError('Variable "monthlyAmounts" does not exist.', 16, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["months"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["month"] => $context["data"]) {
                // line 18
                echo "                <tr>
                    <td>
                        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 20, $this->source); })()), $context["year"], [], "array", false, false, false, 20), $context["month"], [], "array", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 21
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d-m-Y"), "html", null, true);
                    echo "<br>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 26), 0, ",", " "), "html", null, true);
                echo " fcfa</td>
                    ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 27) == 0)) {
                    // line 28
                    echo "                        <td rowspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["months"]), "html", null, true);
                    echo "\">
                            ";
                    // line 29
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["yearlyAmounts"]) || array_key_exists("yearlyAmounts", $context) ? $context["yearlyAmounts"] : (function () { throw new RuntimeError('Variable "yearlyAmounts" does not exist.', 29, $this->source); })()), $context["year"], [], "array", false, false, false, 29), 0, ",", " "), "html", null, true);
                    echo " fcfa
                        </td>
                    ";
                }
                // line 32
                echo "                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
    <tfoot >
        <tr style=\"background-color: rgb(100, 009, 091);color:#fff;\">
            <th colspan=\"3\" >Total Mensuel </th>
            <th>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMensuelGlobal"]) || array_key_exists("totalMensuelGlobal", $context) ? $context["totalMensuelGlobal"] : (function () { throw new RuntimeError('Variable "totalMensuelGlobal" does not exist.', 39, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " fcfa</th>
            <th></th>
        </tr>
        <tr style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <th colspan=\"3\">Total Annuel </th>
            <th></th>
            <th>";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalAnnuelGlobal"]) || array_key_exists("totalAnnuelGlobal", $context) ? $context["totalAnnuelGlobal"] : (function () { throw new RuntimeError('Variable "totalAnnuelGlobal" does not exist.', 45, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " fcfa</th>
        </tr>
    </tfoot>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 53
        echo "Montants mensuels et annuels  : ";
        echo twig_escape_filter($this->env, (isset($context["propertyName"]) || array_key_exists("propertyName", $context) ? $context["propertyName"] : (function () { throw new RuntimeError('Variable "propertyName" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ristournes/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  232 => 53,  222 => 52,  206 => 45,  197 => 39,  191 => 35,  177 => 34,  162 => 32,  156 => 29,  151 => 28,  149 => 27,  145 => 26,  141 => 25,  137 => 24,  134 => 23,  125 => 21,  121 => 20,  117 => 18,  99 => 17,  82 => 16,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'template.html.twig' %}

{% block body %}
<table class=\"table table-striped\">
    <thead  style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th>Dates</th>
            <th>Année</th>
            <th>Mois</th> 
            <th>Montant Mensuel</th>
            <th>Montant Annuel</th>
        </tr>
    </thead>
    <tbody>
        {% for year, months in monthlyAmounts %}
            {% for month, data in months %}
                <tr>
                    <td>
                        {% for date in dates[year][month] %}
                            {{ date|date('d-m-Y') }}<br>
                        {% endfor %}
                    </td>
                    <td>{{ year }}</td>
                    <td>{{ month }}</td>
                    <td>{{ data.total|number_format(0, ',', ' ') }} fcfa</td>
                    {% if loop.index0 == 0 %}
                        <td rowspan=\"{{ months|length }}\">
                            {{ yearlyAmounts[year]|number_format(0, ',', ' ') }} fcfa
                        </td>
                    {% endif %}
                </tr>
            {% endfor %}
        {% endfor %}
    </tbody>
    <tfoot >
        <tr style=\"background-color: rgb(100, 009, 091);color:#fff;\">
            <th colspan=\"3\" >Total Mensuel </th>
            <th>{{ totalMensuelGlobal|number_format(0, ',', ' ') }} fcfa</th>
            <th></th>
        </tr>
        <tr style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <th colspan=\"3\">Total Annuel </th>
            <th></th>
            <th>{{ totalAnnuelGlobal|number_format(0, ',', ' ') }} fcfa</th>
        </tr>
    </tfoot>
</table>

{% endblock %}

{% block PageTitre %}
Montants mensuels et annuels  : {{ propertyName }}
{% endblock %}
", "ristournes/detail.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\ristournes\\detail.html.twig");
    }
}
