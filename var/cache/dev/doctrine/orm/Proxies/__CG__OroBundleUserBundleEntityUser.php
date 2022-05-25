<?php

namespace Proxies\__CG__\Oro\Bundle\UserBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Oro\Bundle\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);
        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name): bool
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

        return parent::__isset($name);
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'username', 'usernameLowercase', 'email', 'emailLowercase', 'namePrefix', 'firstName', 'middleName', 'lastName', 'nameSuffix', 'groups', 'birthday', 'enabled', 'lastLogin', 'owner', 'apiKeys', 'emails', 'businessUnits', 'emailOrigins', 'createdAt', 'imapAccountType', 'updatedAt', 'currentOrganization', 'organizations', 'phone', 'title', 'googleId', 'serialized_data', 'avatar', 'auth_status', 'password', 'plainPassword', 'salt', 'loginCount', 'userRoles', 'confirmationToken', 'organization', 'passwordRequestedAt', 'passwordChangedAt'];
        }

        return ['__isInitialized__', 'id', 'username', 'usernameLowercase', 'email', 'emailLowercase', 'namePrefix', 'firstName', 'middleName', 'lastName', 'nameSuffix', 'groups', 'birthday', 'enabled', 'lastLogin', 'owner', 'apiKeys', 'emails', 'businessUnits', 'emailOrigins', 'createdAt', 'imapAccountType', 'updatedAt', 'currentOrganization', 'organizations', 'phone', 'title', 'googleId', 'serialized_data', 'avatar', 'auth_status', 'password', 'plainPassword', 'salt', 'loginCount', 'userRoles', 'confirmationToken', 'organization', 'passwordRequestedAt', 'passwordChangedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClass', []);

        return parent::getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailFields', []);

        return parent::getEmailFields();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username): \Oro\Bundle\UserBundle\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameLowercase(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameLowercase', []);

        return parent::getUsernameLowercase();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiddleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiddleName', []);

        return parent::getMiddleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiddleName($middleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiddleName', [$middleName]);

        return parent::setMiddleName($middleName);
    }

    /**
     * {@inheritDoc}
     */
    public function getNamePrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNamePrefix', []);

        return parent::getNamePrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setNamePrefix($namePrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNamePrefix', [$namePrefix]);

        return parent::setNamePrefix($namePrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameSuffix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameSuffix', []);

        return parent::getNameSuffix();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameSuffix($nameSuffix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameSuffix', [$nameSuffix]);

        return parent::setNameSuffix($nameSuffix);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday(\DateTime $birthday = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiKeys()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiKeys', []);

        return parent::getApiKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function addApiKey(\Oro\Bundle\UserBundle\Entity\UserApi $api)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApiKey', [$api]);

        return parent::addApiKey($api);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApiKey(\Oro\Bundle\UserBundle\Entity\UserApi $api)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApiKey', [$api]);

        return parent::removeApiKey($api);
    }

    /**
     * {@inheritDoc}
     */
    public function beforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeSave', []);

        return parent::beforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate(\Doctrine\ORM\Event\PreUpdateEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', [$event]);

        return parent::preUpdate($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmails', []);

        return parent::getEmails();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmail(\Oro\Bundle\UserBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmail', [$email]);

        return parent::addEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmail(\Oro\Bundle\UserBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmail', [$email]);

        return parent::removeEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function addBusinessUnit(\Oro\Bundle\OrganizationBundle\Entity\BusinessUnit $businessUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBusinessUnit', [$businessUnit]);

        return parent::addBusinessUnit($businessUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getBusinessUnits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBusinessUnits', []);

        return parent::getBusinessUnits();
    }

    /**
     * {@inheritDoc}
     */
    public function setBusinessUnits(\Doctrine\Common\Collections\Collection $businessUnits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBusinessUnits', [$businessUnits]);

        return parent::setBusinessUnits($businessUnits);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBusinessUnit(\Oro\Bundle\OrganizationBundle\Entity\BusinessUnit $businessUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBusinessUnit', [$businessUnit]);

        return parent::removeBusinessUnit($businessUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owningBusinessUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owningBusinessUnit]);

        return parent::setOwner($owningBusinessUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotificationEmails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotificationEmails', []);

        return parent::getNotificationEmails();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailLowercase(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailLowercase', []);

        return parent::getEmailLowercase();
    }

    /**
     * {@inheritDoc}
     */
    public function setImapConfiguration($imapConfiguration = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImapConfiguration', [$imapConfiguration]);

        return parent::setImapConfiguration($imapConfiguration);
    }

    /**
     * {@inheritDoc}
     */
    public function getImapConfiguration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImapConfiguration', []);

        return parent::getImapConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function setImapAccountType(\Oro\Bundle\ImapBundle\Form\Model\AccountTypeModel $accountTypeModel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImapAccountType', [$accountTypeModel]);

        return parent::setImapAccountType($accountTypeModel);
    }

    /**
     * {@inheritDoc}
     */
    public function getImapAccountType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImapAccountType', []);

        return parent::getImapAccountType();
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmailOrigin(\Oro\Bundle\EmailBundle\Entity\EmailOrigin $emailOrigin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmailOrigin', [$emailOrigin]);

        return parent::removeEmailOrigin($emailOrigin);
    }

    /**
     * {@inheritDoc}
     */
    public function addEmailOrigin(\Oro\Bundle\EmailBundle\Entity\EmailOrigin $emailOrigin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmailOrigin', [$emailOrigin]);

        return parent::addEmailOrigin($emailOrigin);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailOrigins()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailOrigins', []);

        return parent::getEmailOrigins();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Oro\Bundle\UserBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Oro\Bundle\UserBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRoles', []);

        return parent::getUserRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentOrganization(\Oro\Bundle\OrganizationBundle\Entity\OrganizationInterface $organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentOrganization', [$organization]);

        return parent::setCurrentOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentOrganization', []);

        return parent::getCurrentOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrganization(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrganization', [$organization]);

        return parent::addOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function hasOrganization(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasOrganization', [$organization]);

        return parent::hasOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizations(bool $onlyEnabled = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizations', [$onlyEnabled]);

        return parent::getOrganizations($onlyEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganizations(\Doctrine\Common\Collections\Collection $organizations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizations', [$organizations]);

        return parent::setOrganizations($organizations);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrganization(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrganization', [$organization]);

        return parent::removeOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function __unserialize(array $serialized): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unserialize', [$serialized]);

        parent::__unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$value]);

        return parent::setPhone($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$value]);

        return parent::setTitle($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoogleId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoogleId', []);

        return parent::getGoogleId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoogleId($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoogleId', [$value]);

        return parent::setGoogleId($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getSerializedData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerializedData', []);

        return parent::getSerializedData();
    }

    /**
     * {@inheritDoc}
     */
    public function setSerializedData($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerializedData', [$value]);

        return parent::setSerializedData($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$value]);

        return parent::setAvatar($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthStatus', []);

        return parent::getAuthStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthStatus($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthStatus', [$value]);

        return parent::setAuthStatus($value);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function __serialize(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__serialize', []);

        return parent::__serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginCount', []);

        return parent::getLoginCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginCount($count)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginCount', [$count]);

        return parent::setLoginCount($count);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(?string $password): \Oro\Bundle\UserBundle\Entity\AbstractUser
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword(?string $password): \Oro\Bundle\UserBundle\Entity\AbstractUser
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserRole', [$role]);

        return parent::removeUserRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRole(string $roleName): ?\Oro\Bundle\SecurityBundle\Model\Role
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRole', [$roleName]);

        return parent::getUserRole($roleName);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserRoles', [$roles]);

        return parent::setUserRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function addUserRole(\Oro\Bundle\SecurityBundle\Model\Role $role): \Oro\Bundle\UserBundle\Entity\AbstractUser
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserRole', [$role]);

        return parent::addUserRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization(\Oro\Bundle\OrganizationBundle\Entity\OrganizationInterface $organization = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$token]);

        return parent::setConfirmationToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function generateToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateToken', []);

        return parent::generateToken();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$time]);

        return parent::setPasswordRequestedAt($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordChangedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordChangedAt', []);

        return parent::getPasswordChangedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordChangedAt(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordChangedAt', [$time]);

        return parent::setPasswordChangedAt($time);
    }

    /**
     * {@inheritDoc}
     */
    public function isBelongToOrganization(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization, bool $onlyEnabled = false): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isBelongToOrganization', [$organization, $onlyEnabled]);

        return parent::isBelongToOrganization($organization, $onlyEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function isEqualTo(\Symfony\Component\Security\Core\User\UserInterface $user): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEqualTo', [$user]);

        return parent::isEqualTo($user);
    }

}