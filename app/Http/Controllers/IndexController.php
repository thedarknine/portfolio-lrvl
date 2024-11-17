<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Page;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

class IndexController extends Controller
{
    // Home page
    public function home(): View
    {
        return view('home', [
            'listOfPages' => $this->getPages(),
            'socialLinks' => $this->getSocialLinks(),
        ]);
    }

    // Experience page
    public function experience(): View
    {
        return view('experience', [
            'listOfPages' => $this->getPages(),
            'socialLinks' => $this->getSocialLinks(),
            'experiences' => Experience::with(['company', 'skills'])->get()->sortByDesc('start_date'),
        ]);
    }

    // Competences page
    public function competences(): View
    {
        return view('competences', [
            'listOfPages' => $this->getPages(),
            'socialLinks' => $this->getSocialLinks(),
        ]);
    }

    // Formation page
    public function formation(): View
    {
        return view('formation', [
            'listOfPages' => $this->getPages(),
            'socialLinks' => $this->getSocialLinks(),
        ]);
    }

    // Projets page
    public function projets(): View
    {
        return view('projets', [
            'listOfPages' => $this->getPages(),
            'socialLinks' => $this->getSocialLinks(),
        ]);
    }

    // Arcade page
    public function arcade(): View
    {
        return view('arcade', [
            'listOfPages' => $this->getPages(),
            'socialLinks' => $this->getSocialLinks(),
        ]);
    }

    // Generate a list of pages to compute menu
    private function getPages(): Collection
    {
        $menuGlobal = Config::get('menu.global');
        $listOfPages = collect();
        foreach ($menuGlobal as $page) {
            $listOfPages->push(new Page($page['title'], $page['path']));
        }

        return $listOfPages;
    }

    private function getSocialLinks(): Collection
    {
        $menuSocial = Config::get('menu.social');
        $listOfLinks = collect();
        foreach ($menuSocial as $link) {
            $listOfLinks->push(new Page($link['title'], $link['url'], $link['svgPath']));
        }

        return $listOfLinks;
    }
}
