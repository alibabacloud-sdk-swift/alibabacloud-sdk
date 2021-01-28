# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel
from Tea.converter import TeaConverter


class SearchImageByNameRequest(TeaModel):
    def __init__(self, category_id=None, instance_name=None, product_id=None, pic_name=None, num=None, start=None,
                 filter=None):
        self.category_id = category_id  # type: int
        self.instance_name = TeaConverter.to_unicode(instance_name)  # type: unicode
        self.product_id = TeaConverter.to_unicode(product_id)  # type: unicode
        self.pic_name = TeaConverter.to_unicode(pic_name)  # type: unicode
        self.num = num  # type: int
        self.start = start  # type: int
        self.filter = TeaConverter.to_unicode(filter)  # type: unicode

    def validate(self):
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.product_id, 'product_id')
        self.validate_required(self.pic_name, 'pic_name')

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.instance_name is not None:
            result['InstanceName'] = self.instance_name
        if self.product_id is not None:
            result['ProductId'] = self.product_id
        if self.pic_name is not None:
            result['PicName'] = self.pic_name
        if self.num is not None:
            result['Num'] = self.num
        if self.start is not None:
            result['Start'] = self.start
        if self.filter is not None:
            result['Filter'] = self.filter
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('InstanceName') is not None:
            self.instance_name = m.get('InstanceName')
        if m.get('ProductId') is not None:
            self.product_id = m.get('ProductId')
        if m.get('PicName') is not None:
            self.pic_name = m.get('PicName')
        if m.get('Num') is not None:
            self.num = m.get('Num')
        if m.get('Start') is not None:
            self.start = m.get('Start')
        if m.get('Filter') is not None:
            self.filter = m.get('Filter')
        return self


class SearchImageByNameResponseAuctions(TeaModel):
    def __init__(self, category_id=None, product_id=None, pic_name=None, custom_content=None, sort_expr_values=None,
                 int_attr=None, str_attr=None):
        self.category_id = category_id  # type: int
        self.product_id = TeaConverter.to_unicode(product_id)  # type: unicode
        self.pic_name = TeaConverter.to_unicode(pic_name)  # type: unicode
        self.custom_content = TeaConverter.to_unicode(custom_content)  # type: unicode
        self.sort_expr_values = TeaConverter.to_unicode(sort_expr_values)  # type: unicode
        self.int_attr = int_attr  # type: int
        self.str_attr = TeaConverter.to_unicode(str_attr)  # type: unicode

    def validate(self):
        self.validate_required(self.category_id, 'category_id')
        self.validate_required(self.product_id, 'product_id')
        self.validate_required(self.pic_name, 'pic_name')
        self.validate_required(self.custom_content, 'custom_content')
        self.validate_required(self.sort_expr_values, 'sort_expr_values')
        self.validate_required(self.int_attr, 'int_attr')
        self.validate_required(self.str_attr, 'str_attr')

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.product_id is not None:
            result['ProductId'] = self.product_id
        if self.pic_name is not None:
            result['PicName'] = self.pic_name
        if self.custom_content is not None:
            result['CustomContent'] = self.custom_content
        if self.sort_expr_values is not None:
            result['SortExprValues'] = self.sort_expr_values
        if self.int_attr is not None:
            result['IntAttr'] = self.int_attr
        if self.str_attr is not None:
            result['StrAttr'] = self.str_attr
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('ProductId') is not None:
            self.product_id = m.get('ProductId')
        if m.get('PicName') is not None:
            self.pic_name = m.get('PicName')
        if m.get('CustomContent') is not None:
            self.custom_content = m.get('CustomContent')
        if m.get('SortExprValues') is not None:
            self.sort_expr_values = m.get('SortExprValues')
        if m.get('IntAttr') is not None:
            self.int_attr = m.get('IntAttr')
        if m.get('StrAttr') is not None:
            self.str_attr = m.get('StrAttr')
        return self


class SearchImageByNameResponseHead(TeaModel):
    def __init__(self, docs_return=None, docs_found=None, search_time=None):
        self.docs_return = docs_return  # type: int
        self.docs_found = docs_found  # type: int
        self.search_time = search_time  # type: int

    def validate(self):
        self.validate_required(self.docs_return, 'docs_return')
        self.validate_required(self.docs_found, 'docs_found')
        self.validate_required(self.search_time, 'search_time')

    def to_map(self):
        result = dict()
        if self.docs_return is not None:
            result['DocsReturn'] = self.docs_return
        if self.docs_found is not None:
            result['DocsFound'] = self.docs_found
        if self.search_time is not None:
            result['SearchTime'] = self.search_time
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('DocsReturn') is not None:
            self.docs_return = m.get('DocsReturn')
        if m.get('DocsFound') is not None:
            self.docs_found = m.get('DocsFound')
        if m.get('SearchTime') is not None:
            self.search_time = m.get('SearchTime')
        return self


class SearchImageByNameResponsePicInfoAllCategories(TeaModel):
    def __init__(self, id=None, name=None):
        self.id = id  # type: int
        self.name = TeaConverter.to_unicode(name)  # type: unicode

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = dict()
        if self.id is not None:
            result['Id'] = self.id
        if self.name is not None:
            result['Name'] = self.name
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('Id') is not None:
            self.id = m.get('Id')
        if m.get('Name') is not None:
            self.name = m.get('Name')
        return self


class SearchImageByNameResponsePicInfo(TeaModel):
    def __init__(self, category_id=None, region=None, all_categories=None):
        self.category_id = category_id  # type: int
        self.region = TeaConverter.to_unicode(region)  # type: unicode
        self.all_categories = all_categories  # type: list[SearchImageByNameResponsePicInfoAllCategories]

    def validate(self):
        self.validate_required(self.category_id, 'category_id')
        self.validate_required(self.region, 'region')
        self.validate_required(self.all_categories, 'all_categories')
        if self.all_categories:
            for k in self.all_categories:
                if k:
                    k.validate()

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.region is not None:
            result['Region'] = self.region
        result['AllCategories'] = []
        if self.all_categories is not None:
            for k in self.all_categories:
                result['AllCategories'].append(k.to_map() if k else None)
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        self.all_categories = []
        if m.get('AllCategories') is not None:
            for k in m.get('AllCategories'):
                temp_model = SearchImageByNameResponsePicInfoAllCategories()
                self.all_categories.append(temp_model.from_map(k))
        return self


class SearchImageByNameResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, msg=None, auctions=None, head=None, pic_info=None):
        self.request_id = TeaConverter.to_unicode(request_id)  # type: unicode
        self.success = success  # type: bool
        self.code = code  # type: int
        self.msg = TeaConverter.to_unicode(msg)  # type: unicode
        self.auctions = auctions  # type: list[SearchImageByNameResponseAuctions]
        self.head = head  # type: SearchImageByNameResponseHead
        self.pic_info = pic_info  # type: SearchImageByNameResponsePicInfo

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.msg, 'msg')
        self.validate_required(self.auctions, 'auctions')
        if self.auctions:
            for k in self.auctions:
                if k:
                    k.validate()
        self.validate_required(self.head, 'head')
        if self.head:
            self.head.validate()
        self.validate_required(self.pic_info, 'pic_info')
        if self.pic_info:
            self.pic_info.validate()

    def to_map(self):
        result = dict()
        if self.request_id is not None:
            result['RequestId'] = self.request_id
        if self.success is not None:
            result['Success'] = self.success
        if self.code is not None:
            result['Code'] = self.code
        if self.msg is not None:
            result['Msg'] = self.msg
        result['Auctions'] = []
        if self.auctions is not None:
            for k in self.auctions:
                result['Auctions'].append(k.to_map() if k else None)
        if self.head is not None:
            result['Head'] = self.head.to_map()
        if self.pic_info is not None:
            result['PicInfo'] = self.pic_info.to_map()
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('RequestId') is not None:
            self.request_id = m.get('RequestId')
        if m.get('Success') is not None:
            self.success = m.get('Success')
        if m.get('Code') is not None:
            self.code = m.get('Code')
        if m.get('Msg') is not None:
            self.msg = m.get('Msg')
        self.auctions = []
        if m.get('Auctions') is not None:
            for k in m.get('Auctions'):
                temp_model = SearchImageByNameResponseAuctions()
                self.auctions.append(temp_model.from_map(k))
        if m.get('Head') is not None:
            temp_model = SearchImageByNameResponseHead()
            self.head = temp_model.from_map(m['Head'])
        if m.get('PicInfo') is not None:
            temp_model = SearchImageByNameResponsePicInfo()
            self.pic_info = temp_model.from_map(m['PicInfo'])
        return self


class SearchImageByPicRequest(TeaModel):
    def __init__(self, category_id=None, instance_name=None, pic_content=None, crop=None, region=None, num=None,
                 start=None, filter=None):
        self.category_id = category_id  # type: int
        self.instance_name = TeaConverter.to_unicode(instance_name)  # type: unicode
        self.pic_content = TeaConverter.to_unicode(pic_content)  # type: unicode
        self.crop = crop  # type: bool
        self.region = TeaConverter.to_unicode(region)  # type: unicode
        self.num = num  # type: int
        self.start = start  # type: int
        self.filter = TeaConverter.to_unicode(filter)  # type: unicode

    def validate(self):
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.pic_content, 'pic_content')

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.instance_name is not None:
            result['InstanceName'] = self.instance_name
        if self.pic_content is not None:
            result['PicContent'] = self.pic_content
        if self.crop is not None:
            result['Crop'] = self.crop
        if self.region is not None:
            result['Region'] = self.region
        if self.num is not None:
            result['Num'] = self.num
        if self.start is not None:
            result['Start'] = self.start
        if self.filter is not None:
            result['Filter'] = self.filter
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('InstanceName') is not None:
            self.instance_name = m.get('InstanceName')
        if m.get('PicContent') is not None:
            self.pic_content = m.get('PicContent')
        if m.get('Crop') is not None:
            self.crop = m.get('Crop')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        if m.get('Num') is not None:
            self.num = m.get('Num')
        if m.get('Start') is not None:
            self.start = m.get('Start')
        if m.get('Filter') is not None:
            self.filter = m.get('Filter')
        return self


class SearchImageByPicResponseAuctions(TeaModel):
    def __init__(self, category_id=None, product_id=None, pic_name=None, custom_content=None, sort_expr_values=None,
                 int_attr=None, str_attr=None):
        self.category_id = category_id  # type: int
        self.product_id = TeaConverter.to_unicode(product_id)  # type: unicode
        self.pic_name = TeaConverter.to_unicode(pic_name)  # type: unicode
        self.custom_content = TeaConverter.to_unicode(custom_content)  # type: unicode
        self.sort_expr_values = TeaConverter.to_unicode(sort_expr_values)  # type: unicode
        self.int_attr = int_attr  # type: int
        self.str_attr = TeaConverter.to_unicode(str_attr)  # type: unicode

    def validate(self):
        self.validate_required(self.category_id, 'category_id')
        self.validate_required(self.product_id, 'product_id')
        self.validate_required(self.pic_name, 'pic_name')
        self.validate_required(self.custom_content, 'custom_content')
        self.validate_required(self.sort_expr_values, 'sort_expr_values')
        self.validate_required(self.int_attr, 'int_attr')
        self.validate_required(self.str_attr, 'str_attr')

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.product_id is not None:
            result['ProductId'] = self.product_id
        if self.pic_name is not None:
            result['PicName'] = self.pic_name
        if self.custom_content is not None:
            result['CustomContent'] = self.custom_content
        if self.sort_expr_values is not None:
            result['SortExprValues'] = self.sort_expr_values
        if self.int_attr is not None:
            result['IntAttr'] = self.int_attr
        if self.str_attr is not None:
            result['StrAttr'] = self.str_attr
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('ProductId') is not None:
            self.product_id = m.get('ProductId')
        if m.get('PicName') is not None:
            self.pic_name = m.get('PicName')
        if m.get('CustomContent') is not None:
            self.custom_content = m.get('CustomContent')
        if m.get('SortExprValues') is not None:
            self.sort_expr_values = m.get('SortExprValues')
        if m.get('IntAttr') is not None:
            self.int_attr = m.get('IntAttr')
        if m.get('StrAttr') is not None:
            self.str_attr = m.get('StrAttr')
        return self


class SearchImageByPicResponseHead(TeaModel):
    def __init__(self, docs_return=None, docs_found=None, search_time=None):
        self.docs_return = docs_return  # type: int
        self.docs_found = docs_found  # type: int
        self.search_time = search_time  # type: int

    def validate(self):
        self.validate_required(self.docs_return, 'docs_return')
        self.validate_required(self.docs_found, 'docs_found')
        self.validate_required(self.search_time, 'search_time')

    def to_map(self):
        result = dict()
        if self.docs_return is not None:
            result['DocsReturn'] = self.docs_return
        if self.docs_found is not None:
            result['DocsFound'] = self.docs_found
        if self.search_time is not None:
            result['SearchTime'] = self.search_time
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('DocsReturn') is not None:
            self.docs_return = m.get('DocsReturn')
        if m.get('DocsFound') is not None:
            self.docs_found = m.get('DocsFound')
        if m.get('SearchTime') is not None:
            self.search_time = m.get('SearchTime')
        return self


class SearchImageByPicResponsePicInfoAllCategories(TeaModel):
    def __init__(self, id=None, name=None):
        self.id = id  # type: int
        self.name = TeaConverter.to_unicode(name)  # type: unicode

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = dict()
        if self.id is not None:
            result['Id'] = self.id
        if self.name is not None:
            result['Name'] = self.name
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('Id') is not None:
            self.id = m.get('Id')
        if m.get('Name') is not None:
            self.name = m.get('Name')
        return self


class SearchImageByPicResponsePicInfo(TeaModel):
    def __init__(self, category_id=None, region=None, all_categories=None):
        self.category_id = category_id  # type: int
        self.region = TeaConverter.to_unicode(region)  # type: unicode
        self.all_categories = all_categories  # type: list[SearchImageByPicResponsePicInfoAllCategories]

    def validate(self):
        self.validate_required(self.category_id, 'category_id')
        self.validate_required(self.region, 'region')
        self.validate_required(self.all_categories, 'all_categories')
        if self.all_categories:
            for k in self.all_categories:
                if k:
                    k.validate()

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.region is not None:
            result['Region'] = self.region
        result['AllCategories'] = []
        if self.all_categories is not None:
            for k in self.all_categories:
                result['AllCategories'].append(k.to_map() if k else None)
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        self.all_categories = []
        if m.get('AllCategories') is not None:
            for k in m.get('AllCategories'):
                temp_model = SearchImageByPicResponsePicInfoAllCategories()
                self.all_categories.append(temp_model.from_map(k))
        return self


class SearchImageByPicResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, msg=None, auctions=None, head=None, pic_info=None):
        self.request_id = TeaConverter.to_unicode(request_id)  # type: unicode
        self.success = success  # type: bool
        self.code = code  # type: int
        self.msg = TeaConverter.to_unicode(msg)  # type: unicode
        self.auctions = auctions  # type: list[SearchImageByPicResponseAuctions]
        self.head = head  # type: SearchImageByPicResponseHead
        self.pic_info = pic_info  # type: SearchImageByPicResponsePicInfo

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.msg, 'msg')
        self.validate_required(self.auctions, 'auctions')
        if self.auctions:
            for k in self.auctions:
                if k:
                    k.validate()
        self.validate_required(self.head, 'head')
        if self.head:
            self.head.validate()
        self.validate_required(self.pic_info, 'pic_info')
        if self.pic_info:
            self.pic_info.validate()

    def to_map(self):
        result = dict()
        if self.request_id is not None:
            result['RequestId'] = self.request_id
        if self.success is not None:
            result['Success'] = self.success
        if self.code is not None:
            result['Code'] = self.code
        if self.msg is not None:
            result['Msg'] = self.msg
        result['Auctions'] = []
        if self.auctions is not None:
            for k in self.auctions:
                result['Auctions'].append(k.to_map() if k else None)
        if self.head is not None:
            result['Head'] = self.head.to_map()
        if self.pic_info is not None:
            result['PicInfo'] = self.pic_info.to_map()
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('RequestId') is not None:
            self.request_id = m.get('RequestId')
        if m.get('Success') is not None:
            self.success = m.get('Success')
        if m.get('Code') is not None:
            self.code = m.get('Code')
        if m.get('Msg') is not None:
            self.msg = m.get('Msg')
        self.auctions = []
        if m.get('Auctions') is not None:
            for k in m.get('Auctions'):
                temp_model = SearchImageByPicResponseAuctions()
                self.auctions.append(temp_model.from_map(k))
        if m.get('Head') is not None:
            temp_model = SearchImageByPicResponseHead()
            self.head = temp_model.from_map(m['Head'])
        if m.get('PicInfo') is not None:
            temp_model = SearchImageByPicResponsePicInfo()
            self.pic_info = temp_model.from_map(m['PicInfo'])
        return self


class SearchImageByPicAdvanceRequest(TeaModel):
    def __init__(self, pic_content_object=None, category_id=None, instance_name=None, crop=None, region=None,
                 num=None, start=None, filter=None):
        self.pic_content_object = pic_content_object  # type: READABLE
        self.category_id = category_id  # type: int
        self.instance_name = TeaConverter.to_unicode(instance_name)  # type: unicode
        self.crop = crop  # type: bool
        self.region = TeaConverter.to_unicode(region)  # type: unicode
        self.num = num  # type: int
        self.start = start  # type: int
        self.filter = TeaConverter.to_unicode(filter)  # type: unicode

    def validate(self):
        self.validate_required(self.pic_content_object, 'pic_content_object')
        self.validate_required(self.instance_name, 'instance_name')

    def to_map(self):
        result = dict()
        if self.pic_content_object is not None:
            result['PicContentObject'] = self.pic_content_object
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.instance_name is not None:
            result['InstanceName'] = self.instance_name
        if self.crop is not None:
            result['Crop'] = self.crop
        if self.region is not None:
            result['Region'] = self.region
        if self.num is not None:
            result['Num'] = self.num
        if self.start is not None:
            result['Start'] = self.start
        if self.filter is not None:
            result['Filter'] = self.filter
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('PicContentObject') is not None:
            self.pic_content_object = m.get('PicContentObject')
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('InstanceName') is not None:
            self.instance_name = m.get('InstanceName')
        if m.get('Crop') is not None:
            self.crop = m.get('Crop')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        if m.get('Num') is not None:
            self.num = m.get('Num')
        if m.get('Start') is not None:
            self.start = m.get('Start')
        if m.get('Filter') is not None:
            self.filter = m.get('Filter')
        return self


class DeleteImageRequest(TeaModel):
    def __init__(self, instance_name=None, product_id=None, pic_name=None):
        self.instance_name = TeaConverter.to_unicode(instance_name)  # type: unicode
        self.product_id = TeaConverter.to_unicode(product_id)  # type: unicode
        self.pic_name = TeaConverter.to_unicode(pic_name)  # type: unicode

    def validate(self):
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.product_id, 'product_id')

    def to_map(self):
        result = dict()
        if self.instance_name is not None:
            result['InstanceName'] = self.instance_name
        if self.product_id is not None:
            result['ProductId'] = self.product_id
        if self.pic_name is not None:
            result['PicName'] = self.pic_name
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('InstanceName') is not None:
            self.instance_name = m.get('InstanceName')
        if m.get('ProductId') is not None:
            self.product_id = m.get('ProductId')
        if m.get('PicName') is not None:
            self.pic_name = m.get('PicName')
        return self


class DeleteImageResponse(TeaModel):
    def __init__(self, request_id=None, success=None, message=None, code=None):
        self.request_id = TeaConverter.to_unicode(request_id)  # type: unicode
        self.success = success  # type: bool
        self.message = TeaConverter.to_unicode(message)  # type: unicode
        self.code = code  # type: int

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = dict()
        if self.request_id is not None:
            result['RequestId'] = self.request_id
        if self.success is not None:
            result['Success'] = self.success
        if self.message is not None:
            result['Message'] = self.message
        if self.code is not None:
            result['Code'] = self.code
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('RequestId') is not None:
            self.request_id = m.get('RequestId')
        if m.get('Success') is not None:
            self.success = m.get('Success')
        if m.get('Message') is not None:
            self.message = m.get('Message')
        if m.get('Code') is not None:
            self.code = m.get('Code')
        return self


class AddImageRequest(TeaModel):
    def __init__(self, instance_name=None, category_id=None, product_id=None, pic_name=None, pic_content=None,
                 crop=None, region=None, custom_content=None, int_attr=None, str_attr=None):
        self.instance_name = TeaConverter.to_unicode(instance_name)  # type: unicode
        self.category_id = category_id  # type: int
        self.product_id = TeaConverter.to_unicode(product_id)  # type: unicode
        self.pic_name = TeaConverter.to_unicode(pic_name)  # type: unicode
        self.pic_content = TeaConverter.to_unicode(pic_content)  # type: unicode
        self.crop = crop  # type: bool
        self.region = TeaConverter.to_unicode(region)  # type: unicode
        self.custom_content = TeaConverter.to_unicode(custom_content)  # type: unicode
        self.int_attr = int_attr  # type: int
        self.str_attr = TeaConverter.to_unicode(str_attr)  # type: unicode

    def validate(self):
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.product_id, 'product_id')
        self.validate_required(self.pic_name, 'pic_name')
        self.validate_required(self.pic_content, 'pic_content')

    def to_map(self):
        result = dict()
        if self.instance_name is not None:
            result['InstanceName'] = self.instance_name
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.product_id is not None:
            result['ProductId'] = self.product_id
        if self.pic_name is not None:
            result['PicName'] = self.pic_name
        if self.pic_content is not None:
            result['PicContent'] = self.pic_content
        if self.crop is not None:
            result['Crop'] = self.crop
        if self.region is not None:
            result['Region'] = self.region
        if self.custom_content is not None:
            result['CustomContent'] = self.custom_content
        if self.int_attr is not None:
            result['IntAttr'] = self.int_attr
        if self.str_attr is not None:
            result['StrAttr'] = self.str_attr
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('InstanceName') is not None:
            self.instance_name = m.get('InstanceName')
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('ProductId') is not None:
            self.product_id = m.get('ProductId')
        if m.get('PicName') is not None:
            self.pic_name = m.get('PicName')
        if m.get('PicContent') is not None:
            self.pic_content = m.get('PicContent')
        if m.get('Crop') is not None:
            self.crop = m.get('Crop')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        if m.get('CustomContent') is not None:
            self.custom_content = m.get('CustomContent')
        if m.get('IntAttr') is not None:
            self.int_attr = m.get('IntAttr')
        if m.get('StrAttr') is not None:
            self.str_attr = m.get('StrAttr')
        return self


class AddImageResponsePicInfo(TeaModel):
    def __init__(self, category_id=None, region=None):
        self.category_id = category_id  # type: int
        self.region = TeaConverter.to_unicode(region)  # type: unicode

    def validate(self):
        self.validate_required(self.category_id, 'category_id')
        self.validate_required(self.region, 'region')

    def to_map(self):
        result = dict()
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.region is not None:
            result['Region'] = self.region
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        return self


class AddImageResponse(TeaModel):
    def __init__(self, request_id=None, success=None, message=None, code=None, pic_info=None):
        self.request_id = TeaConverter.to_unicode(request_id)  # type: unicode
        self.success = success  # type: bool
        self.message = TeaConverter.to_unicode(message)  # type: unicode
        self.code = code  # type: int
        self.pic_info = pic_info  # type: AddImageResponsePicInfo

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.pic_info, 'pic_info')
        if self.pic_info:
            self.pic_info.validate()

    def to_map(self):
        result = dict()
        if self.request_id is not None:
            result['RequestId'] = self.request_id
        if self.success is not None:
            result['Success'] = self.success
        if self.message is not None:
            result['Message'] = self.message
        if self.code is not None:
            result['Code'] = self.code
        if self.pic_info is not None:
            result['PicInfo'] = self.pic_info.to_map()
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('RequestId') is not None:
            self.request_id = m.get('RequestId')
        if m.get('Success') is not None:
            self.success = m.get('Success')
        if m.get('Message') is not None:
            self.message = m.get('Message')
        if m.get('Code') is not None:
            self.code = m.get('Code')
        if m.get('PicInfo') is not None:
            temp_model = AddImageResponsePicInfo()
            self.pic_info = temp_model.from_map(m['PicInfo'])
        return self


class AddImageAdvanceRequest(TeaModel):
    def __init__(self, pic_content_object=None, instance_name=None, category_id=None, product_id=None,
                 pic_name=None, crop=None, region=None, custom_content=None, int_attr=None, str_attr=None):
        self.pic_content_object = pic_content_object  # type: READABLE
        self.instance_name = TeaConverter.to_unicode(instance_name)  # type: unicode
        self.category_id = category_id  # type: int
        self.product_id = TeaConverter.to_unicode(product_id)  # type: unicode
        self.pic_name = TeaConverter.to_unicode(pic_name)  # type: unicode
        self.crop = crop  # type: bool
        self.region = TeaConverter.to_unicode(region)  # type: unicode
        self.custom_content = TeaConverter.to_unicode(custom_content)  # type: unicode
        self.int_attr = int_attr  # type: int
        self.str_attr = TeaConverter.to_unicode(str_attr)  # type: unicode

    def validate(self):
        self.validate_required(self.pic_content_object, 'pic_content_object')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.product_id, 'product_id')
        self.validate_required(self.pic_name, 'pic_name')

    def to_map(self):
        result = dict()
        if self.pic_content_object is not None:
            result['PicContentObject'] = self.pic_content_object
        if self.instance_name is not None:
            result['InstanceName'] = self.instance_name
        if self.category_id is not None:
            result['CategoryId'] = self.category_id
        if self.product_id is not None:
            result['ProductId'] = self.product_id
        if self.pic_name is not None:
            result['PicName'] = self.pic_name
        if self.crop is not None:
            result['Crop'] = self.crop
        if self.region is not None:
            result['Region'] = self.region
        if self.custom_content is not None:
            result['CustomContent'] = self.custom_content
        if self.int_attr is not None:
            result['IntAttr'] = self.int_attr
        if self.str_attr is not None:
            result['StrAttr'] = self.str_attr
        return result

    def from_map(self, m=None):
        m = m or dict()
        if m.get('PicContentObject') is not None:
            self.pic_content_object = m.get('PicContentObject')
        if m.get('InstanceName') is not None:
            self.instance_name = m.get('InstanceName')
        if m.get('CategoryId') is not None:
            self.category_id = m.get('CategoryId')
        if m.get('ProductId') is not None:
            self.product_id = m.get('ProductId')
        if m.get('PicName') is not None:
            self.pic_name = m.get('PicName')
        if m.get('Crop') is not None:
            self.crop = m.get('Crop')
        if m.get('Region') is not None:
            self.region = m.get('Region')
        if m.get('CustomContent') is not None:
            self.custom_content = m.get('CustomContent')
        if m.get('IntAttr') is not None:
            self.int_attr = m.get('IntAttr')
        if m.get('StrAttr') is not None:
            self.str_attr = m.get('StrAttr')
        return self


