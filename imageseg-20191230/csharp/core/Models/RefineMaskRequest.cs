// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageseg20191230.Models
{
    public class RefineMaskRequest : TeaModel {
        [NameInMap("MaskImageURL")]
        [Validation(Required=true)]
        public string MaskImageURL { get; set; }

        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

    }

}
