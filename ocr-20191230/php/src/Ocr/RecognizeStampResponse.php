<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampResponse\data;
use AlibabaCloud\Tea\Model;

class RecognizeStampResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    /**
     * @description data
     *
     * @var RecognizeStampResponse.data
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;
        $res['Data']      = null !== $this->data ? $this->data->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeStampResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = RecognizeStampResponse\data::fromMap($map['Data']);
        }

        return $model;
    }
}