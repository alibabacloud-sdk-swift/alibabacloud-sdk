<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $iops;
    protected $_name = [
        'category'    => 'Category',
        'size'        => 'Size',
        'diskName'    => 'DiskName',
        'description' => 'Description',
        'iops'        => 'Iops',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }

        return $model;
    }
}
