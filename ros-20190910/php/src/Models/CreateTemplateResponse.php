<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TemplateId
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateId', $this->templateId, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['RequestId']  = $this->requestId;
        $res['TemplateId'] = $this->templateId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}