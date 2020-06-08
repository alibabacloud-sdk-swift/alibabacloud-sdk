<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponse\eventItems\eventItems;

class eventItems extends Model {
    protected $_name = [
        'eventItems' => 'EventItems',
    ];
    public function validate() {
        Model::validateRequired('eventItems', $this->eventItems, true);
    }
    public function toMap() {
        $res = [];
        $res['EventItems'] = [];
        if(null !== $this->eventItems && is_array($this->eventItems)){
            $n = 0;
            foreach($this->eventItems as $item){
                $res['EventItems'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return eventItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['EventItems'])){
            if(!empty($map['EventItems'])){
                $model->eventItems = [];
                $n = 0;
                foreach($map['EventItems'] as $item) {
                    $model->eventItems[$n++] = null !== $item ? eventItems::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description EventItems
     * @var array
     */
    public $eventItems;

}