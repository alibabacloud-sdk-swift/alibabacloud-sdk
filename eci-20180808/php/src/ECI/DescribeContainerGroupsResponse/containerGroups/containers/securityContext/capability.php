<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers\securityContext;

use AlibabaCloud\Tea\Model;

class capability extends Model
{
    /**
     * @description adds
     *
     * @var array
     */
    public $adds;
    protected $_name = [
        'adds' => 'Adds',
    ];

    public function validate()
    {
        Model::validateRequired('adds', $this->adds, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Adds'] = [];
        if (null !== $this->adds) {
            $res['Adds'] = $this->adds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adds'])) {
            if (!empty($map['Adds'])) {
                $model->adds = [];
                $model->adds = $map['Adds'];
            }
        }

        return $model;
    }
}