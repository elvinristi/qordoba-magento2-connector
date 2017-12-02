<?php
/**
 * @category Magento-2 Qordoba Connector Module
 * @package Qordoba_Connector
 * @copyright Copyright (c) 2017
 * @license https://www.qordoba.com/terms
 */

namespace Qordoba\Connector\Api\Data;

/**
 * Interface PreferencesInterface
 * @package Qordoba\Connector\Api\Data
 */
interface PreferencesInterface
{
    /**
     * @const string
     */
    const CREATE_TIME_FIELD = 'created_time';
    /**
     * @const string
     */
    const UPDATE_TIME_FIELD = 'updated_time';
    /**
     * @const string
     */
    const STATE_FIELD = 'state';
    /**
     * @const string
     */
    const ORGANIZATION_ID_FIELD = 'organization_id';
    /**
     * @const string
     */
    const PROJECT_ID_FIELD = 'project_id';
    /**
     * @const string
     */
    const STORE_ID_FIELD = 'store_id';
    /**
     * @const string
     */
    const ACCOUNT_TOKEN_FIELD = 'account_token';
    /**
     * @const string
     */
    const ACCESS_TOKEN_FIELD = 'access_token';
    /**
     * @const string
     */
    const EMAIL_FIELD = 'email';
    /**
     * @const string
     */
    const PASSWORD_FIELD = 'password';

    /**
     * @return string
     */
    public function getCreateTime();

    /**
     * @param $createdAt
     * @return $this
     */
    public function setCreatedTime($createdAt);

    /**
     * @return string
     */
    public function getUpdatedTime();

    /**
     * @param $updatedAt
     * @return $this
     */
    public function setUpdatedTime($updatedAt);

    /**
     * @param string|int $state
     * @return $this
     */
    public function setState($state);

    /**
     * @return int
     */
    public function getState();

    /**
     * @param string|int $projectId
     * @return $this
     */
    public function setProjectId($projectId);

    /**
     * @return int
     */
    public function getProjectId();

    /**
     * @param string|int $organizationId
     * @return $this
     */
    public function setOrganizationId($organizationId);

    /**
     * @return int
     */
    public function getOrganizationId();

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password);

    /**
     * @return string
     */
    public function getPassword();
}