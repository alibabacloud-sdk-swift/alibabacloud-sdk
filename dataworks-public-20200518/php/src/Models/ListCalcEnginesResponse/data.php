<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponse\data\calcEngines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data
     *
     * @var array
     */
    public $calcEngines;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
        'calcEngines' => 'CalcEngines',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('calcEngines', $this->calcEngines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->calcEngines) {
            $res['CalcEngines'] = [];
            if (null !== $this->calcEngines && \is_array($this->calcEngines)) {
                $n = 0;
                foreach ($this->calcEngines as $item) {
                    $res['CalcEngines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['CalcEngines'])) {
            if (!empty($map['CalcEngines'])) {
                $model->calcEngines = [];
                $n                  = 0;
                foreach ($map['CalcEngines'] as $item) {
                    $model->calcEngines[$n++] = null !== $item ? calcEngines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
