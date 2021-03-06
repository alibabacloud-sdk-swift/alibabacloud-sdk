// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.dataworks_public20200518.models;

import com.aliyun.tea.*;

public class CreateNodeComplementRequest extends TeaModel {
    @NameInMap("ProjectEnv")
    @Validation(required = true)
    public String projectEnv;

    @NameInMap("StartBizDate")
    @Validation(required = true)
    public String startBizDate;

    @NameInMap("Name")
    @Validation(required = true)
    public String name;

    @NameInMap("NodeId")
    @Validation(required = true)
    public Long nodeId;

    @NameInMap("NodeProjectId")
    @Validation(required = true)
    public Long nodeProjectId;

    @NameInMap("IncludeNodeIds")
    @Validation(required = true)
    public String includeNodeIds;

    @NameInMap("ExcludeNodeIds")
    @Validation(required = true)
    public String excludeNodeIds;

    @NameInMap("BizBeginTime")
    @Validation(required = true)
    public String bizBeginTime;

    @NameInMap("BizEndTime")
    @Validation(required = true)
    public String bizEndTime;

    @NameInMap("Parallelism")
    @Validation(required = true)
    public Boolean parallelism;

    @NameInMap("EndBizDate")
    @Validation(required = true)
    public String endBizDate;

    public static CreateNodeComplementRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateNodeComplementRequest self = new CreateNodeComplementRequest();
        return TeaModel.build(map, self);
    }

}
