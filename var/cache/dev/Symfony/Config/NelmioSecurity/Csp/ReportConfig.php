<?php

namespace Symfony\Config\NelmioSecurity\Csp;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Report'.\DIRECTORY_SEPARATOR.'BrowserAdaptiveConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ReportConfig 
{
    private $level1Fallback;
    private $browserAdaptive;
    private $defaultsrc;
    private $baseuri;
    private $blockallmixedcontent;
    private $childsrc;
    private $connectsrc;
    private $fontsrc;
    private $formaction;
    private $frameancestors;
    private $framesrc;
    private $imgsrc;
    private $manifestsrc;
    private $mediasrc;
    private $objectsrc;
    private $plugintypes;
    private $scriptsrc;
    private $stylesrc;
    private $upgradeinsecurerequests;
    private $reporturi;
    private $workersrc;
    private $_usedProperties = [];
    
    /**
     * Provides CSP Level 1 fallback when using hash or nonce (CSP level 2) by adding 'unsafe-inline' source. See https://www.w3.org/TR/CSP2/#directive-script-src and https://www.w3.org/TR/CSP2/#directive-style-src
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function level1Fallback($value): self
    {
        $this->_usedProperties['level1Fallback'] = true;
        $this->level1Fallback = $value;
    
        return $this;
    }
    
    public function browserAdaptive(array $value = []): \Symfony\Config\NelmioSecurity\Csp\Report\BrowserAdaptiveConfig
    {
        if (null === $this->browserAdaptive) {
            $this->_usedProperties['browserAdaptive'] = true;
            $this->browserAdaptive = new \Symfony\Config\NelmioSecurity\Csp\Report\BrowserAdaptiveConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "browserAdaptive()" has already been initialized. You cannot pass values the second time you call browserAdaptive().');
        }
    
        return $this->browserAdaptive;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function defaultsrc($value): self
    {
        $this->_usedProperties['defaultsrc'] = true;
        $this->defaultsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function baseuri($value): self
    {
        $this->_usedProperties['baseuri'] = true;
        $this->baseuri = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function blockallmixedcontent($value): self
    {
        $this->_usedProperties['blockallmixedcontent'] = true;
        $this->blockallmixedcontent = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function childsrc($value): self
    {
        $this->_usedProperties['childsrc'] = true;
        $this->childsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function connectsrc($value): self
    {
        $this->_usedProperties['connectsrc'] = true;
        $this->connectsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function fontsrc($value): self
    {
        $this->_usedProperties['fontsrc'] = true;
        $this->fontsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formaction($value): self
    {
        $this->_usedProperties['formaction'] = true;
        $this->formaction = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function frameancestors($value): self
    {
        $this->_usedProperties['frameancestors'] = true;
        $this->frameancestors = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function framesrc($value): self
    {
        $this->_usedProperties['framesrc'] = true;
        $this->framesrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function imgsrc($value): self
    {
        $this->_usedProperties['imgsrc'] = true;
        $this->imgsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function manifestsrc($value): self
    {
        $this->_usedProperties['manifestsrc'] = true;
        $this->manifestsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function mediasrc($value): self
    {
        $this->_usedProperties['mediasrc'] = true;
        $this->mediasrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function objectsrc($value): self
    {
        $this->_usedProperties['objectsrc'] = true;
        $this->objectsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function plugintypes($value): self
    {
        $this->_usedProperties['plugintypes'] = true;
        $this->plugintypes = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function scriptsrc($value): self
    {
        $this->_usedProperties['scriptsrc'] = true;
        $this->scriptsrc = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function stylesrc($value): self
    {
        $this->_usedProperties['stylesrc'] = true;
        $this->stylesrc = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function upgradeinsecurerequests($value): self
    {
        $this->_usedProperties['upgradeinsecurerequests'] = true;
        $this->upgradeinsecurerequests = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function reporturi($value): self
    {
        $this->_usedProperties['reporturi'] = true;
        $this->reporturi = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function workersrc($value): self
    {
        $this->_usedProperties['workersrc'] = true;
        $this->workersrc = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('level1_fallback', $value)) {
            $this->_usedProperties['level1Fallback'] = true;
            $this->level1Fallback = $value['level1_fallback'];
            unset($value['level1_fallback']);
        }
    
        if (array_key_exists('browser_adaptive', $value)) {
            $this->_usedProperties['browserAdaptive'] = true;
            $this->browserAdaptive = new \Symfony\Config\NelmioSecurity\Csp\Report\BrowserAdaptiveConfig($value['browser_adaptive']);
            unset($value['browser_adaptive']);
        }
    
        if (array_key_exists('default-src', $value)) {
            $this->_usedProperties['defaultsrc'] = true;
            $this->defaultsrc = $value['default-src'];
            unset($value['default-src']);
        }
    
        if (array_key_exists('base-uri', $value)) {
            $this->_usedProperties['baseuri'] = true;
            $this->baseuri = $value['base-uri'];
            unset($value['base-uri']);
        }
    
        if (array_key_exists('block-all-mixed-content', $value)) {
            $this->_usedProperties['blockallmixedcontent'] = true;
            $this->blockallmixedcontent = $value['block-all-mixed-content'];
            unset($value['block-all-mixed-content']);
        }
    
        if (array_key_exists('child-src', $value)) {
            $this->_usedProperties['childsrc'] = true;
            $this->childsrc = $value['child-src'];
            unset($value['child-src']);
        }
    
        if (array_key_exists('connect-src', $value)) {
            $this->_usedProperties['connectsrc'] = true;
            $this->connectsrc = $value['connect-src'];
            unset($value['connect-src']);
        }
    
        if (array_key_exists('font-src', $value)) {
            $this->_usedProperties['fontsrc'] = true;
            $this->fontsrc = $value['font-src'];
            unset($value['font-src']);
        }
    
        if (array_key_exists('form-action', $value)) {
            $this->_usedProperties['formaction'] = true;
            $this->formaction = $value['form-action'];
            unset($value['form-action']);
        }
    
        if (array_key_exists('frame-ancestors', $value)) {
            $this->_usedProperties['frameancestors'] = true;
            $this->frameancestors = $value['frame-ancestors'];
            unset($value['frame-ancestors']);
        }
    
        if (array_key_exists('frame-src', $value)) {
            $this->_usedProperties['framesrc'] = true;
            $this->framesrc = $value['frame-src'];
            unset($value['frame-src']);
        }
    
        if (array_key_exists('img-src', $value)) {
            $this->_usedProperties['imgsrc'] = true;
            $this->imgsrc = $value['img-src'];
            unset($value['img-src']);
        }
    
        if (array_key_exists('manifest-src', $value)) {
            $this->_usedProperties['manifestsrc'] = true;
            $this->manifestsrc = $value['manifest-src'];
            unset($value['manifest-src']);
        }
    
        if (array_key_exists('media-src', $value)) {
            $this->_usedProperties['mediasrc'] = true;
            $this->mediasrc = $value['media-src'];
            unset($value['media-src']);
        }
    
        if (array_key_exists('object-src', $value)) {
            $this->_usedProperties['objectsrc'] = true;
            $this->objectsrc = $value['object-src'];
            unset($value['object-src']);
        }
    
        if (array_key_exists('plugin-types', $value)) {
            $this->_usedProperties['plugintypes'] = true;
            $this->plugintypes = $value['plugin-types'];
            unset($value['plugin-types']);
        }
    
        if (array_key_exists('script-src', $value)) {
            $this->_usedProperties['scriptsrc'] = true;
            $this->scriptsrc = $value['script-src'];
            unset($value['script-src']);
        }
    
        if (array_key_exists('style-src', $value)) {
            $this->_usedProperties['stylesrc'] = true;
            $this->stylesrc = $value['style-src'];
            unset($value['style-src']);
        }
    
        if (array_key_exists('upgrade-insecure-requests', $value)) {
            $this->_usedProperties['upgradeinsecurerequests'] = true;
            $this->upgradeinsecurerequests = $value['upgrade-insecure-requests'];
            unset($value['upgrade-insecure-requests']);
        }
    
        if (array_key_exists('report-uri', $value)) {
            $this->_usedProperties['reporturi'] = true;
            $this->reporturi = $value['report-uri'];
            unset($value['report-uri']);
        }
    
        if (array_key_exists('worker-src', $value)) {
            $this->_usedProperties['workersrc'] = true;
            $this->workersrc = $value['worker-src'];
            unset($value['worker-src']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['level1Fallback'])) {
            $output['level1_fallback'] = $this->level1Fallback;
        }
        if (isset($this->_usedProperties['browserAdaptive'])) {
            $output['browser_adaptive'] = $this->browserAdaptive->toArray();
        }
        if (isset($this->_usedProperties['defaultsrc'])) {
            $output['default-src'] = $this->defaultsrc;
        }
        if (isset($this->_usedProperties['baseuri'])) {
            $output['base-uri'] = $this->baseuri;
        }
        if (isset($this->_usedProperties['blockallmixedcontent'])) {
            $output['block-all-mixed-content'] = $this->blockallmixedcontent;
        }
        if (isset($this->_usedProperties['childsrc'])) {
            $output['child-src'] = $this->childsrc;
        }
        if (isset($this->_usedProperties['connectsrc'])) {
            $output['connect-src'] = $this->connectsrc;
        }
        if (isset($this->_usedProperties['fontsrc'])) {
            $output['font-src'] = $this->fontsrc;
        }
        if (isset($this->_usedProperties['formaction'])) {
            $output['form-action'] = $this->formaction;
        }
        if (isset($this->_usedProperties['frameancestors'])) {
            $output['frame-ancestors'] = $this->frameancestors;
        }
        if (isset($this->_usedProperties['framesrc'])) {
            $output['frame-src'] = $this->framesrc;
        }
        if (isset($this->_usedProperties['imgsrc'])) {
            $output['img-src'] = $this->imgsrc;
        }
        if (isset($this->_usedProperties['manifestsrc'])) {
            $output['manifest-src'] = $this->manifestsrc;
        }
        if (isset($this->_usedProperties['mediasrc'])) {
            $output['media-src'] = $this->mediasrc;
        }
        if (isset($this->_usedProperties['objectsrc'])) {
            $output['object-src'] = $this->objectsrc;
        }
        if (isset($this->_usedProperties['plugintypes'])) {
            $output['plugin-types'] = $this->plugintypes;
        }
        if (isset($this->_usedProperties['scriptsrc'])) {
            $output['script-src'] = $this->scriptsrc;
        }
        if (isset($this->_usedProperties['stylesrc'])) {
            $output['style-src'] = $this->stylesrc;
        }
        if (isset($this->_usedProperties['upgradeinsecurerequests'])) {
            $output['upgrade-insecure-requests'] = $this->upgradeinsecurerequests;
        }
        if (isset($this->_usedProperties['reporturi'])) {
            $output['report-uri'] = $this->reporturi;
        }
        if (isset($this->_usedProperties['workersrc'])) {
            $output['worker-src'] = $this->workersrc;
        }
    
        return $output;
    }

}
