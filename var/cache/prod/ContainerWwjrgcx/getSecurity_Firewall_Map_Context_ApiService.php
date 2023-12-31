<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallContext.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ExceptionListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Security/EntryPoint/OAuth2EntryPoint.php';

return $this->services['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load('getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.authentication.listener.oauth2.api']) ? $this->services['security.authentication.listener.oauth2.api'] : $this->load('getSecurity_Authentication_Listener_Oauth2_ApiService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load('getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, 'api', ${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\EntryPoint\\OAuth2EntryPoint']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\EntryPoint\\OAuth2EntryPoint'] : ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\EntryPoint\\OAuth2EntryPoint'] = new \Trikoder\Bundle\OAuth2Bundle\Security\EntryPoint\OAuth2EntryPoint())) && false ?: '_'}, NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', 'security.request_matcher.x1icpav', true, true, 'Eccube\\Security\\Core\\User\\MemberProvider', NULL, 'Trikoder\\Bundle\\OAuth2Bundle\\Security\\EntryPoint\\OAuth2EntryPoint', NULL, NULL, [0 => 'oauth2'], NULL));
