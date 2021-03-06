// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.DAS20200116.Models
{
    public class SyncHDMAliyunResourceRequest : TeaModel {
        [NameInMap("Uid")]
        [Validation(Required=false)]
        public string Uid { get; set; }

        [NameInMap("accessKey")]
        [Validation(Required=false)]
        public string AccessKey { get; set; }

        [NameInMap("signature")]
        [Validation(Required=false)]
        public string Signature { get; set; }

        [NameInMap("timestamp")]
        [Validation(Required=false)]
        public string Timestamp { get; set; }

        [NameInMap("__context")]
        [Validation(Required=false)]
        public string Context { get; set; }

        [NameInMap("skipAuth")]
        [Validation(Required=false)]
        public string SkipAuth { get; set; }

        [NameInMap("UserId")]
        [Validation(Required=false)]
        public string UserId { get; set; }

        [NameInMap("Async")]
        [Validation(Required=false)]
        public string Async { get; set; }

        [NameInMap("WaitForModifySecurityIps")]
        [Validation(Required=false)]
        public string WaitForModifySecurityIps { get; set; }

        [NameInMap("ResourceTypes")]
        [Validation(Required=false)]
        public string ResourceTypes { get; set; }

    }

}
