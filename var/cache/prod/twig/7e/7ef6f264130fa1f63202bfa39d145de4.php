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

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f6433a135cb3e9bb9f813fb81d2d9425 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 61
        echo "
";
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('form_label', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('choice_label', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('radio_label', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 123
        echo "
";
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('form_row', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('button_row', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('choice_row', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('date_row', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('time_row', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_row', $context, $blocks);
        // line 180
        echo "
";
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('form_errors', $context, $blocks);
        // line 194
        echo "
";
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 13), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 20
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 57
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " form-control"))]);
        // line 59
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 64
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " control-label"))]);
        // line 66
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 69
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 71), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 72
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 75
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 78
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 81
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 84
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 87
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        if (array_key_exists("widget", $context)) {
            // line 90
            if (($context["required"] ?? null)) {
                // line 91
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 91), "")) : ("")) . " required"))]);
            }
            // line 93
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 94
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 95
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 96
($context["name"] ?? null), "%id%" =>                     // line 97
($context["id"] ?? null)]);
                } else {
                    // line 100
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 103
            echo "<label";
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 103, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            echo ">";
            // line 105
            echo ($context["widget"] ?? null);
            echo " ";
            if ( !(($context["label"] ?? null) === false)) {
                // line 106
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 107
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 108
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                    } else {
                        // line 110
                        echo ($context["label"] ?? null);
                    }
                } else {
                    // line 113
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 114
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 116
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                    }
                }
            }
            // line 120
            echo "</label>";
        }
    }

    // line 126
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        $context["widget_attr"] = [];
        // line 128
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 129
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 131
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 131), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 131, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo " ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        echo " ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo " ";
        // line 136
        echo "</div> ";
    }

    // line 139
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 140)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 140), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 140, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 142
        echo "</div>";
    }

    // line 145
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        $context["force_error"] = true;
        // line 147
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 150
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        $context["force_error"] = true;
        // line 152
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 155
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        $context["force_error"] = true;
        // line 157
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 160
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        $context["force_error"] = true;
        // line 162
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 165
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 166, $this->getSourceContext());
        }
        $__internal_compile_11 = twig_to_array($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        echo ">";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 170
        echo "</div>";
    }

    // line 173
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "<div";
        $__internal_compile_12 = $context;
        $__internal_compile_13 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 174), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_13)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 174, $this->getSourceContext());
        }
        $__internal_compile_13 = twig_to_array($__internal_compile_13);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_13));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_12;
        echo ">";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 178
        echo "</div>";
    }

    // line 183
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 185
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 186
            echo "    <ul class=\"list-unstyled\">";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 188
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 188), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "</ul>
    ";
            // line 191
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 197
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 199
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 199)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 199), "")) : ("")) . " help-block"))]);
            // line 200
            echo "<span id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_14 = $context;
            $__internal_compile_15 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_15)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 200, $this->getSourceContext());
            }
            $__internal_compile_15 = twig_to_array($__internal_compile_15);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_15));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_14;
            echo ">";
            // line 201
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 202
                if ((($context["help_html"] ?? null) === false)) {
                    // line 203
                    echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 205
                    echo ($context["help"] ?? null);
                }
            } else {
                // line 208
                if ((($context["help_html"] ?? null) === false)) {
                    // line 209
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 211
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 214
            echo "</span>";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  645 => 214,  641 => 211,  638 => 209,  636 => 208,  632 => 205,  629 => 203,  627 => 202,  625 => 201,  611 => 200,  609 => 199,  607 => 198,  603 => 197,  594 => 191,  591 => 190,  583 => 188,  579 => 187,  577 => 186,  571 => 185,  569 => 184,  565 => 183,  561 => 178,  559 => 177,  557 => 176,  555 => 175,  543 => 174,  539 => 173,  535 => 170,  533 => 169,  531 => 168,  529 => 167,  517 => 166,  513 => 165,  509 => 162,  507 => 161,  503 => 160,  499 => 157,  497 => 156,  493 => 155,  489 => 152,  487 => 151,  483 => 150,  479 => 147,  477 => 146,  473 => 145,  469 => 142,  467 => 141,  455 => 140,  451 => 139,  447 => 136,  444 => 135,  442 => 134,  439 => 133,  436 => 132,  424 => 131,  421 => 129,  419 => 128,  417 => 127,  413 => 126,  408 => 120,  403 => 116,  400 => 114,  398 => 113,  394 => 110,  391 => 108,  389 => 107,  387 => 106,  383 => 105,  371 => 103,  367 => 100,  364 => 97,  363 => 96,  362 => 95,  360 => 94,  358 => 93,  355 => 91,  353 => 90,  351 => 89,  347 => 87,  343 => 84,  341 => 82,  337 => 81,  333 => 78,  331 => 76,  327 => 75,  323 => 72,  321 => 71,  317 => 69,  313 => 66,  311 => 65,  307 => 64,  303 => 59,  301 => 58,  297 => 57,  292 => 53,  290 => 52,  288 => 51,  285 => 49,  283 => 48,  281 => 47,  277 => 46,  272 => 42,  270 => 41,  268 => 40,  265 => 38,  263 => 37,  261 => 36,  257 => 35,  252 => 31,  248 => 29,  242 => 27,  240 => 26,  238 => 25,  232 => 23,  230 => 22,  227 => 21,  224 => 20,  221 => 19,  219 => 18,  215 => 17,  211 => 14,  209 => 13,  205 => 12,  201 => 9,  198 => 7,  196 => 6,  192 => 5,  188 => 197,  185 => 196,  182 => 194,  180 => 183,  177 => 182,  174 => 180,  172 => 173,  169 => 172,  167 => 165,  164 => 164,  162 => 160,  159 => 159,  157 => 155,  154 => 154,  152 => 150,  149 => 149,  147 => 145,  144 => 144,  142 => 139,  139 => 138,  137 => 126,  134 => 125,  131 => 123,  129 => 87,  126 => 86,  124 => 81,  121 => 80,  119 => 75,  116 => 74,  114 => 69,  111 => 68,  109 => 64,  106 => 63,  103 => 61,  101 => 57,  98 => 56,  96 => 46,  93 => 45,  91 => 35,  88 => 34,  86 => 17,  83 => 16,  81 => 12,  78 => 11,  76 => 5,  73 => 4,  70 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
