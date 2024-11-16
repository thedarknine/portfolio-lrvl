<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillType;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make sure SkillTypeSeeder runs first
        $this->call(SkillTypeSeeder::class);

        // Now we can reference skill types
        $skillTypes = SkillType::all();

        $skillsList = [
            ['label' => 'jira', 'name' => 'Jira', 'start_year' => 2018, 'end_year' => null, 'level' => 8, 'logo' => 'jira.png', 'position' => 1, 'type' => 'methodo', 'display' => true],
            ['label' => 'agile', 'name' => 'Agile', 'start_year' => 2018, 'end_year' => null, 'level' => 6, 'logo' => 'agile.png', 'position' => 2, 'type' => 'methodo', 'display' => true],
            ['label' => 'trello', 'name' => 'Trello', 'start_year' => 2017, 'end_year' => null, 'level' => 7, 'logo' => 'trello.png', 'position' => 3, 'type' => 'methodo', 'display' => true],
            ['label' => 'product-discovery', 'name' => 'Product Disc', 'start_year' => 2022, 'end_year' => null, 'level' => 6, 'logo' => 'product-discovery.png', 'position' => 4, 'type' => 'methodo', 'display' => true],
            ['label' => 'confluence', 'name' => 'Confluence', 'start_year' => 2018, 'end_year' => null, 'level' => 6, 'logo' => 'confluence.png', 'position' => 5, 'type' => 'methodo', 'display' => true],
            ['label' => 'miro', 'name' => 'Miro', 'start_year' => 2018, 'end_year' => 2022, 'level' => 7, 'logo' => 'miro.png', 'position' => 6, 'type' => 'methodo', 'display' => true],
            ['label' => 'figma', 'name' => 'Figma', 'start_year' => 2020, 'end_year' => null, 'level' => 7, 'logo' => 'figma.png', 'position' => 1, 'type' => 'design', 'display' => true],
            ['label' => 'moqups', 'name' => 'Moqups', 'start_year' => 2018, 'end_year' => 2021, 'level' => 6, 'logo' => 'moqups.png', 'position' => 2, 'type' => 'design', 'display' => true],
            ['label' => 'illustrator', 'name' => 'Illustrator', 'start_year' => 2010, 'end_year' => 2022, 'level' => 5, 'logo' => 'illustrator.png', 'position' => 3, 'type' => 'design', 'display' => true],
            ['label' => 'photoshop', 'name' => 'Photoshop', 'start_year' => 2006, 'end_year' => 2017, 'level' => 3, 'logo' => 'photoshop.png', 'position' => 4, 'type' => 'design', 'display' => true],
            ['label' => 'mysql', 'name' => 'MySQL', 'start_year' => 2005, 'end_year' => null, 'level' => 8, 'logo' => 'mysql.png', 'position' => 1, 'type' => 'back-end', 'display' => true],
            ['label' => 'mongodb', 'name' => 'MongoDB', 'start_year' => 2017, 'end_year' => 2022, 'level' => 7, 'logo' => 'mongodb.png', 'position' => 2, 'type' => 'back-end', 'display' => true],
            ['label' => 'graphdb', 'name' => 'GraphDB', 'start_year' => 2022, 'end_year' => 2023, 'level' => 2, 'logo' => 'graphdb.png', 'position' => 3, 'type' => 'back-end', 'display' => true],
            ['label' => 'symfony', 'name' => 'Symfony', 'start_year' => 2017, 'end_year' => null, 'level' => 6, 'logo' => 'symfony.png', 'position' => 4, 'type' => 'back-end', 'display' => true],
            ['label' => 'php', 'name' => 'PHP', 'start_year' => 2005, 'end_year' => null, 'level' => 9, 'logo' => 'php.png', 'position' => 5, 'type' => 'back-end', 'display' => true],
            ['label' => 'python', 'name' => 'Python', 'start_year' => 2018, 'end_year' => 2022, 'level' => 6, 'logo' => 'python.png', 'position' => 6, 'type' => 'back-end', 'display' => true],
            ['label' => 'rabbitmq', 'name' => 'RabbitMQ', 'start_year' => 2017, 'end_year' => 2022, 'level' => 5, 'logo' => 'rabbitmq.png', 'position' => 7, 'type' => 'back-end', 'display' => true],
            ['label' => 'webservices', 'name' => 'Webservices', 'start_year' => 2010, 'end_year' => 2021, 'level' => 6, 'logo' => 'webservices.png', 'position' => 8, 'type' => 'back-end', 'display' => true],
            ['label' => 'mvc', 'name' => 'MVC', 'start_year' => 2008, 'end_year' => 2019, 'level' => 7, 'logo' => 'mvc.png', 'position' => 9, 'type' => 'back-end', 'display' => true],
            ['label' => 'phpstorm', 'name' => 'PHPStorm', 'start_year' => 2017, 'end_year' => 2022, 'level' => 8, 'logo' => 'phpstorm.png', 'position' => 10, 'type' => 'back-end', 'display' => false],
            ['label' => 'zend', 'name' => 'Zend', 'start_year' => 2008, 'end_year' => 2012, 'level' => 5, 'logo' => 'zend.png', 'position' => 11, 'type' => 'back-end', 'display' => false],
            ['label' => 'cplus', 'name' => 'C++', 'start_year' => 2002, 'end_year' => 2006, 'level' => 6, 'logo' => 'cplus.png', 'position' => 12, 'type' => 'back-end', 'display' => false],
            ['label' => 'html', 'name' => 'HTML', 'start_year' => 2004, 'end_year' => null, 'level' => 9, 'logo' => 'html.png', 'position' => 1, 'type' => 'front-end', 'display' => true],
            ['label' => 'css', 'name' => 'CSS', 'start_year' => 2004, 'end_year' => null, 'level' => 9, 'logo' => 'css.png', 'position' => 2, 'type' => 'front-end', 'display' => true],
            ['label' => 'sass', 'name' => 'Sass', 'start_year' => 2016, 'end_year' => null, 'level' => 7, 'logo' => 'sass.png', 'position' => 3, 'type' => 'front-end', 'display' => true],
            ['label' => 'twig', 'name' => 'Twig', 'start_year' => 2015, 'end_year' => null, 'level' => 8, 'logo' => 'twig.png', 'position' => 4, 'type' => 'front-end', 'display' => true],
            ['label' => 'webpack', 'name' => 'Webpack', 'start_year' => 2018, 'end_year' => 2022, 'level' => 4, 'logo' => 'webpack.png', 'position' => 5, 'type' => 'front-end', 'display' => true],
            ['label' => 'jquery', 'name' => 'jQuery', 'start_year' => 2015, 'end_year' => null, 'level' => 6, 'logo' => 'jquery.png', 'position' => 6, 'type' => 'front-end', 'display' => true],
            ['label' => 'ajax', 'name' => 'Ajax', 'start_year' => 2015, 'end_year' => 2018, 'level' => 5, 'logo' => 'ajax.png', 'position' => 7, 'type' => 'front-end', 'display' => true],
            ['label' => 'materialize', 'name' => 'Materialize', 'start_year' => 2016, 'end_year' => null, 'level' => 7, 'logo' => 'materialize.png', 'position' => 8, 'type' => 'front-end', 'display' => true],
            ['label' => 'bootstrap', 'name' => 'Bootstrap', 'start_year' => 2015, 'end_year' => 2017, 'level' => 6, 'logo' => 'bootstrap.png', 'position' => 9, 'type' => 'front-end', 'display' => true],
            ['label' => 'responsive', 'name' => 'Responsive', 'start_year' => 2015, 'end_year' => 2020, 'level' => 7, 'logo' => 'responsive.png', 'position' => 10, 'type' => 'front-end', 'display' => false],
            ['label' => 'xhtmlcss', 'name' => 'xHTML/CSS', 'start_year' => 2006, 'end_year' => 2008, 'level' => 8, 'logo' => 'xhtmlcss.png', 'position' => 11, 'type' => 'front-end', 'display' => false],
            ['label' => 'apache', 'name' => 'Apache', 'start_year' => 2005, 'end_year' => 2017, 'level' => 5, 'logo' => 'apache.png', 'position' => 1, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'git', 'name' => 'Git', 'start_year' => 2015, 'end_year' => null, 'level' => 7, 'logo' => 'git.png', 'position' => 2, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'composer', 'name' => 'Composer', 'start_year' => 2015, 'end_year' => null, 'level' => 7, 'logo' => 'composer.png', 'position' => 3, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'docker', 'name' => 'Docker', 'start_year' => 2018, 'end_year' => 2022, 'level' => 4, 'logo' => 'docker.png', 'position' => 4, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'svn', 'name' => 'SVN', 'start_year' => 2008, 'end_year' => 2012, 'level' => 6, 'logo' => 'svn.png', 'position' => 5, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'macos', 'name' => 'MacOS X', 'start_year' => 2006, 'end_year' => null, 'level' => 8, 'logo' => 'mac.png', 'position' => 6, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'linux', 'name' => 'Linux', 'start_year' => 2003, 'end_year' => null, 'level' => 7, 'logo' => 'linux.png', 'position' => 7, 'type' => 'sysadmin', 'display' => true],
            ['label' => 'windows', 'name' => 'Windows', 'start_year' => 1996, 'end_year' => null, 'level' => 5, 'logo' => 'windows.png', 'position' => 8, 'type' => 'sysadmin', 'display' => false],
            ['label' => 'drupal', 'name' => 'Drupal', 'start_year' => 2008, 'end_year' => 2012, 'level' => 3, 'logo' => 'drupal.png', 'position' => 9, 'type' => 'sysadmin', 'display' => false],
        ];

        foreach ($skillsList as $skill) {
            // Get Skill Type
            $skill['skill_type_id'] = $skillTypes->firstWhere('label', $skill['type'])->id;
            unset($skill['type']);
            $record = Skill::create($skill);
        }
    }
}
