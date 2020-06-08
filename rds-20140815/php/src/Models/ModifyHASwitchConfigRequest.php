<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyHASwitchConfigRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'HAConfig' => 'HAConfig',
        'manualHATime' => 'ManualHATime',
        'regionId' => 'RegionId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['HAConfig'] = $this->HAConfig;
        $res['ManualHATime'] = $this->manualHATime;
        $res['RegionId'] = $this->regionId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyHASwitchConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['HAConfig'])){
            $model->HAConfig = $map['HAConfig'];
        }
        if(isset($map['ManualHATime'])){
            $model->manualHATime = $map['ManualHATime'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description haConfig
     * @var string
     */
    public $HAConfig;

    /**
     * @description manualHATime
     * @var string
     */
    public $manualHATime;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

}