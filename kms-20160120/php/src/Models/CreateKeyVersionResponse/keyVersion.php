<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponse;

use AlibabaCloud\Tea\Model;

class keyVersion extends Model
{
    /**
     * @description KeyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description KeyVersionId
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description CreationDate
     *
     * @var string
     */
    public $creationDate;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'creationDate' => 'CreationDate',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('keyVersionId', $this->keyVersionId, true);
        Model::validateRequired('creationDate', $this->creationDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }

        return $model;
    }
}
