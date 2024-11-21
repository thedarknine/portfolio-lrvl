<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Models;

class Page
{
    // Page title
    public string $title;

    // Page path
    public string $path;

    // SVG path
    public string $icon;

    public function __construct($title, $path, $icon = null)
    {
        $this->title = $title;
        $this->path = $path;
        if ($icon) {
            $this->icon = $icon;
        }
    }
}
