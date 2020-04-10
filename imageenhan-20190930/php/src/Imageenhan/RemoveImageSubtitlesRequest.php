<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class RemoveImageSubtitlesRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    /**
     * @description bx
     *
     * @var float
     */
    public $BX;
    /**
     * @description by
     *
     * @var float
     */
    public $BY;
    /**
     * @description bw
     *
     * @var float
     */
    public $BW;
    /**
     * @description bh
     *
     * @var float
     */
    public $BH;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'BX'       => 'BX',
        'BY'       => 'BY',
        'BW'       => 'BW',
        'BH'       => 'BH',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ImageURL'] = $this->imageURL;
        $res['BX']       = $this->BX;
        $res['BY']       = $this->BY;
        $res['BW']       = $this->BW;
        $res['BH']       = $this->BH;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveImageSubtitlesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['BX'])) {
            $model->BX = $map['BX'];
        }
        if (isset($map['BY'])) {
            $model->BY = $map['BY'];
        }
        if (isset($map['BW'])) {
            $model->BW = $map['BW'];
        }
        if (isset($map['BH'])) {
            $model->BH = $map['BH'];
        }

        return $model;
    }
}