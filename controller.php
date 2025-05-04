<?php

namespace Concrete\Package\ResponsiveSpacings;

use Concrete\Core\Asset\AssetList;
use Concrete\Core\Package\Package;
use Concrete\Core\Page\Page;
use Concrete\Core\View\View;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Controller extends Package
{
    protected string $pkgHandle = 'responsive_spacings';
    protected string $pkgVersion = '0.0.2';
    protected $appVersionRequired = '9.0.0';

    public function getPackageDescription(): string
    {
        return t('Add responsive CSS spacing classes (margin & padding) to any block, container, or area in Concrete CMS.');
    }

    public function getPackageName(): string
    {
        return t('Responsive Spacings');
    }

    public function on_start()
    {
        /** @var EventDispatcherInterface $eventDispatcher */
        /** @noinspection PhpUnhandledExceptionInspection */
        $eventDispatcher = $this->app->make(EventDispatcherInterface::class);

        $al = AssetList::getInstance();
        $al->register("css", "responsive-spacings", "css/responsive-spacings.css", [], "responsive_spacings");

        $eventDispatcher->addListener("on_before_render", function () {
            $c = Page::getCurrentPage();

            if ($c instanceof Page && !$c->isError() && !$c->isAdminArea()) {
                $v = View::getInstance();
                $v->requireAsset("css", "responsive-spacings");
            }
        });
    }
}