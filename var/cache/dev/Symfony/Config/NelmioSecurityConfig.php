<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'SignedCookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'EncryptedCookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'ClickjackingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'ExternalRedirectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'FlexibleSslConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'ForcedSslConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'CookieSessionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'ContentTypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'XssProtectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'CspConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioSecurity'.\DIRECTORY_SEPARATOR.'ReferrerPolicyConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class NelmioSecurityConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $signedCookie;
    private $encryptedCookie;
    private $clickjacking;
    private $externalRedirects;
    private $flexibleSsl;
    private $forcedSsl;
    private $cookieSession;
    private $contentType;
    private $xssProtection;
    private $csp;
    private $referrerPolicy;
    private $_usedProperties = [];
    
    public function signedCookie(array $value = []): \Symfony\Config\NelmioSecurity\SignedCookieConfig
    {
        if (null === $this->signedCookie) {
            $this->_usedProperties['signedCookie'] = true;
            $this->signedCookie = new \Symfony\Config\NelmioSecurity\SignedCookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "signedCookie()" has already been initialized. You cannot pass values the second time you call signedCookie().');
        }
    
        return $this->signedCookie;
    }
    
    public function encryptedCookie(array $value = []): \Symfony\Config\NelmioSecurity\EncryptedCookieConfig
    {
        if (null === $this->encryptedCookie) {
            $this->_usedProperties['encryptedCookie'] = true;
            $this->encryptedCookie = new \Symfony\Config\NelmioSecurity\EncryptedCookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "encryptedCookie()" has already been initialized. You cannot pass values the second time you call encryptedCookie().');
        }
    
        return $this->encryptedCookie;
    }
    
    public function clickjacking(array $value = []): \Symfony\Config\NelmioSecurity\ClickjackingConfig
    {
        if (null === $this->clickjacking) {
            $this->_usedProperties['clickjacking'] = true;
            $this->clickjacking = new \Symfony\Config\NelmioSecurity\ClickjackingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "clickjacking()" has already been initialized. You cannot pass values the second time you call clickjacking().');
        }
    
        return $this->clickjacking;
    }
    
    public function externalRedirects(array $value = []): \Symfony\Config\NelmioSecurity\ExternalRedirectsConfig
    {
        if (null === $this->externalRedirects) {
            $this->_usedProperties['externalRedirects'] = true;
            $this->externalRedirects = new \Symfony\Config\NelmioSecurity\ExternalRedirectsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "externalRedirects()" has already been initialized. You cannot pass values the second time you call externalRedirects().');
        }
    
        return $this->externalRedirects;
    }
    
    public function flexibleSsl(array $value = []): \Symfony\Config\NelmioSecurity\FlexibleSslConfig
    {
        if (null === $this->flexibleSsl) {
            $this->_usedProperties['flexibleSsl'] = true;
            $this->flexibleSsl = new \Symfony\Config\NelmioSecurity\FlexibleSslConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "flexibleSsl()" has already been initialized. You cannot pass values the second time you call flexibleSsl().');
        }
    
        return $this->flexibleSsl;
    }
    
    public function forcedSsl(array $value = []): \Symfony\Config\NelmioSecurity\ForcedSslConfig
    {
        if (null === $this->forcedSsl) {
            $this->_usedProperties['forcedSsl'] = true;
            $this->forcedSsl = new \Symfony\Config\NelmioSecurity\ForcedSslConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "forcedSsl()" has already been initialized. You cannot pass values the second time you call forcedSsl().');
        }
    
        return $this->forcedSsl;
    }
    
    public function cookieSession(array $value = []): \Symfony\Config\NelmioSecurity\CookieSessionConfig
    {
        if (null === $this->cookieSession) {
            $this->_usedProperties['cookieSession'] = true;
            $this->cookieSession = new \Symfony\Config\NelmioSecurity\CookieSessionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookieSession()" has already been initialized. You cannot pass values the second time you call cookieSession().');
        }
    
        return $this->cookieSession;
    }
    
    public function contentType(array $value = []): \Symfony\Config\NelmioSecurity\ContentTypeConfig
    {
        if (null === $this->contentType) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = new \Symfony\Config\NelmioSecurity\ContentTypeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "contentType()" has already been initialized. You cannot pass values the second time you call contentType().');
        }
    
        return $this->contentType;
    }
    
    public function xssProtection(array $value = []): \Symfony\Config\NelmioSecurity\XssProtectionConfig
    {
        if (null === $this->xssProtection) {
            $this->_usedProperties['xssProtection'] = true;
            $this->xssProtection = new \Symfony\Config\NelmioSecurity\XssProtectionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "xssProtection()" has already been initialized. You cannot pass values the second time you call xssProtection().');
        }
    
        return $this->xssProtection;
    }
    
    public function csp(array $value = []): \Symfony\Config\NelmioSecurity\CspConfig
    {
        if (null === $this->csp) {
            $this->_usedProperties['csp'] = true;
            $this->csp = new \Symfony\Config\NelmioSecurity\CspConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "csp()" has already been initialized. You cannot pass values the second time you call csp().');
        }
    
        return $this->csp;
    }
    
    public function referrerPolicy(array $value = []): \Symfony\Config\NelmioSecurity\ReferrerPolicyConfig
    {
        if (null === $this->referrerPolicy) {
            $this->_usedProperties['referrerPolicy'] = true;
            $this->referrerPolicy = new \Symfony\Config\NelmioSecurity\ReferrerPolicyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "referrerPolicy()" has already been initialized. You cannot pass values the second time you call referrerPolicy().');
        }
    
        return $this->referrerPolicy;
    }
    
    public function getExtensionAlias(): string
    {
        return 'nelmio_security';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('signed_cookie', $value)) {
            $this->_usedProperties['signedCookie'] = true;
            $this->signedCookie = new \Symfony\Config\NelmioSecurity\SignedCookieConfig($value['signed_cookie']);
            unset($value['signed_cookie']);
        }
    
        if (array_key_exists('encrypted_cookie', $value)) {
            $this->_usedProperties['encryptedCookie'] = true;
            $this->encryptedCookie = new \Symfony\Config\NelmioSecurity\EncryptedCookieConfig($value['encrypted_cookie']);
            unset($value['encrypted_cookie']);
        }
    
        if (array_key_exists('clickjacking', $value)) {
            $this->_usedProperties['clickjacking'] = true;
            $this->clickjacking = new \Symfony\Config\NelmioSecurity\ClickjackingConfig($value['clickjacking']);
            unset($value['clickjacking']);
        }
    
        if (array_key_exists('external_redirects', $value)) {
            $this->_usedProperties['externalRedirects'] = true;
            $this->externalRedirects = new \Symfony\Config\NelmioSecurity\ExternalRedirectsConfig($value['external_redirects']);
            unset($value['external_redirects']);
        }
    
        if (array_key_exists('flexible_ssl', $value)) {
            $this->_usedProperties['flexibleSsl'] = true;
            $this->flexibleSsl = new \Symfony\Config\NelmioSecurity\FlexibleSslConfig($value['flexible_ssl']);
            unset($value['flexible_ssl']);
        }
    
        if (array_key_exists('forced_ssl', $value)) {
            $this->_usedProperties['forcedSsl'] = true;
            $this->forcedSsl = new \Symfony\Config\NelmioSecurity\ForcedSslConfig($value['forced_ssl']);
            unset($value['forced_ssl']);
        }
    
        if (array_key_exists('cookie_session', $value)) {
            $this->_usedProperties['cookieSession'] = true;
            $this->cookieSession = new \Symfony\Config\NelmioSecurity\CookieSessionConfig($value['cookie_session']);
            unset($value['cookie_session']);
        }
    
        if (array_key_exists('content_type', $value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = new \Symfony\Config\NelmioSecurity\ContentTypeConfig($value['content_type']);
            unset($value['content_type']);
        }
    
        if (array_key_exists('xss_protection', $value)) {
            $this->_usedProperties['xssProtection'] = true;
            $this->xssProtection = new \Symfony\Config\NelmioSecurity\XssProtectionConfig($value['xss_protection']);
            unset($value['xss_protection']);
        }
    
        if (array_key_exists('csp', $value)) {
            $this->_usedProperties['csp'] = true;
            $this->csp = new \Symfony\Config\NelmioSecurity\CspConfig($value['csp']);
            unset($value['csp']);
        }
    
        if (array_key_exists('referrer_policy', $value)) {
            $this->_usedProperties['referrerPolicy'] = true;
            $this->referrerPolicy = new \Symfony\Config\NelmioSecurity\ReferrerPolicyConfig($value['referrer_policy']);
            unset($value['referrer_policy']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['signedCookie'])) {
            $output['signed_cookie'] = $this->signedCookie->toArray();
        }
        if (isset($this->_usedProperties['encryptedCookie'])) {
            $output['encrypted_cookie'] = $this->encryptedCookie->toArray();
        }
        if (isset($this->_usedProperties['clickjacking'])) {
            $output['clickjacking'] = $this->clickjacking->toArray();
        }
        if (isset($this->_usedProperties['externalRedirects'])) {
            $output['external_redirects'] = $this->externalRedirects->toArray();
        }
        if (isset($this->_usedProperties['flexibleSsl'])) {
            $output['flexible_ssl'] = $this->flexibleSsl->toArray();
        }
        if (isset($this->_usedProperties['forcedSsl'])) {
            $output['forced_ssl'] = $this->forcedSsl->toArray();
        }
        if (isset($this->_usedProperties['cookieSession'])) {
            $output['cookie_session'] = $this->cookieSession->toArray();
        }
        if (isset($this->_usedProperties['contentType'])) {
            $output['content_type'] = $this->contentType->toArray();
        }
        if (isset($this->_usedProperties['xssProtection'])) {
            $output['xss_protection'] = $this->xssProtection->toArray();
        }
        if (isset($this->_usedProperties['csp'])) {
            $output['csp'] = $this->csp->toArray();
        }
        if (isset($this->_usedProperties['referrerPolicy'])) {
            $output['referrer_policy'] = $this->referrerPolicy->toArray();
        }
    
        return $output;
    }

}
