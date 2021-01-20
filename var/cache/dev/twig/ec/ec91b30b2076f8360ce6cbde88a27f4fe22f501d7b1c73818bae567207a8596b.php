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

/* blog/show.html.twig */
class __TwigTemplate_36237ebc7027a2e7087c1e59dcaa2d965ddcc7c5cf609a40f7d8752fe730a6dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<article>
\t\t<h2>
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t</h2>
\t\t<div class=\"metadata\">
\t\t\tEcrit le
\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "CreatedAt", [], "any", false, false, false, 10), "d/m/Y"), "html", null, true);
        echo "
\t\t\tà
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "CreatedAt", [], "any", false, false, false, 12), "H:i"), "html", null, true);
        echo "
\t\t\tdans la catégorie
\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
\t\t<div class=\"content\">
\t\t\t<img src=";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), "html", null, true);
        echo " alt=\"\">
\t\t\t";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17);
        echo "

\t\t</div>
\t</article>

\t<section id=\"commentaires\">
\t\t<h1>
\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "comments", [], "any", false, false, false, 24)), "html", null, true);
        echo "
\t\t\tCommentaires :
\t\t</h1>
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "comments", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 28
            echo "\t\t\t<div class=\"comment\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t\t(<small>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 32), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 35);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "
\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
\t\t\t\tModifier l'article
\t\t\t</a>
\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
\t\t\t\tSupprimer
\t\t\t</a>
\t\t\t";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 49, $this->source); })()), 'form_start');
            echo "
\t\t\t";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 50, $this->source); })()), "Author", [], "any", false, false, false, 50), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
            echo "
\t\t\t";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 51, $this->source); })()), "Content", [], "any", false, false, false, 51), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\tAjouter un commentaire
\t\t\t</button>

\t\t\t";
            // line 57
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 57, $this->source); })()), 'form_end');
            echo "

\t\t";
        } else {
            // line 60
            echo "\t\t\t<h5>
\t\t\t\tVous ne pouvez pas mettre de commentaires si vous n'êtes pas connectés
\t\t\t\t<a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\tSe connecter
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 67
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  191 => 62,  187 => 60,  181 => 57,  172 => 51,  168 => 50,  164 => 49,  158 => 46,  152 => 43,  149 => 42,  147 => 41,  144 => 40,  133 => 35,  127 => 32,  123 => 31,  118 => 28,  114 => 27,  108 => 24,  98 => 17,  94 => 16,  89 => 14,  84 => 12,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<article>
\t\t<h2>
\t\t\t{{article.title}}
\t\t</h2>
\t\t<div class=\"metadata\">
\t\t\tEcrit le
\t\t\t{{article.CreatedAt | date('d/m/Y')}}
\t\t\tà
\t\t\t{{article.CreatedAt | date('H:i')}}
\t\t\tdans la catégorie
\t\t\t{{ article.category.title }}</div>
\t\t<div class=\"content\">
\t\t\t<img src={{ article.image }} alt=\"\">
\t\t\t{{ article.content | raw }}

\t\t</div>
\t</article>

\t<section id=\"commentaires\">
\t\t<h1>
\t\t\t{{article.comments | length }}
\t\t\tCommentaires :
\t\t</h1>
\t\t{% for comment in article.comments %}
\t\t\t<div class=\"comment\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t{{ comment.author}}
\t\t\t\t\t\t(<small>{{ comment.createdAt | date('d/m/Y à H:i') }}</small>)
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ comment.content | raw }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}

\t\t{% if app.user %}

\t\t\t<a href=\"{{path('blog_edit', {'id' : article.id})}}\" class=\"btn btn-primary\">
\t\t\t\tModifier l'article
\t\t\t</a>
\t\t\t<a href=\"{{path('article_delete', {'id' : article.id})}}\" class=\"btn btn-primary\">
\t\t\t\tSupprimer
\t\t\t</a>
\t\t\t{{ form_start (commentForm) }}
\t\t\t{{ form_row(commentForm.Author, {'attr': {'placeholder' : \"Votre nom\" }}) }}
\t\t\t{{ form_row(commentForm.Content, {'attr': {'placeholder' : \"Votre commentaire\" }}) }}

\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\tAjouter un commentaire
\t\t\t</button>

\t\t\t{{ form_end (commentForm) }}

\t\t{% else %}
\t\t\t<h5>
\t\t\t\tVous ne pouvez pas mettre de commentaires si vous n'êtes pas connectés
\t\t\t\t<a href=\"{{ path('security_login') }}\" class=\"btn btn-primary\">
\t\t\t\t\tSe connecter
\t\t\t\t</a>
\t\t\t</h5>
\t\t{% endif %}
\t{% endblock %}
", "blog/show.html.twig", "/Users/adelevercaygne/Desktop/Symfony/demo/templates/blog/show.html.twig");
    }
}
