<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/TemplateIterator.php';

return $this->services['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(['twig' => function () {
    $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
}]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/src/Eccube'), [($this->targetDirs[3].'/app/Plugin/ContactManagement4/Resource/template') => 'ContactManagement4', ($this->targetDirs[3].'/app/Plugin/DeliveryPlus4/Resource/template') => 'DeliveryPlus4', ($this->targetDirs[3].'/app/Plugin/RelatedProduct4/Resource/template') => 'RelatedProduct4', ($this->targetDirs[3].'/app/Plugin/ReferralCode/Resource/template') => 'ReferralCode', ($this->targetDirs[3].'/app/Plugin/YamatoSubscription/Resource/template') => 'YamatoSubscription', ($this->targetDirs[3].'/app/Plugin/YamatoPayment4/Resource/template') => 'YamatoPayment4', ($this->targetDirs[3].'/app/Plugin/CategoryRecommend4/Resource/template') => 'CategoryRecommend4', ($this->targetDirs[3].'/app/Plugin/SortProduct4Plus/Resource/template') => 'SortProduct4Plus', ($this->targetDirs[3].'/app/Plugin/EccubeUpdater405to406/Resource/template') => 'EccubeUpdater405to406', ($this->targetDirs[3].'/app/Plugin/Api/Resource/template') => 'Api', ($this->targetDirs[3].'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')) => NULL, ($this->targetDirs[3].'/src/Eccube/Resource/template/default') => NULL, ($this->targetDirs[3].'/app/Plugin') => NULL, ($this->targetDirs[3].'/app/template/admin') => 'admin', ($this->targetDirs[3].'/src/Eccube/Resource/template/admin') => 'admin', ($this->targetDirs[3].'/app/template/user_data') => 'user_data', ($this->targetDirs[3].'/src/Eccube/Resource/template/toolbar') => 'toolbar', ($this->targetDirs[3].'/src/Eccube/Resource/template/common') => 'common', ($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], ($this->targetDirs[3].'/templates')));
