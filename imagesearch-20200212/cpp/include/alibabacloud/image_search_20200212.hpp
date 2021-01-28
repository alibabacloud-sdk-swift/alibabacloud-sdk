// This file is auto-generated, don't edit it. Thanks.

#ifndef ALIBABACLOUD_IMAGESEARCH20200212_H_
#define ALIBABACLOUD_IMAGESEARCH20200212_H_

#include <alibabacloud/rpc.hpp>
#include <boost/throw_exception.hpp>
#include <darabonba/core.hpp>
#include <darabonba/util.hpp>
#include <iostream>
#include <map>
#include <vector>

using namespace std;

namespace Alibabacloud_ImageSearch20200212 {
class SearchImageByNameRequest : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> instanceName{};
  shared_ptr<string> productId{};
  shared_ptr<string> picName{};
  shared_ptr<int> num{};
  shared_ptr<int> start{};
  shared_ptr<string> filter{};

  SearchImageByNameRequest() {}

  explicit SearchImageByNameRequest(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!instanceName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("instanceName is required.")));
    }
    if (!productId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("productId is required.")));
    }
    if (!picName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picName is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (instanceName) {
      res["InstanceName"] = boost::any(*instanceName);
    }
    if (productId) {
      res["ProductId"] = boost::any(*productId);
    }
    if (picName) {
      res["PicName"] = boost::any(*picName);
    }
    if (num) {
      res["Num"] = boost::any(*num);
    }
    if (start) {
      res["Start"] = boost::any(*start);
    }
    if (filter) {
      res["Filter"] = boost::any(*filter);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("InstanceName") != m.end() && !m["InstanceName"].empty()) {
      instanceName = make_shared<string>(boost::any_cast<string>(m["InstanceName"]));
    }
    if (m.find("ProductId") != m.end() && !m["ProductId"].empty()) {
      productId = make_shared<string>(boost::any_cast<string>(m["ProductId"]));
    }
    if (m.find("PicName") != m.end() && !m["PicName"].empty()) {
      picName = make_shared<string>(boost::any_cast<string>(m["PicName"]));
    }
    if (m.find("Num") != m.end() && !m["Num"].empty()) {
      num = make_shared<int>(boost::any_cast<int>(m["Num"]));
    }
    if (m.find("Start") != m.end() && !m["Start"].empty()) {
      start = make_shared<int>(boost::any_cast<int>(m["Start"]));
    }
    if (m.find("Filter") != m.end() && !m["Filter"].empty()) {
      filter = make_shared<string>(boost::any_cast<string>(m["Filter"]));
    }
  }


  virtual ~SearchImageByNameRequest() = default;
};
class SearchImageByNameResponseAuctions : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> productId{};
  shared_ptr<string> picName{};
  shared_ptr<string> customContent{};
  shared_ptr<string> sortExprValues{};
  shared_ptr<int> intAttr{};
  shared_ptr<string> strAttr{};

  SearchImageByNameResponseAuctions() {}

  explicit SearchImageByNameResponseAuctions(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!categoryId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("categoryId is required.")));
    }
    if (!productId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("productId is required.")));
    }
    if (!picName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picName is required.")));
    }
    if (!customContent) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("customContent is required.")));
    }
    if (!sortExprValues) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("sortExprValues is required.")));
    }
    if (!intAttr) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("intAttr is required.")));
    }
    if (!strAttr) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("strAttr is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (productId) {
      res["ProductId"] = boost::any(*productId);
    }
    if (picName) {
      res["PicName"] = boost::any(*picName);
    }
    if (customContent) {
      res["CustomContent"] = boost::any(*customContent);
    }
    if (sortExprValues) {
      res["SortExprValues"] = boost::any(*sortExprValues);
    }
    if (intAttr) {
      res["IntAttr"] = boost::any(*intAttr);
    }
    if (strAttr) {
      res["StrAttr"] = boost::any(*strAttr);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("ProductId") != m.end() && !m["ProductId"].empty()) {
      productId = make_shared<string>(boost::any_cast<string>(m["ProductId"]));
    }
    if (m.find("PicName") != m.end() && !m["PicName"].empty()) {
      picName = make_shared<string>(boost::any_cast<string>(m["PicName"]));
    }
    if (m.find("CustomContent") != m.end() && !m["CustomContent"].empty()) {
      customContent = make_shared<string>(boost::any_cast<string>(m["CustomContent"]));
    }
    if (m.find("SortExprValues") != m.end() && !m["SortExprValues"].empty()) {
      sortExprValues = make_shared<string>(boost::any_cast<string>(m["SortExprValues"]));
    }
    if (m.find("IntAttr") != m.end() && !m["IntAttr"].empty()) {
      intAttr = make_shared<int>(boost::any_cast<int>(m["IntAttr"]));
    }
    if (m.find("StrAttr") != m.end() && !m["StrAttr"].empty()) {
      strAttr = make_shared<string>(boost::any_cast<string>(m["StrAttr"]));
    }
  }


  virtual ~SearchImageByNameResponseAuctions() = default;
};
class SearchImageByNameResponseHead : public Darabonba::Model {
public:
  shared_ptr<int> docsReturn{};
  shared_ptr<int> docsFound{};
  shared_ptr<int> searchTime{};

  SearchImageByNameResponseHead() {}

  explicit SearchImageByNameResponseHead(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!docsReturn) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("docsReturn is required.")));
    }
    if (!docsFound) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("docsFound is required.")));
    }
    if (!searchTime) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("searchTime is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (docsReturn) {
      res["DocsReturn"] = boost::any(*docsReturn);
    }
    if (docsFound) {
      res["DocsFound"] = boost::any(*docsFound);
    }
    if (searchTime) {
      res["SearchTime"] = boost::any(*searchTime);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("DocsReturn") != m.end() && !m["DocsReturn"].empty()) {
      docsReturn = make_shared<int>(boost::any_cast<int>(m["DocsReturn"]));
    }
    if (m.find("DocsFound") != m.end() && !m["DocsFound"].empty()) {
      docsFound = make_shared<int>(boost::any_cast<int>(m["DocsFound"]));
    }
    if (m.find("SearchTime") != m.end() && !m["SearchTime"].empty()) {
      searchTime = make_shared<int>(boost::any_cast<int>(m["SearchTime"]));
    }
  }


  virtual ~SearchImageByNameResponseHead() = default;
};
class SearchImageByNameResponsePicInfoAllCategories : public Darabonba::Model {
public:
  shared_ptr<int> id{};
  shared_ptr<string> name{};

  SearchImageByNameResponsePicInfoAllCategories() {}

  explicit SearchImageByNameResponsePicInfoAllCategories(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!id) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("id is required.")));
    }
    if (!name) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("name is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (id) {
      res["Id"] = boost::any(*id);
    }
    if (name) {
      res["Name"] = boost::any(*name);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("Id") != m.end() && !m["Id"].empty()) {
      id = make_shared<int>(boost::any_cast<int>(m["Id"]));
    }
    if (m.find("Name") != m.end() && !m["Name"].empty()) {
      name = make_shared<string>(boost::any_cast<string>(m["Name"]));
    }
  }


  virtual ~SearchImageByNameResponsePicInfoAllCategories() = default;
};
class SearchImageByNameResponsePicInfo : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> region{};
  shared_ptr<vector<SearchImageByNameResponsePicInfoAllCategories>> allCategories{};

  SearchImageByNameResponsePicInfo() {}

  explicit SearchImageByNameResponsePicInfo(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!categoryId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("categoryId is required.")));
    }
    if (!region) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("region is required.")));
    }
    if (!allCategories) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("allCategories is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    if (allCategories) {
      vector<boost::any> temp1;
      for(auto item1:*allCategories){
        temp1.push_back(boost::any(item1.toMap()));
      }
      res["AllCategories"] = boost::any(temp1);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
    if (m.find("AllCategories") != m.end() && !m["AllCategories"].empty()) {
      if (typeid(vector<boost::any>) == m["AllCategories"].type()) {
        vector<SearchImageByNameResponsePicInfoAllCategories> expect1;
        for(auto item1:boost::any_cast<vector<boost::any>>(m["AllCategories"])){
          if (typeid(map<string, boost::any>) == item1.type()) {
            SearchImageByNameResponsePicInfoAllCategories model2;
            model2.fromMap(boost::any_cast<map<string, boost::any>>(item1));
            expect1.push_back(model2);
          }
        }
        allCategories = make_shared<vector<SearchImageByNameResponsePicInfoAllCategories>>(expect1);
      }
    }
  }


  virtual ~SearchImageByNameResponsePicInfo() = default;
};
class SearchImageByNameResponse : public Darabonba::Model {
public:
  shared_ptr<string> requestId{};
  shared_ptr<bool> success{};
  shared_ptr<int> code{};
  shared_ptr<string> msg{};
  shared_ptr<vector<SearchImageByNameResponseAuctions>> auctions{};
  shared_ptr<SearchImageByNameResponseHead> head{};
  shared_ptr<SearchImageByNameResponsePicInfo> picInfo{};

  SearchImageByNameResponse() {}

  explicit SearchImageByNameResponse(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!requestId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("requestId is required.")));
    }
    if (!success) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("success is required.")));
    }
    if (!code) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("code is required.")));
    }
    if (!msg) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("msg is required.")));
    }
    if (!auctions) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("auctions is required.")));
    }
    if (!head) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("head is required.")));
    }
    if (!picInfo) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picInfo is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (requestId) {
      res["RequestId"] = boost::any(*requestId);
    }
    if (success) {
      res["Success"] = boost::any(*success);
    }
    if (code) {
      res["Code"] = boost::any(*code);
    }
    if (msg) {
      res["Msg"] = boost::any(*msg);
    }
    if (auctions) {
      vector<boost::any> temp1;
      for(auto item1:*auctions){
        temp1.push_back(boost::any(item1.toMap()));
      }
      res["Auctions"] = boost::any(temp1);
    }
    if (head) {
      res["Head"] = head ? boost::any(head->toMap()) : boost::any(map<string,boost::any>({}));
    }
    if (picInfo) {
      res["PicInfo"] = picInfo ? boost::any(picInfo->toMap()) : boost::any(map<string,boost::any>({}));
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("RequestId") != m.end() && !m["RequestId"].empty()) {
      requestId = make_shared<string>(boost::any_cast<string>(m["RequestId"]));
    }
    if (m.find("Success") != m.end() && !m["Success"].empty()) {
      success = make_shared<bool>(boost::any_cast<bool>(m["Success"]));
    }
    if (m.find("Code") != m.end() && !m["Code"].empty()) {
      code = make_shared<int>(boost::any_cast<int>(m["Code"]));
    }
    if (m.find("Msg") != m.end() && !m["Msg"].empty()) {
      msg = make_shared<string>(boost::any_cast<string>(m["Msg"]));
    }
    if (m.find("Auctions") != m.end() && !m["Auctions"].empty()) {
      if (typeid(vector<boost::any>) == m["Auctions"].type()) {
        vector<SearchImageByNameResponseAuctions> expect1;
        for(auto item1:boost::any_cast<vector<boost::any>>(m["Auctions"])){
          if (typeid(map<string, boost::any>) == item1.type()) {
            SearchImageByNameResponseAuctions model2;
            model2.fromMap(boost::any_cast<map<string, boost::any>>(item1));
            expect1.push_back(model2);
          }
        }
        auctions = make_shared<vector<SearchImageByNameResponseAuctions>>(expect1);
      }
    }
    if (m.find("Head") != m.end() && !m["Head"].empty()) {
      if (typeid(map<string, boost::any>) == m["Head"].type()) {
        SearchImageByNameResponseHead model1;
        model1.fromMap(boost::any_cast<map<string, boost::any>>(m["Head"]));
        head = make_shared<SearchImageByNameResponseHead>(model1);
      }
    }
    if (m.find("PicInfo") != m.end() && !m["PicInfo"].empty()) {
      if (typeid(map<string, boost::any>) == m["PicInfo"].type()) {
        SearchImageByNameResponsePicInfo model1;
        model1.fromMap(boost::any_cast<map<string, boost::any>>(m["PicInfo"]));
        picInfo = make_shared<SearchImageByNameResponsePicInfo>(model1);
      }
    }
  }


  virtual ~SearchImageByNameResponse() = default;
};
class SearchImageByPicRequest : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> instanceName{};
  shared_ptr<string> picContent{};
  shared_ptr<bool> crop{};
  shared_ptr<string> region{};
  shared_ptr<int> num{};
  shared_ptr<int> start{};
  shared_ptr<string> filter{};

  SearchImageByPicRequest() {}

  explicit SearchImageByPicRequest(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!instanceName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("instanceName is required.")));
    }
    if (!picContent) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picContent is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (instanceName) {
      res["InstanceName"] = boost::any(*instanceName);
    }
    if (picContent) {
      res["PicContent"] = boost::any(*picContent);
    }
    if (crop) {
      res["Crop"] = boost::any(*crop);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    if (num) {
      res["Num"] = boost::any(*num);
    }
    if (start) {
      res["Start"] = boost::any(*start);
    }
    if (filter) {
      res["Filter"] = boost::any(*filter);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("InstanceName") != m.end() && !m["InstanceName"].empty()) {
      instanceName = make_shared<string>(boost::any_cast<string>(m["InstanceName"]));
    }
    if (m.find("PicContent") != m.end() && !m["PicContent"].empty()) {
      picContent = make_shared<string>(boost::any_cast<string>(m["PicContent"]));
    }
    if (m.find("Crop") != m.end() && !m["Crop"].empty()) {
      crop = make_shared<bool>(boost::any_cast<bool>(m["Crop"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
    if (m.find("Num") != m.end() && !m["Num"].empty()) {
      num = make_shared<int>(boost::any_cast<int>(m["Num"]));
    }
    if (m.find("Start") != m.end() && !m["Start"].empty()) {
      start = make_shared<int>(boost::any_cast<int>(m["Start"]));
    }
    if (m.find("Filter") != m.end() && !m["Filter"].empty()) {
      filter = make_shared<string>(boost::any_cast<string>(m["Filter"]));
    }
  }


  virtual ~SearchImageByPicRequest() = default;
};
class SearchImageByPicResponseAuctions : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> productId{};
  shared_ptr<string> picName{};
  shared_ptr<string> customContent{};
  shared_ptr<string> sortExprValues{};
  shared_ptr<int> intAttr{};
  shared_ptr<string> strAttr{};

  SearchImageByPicResponseAuctions() {}

  explicit SearchImageByPicResponseAuctions(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!categoryId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("categoryId is required.")));
    }
    if (!productId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("productId is required.")));
    }
    if (!picName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picName is required.")));
    }
    if (!customContent) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("customContent is required.")));
    }
    if (!sortExprValues) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("sortExprValues is required.")));
    }
    if (!intAttr) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("intAttr is required.")));
    }
    if (!strAttr) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("strAttr is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (productId) {
      res["ProductId"] = boost::any(*productId);
    }
    if (picName) {
      res["PicName"] = boost::any(*picName);
    }
    if (customContent) {
      res["CustomContent"] = boost::any(*customContent);
    }
    if (sortExprValues) {
      res["SortExprValues"] = boost::any(*sortExprValues);
    }
    if (intAttr) {
      res["IntAttr"] = boost::any(*intAttr);
    }
    if (strAttr) {
      res["StrAttr"] = boost::any(*strAttr);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("ProductId") != m.end() && !m["ProductId"].empty()) {
      productId = make_shared<string>(boost::any_cast<string>(m["ProductId"]));
    }
    if (m.find("PicName") != m.end() && !m["PicName"].empty()) {
      picName = make_shared<string>(boost::any_cast<string>(m["PicName"]));
    }
    if (m.find("CustomContent") != m.end() && !m["CustomContent"].empty()) {
      customContent = make_shared<string>(boost::any_cast<string>(m["CustomContent"]));
    }
    if (m.find("SortExprValues") != m.end() && !m["SortExprValues"].empty()) {
      sortExprValues = make_shared<string>(boost::any_cast<string>(m["SortExprValues"]));
    }
    if (m.find("IntAttr") != m.end() && !m["IntAttr"].empty()) {
      intAttr = make_shared<int>(boost::any_cast<int>(m["IntAttr"]));
    }
    if (m.find("StrAttr") != m.end() && !m["StrAttr"].empty()) {
      strAttr = make_shared<string>(boost::any_cast<string>(m["StrAttr"]));
    }
  }


  virtual ~SearchImageByPicResponseAuctions() = default;
};
class SearchImageByPicResponseHead : public Darabonba::Model {
public:
  shared_ptr<int> docsReturn{};
  shared_ptr<int> docsFound{};
  shared_ptr<int> searchTime{};

  SearchImageByPicResponseHead() {}

  explicit SearchImageByPicResponseHead(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!docsReturn) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("docsReturn is required.")));
    }
    if (!docsFound) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("docsFound is required.")));
    }
    if (!searchTime) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("searchTime is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (docsReturn) {
      res["DocsReturn"] = boost::any(*docsReturn);
    }
    if (docsFound) {
      res["DocsFound"] = boost::any(*docsFound);
    }
    if (searchTime) {
      res["SearchTime"] = boost::any(*searchTime);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("DocsReturn") != m.end() && !m["DocsReturn"].empty()) {
      docsReturn = make_shared<int>(boost::any_cast<int>(m["DocsReturn"]));
    }
    if (m.find("DocsFound") != m.end() && !m["DocsFound"].empty()) {
      docsFound = make_shared<int>(boost::any_cast<int>(m["DocsFound"]));
    }
    if (m.find("SearchTime") != m.end() && !m["SearchTime"].empty()) {
      searchTime = make_shared<int>(boost::any_cast<int>(m["SearchTime"]));
    }
  }


  virtual ~SearchImageByPicResponseHead() = default;
};
class SearchImageByPicResponsePicInfoAllCategories : public Darabonba::Model {
public:
  shared_ptr<int> id{};
  shared_ptr<string> name{};

  SearchImageByPicResponsePicInfoAllCategories() {}

  explicit SearchImageByPicResponsePicInfoAllCategories(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!id) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("id is required.")));
    }
    if (!name) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("name is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (id) {
      res["Id"] = boost::any(*id);
    }
    if (name) {
      res["Name"] = boost::any(*name);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("Id") != m.end() && !m["Id"].empty()) {
      id = make_shared<int>(boost::any_cast<int>(m["Id"]));
    }
    if (m.find("Name") != m.end() && !m["Name"].empty()) {
      name = make_shared<string>(boost::any_cast<string>(m["Name"]));
    }
  }


  virtual ~SearchImageByPicResponsePicInfoAllCategories() = default;
};
class SearchImageByPicResponsePicInfo : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> region{};
  shared_ptr<vector<SearchImageByPicResponsePicInfoAllCategories>> allCategories{};

  SearchImageByPicResponsePicInfo() {}

  explicit SearchImageByPicResponsePicInfo(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!categoryId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("categoryId is required.")));
    }
    if (!region) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("region is required.")));
    }
    if (!allCategories) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("allCategories is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    if (allCategories) {
      vector<boost::any> temp1;
      for(auto item1:*allCategories){
        temp1.push_back(boost::any(item1.toMap()));
      }
      res["AllCategories"] = boost::any(temp1);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
    if (m.find("AllCategories") != m.end() && !m["AllCategories"].empty()) {
      if (typeid(vector<boost::any>) == m["AllCategories"].type()) {
        vector<SearchImageByPicResponsePicInfoAllCategories> expect1;
        for(auto item1:boost::any_cast<vector<boost::any>>(m["AllCategories"])){
          if (typeid(map<string, boost::any>) == item1.type()) {
            SearchImageByPicResponsePicInfoAllCategories model2;
            model2.fromMap(boost::any_cast<map<string, boost::any>>(item1));
            expect1.push_back(model2);
          }
        }
        allCategories = make_shared<vector<SearchImageByPicResponsePicInfoAllCategories>>(expect1);
      }
    }
  }


  virtual ~SearchImageByPicResponsePicInfo() = default;
};
class SearchImageByPicResponse : public Darabonba::Model {
public:
  shared_ptr<string> requestId{};
  shared_ptr<bool> success{};
  shared_ptr<int> code{};
  shared_ptr<string> msg{};
  shared_ptr<vector<SearchImageByPicResponseAuctions>> auctions{};
  shared_ptr<SearchImageByPicResponseHead> head{};
  shared_ptr<SearchImageByPicResponsePicInfo> picInfo{};

  SearchImageByPicResponse() {}

  explicit SearchImageByPicResponse(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!requestId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("requestId is required.")));
    }
    if (!success) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("success is required.")));
    }
    if (!code) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("code is required.")));
    }
    if (!msg) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("msg is required.")));
    }
    if (!auctions) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("auctions is required.")));
    }
    if (!head) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("head is required.")));
    }
    if (!picInfo) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picInfo is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (requestId) {
      res["RequestId"] = boost::any(*requestId);
    }
    if (success) {
      res["Success"] = boost::any(*success);
    }
    if (code) {
      res["Code"] = boost::any(*code);
    }
    if (msg) {
      res["Msg"] = boost::any(*msg);
    }
    if (auctions) {
      vector<boost::any> temp1;
      for(auto item1:*auctions){
        temp1.push_back(boost::any(item1.toMap()));
      }
      res["Auctions"] = boost::any(temp1);
    }
    if (head) {
      res["Head"] = head ? boost::any(head->toMap()) : boost::any(map<string,boost::any>({}));
    }
    if (picInfo) {
      res["PicInfo"] = picInfo ? boost::any(picInfo->toMap()) : boost::any(map<string,boost::any>({}));
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("RequestId") != m.end() && !m["RequestId"].empty()) {
      requestId = make_shared<string>(boost::any_cast<string>(m["RequestId"]));
    }
    if (m.find("Success") != m.end() && !m["Success"].empty()) {
      success = make_shared<bool>(boost::any_cast<bool>(m["Success"]));
    }
    if (m.find("Code") != m.end() && !m["Code"].empty()) {
      code = make_shared<int>(boost::any_cast<int>(m["Code"]));
    }
    if (m.find("Msg") != m.end() && !m["Msg"].empty()) {
      msg = make_shared<string>(boost::any_cast<string>(m["Msg"]));
    }
    if (m.find("Auctions") != m.end() && !m["Auctions"].empty()) {
      if (typeid(vector<boost::any>) == m["Auctions"].type()) {
        vector<SearchImageByPicResponseAuctions> expect1;
        for(auto item1:boost::any_cast<vector<boost::any>>(m["Auctions"])){
          if (typeid(map<string, boost::any>) == item1.type()) {
            SearchImageByPicResponseAuctions model2;
            model2.fromMap(boost::any_cast<map<string, boost::any>>(item1));
            expect1.push_back(model2);
          }
        }
        auctions = make_shared<vector<SearchImageByPicResponseAuctions>>(expect1);
      }
    }
    if (m.find("Head") != m.end() && !m["Head"].empty()) {
      if (typeid(map<string, boost::any>) == m["Head"].type()) {
        SearchImageByPicResponseHead model1;
        model1.fromMap(boost::any_cast<map<string, boost::any>>(m["Head"]));
        head = make_shared<SearchImageByPicResponseHead>(model1);
      }
    }
    if (m.find("PicInfo") != m.end() && !m["PicInfo"].empty()) {
      if (typeid(map<string, boost::any>) == m["PicInfo"].type()) {
        SearchImageByPicResponsePicInfo model1;
        model1.fromMap(boost::any_cast<map<string, boost::any>>(m["PicInfo"]));
        picInfo = make_shared<SearchImageByPicResponsePicInfo>(model1);
      }
    }
  }


  virtual ~SearchImageByPicResponse() = default;
};
class SearchImageByPicAdvanceRequest : public Darabonba::Model {
public:
  shared_ptr<Darabonba::Stream> picContentObject{};
  shared_ptr<int> categoryId{};
  shared_ptr<string> instanceName{};
  shared_ptr<bool> crop{};
  shared_ptr<string> region{};
  shared_ptr<int> num{};
  shared_ptr<int> start{};
  shared_ptr<string> filter{};

  SearchImageByPicAdvanceRequest() {}

  explicit SearchImageByPicAdvanceRequest(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!picContentObject) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picContentObject is required.")));
    }
    if (!instanceName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("instanceName is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (picContentObject) {
      res["PicContentObject"] = boost::any(*picContentObject);
    }
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (instanceName) {
      res["InstanceName"] = boost::any(*instanceName);
    }
    if (crop) {
      res["Crop"] = boost::any(*crop);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    if (num) {
      res["Num"] = boost::any(*num);
    }
    if (start) {
      res["Start"] = boost::any(*start);
    }
    if (filter) {
      res["Filter"] = boost::any(*filter);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("PicContentObject") != m.end() && !m["PicContentObject"].empty()) {
      picContentObject = make_shared<Darabonba::Stream>(boost::any_cast<Darabonba::Stream>(m["PicContentObject"]));
    }
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("InstanceName") != m.end() && !m["InstanceName"].empty()) {
      instanceName = make_shared<string>(boost::any_cast<string>(m["InstanceName"]));
    }
    if (m.find("Crop") != m.end() && !m["Crop"].empty()) {
      crop = make_shared<bool>(boost::any_cast<bool>(m["Crop"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
    if (m.find("Num") != m.end() && !m["Num"].empty()) {
      num = make_shared<int>(boost::any_cast<int>(m["Num"]));
    }
    if (m.find("Start") != m.end() && !m["Start"].empty()) {
      start = make_shared<int>(boost::any_cast<int>(m["Start"]));
    }
    if (m.find("Filter") != m.end() && !m["Filter"].empty()) {
      filter = make_shared<string>(boost::any_cast<string>(m["Filter"]));
    }
  }


  virtual ~SearchImageByPicAdvanceRequest() = default;
};
class DeleteImageRequest : public Darabonba::Model {
public:
  shared_ptr<string> instanceName{};
  shared_ptr<string> productId{};
  shared_ptr<string> picName{};

  DeleteImageRequest() {}

  explicit DeleteImageRequest(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!instanceName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("instanceName is required.")));
    }
    if (!productId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("productId is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (instanceName) {
      res["InstanceName"] = boost::any(*instanceName);
    }
    if (productId) {
      res["ProductId"] = boost::any(*productId);
    }
    if (picName) {
      res["PicName"] = boost::any(*picName);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("InstanceName") != m.end() && !m["InstanceName"].empty()) {
      instanceName = make_shared<string>(boost::any_cast<string>(m["InstanceName"]));
    }
    if (m.find("ProductId") != m.end() && !m["ProductId"].empty()) {
      productId = make_shared<string>(boost::any_cast<string>(m["ProductId"]));
    }
    if (m.find("PicName") != m.end() && !m["PicName"].empty()) {
      picName = make_shared<string>(boost::any_cast<string>(m["PicName"]));
    }
  }


  virtual ~DeleteImageRequest() = default;
};
class DeleteImageResponse : public Darabonba::Model {
public:
  shared_ptr<string> requestId{};
  shared_ptr<bool> success{};
  shared_ptr<string> message{};
  shared_ptr<int> code{};

  DeleteImageResponse() {}

  explicit DeleteImageResponse(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!requestId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("requestId is required.")));
    }
    if (!success) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("success is required.")));
    }
    if (!message) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("message is required.")));
    }
    if (!code) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("code is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (requestId) {
      res["RequestId"] = boost::any(*requestId);
    }
    if (success) {
      res["Success"] = boost::any(*success);
    }
    if (message) {
      res["Message"] = boost::any(*message);
    }
    if (code) {
      res["Code"] = boost::any(*code);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("RequestId") != m.end() && !m["RequestId"].empty()) {
      requestId = make_shared<string>(boost::any_cast<string>(m["RequestId"]));
    }
    if (m.find("Success") != m.end() && !m["Success"].empty()) {
      success = make_shared<bool>(boost::any_cast<bool>(m["Success"]));
    }
    if (m.find("Message") != m.end() && !m["Message"].empty()) {
      message = make_shared<string>(boost::any_cast<string>(m["Message"]));
    }
    if (m.find("Code") != m.end() && !m["Code"].empty()) {
      code = make_shared<int>(boost::any_cast<int>(m["Code"]));
    }
  }


  virtual ~DeleteImageResponse() = default;
};
class AddImageRequest : public Darabonba::Model {
public:
  shared_ptr<string> instanceName{};
  shared_ptr<int> categoryId{};
  shared_ptr<string> productId{};
  shared_ptr<string> picName{};
  shared_ptr<string> picContent{};
  shared_ptr<bool> crop{};
  shared_ptr<string> region{};
  shared_ptr<string> customContent{};
  shared_ptr<int> intAttr{};
  shared_ptr<string> strAttr{};

  AddImageRequest() {}

  explicit AddImageRequest(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!instanceName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("instanceName is required.")));
    }
    if (!productId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("productId is required.")));
    }
    if (!picName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picName is required.")));
    }
    if (!picContent) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picContent is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (instanceName) {
      res["InstanceName"] = boost::any(*instanceName);
    }
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (productId) {
      res["ProductId"] = boost::any(*productId);
    }
    if (picName) {
      res["PicName"] = boost::any(*picName);
    }
    if (picContent) {
      res["PicContent"] = boost::any(*picContent);
    }
    if (crop) {
      res["Crop"] = boost::any(*crop);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    if (customContent) {
      res["CustomContent"] = boost::any(*customContent);
    }
    if (intAttr) {
      res["IntAttr"] = boost::any(*intAttr);
    }
    if (strAttr) {
      res["StrAttr"] = boost::any(*strAttr);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("InstanceName") != m.end() && !m["InstanceName"].empty()) {
      instanceName = make_shared<string>(boost::any_cast<string>(m["InstanceName"]));
    }
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("ProductId") != m.end() && !m["ProductId"].empty()) {
      productId = make_shared<string>(boost::any_cast<string>(m["ProductId"]));
    }
    if (m.find("PicName") != m.end() && !m["PicName"].empty()) {
      picName = make_shared<string>(boost::any_cast<string>(m["PicName"]));
    }
    if (m.find("PicContent") != m.end() && !m["PicContent"].empty()) {
      picContent = make_shared<string>(boost::any_cast<string>(m["PicContent"]));
    }
    if (m.find("Crop") != m.end() && !m["Crop"].empty()) {
      crop = make_shared<bool>(boost::any_cast<bool>(m["Crop"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
    if (m.find("CustomContent") != m.end() && !m["CustomContent"].empty()) {
      customContent = make_shared<string>(boost::any_cast<string>(m["CustomContent"]));
    }
    if (m.find("IntAttr") != m.end() && !m["IntAttr"].empty()) {
      intAttr = make_shared<int>(boost::any_cast<int>(m["IntAttr"]));
    }
    if (m.find("StrAttr") != m.end() && !m["StrAttr"].empty()) {
      strAttr = make_shared<string>(boost::any_cast<string>(m["StrAttr"]));
    }
  }


  virtual ~AddImageRequest() = default;
};
class AddImageResponsePicInfo : public Darabonba::Model {
public:
  shared_ptr<int> categoryId{};
  shared_ptr<string> region{};

  AddImageResponsePicInfo() {}

  explicit AddImageResponsePicInfo(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!categoryId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("categoryId is required.")));
    }
    if (!region) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("region is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
  }


  virtual ~AddImageResponsePicInfo() = default;
};
class AddImageResponse : public Darabonba::Model {
public:
  shared_ptr<string> requestId{};
  shared_ptr<bool> success{};
  shared_ptr<string> message{};
  shared_ptr<int> code{};
  shared_ptr<AddImageResponsePicInfo> picInfo{};

  AddImageResponse() {}

  explicit AddImageResponse(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!requestId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("requestId is required.")));
    }
    if (!success) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("success is required.")));
    }
    if (!message) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("message is required.")));
    }
    if (!code) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("code is required.")));
    }
    if (!picInfo) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picInfo is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (requestId) {
      res["RequestId"] = boost::any(*requestId);
    }
    if (success) {
      res["Success"] = boost::any(*success);
    }
    if (message) {
      res["Message"] = boost::any(*message);
    }
    if (code) {
      res["Code"] = boost::any(*code);
    }
    if (picInfo) {
      res["PicInfo"] = picInfo ? boost::any(picInfo->toMap()) : boost::any(map<string,boost::any>({}));
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("RequestId") != m.end() && !m["RequestId"].empty()) {
      requestId = make_shared<string>(boost::any_cast<string>(m["RequestId"]));
    }
    if (m.find("Success") != m.end() && !m["Success"].empty()) {
      success = make_shared<bool>(boost::any_cast<bool>(m["Success"]));
    }
    if (m.find("Message") != m.end() && !m["Message"].empty()) {
      message = make_shared<string>(boost::any_cast<string>(m["Message"]));
    }
    if (m.find("Code") != m.end() && !m["Code"].empty()) {
      code = make_shared<int>(boost::any_cast<int>(m["Code"]));
    }
    if (m.find("PicInfo") != m.end() && !m["PicInfo"].empty()) {
      if (typeid(map<string, boost::any>) == m["PicInfo"].type()) {
        AddImageResponsePicInfo model1;
        model1.fromMap(boost::any_cast<map<string, boost::any>>(m["PicInfo"]));
        picInfo = make_shared<AddImageResponsePicInfo>(model1);
      }
    }
  }


  virtual ~AddImageResponse() = default;
};
class AddImageAdvanceRequest : public Darabonba::Model {
public:
  shared_ptr<Darabonba::Stream> picContentObject{};
  shared_ptr<string> instanceName{};
  shared_ptr<int> categoryId{};
  shared_ptr<string> productId{};
  shared_ptr<string> picName{};
  shared_ptr<bool> crop{};
  shared_ptr<string> region{};
  shared_ptr<string> customContent{};
  shared_ptr<int> intAttr{};
  shared_ptr<string> strAttr{};

  AddImageAdvanceRequest() {}

  explicit AddImageAdvanceRequest(const std::map<string, boost::any> &config) : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!picContentObject) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picContentObject is required.")));
    }
    if (!instanceName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("instanceName is required.")));
    }
    if (!productId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("productId is required.")));
    }
    if (!picName) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(std::runtime_error("picName is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (picContentObject) {
      res["PicContentObject"] = boost::any(*picContentObject);
    }
    if (instanceName) {
      res["InstanceName"] = boost::any(*instanceName);
    }
    if (categoryId) {
      res["CategoryId"] = boost::any(*categoryId);
    }
    if (productId) {
      res["ProductId"] = boost::any(*productId);
    }
    if (picName) {
      res["PicName"] = boost::any(*picName);
    }
    if (crop) {
      res["Crop"] = boost::any(*crop);
    }
    if (region) {
      res["Region"] = boost::any(*region);
    }
    if (customContent) {
      res["CustomContent"] = boost::any(*customContent);
    }
    if (intAttr) {
      res["IntAttr"] = boost::any(*intAttr);
    }
    if (strAttr) {
      res["StrAttr"] = boost::any(*strAttr);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("PicContentObject") != m.end() && !m["PicContentObject"].empty()) {
      picContentObject = make_shared<Darabonba::Stream>(boost::any_cast<Darabonba::Stream>(m["PicContentObject"]));
    }
    if (m.find("InstanceName") != m.end() && !m["InstanceName"].empty()) {
      instanceName = make_shared<string>(boost::any_cast<string>(m["InstanceName"]));
    }
    if (m.find("CategoryId") != m.end() && !m["CategoryId"].empty()) {
      categoryId = make_shared<int>(boost::any_cast<int>(m["CategoryId"]));
    }
    if (m.find("ProductId") != m.end() && !m["ProductId"].empty()) {
      productId = make_shared<string>(boost::any_cast<string>(m["ProductId"]));
    }
    if (m.find("PicName") != m.end() && !m["PicName"].empty()) {
      picName = make_shared<string>(boost::any_cast<string>(m["PicName"]));
    }
    if (m.find("Crop") != m.end() && !m["Crop"].empty()) {
      crop = make_shared<bool>(boost::any_cast<bool>(m["Crop"]));
    }
    if (m.find("Region") != m.end() && !m["Region"].empty()) {
      region = make_shared<string>(boost::any_cast<string>(m["Region"]));
    }
    if (m.find("CustomContent") != m.end() && !m["CustomContent"].empty()) {
      customContent = make_shared<string>(boost::any_cast<string>(m["CustomContent"]));
    }
    if (m.find("IntAttr") != m.end() && !m["IntAttr"].empty()) {
      intAttr = make_shared<int>(boost::any_cast<int>(m["IntAttr"]));
    }
    if (m.find("StrAttr") != m.end() && !m["StrAttr"].empty()) {
      strAttr = make_shared<string>(boost::any_cast<string>(m["StrAttr"]));
    }
  }


  virtual ~AddImageAdvanceRequest() = default;
};
class Client : Alibabacloud_RPC::Client {
public:
  explicit Client(const shared_ptr<Alibabacloud_RPC::Config>& config);
  SearchImageByNameResponse searchImageByName(shared_ptr<SearchImageByNameRequest> request, shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  SearchImageByPicResponse searchImageByPic(shared_ptr<SearchImageByPicRequest> request, shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  SearchImageByPicResponse searchImageByPicAdvance(shared_ptr<SearchImageByPicAdvanceRequest> request, shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  DeleteImageResponse deleteImage(shared_ptr<DeleteImageRequest> request, shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  AddImageResponse addImage(shared_ptr<AddImageRequest> request, shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  AddImageResponse addImageAdvance(shared_ptr<AddImageAdvanceRequest> request, shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  string getEndpoint(shared_ptr<string> productId,
                     shared_ptr<string> regionId,
                     shared_ptr<string> endpointRule,
                     shared_ptr<string> network,
                     shared_ptr<string> suffix,
                     shared_ptr<map<string, string>> endpointMap,
                     shared_ptr<string> endpoint);

  virtual ~Client() = default;
};
} // namespace Alibabacloud_ImageSearch20200212

#endif
