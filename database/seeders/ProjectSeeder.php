<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectsList = [
            ['label' => 'datamining', 'name' => 'Fouille de données interactive par navigation', 'period' => 'De avril 2004 à juillet 2004', 'year' => 2004,
                'description' => '
    Réalisation d\'une bibliothèque <b>C++</b> à l\'aide de la <b>STL</b> afin de l\'interfacer avec l\'outil de navigation.
    <p class="center-align pt-20"><a class="btn btn-flat btn-nine waves-effect waves-light hvr-grow-shadow" href="https://web.archive.org/web/20230205074712/http://docs.carolinenoyer.fr/pdf/cnoyer-rapportdestage-maitrise-2004.pdf" title="Rapport de stage"><i class="fas fa-paperclip mr-5" aria-hidden="true"></i> Rapport de stage</a></p>',
                'logo' => 'stagemaitrise.png'],
            ['label' => 'nevotec', 'name' => 'Génération de sites Internet valides W3C', 'period' => 'De novembre 2006 à avril 2007', 'year' => 2006,
                'description' => '
    <p><strong>Framework de génération de sites Internet permettant de produire des pages valides XHTML.</strong>
        <br>
        Projet professionnel réalisé pour la société Actifdesign.</p>
    <ul class="missions">
        <li>Utilisation du langage <b>Java</b> pour la partie métier</li>
        <li>Utilisation de la spécification <b>J2ee</b> pour la génération des pages HTML</li>
        <li>Utilisation du langage <b>XML</b> pour le stockage des données</li>
    </ul>',
                'logo' => 'nevotec.png'],
            ['label' => 'nevoprint', 'name' => 'Génération de fichiers PDF haute définition', 'period' => 'De février à novembre 2007', 'year' => 2007,
                'description' => '
    <p><strong>Framework de génération de produits imprimés haute définition au format PDF.</strong>
        <br>
        Projet professionnel réalisé pour la société Actifdesign.</p>
    <ul class="missions">
        <li>Utilisation du langage <b>Java</b> pour la partie métier</li>
        <li>Utilisation du langage <b>XML</b> pour le stockage des données</li>
        <li>Génération de documents PDF haute définition à l\'aide de bibliothèques Java</li>
    </ul>',
                'logo' => 'nevoprint.png'],
            ['label' => 'randos', 'name' => 'Création graphique et développement', 'period' => 'Novembre 2007', 'year' => 2008,
                'description' => "Ce projet a pour but de valoriser les randonnées en Auvergne, en proposant des circuits de randonnées par le biais de photos, d'un bref résumé et d'avis sur les parcours.",
                'screenshots' => 'website-randos.png', 'logo' => 'randos.png'],
            ['label' => 'ttc', 'name' => 'Création graphique Site Internet', 'period' => 'Octobre 2010', 'year' => 2010,
                'description' => 'Création graphique du site Internet du BDE TeamTanesC.',
                'screenshots' => 'website-teamtanesc.png', 'logo' => 'ttc.png'],
            ['label' => 'creations', 'name' => 'Créations graphique', 'period' => 'Depuis 2012', 'year' => 2012,
                'description' => 'Réalisation de créations graphiques pour mon entourage : faire-parts, cartes de visite, logos',
                'screenshots' => 'fairepart-gus.jpg::fairepart-elea.jpg::fairepart-cf.jpg::plu2cloud-logo-verti.png::plugeekit-logo-verti.png::tradee-logo-vert.png', 'logo' => 'nine.png'],
        ];

        foreach ($projectsList as $project) {
            Project::create($project);
        }
    }
}
