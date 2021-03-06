// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ApplyAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("regionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("autoSnapshotPolicyId")]
        [Validation(Required=true)]
        public string AutoSnapshotPolicyId { get; set; }

        [NameInMap("diskIds")]
        [Validation(Required=true)]
        public string DiskIds { get; set; }

    }

}
