// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.DAS20200116.Models
{
    public class AccessHDMInstanceRequest : TeaModel {
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

        [NameInMap("InstanceArea")]
        [Validation(Required=false)]
        public string InstanceArea { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public string InstanceId { get; set; }

        [NameInMap("Ip")]
        [Validation(Required=false)]
        public string Ip { get; set; }

        [NameInMap("Port")]
        [Validation(Required=false)]
        public string Port { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=false)]
        public string Engine { get; set; }

        [NameInMap("Username")]
        [Validation(Required=false)]
        public string Username { get; set; }

        [NameInMap("Password")]
        [Validation(Required=false)]
        public string Password { get; set; }

        [NameInMap("InstanceAlias")]
        [Validation(Required=false)]
        public string InstanceAlias { get; set; }

        [NameInMap("NetworkType")]
        [Validation(Required=false)]
        public string NetworkType { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=false)]
        public string VpcId { get; set; }

        [NameInMap("Region")]
        [Validation(Required=false)]
        public string Region { get; set; }

        [NameInMap("CallerBid")]
        [Validation(Required=false)]
        public string CallerBid { get; set; }

        [NameInMap("TenantId")]
        [Validation(Required=false)]
        public string TenantId { get; set; }

        [NameInMap("OwnerIdSignature")]
        [Validation(Required=false)]
        public string OwnerIdSignature { get; set; }

        [NameInMap("CallerType")]
        [Validation(Required=false)]
        public string CallerType { get; set; }

        [NameInMap("CallerUid")]
        [Validation(Required=false)]
        public string CallerUid { get; set; }

        [NameInMap("Target")]
        [Validation(Required=false)]
        public string Target { get; set; }

        [NameInMap("Product")]
        [Validation(Required=false)]
        public string Product { get; set; }

        [NameInMap("External")]
        [Validation(Required=false)]
        public string External { get; set; }

    }

}
