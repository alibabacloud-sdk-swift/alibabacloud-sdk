// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.alinlp20200629.models;

import com.aliyun.tea.*;

public class GetNerChMedicalRequest extends TeaModel {
    @NameInMap("ServiceCode")
    @Validation(required = true)
    public String serviceCode;

    @NameInMap("Text")
    @Validation(required = true)
    public String text;

    public static GetNerChMedicalRequest build(java.util.Map<String, ?> map) throws Exception {
        GetNerChMedicalRequest self = new GetNerChMedicalRequest();
        return TeaModel.build(map, self);
    }

}
