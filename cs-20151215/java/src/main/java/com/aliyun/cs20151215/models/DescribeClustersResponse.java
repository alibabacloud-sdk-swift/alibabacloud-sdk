// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeClustersResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    @Validation(required = true)
    public DescribeClustersResponseBody body;

    public static DescribeClustersResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeClustersResponse self = new DescribeClustersResponse();
        return TeaModel.build(map, self);
    }

}
