<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//请求的接口地址，如果网关不同，请根据三方库文档进行添加
/*-----------网关开始----------*/
$config['gatewayUrl'] = 'https://openapi.alipaydev.com/gateway.do';
//添加形式需直观，如$config['gatewayUrl_getTrade'] = 'https://openapi.alipay.com/gateway.do';
/*-----------网关结束----------*/
//应用id
$config['appId'] = '2016091100488155';
//应用私钥
$config['rsaPrivateKey'] = 'MIIEowIBAAKCAQEAvYVZoQ05XfRsDRVQQX7PhoXcy4CxS4Bnuk2DcqjLaATI4/FXJagVn24/aMvR7ynsiopKeynTh5qwaIgF3Q7e97R1oiKhzyjNZcQzHJAmC/h3ZOia34CZhYMkZez17tTUHgzZZO/t2xwmxeJMkJisYhDSRiUsrWYF8zPJbxa8gDINZKJ+hvqMBPb7FFl47VLoep0wxFDZ6A6zBwK8NjgjQPYLVttBJqMW83gC/75WOCalzUtBum6PmHfykveo8mLsBb5KNykGfhkeMujugZLSn4TtGddYzv61YqICbaElpuJq58Ae1JB3Aq52Sb4eW2XqEoF5OeEYp9LPJaY491zOPwIDAQABAoIBAA5Bs8Zbuk8JDf/F9K2Ynn/eHgfo/G1TkXoATr0XWYXPplUPWKDqjgXaQ0bc3kQBgVvCn2u4b8Mprc+PO/GvJrK3jonN1SJCTYE0SywA4/vOixy6KrxZbjMO9HP+aVm4BOTlzoy7R8dNzNTh+yR9d6pA3bCNJ1k77YKoCKUkrrVt7SRBV6kR7ClacYc2/Xf6P6mM/zrJqnXwiL10VCSeeqFq1TCcciTWsvxeCxTtoz1JeyXBm6qmGLx7HbNGGcKFHE8srzVtwUnsxqE9GD+h4xLOhFipmRk7FsBXLjT6tXECOTFASTx4pQvU5rYxLz5hoGxkSVtRJth4PGLY6CRn9oECgYEA9PylS9K60OaaN47q1uXntqKabWR+yXv0Ix15YYQO16A+KaNQg/PrO0R5jGNFKYqLvqcJNNsIq/HyAPC1Xbq3gFAB4BNZ0Xb/ynFfZE4u0DNebmERs11g+Kgar/rnhWkALTTvX0qBL5UeqzcXbNz2v+Wb7i8deJ/UxEN5QfpB5GECgYEAxgpkOb6n77TQuQy6GWko9F9m8RTKoC04b9Js61C2yJHKizhJRZhziAaX4lx2QgYntNHjrVBMr0cxZbjo0mcwhLlRvJgTZuTteNTDuYU4dT+43oSJUcxf8e51iNv8R0DptUL95jzMbBBNtsO6P0buWBPvUYcNCprjuRgc0Ojztp8CgYEA2kgVm5Z6X9FoDSKo+arFJ4R/5gJJuYpY/8SuNwXsF5GucXkTL07xA9DCICT/JcFNPCUmXdLfShz8DHxsjMPl5kzjLtzvBWRrCtyzKvNCYL20YNLaa59C3KsjhDMhgEwLHTxyH8yJiHTsa49druC+dkLGCZYvQx/d+rVH4FJzzWECgYB3Qka8521mUrLm3R0stEEveEwbnfOvpcu4uzVQN9j6y6D3Wbv2JypbnezVKe0lMWOz5jl/Yz3qx6qdoU7DddSn+JmaQtJcQjwnaak8DVfEc802YwX2tmaI4JrzAdbYaeTTfTY88hwAb4j9KLz94g8iB080/2kBG+lKy5R+0eoB7QKBgGURlne6nkEZOVhQ05c/WBKmsKfEbAxsuH+4RINfAdeA1WU4WDJ6KvhwsyXu/RuCWQj/8SDUwYDxX1TrvEI/0LvLhUhhhxFqddsl7Ri1oplN9TLXYhom9LoEpZGkkI4RtrmBBcMqi+iIHDgs5+JLdxScL1H2fiKYu8lU/ac34b1F';
//支付宝公钥（开放平台获取）
$config['alipayrsaPublicKey'] = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxz0ha7E0ueW+9DYrzD6BNx9niUNb5LcjLy53CjXSerIsFmPqTuOJpnHWMvaSNtlbaWrOH4LYxbkEbbvrdlVu/Is1KWGFuQHbdT+nXObfh9CTvBXlr2Ui2895WUt6apdyJ9rCtB1GGv6pzAHGdurOS8Un2Gb+QjmctiI0RM9ld3s0GsQeh+XLiyESVsF0hlOpFDu13Oh2Zqzje8WsJZz2IX8cdEKs9UOaP1JRDHpmerDE4cz7J2RcQAq37KRBHTXUnPJ409HxmGdUstmbk/yByGgYPqAoAaw8fdjFG+OA7UOoyQUnBBDREdKdluFoiJR8kfChjcDVxRnP4dFMgAKVzQIDAQAB';
//不用改，除非支付宝更新
$config['apiVersion'] = '1.0';
//不用改，这已经是目前推荐的加密形式
$config['signType'] = 'RSA2';
//根据报错类型修改，可能为‘GBK’等
$config['postCharset'] = 'UTF-8';
//默认，目前仅支持json
$config['format'] = 'json';