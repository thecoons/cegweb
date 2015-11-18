<?php

/* CEGApplicationBundle:Default:club.html.twig */
class __TwigTemplate_3656ce51e1fd0c24559422e7abbb642908fc66079a018ca80d92c5c0e9d0d029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGApplicationBundle:Default:club.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CEGApplicationBundle::baseLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0be49fe184cb43806f31175fd8458cfad24d6295840e32fc81b8b173422735f1 = $this->env->getExtension("native_profiler");
        $__internal_0be49fe184cb43806f31175fd8458cfad24d6295840e32fc81b8b173422735f1->enter($__internal_0be49fe184cb43806f31175fd8458cfad24d6295840e32fc81b8b173422735f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle:Default:club.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be49fe184cb43806f31175fd8458cfad24d6295840e32fc81b8b173422735f1->leave($__internal_0be49fe184cb43806f31175fd8458cfad24d6295840e32fc81b8b173422735f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f721e24ff996af97d84d12da621e788118541e15d6de0145aff664ca1a83440 = $this->env->getExtension("native_profiler");
        $__internal_3f721e24ff996af97d84d12da621e788118541e15d6de0145aff664ca1a83440->enter($__internal_3f721e24ff996af97d84d12da621e788118541e15d6de0145aff664ca1a83440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"section\">
  <div class=\"container\">
    <h1 class=\"blue-text text-darken-2 center\">Le Club</h1>
    <ul class=\"collapsible popout white-text\" data-collapsible=\"accordion\">
    <li>
      <div class=\"collapsible-header blue \"><i class=\"material-icons\">description</i>Tarifs et inscriptions</div>
      <div class=\"collapsible-body black-text\">

        <p class=\"bold italic large\"> <u> Le dossier d'inscription pour la saison 2015/2016 comprend les éléments suivants à remplir et déposer au secrétariat ou aux Maîtres d'Armes:</u> <br> <br>
        <i class=\"small material-icons\">label_outline</i>  Une fiche d'inscription enfant ou adulte <br>
        <i class=\"small material-icons\">label_outline</i>  Un certificat médical rempp, daté et signé par le médecin de votre choix avec le cachet du médecin (formulaire de votre médecin ou formulaire du cercle d'escrime) <br>
        <i class=\"small material-icons\">label_outline</i> 2 enveloppes timbrées à l'adresse de l'adhérent (ou 2 enveloppes timbrées par famille si plusieurs adhérents) <br>
        <i class=\"small material-icons\">label_outline</i>  Le réglement de la cotisation annuelle pour le CEPG et de la licence pour la FFE (en espèces ou par chèque à l'ordre du C.E.P.G). Le détail sur le tarif des cotisations et des licences en fonction de la catégorie est disponible dans le document tarif cotisations par catégorie 2015-2016 <br></p>
        <p><u>  Pour une nouvelle inscription, 2 séances d'essai gratuites sont proposées. Plus d'informations sont disponibles sur le memento d'inscription 2015-2016 </u><br> <br> <br></p>

      </div>
    </li>
    <li>
      <div class=\"collapsible-header blue\"><i class=\"material-icons\">av_timer</i>Horaires</div>
      <div class=\"collapsible-body black-text\">
        <p>Les entrainements se dérouleront à la salle d'Armes intercommunale du mardi au samedi.</p>
        <div class=\"container\">

        <table>
        <thead>
          <tr>
              <th data-field=\"jr\">Jours</th>
              <th data-field=\"hr\">Heures</th>
              <th data-field=\"ca\">Catégories</th>
              <th data-field=\"ar\">Armes</th>
              <th data-field=\"ni\">Niveaux</th>
              <th data-field=\"li\">Lieux</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Mardi</td>
            <td>14h30 - 16h30</td>
            <td>Horraires Amenagés</td>
            <td>Epée</td>
            <td>Tous</td>
            <td>Grasse</td>
          </tr>
          <tr>
            <td></td>
            <td>17h30 - 19h00</td>
            <td>Benjamins</td>
            <td></td>
            <td></td>
            <td>Grasse</td>
          </tr>
          <tr>
            <td></td>
            <td>17h30 - 19h00</td>
            <td>Tous</td>
            <td></td>
            <td></td>
            <td>La Roquette sur Siagne</td>
          </tr>
          <tr>
            <td>Mercredi</td>
            <td>14h00 - 15h30</td>
            <td>Pupilles</td>
            <td>Fleuret</td>
            <td>Confirmés</td>
            <td>Grasse</td>
          </tr>
          <tr>
            <td></td>
            <td>15h30 - 16h45</td>
            <td>Poussins Pupilles</td>
            <td>Fleuret</td>
            <td>Débutants</td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td>16h45 - 18h45</td>
            <td>Minimes</td>
            <td>Epée</td>
            <td>Confirmés</td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td>17h30 - 19h00 </td>
            <td>Cadets Juniors Séniors</td>
            <td>Epée</td>
            <td>Tous</td>
            <td></td>
          </tr>
          <tr>
            <td>Jeudi</td>
            <td>17h30 - 19h00 </td>
            <td>Benjamins</td>
            <td>Epée</td>
            <td>Tous</td>
            <td>Grasse</td>
          </tr>
          <tr>
            <td></td>
            <td>19h00 - 20h30</td>
            <td>Adultes</td>
            <td>Fleuret</td>
            <td>Tous</td>
            <td></td>
          </tr>
          <tr>
            <td>Vendredi</td>
            <td>14h30 - 16h45</td>
            <td>Horaires Amenages</td>
            <td>Epée</td>
            <td>Tous</td>
            <td>Grasse</td>
          </tr>
          <tr>
            <td></td>
            <td>17h30 - 19h00</td>
            <td>Minimes</td>
            <td></td>
            <td>Confirmés</td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td>19h00 - 21h00</td>
            <td>Cadets Juniors Séniors</td>
            <td></td>
            <td>Tous</td>
            <td></td>
          </tr>
          <tr>
            <td>Samedi</td>
            <td>9h30 - 10h45</td>
            <td>Pupilles</td>
            <td>Fleuret</td>
            <td>Confirmés</td>
            <td>Grasse</td>
          </tr>
          <tr>
            <td></td>
            <td>10h45 - 12h00</td>
            <td>Poussins Pupilles</td>
            <td>Fleuret</td>
            <td>Débutants</td>
            <td></td>
          </tr>
        </tbody>
      </table>
        </div>
      </div>
    </li>
    <li>
      <div class=\"collapsible-header blue\"><i class=\"material-icons\">recent_actors</i>Les Maîtres d'armes</div>
      <div class=\"collapsible-body black-text\"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class=\"collapsible-header blue\"><i class=\"material-icons\">person_pin</i>Contacts</div>
      <div class=\"collapsible-body black-text\"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
  </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.collapsible').collapsible({
    accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
  });
});
</script>
";
        
        $__internal_3f721e24ff996af97d84d12da621e788118541e15d6de0145aff664ca1a83440->leave($__internal_3f721e24ff996af97d84d12da621e788118541e15d6de0145aff664ca1a83440_prof);

    }

    public function getTemplateName()
    {
        return "CEGApplicationBundle:Default:club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <div class="section">*/
/*   <div class="container">*/
/*     <h1 class="blue-text text-darken-2 center">Le Club</h1>*/
/*     <ul class="collapsible popout white-text" data-collapsible="accordion">*/
/*     <li>*/
/*       <div class="collapsible-header blue "><i class="material-icons">description</i>Tarifs et inscriptions</div>*/
/*       <div class="collapsible-body black-text">*/
/* */
/*         <p class="bold italic large"> <u> Le dossier d'inscription pour la saison 2015/2016 comprend les éléments suivants à remplir et déposer au secrétariat ou aux Maîtres d'Armes:</u> <br> <br>*/
/*         <i class="small material-icons">label_outline</i>  Une fiche d'inscription enfant ou adulte <br>*/
/*         <i class="small material-icons">label_outline</i>  Un certificat médical rempp, daté et signé par le médecin de votre choix avec le cachet du médecin (formulaire de votre médecin ou formulaire du cercle d'escrime) <br>*/
/*         <i class="small material-icons">label_outline</i> 2 enveloppes timbrées à l'adresse de l'adhérent (ou 2 enveloppes timbrées par famille si plusieurs adhérents) <br>*/
/*         <i class="small material-icons">label_outline</i>  Le réglement de la cotisation annuelle pour le CEPG et de la licence pour la FFE (en espèces ou par chèque à l'ordre du C.E.P.G). Le détail sur le tarif des cotisations et des licences en fonction de la catégorie est disponible dans le document tarif cotisations par catégorie 2015-2016 <br></p>*/
/*         <p><u>  Pour une nouvelle inscription, 2 séances d'essai gratuites sont proposées. Plus d'informations sont disponibles sur le memento d'inscription 2015-2016 </u><br> <br> <br></p>*/
/* */
/*       </div>*/
/*     </li>*/
/*     <li>*/
/*       <div class="collapsible-header blue"><i class="material-icons">av_timer</i>Horaires</div>*/
/*       <div class="collapsible-body black-text">*/
/*         <p>Les entrainements se dérouleront à la salle d'Armes intercommunale du mardi au samedi.</p>*/
/*         <div class="container">*/
/* */
/*         <table>*/
/*         <thead>*/
/*           <tr>*/
/*               <th data-field="jr">Jours</th>*/
/*               <th data-field="hr">Heures</th>*/
/*               <th data-field="ca">Catégories</th>*/
/*               <th data-field="ar">Armes</th>*/
/*               <th data-field="ni">Niveaux</th>*/
/*               <th data-field="li">Lieux</th>*/
/*           </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*           <tr>*/
/*             <td>Mardi</td>*/
/*             <td>14h30 - 16h30</td>*/
/*             <td>Horraires Amenagés</td>*/
/*             <td>Epée</td>*/
/*             <td>Tous</td>*/
/*             <td>Grasse</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>17h30 - 19h00</td>*/
/*             <td>Benjamins</td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td>Grasse</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>17h30 - 19h00</td>*/
/*             <td>Tous</td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td>La Roquette sur Siagne</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Mercredi</td>*/
/*             <td>14h00 - 15h30</td>*/
/*             <td>Pupilles</td>*/
/*             <td>Fleuret</td>*/
/*             <td>Confirmés</td>*/
/*             <td>Grasse</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>15h30 - 16h45</td>*/
/*             <td>Poussins Pupilles</td>*/
/*             <td>Fleuret</td>*/
/*             <td>Débutants</td>*/
/*             <td></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>16h45 - 18h45</td>*/
/*             <td>Minimes</td>*/
/*             <td>Epée</td>*/
/*             <td>Confirmés</td>*/
/*             <td></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>17h30 - 19h00 </td>*/
/*             <td>Cadets Juniors Séniors</td>*/
/*             <td>Epée</td>*/
/*             <td>Tous</td>*/
/*             <td></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Jeudi</td>*/
/*             <td>17h30 - 19h00 </td>*/
/*             <td>Benjamins</td>*/
/*             <td>Epée</td>*/
/*             <td>Tous</td>*/
/*             <td>Grasse</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>19h00 - 20h30</td>*/
/*             <td>Adultes</td>*/
/*             <td>Fleuret</td>*/
/*             <td>Tous</td>*/
/*             <td></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Vendredi</td>*/
/*             <td>14h30 - 16h45</td>*/
/*             <td>Horaires Amenages</td>*/
/*             <td>Epée</td>*/
/*             <td>Tous</td>*/
/*             <td>Grasse</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>17h30 - 19h00</td>*/
/*             <td>Minimes</td>*/
/*             <td></td>*/
/*             <td>Confirmés</td>*/
/*             <td></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>19h00 - 21h00</td>*/
/*             <td>Cadets Juniors Séniors</td>*/
/*             <td></td>*/
/*             <td>Tous</td>*/
/*             <td></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Samedi</td>*/
/*             <td>9h30 - 10h45</td>*/
/*             <td>Pupilles</td>*/
/*             <td>Fleuret</td>*/
/*             <td>Confirmés</td>*/
/*             <td>Grasse</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td></td>*/
/*             <td>10h45 - 12h00</td>*/
/*             <td>Poussins Pupilles</td>*/
/*             <td>Fleuret</td>*/
/*             <td>Débutants</td>*/
/*             <td></td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*         </div>*/
/*       </div>*/
/*     </li>*/
/*     <li>*/
/*       <div class="collapsible-header blue"><i class="material-icons">recent_actors</i>Les Maîtres d'armes</div>*/
/*       <div class="collapsible-body black-text"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*     </li>*/
/*     <li>*/
/*       <div class="collapsible-header blue"><i class="material-icons">person_pin</i>Contacts</div>*/
/*       <div class="collapsible-body black-text"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*     </li>*/
/*   </ul>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/*   $('.collapsible').collapsible({*/
/*     accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style*/
/*   });*/
/* });*/
/* </script>*/
/* {% endblock body %}*/
/* */
