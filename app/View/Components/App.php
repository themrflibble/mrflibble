<?php

namespace App\View\Components;

use Illuminate\View\Component;

class App extends Component
{
    /**
     * @var string
     */
    public $pagetitle;

    /**
     * @var string
     */
    public $pageogdesc;

    /**
     * @var string
     */
    public $pageogimage;

    /**
     * Create a new component instance.
     *
     * @param string $pagetitle
     * @param string $pageogdesc
     * @param string $pageogimage
     *
     * @return void
     */
    public function __construct(
        string $pagetitle = null,
        string $pageogdesc = null,
        string $pageogimage = null
    ) {
        $this->pagetitle = $pagetitle ?? config('app.name_brand');
        $this->pageogdesc = $pageogdesc ?? 'Cryptology Escape Rooms stages unique games for friends, family, and team-building.';
        $this->pageogimage = $pageogimage ?? asset('/img/logo/cryptology_logo_colour.png');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.layouts.app');
    }
}
