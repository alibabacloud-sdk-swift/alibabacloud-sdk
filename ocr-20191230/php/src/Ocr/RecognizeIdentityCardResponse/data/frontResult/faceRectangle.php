<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse\data\frontResult;

use AlibabaCloud\SDK\Ocr\V20191230\Ocr\faceRectangle\center;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\faceRectangle\size;
use AlibabaCloud\Tea\Model;

class faceRectangle extends Model
{
    /**
     * @description angle
     *
     * @var float
     */
    public $angle;
    /**
     * @description center
     *
     * @var faceRectangle.center
     */
    public $center;
    /**
     * @description size
     *
     * @var faceRectangle.size
     */
    public $size;
    protected $_name = [
        'angle'  => 'Angle',
        'center' => 'Center',
        'size'   => 'Size',
    ];

    public function validate()
    {
        Model::validateRequired('angle', $this->angle, true);
        Model::validateRequired('center', $this->center, true);
        Model::validateRequired('size', $this->size, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Angle']  = $this->angle;
        $res['Center'] = null !== $this->center ? $this->center->toMap() : null;
        $res['Size']   = null !== $this->size ? $this->size->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRectangle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Center'])) {
            $model->center = faceRectangle\center::fromMap($map['Center']);
        }
        if (isset($map['Size'])) {
            $model->size = faceRectangle\size::fromMap($map['Size']);
        }

        return $model;
    }
}