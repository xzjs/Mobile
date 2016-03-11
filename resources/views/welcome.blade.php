<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>Mobile</title>
    <link rel="stylesheet" href="css/index.css">
    <!--Required libraries-->
    <script src="js/jquery-v1.10.2.min.js" type="text/javascript"></script>
    <script src="js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
    <!--Include flickerplate-->
    <link href="css/flickerplate.css" type="text/css" rel="stylesheet">
    <script src="js/flickerplate.min.js" type="text/javascript"></script>
    <!--Execute flickerplate-->
    <script>
        $(document).ready(function() {
            $('.flicker-example').flicker();
        });
    </script>
</head>

<body>
<div class="countainer">
    <div class="banner">
        <div class="flicker-example" data-block-text="false">
            <ul>
                <li data-background="letv.com/vedio/field.jpg" onclick=jumpAd("{{$ads[1]}}",1)></li>
                <li data-background="letv.com/vedio/forest.jpg" onclick=jumpAd("{{$ads[2]}}",2)></li>
                <li data-background="letv.com/vedio/frozen-water.jpg" onclick=jumpAd("{{$ads[3]}}",3)></li>
            </ul>
        </div>
    </div>
    <div class="header">
        <div class="header_nav">
            <ul class="h_nav">
                <li>
                    <a href="#toutiao">
                        <img src="img/1.png" height="128" width="128" alt="">
                    </a>
                    <p>头条</p>
                </li>
                <li>
                    <a href="#music">
                        <img src="img/2.png" height="128" width="128" alt="">
                    </a>
                    <p>音乐</p>
                </li>
                <li>
                    <a href="#movie">
                        <img src="img/3.png" height="128" width="128" alt="">
                    </a>
                    <p>电影</p>
                </li>
                <li>
                    <a href="#quba">
                        <img src="img/4.png" height="128" width="128" alt="">
                    </a>
                    <p>趣吧</p>
                </li>
                <li>
                    <a href="#novel">
                        <img src="img/5.png" height="128" width="128" alt="">
                    </a>
                    <p>小说</p>
                </li>
                <li>
                    <a href="#">
                        <img src="img/6.png" height="128" width="128" alt="">
                    </a>
                    <p>生活</p>
                </li>
                <li>
                    <a href="#hot">
                        <img src="img/7.png" height="128" width="128" alt="">
                    </a>
                    <p>应用</p>
                </li>
                <li>
                    <a href="#hot">
                        <img src="img/8.png" height="128" width="128" alt="">
                    </a>
                    <p>游戏</p>
                </li>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
    <div class="part">
        <div class="parts">
            <div class="part1">
                <div class="nav1 nav">
                    <h1>酷站</h1>
                    <ul class="kuzhan_nav all_nav">
                        <li><a href="">新闻</a></li>
                        <li><a href="">体育</a></li>
                        <li><a href="">军事</a></li>
                        <li><a href="">汽车</a></li>
                        <li><a href="">科技</a></li>
                        <li><a href="">财经</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="web">
                    <ul class="kuzhan_link clearfix">
                        <li>
                            <a href="">
                                <img src="img/baidu.png" height="5%" width="5%" alt="">
                                <p>百度</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/xinlang.png" height="5%" width="5%" alt="">
                                <p>新浪</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/souhu.png" height="5%" width="5%" alt="">
                                <p>搜狐</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/tencent.jpg" height="5%" width="5%" alt="">
                                <p>腾讯</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/wangyi.png" height="5%" width="5%" alt="">
                                <p>网易</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/tao (1).jpg" height="5%" width="5%" alt="">
                                <p>淘宝</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/jingdong.png" height="5%" width="5%" alt="">
                                <p>京东</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/qiche.jpg" height="5%" width="5%" alt="">
                                <p>汽车之家</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/quna.jpg" height="5%" width="5%" alt="">
                                <p>去哪</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>更多...</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
            <div class="part2">
                <div class="nav2 nav">
                    <a href="" name="toutiao"></a>
                    <h1>头条</h1>
                    <ul class="toutiao_nav all_nav">
                        <li><a>热点</a></li>
                        <li><a>科技</a></li>
                        <li><a>社会</a></li>
                        <li><a>娱乐</a></li>
                        <li><a>汽车</a></li>
                        <li><a>体育</a></li>
                        <a href=""><img class="refresh" src="img/refresh35.png" height="51.2" width="51.2" alt=""></a>
                        </li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <!-- 以下6个div分别对应上方的6个li -->
                <div class="web headline">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易热点</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/tao (1).jpg" alt="">
                                    <p>淘宝热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/jingdong.png" alt="">
                                    <p>京东热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/qiche.jpg" alt="">
                                    <p>汽车之家</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/quna.jpg" alt="">
                                    <p>去哪热点</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐热点</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易热点</p>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="web headline hide">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易科技</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/tao (1).jpg" alt="">
                                    <p>淘宝科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/jingdong.png" alt="">
                                    <p>京东科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/qiche.jpg" alt="">
                                    <p>汽车科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/quna.jpg" alt="">
                                    <p>去哪科技</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐科技</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易科技</p>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="web headline hide">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易社会</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/tao (1).jpg" alt="">
                                    <p>淘宝社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/jingdong.png" alt="">
                                    <p>京东社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/qiche.jpg" alt="">
                                    <p>汽车社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/quna.jpg" alt="">
                                    <p>去哪社会</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐社会</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易社会</p>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="web headline hide">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易娱乐</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/tao (1).jpg" alt="">
                                    <p>淘宝娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/jingdong.png" alt="">
                                    <p>京东娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/qiche.jpg" alt="">
                                    <p>汽车娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/quna.jpg" alt="">
                                    <p>去哪娱乐</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐娱乐</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易娱乐</p>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="web headline hide">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易汽车</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/tao (1).jpg" alt="">
                                    <p>淘宝汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/jingdong.png" alt="">
                                    <p>京东汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/qiche.jpg" alt="">
                                    <p>汽车汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/quna.jpg" alt="">
                                    <p>去哪汽车</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐汽车</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易汽车</p>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="web headline hide">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易体育</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/tao (1).jpg" alt="">
                                    <p>淘宝体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/jingdong.png" alt="">
                                    <p>京东体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/qiche.jpg" alt="">
                                    <p>汽车体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/quna.jpg" alt="">
                                    <p>去哪体育</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    <img src="img/baidu.png" alt="">
                                    <p>百度体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/xinlang.png" alt="">
                                    <p>新浪体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/souhu.png" alt="">
                                    <p>搜狐体育</p>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <img src="img/wangyi.png" alt="">
                                    <p>网易体育</p>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clr"></div>
            </div>
            <div class="part3">
                <div class="nav3 nav">
                    <a href="" name="music"></a>
                    <h1>音乐</h1>
                    <ul class="music_nav all_nav">
                        <li><a href="">豆瓣FM</a></li>
                        <li><a href="">本地列表</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="player">
                    <img src="img/CD.jpg" height="30%" width="30%" alt="">
                    <a href=""><img src="img/refreshRed.png" height="5%" width="5%" style="float:right;margin:5% 5% 0 5%;" alt=""></a>
                    <h2>不得不爱-潘玮柏/玄子</h2>
                    <audio controls="controls" height="150%" width="150%">
                        <source src="song.mp3" type="audio/mp3" />
                        <source src="song.ogg" type="audio/ogg" />
                        <embed height="100%" width="100%" src="song.mp3" />
                    </audio>
                    <div class="playerUI">
                        <a href=""><img src="img/heart.png" height="6%" width="6%" alt=""></a>
                        <a href=""><img src="img/delete.png" height="6%" width="6%" alt=""></a>
                        <a href=""><img src="img/next1.png" height="6%" width="6%" alt=""></a>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="part4">
                <div class="nav4 nav">
                    <a href="" name="novel"></a>
                    <h1>小说</h1>
                    <ul class="novel_nav all_nav">
                        <li><a href="">新书榜</a></li>
                        <li><a href="">推荐榜</a></li>
                        <li><a href="">全部书籍</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="novel">
                    <ul class="novel_list">
                        <li>
                            <a href="">
                                <img src="./img/novel1.jpg" height="80%" width="80%" alt="">
                                <h2>美女的超级保镖</h2>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img/novel2.jpg" height="80%" width="80%" alt="">
                                <h2>我的26岁女房客</h2>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img/novel3.jpg" height="80%" width="80%" alt="">
                                <h2>护花高手在都市</h2>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img/novel4.jpg" height="80%" width="80%" alt="">
                                <h2>东北灵异档案</h2>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
            <div class="part5">
                <div class="nav5 nav">
                    <a href="" name="quba"></a>
                    <h1>趣吧</h1>
                    <ul class="quba_nav all_nav">
                        <li><a href="">搞笑</a></li>
                        <li><a href="">小漫画</a></li>
                        <li><a href="">美女</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="quba_display">
                    <div class="quba_display1">
                        <ul class="quba_list1">
                            <li>
                                <a href="">
                                    <img src="./img/field.jpg" height="100%" width="100%" alt="">
                                    <h2>怎么练成的</h2>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./img/field.jpg" height="100%" width="100%" alt="">
                                    <h2>我家两宝贝的表情</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clr"></div>
                    <div class="quba_display2">
                        <ul class="quba_list2">
                            <li>
                                <a href="">
                                    <p><a href="http://www.qiushibaike.com/article/114396877" target="_blank">今天带我家的哈士奇去买菜</a></p>
                                </a>
                                <div class="clr"></div>
                            </li>
                            <li>
                                <a href="">
                                    <p><a href=" http://www.qiushibaike.com/article/114398004" target="_blank">男生宿舍管理员是个大妈</a></p>
                                </a>
                                <div class="clr"></div>
                            </li>
                            <li>
                                <a href="">
                                    <p><a href="http://www.qiushibaike.com/article/114392366" target="_blank">小时候睡觉喜欢摸着妈妈的脸</a></p>
                                </a>
                                <div class="clr"></div>
                            </li>
                            <li>
                                <a href="">
                                    <p><a href="http://www.qiushibaike.com/article/114396990" target="_blank">儿子问我“老妈你知道世界首富是谁吗？</a></p>
                                </a>
                                <div class="clr"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="part6">
                <div class="nav6 nav">
                    <a href="" name="movie"></a>
                    <h1>电影</h1>
                    <ul class="movie_nav all_nav">
                        <li><a href="">经典电影</a></li>
                        <li><a href="">热映电视剧</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="movie_display">
                    <ul class="movie_list">
                        <li>
                            <a href="">
                                <img src="img/movie1.jpg" height="100%" width="100%" alt="">
                                <h2>碟中谍5</h2>
                                <p>阿汤哥继续玩命！</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/movie2.jpg" height="100%" width="100%" alt="">
                                <h2>小黄人大眼萌</h2>
                                <p>《神偷奶爸》犀利前传 </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/movie3.jpg" height="100%" width="100%" alt="">
                                <h2>新娘大作战</h2>
                                <p>倪妮杨颖为结婚开撕</p>
                            </a>
                        </li>
                        <div class="clr"></div>
                        <li>
                            <a href="">
                                <img src="img/movie4.jpg" height="100%" width="100%" alt="">
                                <h2>华丽上班族</h2>
                                <p>另类诠释职场白骨精</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/movie5.jpg" height="100%" width="100%" alt="">
                                <h2>烈日灼心</h2>
                                <p>邓超段奕宏另类基情</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/movie6.jpg" height="100%" width="100%" alt="">
                                <h2>滚蛋吧！肿瘤君</h2>
                                <p>白百合演绎中二少女</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
            <div class="part7">
                <div class="nav7 nav">
                    <a href="" name="hot"></a>
                    <h1>热门推荐</h1>
                    <ul class="hot_nav all_nav">
                        <li><a href="">应用</a></li>
                        <li><a href="">游戏</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="hot_display">
                    <div class="flicker-example" data-block-text="false">
                        <ul>
                            <li data-background="img/tadu.jpg" onclick=jumpAd("{{$ads[4]}}",4)>
                                <!-- <div class="flick-title">Flickerplate Is Working</div>
                    <div class="flick-sub-text">Heaven forbid this package you downloaded is broken. That wouldn't be embarrassing at all.</div> -->
                            </li>
                            <li data-background="img/forest.jpg" onclick=jumpAd("{{$ads[5]}}",5)></li>
                            <li data-background="img/frozen-water.jpg" onclick=jumpAd("{{$ads[6]}}",6)></li>
                        </ul>
                    </div>
                    <ul class="hot_apps">
                        <li>
                            <img src="img/16wifi.jpg" height="100%" width="100%" alt="">
                            <div class="clr"></div>
                            <h2>16wifi</h2>
                            <div class="clr"></div>
                            <p>5.29M</p>
                            <a class="download" href="">下载</a>
                        </li>
                        <li>
                            <img src="img/qiyou.jpg" height="100%" width="100%" alt="">
                            <h2>奇悠阅读</h2>
                            <p>5.29M</p>
                            <a class="download" href="">下载</a>
                        </li>
                        <li>
                            <img src="img/ganji.jpg" height="100%" width="100%" alt="">
                            <h2>赶集生活</h2>
                            <p>5.29M</p>
                            <a class="download" href="">下载</a>
                        </li>
                        <li>
                            <img src="img/meituan.jpg" height="100%" width="100%" alt="">
                            <h2>美团</h2>
                            <p>5.29M</p>
                            <a class="download" href="">下载</a>
                        </li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>版权: 青岛真情巴士集团有限公司</p>
        <p>青岛智能产业技术研究院</p>
    </div>
</div>

<script type="text/javascript" src="js/index.js"></script>
<script>
    function jumpAd(url,position){
        window.location.href=url;
    }
</script>
</body>

</html>
