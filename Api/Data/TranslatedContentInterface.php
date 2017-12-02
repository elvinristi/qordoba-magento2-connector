<?php
/**
 * @category Magento-2 Qordoba Connector Module
 * @package Qordoba_Connector
 * @copyright Copyright (c) 2017
 * @license https://www.qordoba.com/terms
 */

namespace Qordoba\Connector\Api\Data;

/**
 * Interface TranslatedContentInterface
 * @package Qordoba\Connector\Api\Data
 */
interface TranslatedContentInterface
{
    /**
     * @const string
     */
    const ID_FIELD = 'id';
    /**
     * @const string
     */
    const CONTENT_ID_FIELD = 'content_id';
    /**
     * @const string
     */
    const TRANSLATED_CONTENT_ID_FIELD = 'translated_content_id';
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
    const TYPE_ID_FIELD = 'type_id';

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
     * @return int
     */
    public function getId();

    /**
     * @param string|int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getTypeId();

    /**
     * @param string|int $typeId
     * @return $this
     */
    public function setTypeId($typeId);

    /**
     * @return int
     */
    public function getContentId();

    /**
     * @param string|int $contentId
     * @return $this
     */
    public function setContentId($contentId);

    /**
     * @return int
     */
    public function getTranslatedContentId();

    /**
     * @param string|int $translatedContentId
     * @return $this
     */
    public function setTranslatedContentId($translatedContentId);
}
