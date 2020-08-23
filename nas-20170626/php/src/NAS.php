<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveClientFromBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveClientFromBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ResetFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ResetFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpgradeFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpgradeFileSystemResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class NAS extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-chengdu'          => 'nas.aliyuncs.com',
            'me-east-1'           => 'nas.ap-northeast-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'nas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DeleteLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLifecyclePolicyResponse::fromMap($this->doRequest('DeleteLifecyclePolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteLifecyclePolicyRequest $request
     *
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeFileSystemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeFileSystemResponse
     */
    public function upgradeFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeFileSystemResponse::fromMap($this->doRequest('UpgradeFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpgradeFileSystemRequest $request
     *
     * @return UpgradeFileSystemResponse
     */
    public function upgradeFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyLifecyclePolicyResponse::fromMap($this->doRequest('ModifyLifecyclePolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyLifecyclePolicyRequest $request
     *
     * @return ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLifecyclePolicyResponse::fromMap($this->doRequest('CreateLifecyclePolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateLifecyclePolicyRequest $request
     *
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLifecyclePoliciesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLifecyclePoliciesResponse::fromMap($this->doRequest('DescribeLifecyclePolicies', 'HTTPS', 'GET', '2017-06-26', 'AK', $request, null, $runtime));
    }

    /**
     * @param DescribeLifecyclePoliciesRequest $request
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecyclePoliciesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirQuotasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDirQuotasResponse
     */
    public function describeDirQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDirQuotasResponse::fromMap($this->doRequest('DescribeDirQuotas', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeDirQuotasRequest $request
     *
     * @return DescribeDirQuotasResponse
     */
    public function describeDirQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirQuotasWithOptions($request, $runtime);
    }

    /**
     * @param SetDirQuotaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SetDirQuotaResponse
     */
    public function setDirQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDirQuotaResponse::fromMap($this->doRequest('SetDirQuota', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param SetDirQuotaRequest $request
     *
     * @return SetDirQuotaResponse
     */
    public function setDirQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDirQuotaWithOptions($request, $runtime);
    }

    /**
     * @param CancelDirQuotaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CancelDirQuotaResponse
     */
    public function cancelDirQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelDirQuotaResponse::fromMap($this->doRequest('CancelDirQuota', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CancelDirQuotaRequest $request
     *
     * @return CancelDirQuotaResponse
     */
    public function cancelDirQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDirQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStoragePackagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeStoragePackagesResponse
     */
    public function describeStoragePackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeStoragePackagesResponse::fromMap($this->doRequest('DescribeStoragePackages', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeStoragePackagesRequest $request
     *
     * @return DescribeStoragePackagesResponse
     */
    public function describeStoragePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoragePackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFileSystemStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFileSystemStatisticsResponse::fromMap($this->doRequest('DescribeFileSystemStatistics', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeFileSystemStatisticsRequest $request
     *
     * @return DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogAnalysisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLogAnalysisResponse::fromMap($this->doRequest('DescribeLogAnalysis', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeLogAnalysisRequest $request
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMountedClientsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMountedClientsResponse
     */
    public function describeMountedClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeMountedClientsResponse::fromMap($this->doRequest('DescribeMountedClients', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeMountedClientsRequest $request
     *
     * @return DescribeMountedClientsResponse
     */
    public function describeMountedClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountedClientsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoSnapshotTasksRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoSnapshotTasksResponse::fromMap($this->doRequest('DescribeAutoSnapshotTasks', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeAutoSnapshotTasksRequest $request
     *
     * @return DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotTasksWithOptions($request, $runtime);
    }

    /**
     * @param RemoveClientFromBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveClientFromBlackListResponse::fromMap($this->doRequest('RemoveClientFromBlackList', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveClientFromBlackListRequest $request
     *
     * @return RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClientFromBlackListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlackListClientsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBlackListClientsResponse
     */
    public function describeBlackListClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBlackListClientsResponse::fromMap($this->doRequest('DescribeBlackListClients', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeBlackListClientsRequest $request
     *
     * @return DescribeBlackListClientsResponse
     */
    public function describeBlackListClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackListClientsWithOptions($request, $runtime);
    }

    /**
     * @param AddClientToBlackListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddClientToBlackListResponse
     */
    public function addClientToBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddClientToBlackListResponse::fromMap($this->doRequest('AddClientToBlackList', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddClientToBlackListRequest $request
     *
     * @return AddClientToBlackListResponse
     */
    public function addClientToBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientToBlackListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLDAPConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLDAPConfigResponse
     */
    public function describeLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLDAPConfigResponse::fromMap($this->doRequest('DescribeLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeLDAPConfigRequest $request
     *
     * @return DescribeLDAPConfigResponse
     */
    public function describeLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyLDAPConfigResponse::fromMap($this->doRequest('ModifyLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyLDAPConfigRequest $request
     *
     * @return ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLDAPConfigResponse
     */
    public function createLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLDAPConfigResponse::fromMap($this->doRequest('CreateLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateLDAPConfigRequest $request
     *
     * @return CreateLDAPConfigResponse
     */
    public function createLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLDAPConfigResponse::fromMap($this->doRequest('DeleteLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteLDAPConfigRequest $request
     *
     * @return DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagsResponse::fromMap($this->doRequest('DescribeTags', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveTagsResponse::fromMap($this->doRequest('RemoveTags', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveTagsRequest $request
     *
     * @return RemoveTagsResponse
     */
    public function removeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @param AddTagsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddTagsResponse::fromMap($this->doRequest('AddTags', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddTagsRequest $request
     *
     * @return AddTagsResponse
     */
    public function addTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @param ResetFileSystemRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetFileSystemResponse
     */
    public function resetFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResetFileSystemResponse::fromMap($this->doRequest('ResetFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ResetFileSystemRequest $request
     *
     * @return ResetFileSystemResponse
     */
    public function resetFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param CreateAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->doRequest('CreateAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateAutoSnapshotPolicyRequest $request
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoSnapshotPoliciesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoSnapshotPoliciesResponse::fromMap($this->doRequest('DescribeAutoSnapshotPolicies', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeAutoSnapshotPoliciesRequest $request
     *
     * @return DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param CancelAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->doRequest('CancelAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CancelAutoSnapshotPolicyRequest $request
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->doRequest('ApplyAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ApplyAutoSnapshotPolicyRequest $request
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->doRequest('ModifyAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyAutoSnapshotPolicyRequest $request
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->doRequest('DeleteAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteAutoSnapshotPolicyRequest $request
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSnapshotResponse::fromMap($this->doRequest('DeleteSnapshot', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSnapshotResponse::fromMap($this->doRequest('CreateSnapshot', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotsResponse::fromMap($this->doRequest('DescribeSnapshots', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeSnapshotsRequest $request
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeZonesResponse::fromMap($this->doRequest('DescribeZones', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAccessGroupResponse
     */
    public function createAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAccessGroupResponse::fromMap($this->doRequest('CreateAccessGroup', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateAccessGroupRequest $request
     *
     * @return CreateAccessGroupResponse
     */
    public function createAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateMountTargetResponse::fromMap($this->doRequest('CreateMountTarget', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateMountTargetRequest $request
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountTargetWithOptions($request, $runtime);
    }

    /**
     * @param CreateFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFileSystemResponse::fromMap($this->doRequest('CreateFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateFileSystemRequest $request
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAccessRuleResponse
     */
    public function createAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAccessRuleResponse::fromMap($this->doRequest('CreateAccessRule', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateAccessRuleRequest $request
     *
     * @return CreateAccessRuleResponse
     */
    public function createAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccessRulesResponse
     */
    public function describeAccessRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccessRulesResponse::fromMap($this->doRequest('DescribeAccessRules', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeAccessRulesRequest $request
     *
     * @return DescribeAccessRulesResponse
     */
    public function describeAccessRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAccessGroupsResponse
     */
    public function describeAccessGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccessGroupsResponse::fromMap($this->doRequest('DescribeAccessGroups', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeAccessGroupsRequest $request
     *
     * @return DescribeAccessGroupsResponse
     */
    public function describeAccessGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteMountTargetResponse::fromMap($this->doRequest('DeleteMountTarget', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteMountTargetRequest $request
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountTargetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFileSystemResponse::fromMap($this->doRequest('DeleteFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteFileSystemRequest $request
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAccessRuleResponse
     */
    public function deleteAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccessRuleResponse::fromMap($this->doRequest('DeleteAccessRule', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteAccessRuleRequest $request
     *
     * @return DeleteAccessRuleResponse
     */
    public function deleteAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAccessGroupResponse
     */
    public function deleteAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccessGroupResponse::fromMap($this->doRequest('DeleteAccessGroup', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteAccessGroupRequest $request
     *
     * @return DeleteAccessGroupResponse
     */
    public function deleteAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAccessRuleResponse
     */
    public function modifyAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyAccessRuleResponse::fromMap($this->doRequest('ModifyAccessRule', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyAccessRuleRequest $request
     *
     * @return ModifyAccessRuleResponse
     */
    public function modifyAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAccessGroupResponse
     */
    public function modifyAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyAccessGroupResponse::fromMap($this->doRequest('ModifyAccessGroup', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyAccessGroupRequest $request
     *
     * @return ModifyAccessGroupResponse
     */
    public function modifyAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMountTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeMountTargetsResponse::fromMap($this->doRequest('DescribeMountTargets', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeMountTargetsRequest $request
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountTargetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFileSystemsResponse::fromMap($this->doRequest('DescribeFileSystems', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeFileSystemsRequest $request
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyMountTargetResponse
     */
    public function modifyMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyMountTargetResponse::fromMap($this->doRequest('ModifyMountTarget', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyMountTargetRequest $request
     *
     * @return ModifyMountTargetResponse
     */
    public function modifyMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountTargetWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyFileSystemResponse::fromMap($this->doRequest('ModifyFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyFileSystemRequest $request
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
