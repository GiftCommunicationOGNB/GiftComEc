<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'League\OAuth2\Server\AuthorizationServer' shared service.

include_once $this->targetDirs[3].'/vendor/league/event/src/EmitterAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/league/event/src/EmitterAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/AuthorizationServer.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/CryptKey.php';

$this->services['League\\OAuth2\\Server\\AuthorizationServer'] = $instance = new \League\OAuth2\Server\AuthorizationServer(${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\ClientRepository']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\ClientRepository'] : $this->load('getClientRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AccessTokenRepository']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AccessTokenRepository'] : $this->load('getAccessTokenRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\ScopeRepository']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\ScopeRepository'] : $this->load('getScopeRepositoryService.php')) && false ?: '_'}, new \League\OAuth2\Server\CryptKey($this->getEnv('ECCUBE_OAUTH2_AUTHORIZATION_SERVER_PRIVATE_KEY'), NULL, false), $this->getEnv('ECCUBE_OAUTH2_ENCRYPTION_KEY'));

$instance->enableGrantType(${($_ = isset($this->services['League\\OAuth2\\Server\\Grant\\RefreshTokenGrant']) ? $this->services['League\\OAuth2\\Server\\Grant\\RefreshTokenGrant'] : $this->load('getRefreshTokenGrantService.php')) && false ?: '_'}, new \DateInterval('PT1H'));
$instance->enableGrantType(${($_ = isset($this->services['League\\OAuth2\\Server\\Grant\\AuthCodeGrant']) ? $this->services['League\\OAuth2\\Server\\Grant\\AuthCodeGrant'] : $this->load('getAuthCodeGrantService.php')) && false ?: '_'}, new \DateInterval('PT1H'));

return $instance;