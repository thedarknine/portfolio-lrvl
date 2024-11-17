<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make sure CompanySeeder runs first
        $this->call(CompanySeeder::class);
        // Now we can reference companies
        $companies = Company::all();

        $skills = Skill::all();

        $experiencesList = [
            ['label' => 'stage-limos', 'title' => 'Stagiaire en milieu de recherche', 'subtitle' => "Stage de recherche au sein de l'équipe Algorithmique au LIMOS",
                'description' => '
    <p>Sujet : <em>Symétrie dans les familles d\'ensembles : une étude algorithmique</em></p>
    <p class="text-center pt1"><a class="btn waves-effect btn-nine hvr-grow-shadow grey darken-1" href="http://docs.carolinenoyer.fr/pdf/cnoyer-rapportdestage-dea-2005.pdf" target="_blank" title="Téléchargez le rapport de stage"><i class="fas fa-paperclip" aria-hidden="true"></i> Rapport de stage</a></p>
    <p class="text-justify pt5 text-09"><i>Résumé : </i>On souhaite définir la notion de symétrie entre attributs dans une famille d\'ensembles. Une première réponse a été proposée par R. Medina et L. Nourine à travers la notion de clones. Deux attributs sont clones s\'ils sont interchangeables dans les ensembles de la famille. Ici, on s\'intéresse au degré de symétrie entre deux attributs : la similitude. Cette mesure est représentée dans une matrice indiquant pour tout couple d\'attributs, la "distance" qui les sépare. Différents algorithmes de calcul de cette similitude sont proposés, et, sous certaines conditions, l\'un d\'entre eux est optimal. Enfin, nous montrons le lien qui existe entre attributs clones et sommets jumeaux d\'un graphe.</p>
    <div class="pt5 mb1">
        <p><strong class="">Publication</strong></p>
        <div class="bordered-grey ml2 pl1">
             <p class="text-justify">Deux articles de recherche ont été rédigés à l\'issue de ce stage dont un, <strong>"Efficient algorithms for clone items detection"</strong>, publié pour la conférence <em>CLA\'05 (Concept Lattices and Their Applications) - République Tchèque</em></p>
             <p class="mt0 mr2"><a class="btn waves-effect btn-nine hvr-grow-shadow grey darken-1" href="http://docs.carolinenoyer.fr/pdf/article-clones-cla05.pdf" target="_blank" title="Efficient algorithms for clone items detection"><i class="fas fa-paperclip" aria-hidden="true"></i> Article publié</a></p>
        </div>
    </div>',
                'start_date' => '2005-02-01', 'end_date' => '2005-07-31', 'company' => 'limos', 'skills' => ['cplus', 'latex']],
            ['label' => 'stage-periscope', 'title' => 'Stagiaire études de projets Internet', 'subtitle' => 'Stage en entreprise dans le cadre du Master Professionnel SIPPE 2ème année',
                'description' => '
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Analyse de la demande des internautes selon des mots-clés afin d\'optimiser la structure du site Internet et son référencement</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Rédaction de recommandations pour la restructuration de sites, la modiﬁcation du contenu, l\'étude de concurrence, ou encore la mise en place d\'une stratégie (animations, jeux, ...)</span></li>
    </ul>
    <p class="text-justify pt5 text-09"><i>Résumé : </i>Le domaine de la communication sur Internet est très complexe. 
    Dans le contexte de la société Periscope, le travail d\'un chef de projet va au-delà de la simple étude d\'architecture du site et du choix de technologies, 
    il s\'étend vers l\'étude afin de pouvoir apporter un réel conseil aux clients. Ainsi, mon travail s\'est orienté en majorité vers l\'étude de marchés. 
    Ce type d\'analyse doit pouvoir permettre de savoir quels sont les éléments à mettre en avant sur le site, aussi bien au niveau fonctionnel qu\'au niveau des produits. 
    Une fois l\'étude finalisée, on va pouvoir rédiger des recommandations auprès du client et lui permettre de bénéficier de la réalisation d\'un site dont le contenu sera en adéquation avec la demande actuelle. 
    L\'une des dernières étapes avant la mise en production consiste à réaliser un zoning des différentes pages du site, c\'est-à-dire préciser à quel endroit se situeront les éléments, 
    ce n\'est qu\'ensuite que le directeur artistique pourra réaliser la maquette du site.</p>',
                'start_date' => '2006-02-01', 'end_date' => '2006-06-30', 'company' => 'periscope-creations', 'skills' => []],
            ['label' => 'stage-actifdesign', 'title' => 'Stagiaire analyse et développement', 'subtitle' => 'Stage en entreprise dans le cadre du Master Professionnel SIPPE 2ème année',
                'description' => '
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Conception et réalisation d\'un assistant pour la rédaction des cahiers des charges</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Génération de fichiers PDF via l\'interface à partir de sources <em>LaTeX</em></span></li>
    </ul>
    <p class="text-center pt1"><a class="btn waves-effect btn-nine hvr-grow-shadow grey darken-1" href="http://docs.carolinenoyer.fr/pdf/cnoyer-rapportdestage-m2pro-2006.pdf" target="_blank" title="Téléchargez le rapport de stage"><i class="fas fa-paperclip" aria-hidden="true"></i> Rapport de stage</a></p>
    <p class="text-justify pt5 text-09"><i>Résumé : </i>La société Actifdesign souhaite donc développer des solutions de catalogues en ligne ou des solutions de e-commerce. L\'inconvénient de la mise en place de tels projets réside dans la rédaction du cahier des charges, devant être remis rapidement au client. Afin de réduire les temps de rédaction, sans en perdre le sérieux ni la pertinence, elle souhaite factoriser au maximum les parties communes entre les différents cahiers des charges. En effet, ce type de travail passe très souvent par une phase de copier/coller intempestifs !<br>
    Ce projet nécessite donc plusieurs documents : le cahier des charges, le devis pour le client, les fiches navettes destinées aux développeurs (contenant les modules à installer et les délais à respecter), ainsi que celle pour le graphiste.<br>
    Cet outil doit donc proposer une rédaction semi-automatique de ces documents à partir de questionnaires précis. Ainsi, mon projet permet de répondre à la mise en place d\'une organisation du travail tout en respectant la contrainte de coût.</p>',
                'start_date' => '2006-07-01', 'end_date' => '2006-09-30', 'company' => 'actif-design', 'skills' => ['php', 'mysql', 'xhtmlcss', 'linux', 'photoshop']],
            ['label' => 'dev-web', 'title' => 'Développeur web et chargée de projets', 'subtitle' => 'Développement de sites Internet et de solutions innovantes',
                'description' => '
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Rédaction de cahiers des charges et planification de projets</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement web</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Intégration de sites valides aux normes du <b>W3C</b></span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement de l\'outil &nbsp;<a href="http://www.carolinenoyer.fr/projets#nevotec" title="NevoTec">NevoTec</a></span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement de l\'outil &nbsp;<a href="http://www.carolinenoyer.fr/projets#nevoprint" title="NevoPrint">NevoPrint</a></span></li>
    </ul>',
                'start_date' => '2006-10-01', 'end_date' => '2008-07-15', 'company' => 'actif-design', 'skills' => ['php', 'mysql', 'xhtmlcss', 'linux', 'photoshop', 'apache']],
            ['label' => 'inge-dev', 'title' => 'Ingénieur de développement', 'subtitle' => "Développement de l'outil Cadenza",
                'description' => '
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement d\'une plate-forme interne de gestion et de suivi de projets</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Mise en place de solutions afin de faciliter le travail en équipe</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Maintenance du site de l\'entreprise et du site support produits</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Sécurisation du logiciel <a href="https://www.allegorithmic.com/substance" target="_blank"><strong>Substance</strong></a> développé par la société</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Administration système pour des postes sous Windows XP, Windows Seven, Linux Fedora</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Administration réseau : gestion du firewall <strong>MonoWall</strong>, gestion de disques en partage <strong>FreeNAS</strong></span></li>
    </ul>',
                'start_date' => '2008-07-16', 'end_date' => '2012-04-30', 'company' => 'allegorithmic', 'skills' => ['xhtmlcss', 'php', 'mysql', 'zend', 'mvc', 'linux', 'svn', 'drupal', 'illustrator', 'photoshop', 'windows']],
            ['label' => 'dev-mfpdd', 'title' => 'Développeur web fullstack', 'subtitle' => 'Conception et développement du projet PREV@PASS',
                'description' => '
    <p class="text-justify pt5">Le Projet <a class="" href="https://www.sante-auvergne.fr/" title="PREVAPASS" target="_blank"><strong>PREV@PASS</strong></a> (Parcours Accompagné Soins et Santé) permet une prise en charge coordonnée des patients dans le cadre d\'une médecine de parcours, incluant la prévention et l\'éducation thérapeutique du patient. Ce nouveau système d\'information vise à mieux synchroniser les actions de tous les professionnels du médical et du médico-social au profit de la prise en charge de qualité et sécurisée du patient.</p>
    <p class="text-center"><a class="" href="https://www.sante-auvergne.fr/" title="Site Prev@PASS" target="_blank"><img src="http://carolinenoyer.fr/images/company/logo_prevapass.jpg" class="rounded responsive-img hvr-grow-shadow image-btn" alt="Prev@PASS"></a></p>
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Création graphique de l\'interface</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement front-end</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement back-end, sur une architecture MVC utilisant le micro-framework <b>Silex</b> (basé sur <b>Symfony2</b>)</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Mise en place de webservices</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i><span>Scripts pour l\'automatisation des tâches</span></li>
    </ul>',
                'start_date' => '2015-05-04', 'end_date' => '2017-07-16', 'company' => 'mfpdd', 'skills' => ['html', 'css', 'jquery', 'ajax', 'bootstrap', 'twig', 'responsive', 'php', 'mysql', 'webservices', 'mvc', 'python', 'composer', 'git']],
            ['label' => 'dev-coffreo', 'title' => 'Développeur PHP Senior', 'subtitle' => 'Conception et développement des produits Coffreo Pro',
                'description' => '
    <p class="text-justify pt5"><a class="" href="http://www.coffreo.biz/" title="Coffreo" target="_blank"><strong>COFFREO</strong></a>, acteur majeur de la dématérialisation RH et du coffre-fort numérique, sécurise et rend agile la relation entre employeurs et leurs salariés là où elle représente un fort enjeu pour leur activité, et accompagne les salariés quelle que soit leur situation afin de faciliter l’accès à l’emploi.</p>
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Squad leader d\'un nouveau produit pour l\'offre Coffreo Pro (gestion de projet)</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Analyse et rédaction des spécifications techniques du produit</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Suivi des développements de l\'équipe et synchronisation avec le chef de projets</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Support clients du produit</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Développement Back &amp; API sur le Framework Symfony sur le principe de micro services</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Création d\'un service supplémentaire basé sur API-Platform</span></li>
    </ul>',
                'start_date' => '2017-07-17', 'end_date' => '2019-11-03', 'company' => 'coffreo', 'skills' => ['html', 'materialize', 'twig', 'responsive', 'php', 'mongodb', 'symfony', 'rabbitmq', 'linux', 'composer', 'git', 'docker', 'kibana', 'postman', 'mailchimp', 'slack']],
            ['label' => 'po-coffreo', 'title' => 'Product Owner', 'subtitle' => 'Animation des sprints et coordination des développements',
                'description' => '
    <p class="text-justify pt5">Charnière entre l’équipe technique, l’équipe marketing et les clients.</p>
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Gestion de projet méthodologie Agile / Scrum</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Création et gestion du Product Backlog</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Rédaction des Users Stories</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Priorisation des besoins et exigences métier</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Suivi de l’avancement des projets, du planning de livraison et des engagements</span></li>
    </ul>',
                'start_date' => '2019-11-04', 'end_date' => '2022-07-17', 'company' => 'coffreo', 'skills' => ['agile', 'jira', 'figma', 'python', 'moqups', 'trello', 'confluence', 'kibana', 'postman', 'mailchimp', 'slack']],
            ['label' => 'po-perfect', 'title' => 'Product Owner', 'subtitle' => 'Encadrement R&D et qualité produit',
                'description' => '
    <p class="text-justify pt5">Charnière entre les équipes de développement, l\'équipe design et l\'équipe qualité.</p>
    <ul class="missions">
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Encadrement des équipes de développement</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>Qualité Produit</span></li>
        <li><i class="fas fa-tasks" aria-hidden="true"></i> <span>	
    Rédaction des expressions de besoin et spécifications fonctionnelles</span></li>
    </ul>',
                'start_date' => '2022-07-18', 'end_date' => null, 'company' => 'perfect-memory', 'skills' => ['agile', 'jira', 'product-discovery', 'confluence', 'teams']],
        ];

        foreach ($experiencesList as $experience) {
            // Get Company
            $experience['company_id'] = $companies->firstWhere('label', $experience['company'])->id;
            $skillsList = $experience['skills'];
            unset($experience['company'], $experience['skills']);
            $new = Experience::create($experience);
            // Get Skills
            foreach ($skillsList as $skill) {
                if ($skills->firstWhere('label', $skill)) {
                    $new->skills()->attach($skills->firstWhere('label', $skill)->id);
                }
            }
            unset($new, $skillsList);
        }

        /* Check inserted values
        SELECT exp.title, sk.name
        FROM experience_skill es
        LEFT JOIN experiences exp
        ON es.experience_id = exp.id
        LEFT JOIN skills sk
        ON es.skill_id = sk.id
        */
    }
}
