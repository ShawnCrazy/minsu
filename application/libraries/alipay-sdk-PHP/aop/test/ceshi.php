<?php
// 生成用于调用收银台SDK的字符串
// var_dump($result)用于获取返回值，参照文件末尾
// 正式环境url需查文档，https://openapi.alipay.com/gateway.do
header("Content-type: text/html; charset=utf-8");
require_once '../AopClient.php';
require_once '../request/AlipayTradePrecreateRequest.php';
require_once '../SignData.php';
$aop = new AopClient ();
$aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';
$aop->appId = '2016091100488155';
$aop->rsaPrivateKey = 'MIIEowIBAAKCAQEAvYVZoQ05XfRsDRVQQX7PhoXcy4CxS4Bnuk2DcqjLaATI4/FXJagVn24/aMvR7ynsiopKeynTh5qwaIgF3Q7e97R1oiKhzyjNZcQzHJAmC/h3ZOia34CZhYMkZez17tTUHgzZZO/t2xwmxeJMkJisYhDSRiUsrWYF8zPJbxa8gDINZKJ+hvqMBPb7FFl47VLoep0wxFDZ6A6zBwK8NjgjQPYLVttBJqMW83gC/75WOCalzUtBum6PmHfykveo8mLsBb5KNykGfhkeMujugZLSn4TtGddYzv61YqICbaElpuJq58Ae1JB3Aq52Sb4eW2XqEoF5OeEYp9LPJaY491zOPwIDAQABAoIBAA5Bs8Zbuk8JDf/F9K2Ynn/eHgfo/G1TkXoATr0XWYXPplUPWKDqjgXaQ0bc3kQBgVvCn2u4b8Mprc+PO/GvJrK3jonN1SJCTYE0SywA4/vOixy6KrxZbjMO9HP+aVm4BOTlzoy7R8dNzNTh+yR9d6pA3bCNJ1k77YKoCKUkrrVt7SRBV6kR7ClacYc2/Xf6P6mM/zrJqnXwiL10VCSeeqFq1TCcciTWsvxeCxTtoz1JeyXBm6qmGLx7HbNGGcKFHE8srzVtwUnsxqE9GD+h4xLOhFipmRk7FsBXLjT6tXECOTFASTx4pQvU5rYxLz5hoGxkSVtRJth4PGLY6CRn9oECgYEA9PylS9K60OaaN47q1uXntqKabWR+yXv0Ix15YYQO16A+KaNQg/PrO0R5jGNFKYqLvqcJNNsIq/HyAPC1Xbq3gFAB4BNZ0Xb/ynFfZE4u0DNebmERs11g+Kgar/rnhWkALTTvX0qBL5UeqzcXbNz2v+Wb7i8deJ/UxEN5QfpB5GECgYEAxgpkOb6n77TQuQy6GWko9F9m8RTKoC04b9Js61C2yJHKizhJRZhziAaX4lx2QgYntNHjrVBMr0cxZbjo0mcwhLlRvJgTZuTteNTDuYU4dT+43oSJUcxf8e51iNv8R0DptUL95jzMbBBNtsO6P0buWBPvUYcNCprjuRgc0Ojztp8CgYEA2kgVm5Z6X9FoDSKo+arFJ4R/5gJJuYpY/8SuNwXsF5GucXkTL07xA9DCICT/JcFNPCUmXdLfShz8DHxsjMPl5kzjLtzvBWRrCtyzKvNCYL20YNLaa59C3KsjhDMhgEwLHTxyH8yJiHTsa49druC+dkLGCZYvQx/d+rVH4FJzzWECgYB3Qka8521mUrLm3R0stEEveEwbnfOvpcu4uzVQN9j6y6D3Wbv2JypbnezVKe0lMWOz5jl/Yz3qx6qdoU7DddSn+JmaQtJcQjwnaak8DVfEc802YwX2tmaI4JrzAdbYaeTTfTY88hwAb4j9KLz94g8iB080/2kBG+lKy5R+0eoB7QKBgGURlne6nkEZOVhQ05c/WBKmsKfEbAxsuH+4RINfAdeA1WU4WDJ6KvhwsyXu/RuCWQj/8SDUwYDxX1TrvEI/0LvLhUhhhxFqddsl7Ri1oplN9TLXYhom9LoEpZGkkI4RtrmBBcMqi+iIHDgs5+JLdxScL1H2fiKYu8lU/ac34b1F';
$aop->alipayrsaPublicKey='MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxz0ha7E0ueW+9DYrzD6BNx9niUNb5LcjLy53CjXSerIsFmPqTuOJpnHWMvaSNtlbaWrOH4LYxbkEbbvrdlVu/Is1KWGFuQHbdT+nXObfh9CTvBXlr2Ui2895WUt6apdyJ9rCtB1GGv6pzAHGdurOS8Un2Gb+QjmctiI0RM9ld3s0GsQeh+XLiyESVsF0hlOpFDu13Oh2Zqzje8WsJZz2IX8cdEKs9UOaP1JRDHpmerDE4cz7J2RcQAq37KRBHTXUnPJ409HxmGdUstmbk/yByGgYPqAoAaw8fdjFG+OA7UOoyQUnBBDREdKdluFoiJR8kfChjcDVxRnP4dFMgAKVzQIDAQAB';
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset='UTF-8';
$aop->format='json';
$request = new AlipayTradePrecreateRequest ();
$content = "{" .
"\"out_trade_no\":\"20150320010101001\"," .
"\"total_amount\":88.88," .
"\"subject\":\"Iphone616G\"" .
"}";
$request->setBizContent($content);
$result = $aop->execute ( $request); 

$responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
$resultCode = $result->$responseNode->code;
if(!empty($resultCode)&&$resultCode == 10000){
echo "成功";
var_dump($result->$responseNode->qr_code);
} else {
echo "失败";
}