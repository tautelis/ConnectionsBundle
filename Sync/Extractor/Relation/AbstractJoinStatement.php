<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ConnectionsBundle\Sync\Extractor\Relation;

use ONGR\ConnectionsBundle\DataCollector\DataCollectorInterface;
use ONGR\ConnectionsBundle\Entity\SyncJob;

/**
 * This class has basic methods to create sync job insert sql statement..
 */
abstract class AbstractJoinStatement implements JoinStatementInterface
{
    /**
     * @var string
     */
    protected $documentType = null;

    /**
     * @param string $documentType
     */
    public function __construct(
        $documentType
    ) {
        $this->documentType = $documentType;
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param string $documentType
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }
}
