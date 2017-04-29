<!DOCTYPE html>
<html>

<head>
    <title>Base page</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <script type="text/javascript" src="common/js/utils.js"></script>
    <script type="text/javascript" src="common/js/dialog.js"></script>
    <link rel="stylesheet" type="text/css" href="common/css/dialog.css">
    <link rel="stylesheet" type="text/css" href="common/css/reset.css">
</head>
<body>
<?php
//var_dump($data);
//var_dump($serverData);
?>
intro

<script id="tmpl_dialog" type="text/x-simplet-template">
    <div class="[# this.type #] modal" id="[# this.id #]">
        <div class="modal-inner">
            [# if(this.showTitle){ #]
            <div class="modal-title">[# this.title#]</div>
            [#}#]
            <div class="modal-body">
                <div class="msg">[# this.msg#]</div>
                <div class="actions">
                    [# if(this.showCancelBtn){ #]
                    <button class="btn btnCancel">[# this.cancelBtn #]</button>
                    [#}#]
                    [# if(this.showOkBtn){ #]
                    <button class="btn btnOk">[# this.okBtn #]</button>
                    [#}#]
                </div>
            </div>
        </div>
    </div>
</script>
<script>
    var jsdata = JSON.parse('<?php echo(json_encode($data)) ?>');
    mquery("#btn").bind("click",function(){
        utils.dialog({
            // msg: '<div class="role-html"><div class="close-icon" id="close-icon"><img src="images/b_close.png"></div><h1>PK第一届手游大赛规则</h1><div class="role-section"><p>活动规则</p><p class="article">PK乐游精选7款神秘小游戏作为7个关卡，从10月28日中午12点开启第一关，每隔24小时逐一开启，供玩家比拼。</p><p class="article">玩家每闯一关，最高可获得PK点值100，游戏成绩越好，PK点值越高。活动截止时（11月04日晚8点），我们将累计7关总PK点值，进行排名。</p><p class="article">玩家可在第六关开启时 （11月02日中午12点），查看排行榜。</p></div><div class="role-section"><ul class="role-list"><li class="role-item">1.本次活动仅支持安卓手机用户。（不能使用任何模拟安卓系统的设备进行比赛）</li><li class="role-item">2.推荐参赛玩家下载游戏加速器，获取更好的游戏体验。</li><li class="role-item">3.活动期间，玩家可以重复所有已开启的游戏，系统将取活动期间所得最高分.</li><li class="role-item">4.活动期间任何以外挂形式以及模拟器形式刷分，统一取消比赛成绩。</li><li class="role-item">5.游戏在非联网情况下也可继续比拼，系统将在活动结束前玩家最后联网状态下获取游戏最高分纪录。</li><li class="role-item">6.玩家分享游戏可获得系统额外赠送的PK点。每日赠送1点分享游戏至朋友圈，QQ空间，新浪微博；分享给个人或群组不计入加分。</li><li class="role-item">活动期间连续7日分享，可获得额外3点。</li><li class="role-item">7.如果玩家PK总点值一样，最先达到此点值的玩家胜出。</li><li class="role-item">8.活动结束后，PK乐游团队会在一周内联系获奖玩家。</li></ul></div><div class="role-section"><p>兑换奖品规则</p><ul class="role-list"><li class="role-item">一等奖：新加坡金沙酒店双飞三日游。本奖包含广州、北京、上海到新加坡的往返机票，和新加坡金沙酒店两晚。玩家提供身份证信息，手机联系方式，乐游ID以及游戏分数截图确认获奖身份，在3个工作日内联系幸运朋友，并送出机票与酒店预订券。未成年人在监护人的看护下领取。若自愿折现请联系我们的工作人员。</li><li class="role-item">二等奖：玩家提供手机联系方式，乐游ID以及游戏分数截图，联系地址，快递将在3-5个工作日寄出。</li><li class="role-item">三等奖：玩家提供手机联系方式，乐游ID以及游戏分数截图，联系地址，快递将在3-5个工作日寄出。</li><li class="role-item">4-100名：玩家提供乐游ID，手机卡类型（移动、联通）以便工作人员确定充值卡类型，PK团队将以短信的形式发送充值卡卡号卡密。</li></ul></div><div class="iknow-btn-wrap"><div class="iknow-btn" id="iknow-btn">我知道了</div></div></div>',
            msg: '<div class="role-html"><div class="close-icon" id="close-icon"><img src="images/b_close.png" /></div><h1>PK第一届手游大赛规则</h1><div class="role-section"><p style="margin-bottom: 10px">活动规则</p><!--<p class="article">PK乐游精选7款神秘小游戏作为7个关卡，从11月14日中午12点开启第一关，每隔24小时逐一开启，供玩家比拼。</p>--><!--<p class="article">玩家每闯一关，最高可获得PK点值100，游戏成绩越好，PK点值越高。玩家可在第六关开启（11月19日中午12点），查看排行榜。活动截止时（11月20日晚8点），我们统计7关总PK点值和分享积分，当场揭晓最终排行榜。 </p>--></div><div class="role-section"><ul class="role-list"><li class="role-item">1.比赛持续7天，每天揭秘一款游戏，玩家玩游戏得分可获得相应pk值</li><li class="role-item">2.每款游戏可获得最大PK值为100，奖品按照玩家最终PK值高低排名颁发</li><li class="role-item">3.玩家在比赛前5天只可看见自己的PK值，第6天将公布所有玩家排名</li><li class="role-item">4.每邀请一位好友下载pk乐游，可获额外2点pk值，在好友登陆PK乐游填写你的邀请码时加分生效</li><li class="role-item">5.比赛结束时间为2014年11月20日20：00整</li><li class="role-item">6.比赛结束后活动页面会公布获奖名单。一等奖：新加坡双飞3日游+iphone6一台 二等奖：小米4一台 三等奖：魅族MX4一台 4-100名玩家都将获得神秘红包一个</li><li class="role-item">7.如果玩家PK总点值一样，则最先达到此点值的玩家排名靠前。 </li><li class="role-item">8.不得做出影响游戏公平性的行为，一经发现将失去获奖资格</li><li class="role-item">9.活动解释权归魔橙互联（北京）科技有限公司所有 </li></ul></div><div class="role-section"><p>兑换奖品规则</p><p>&nbsp;</p><p class="article">在活动结束后，获奖玩家请在活动页面指定位置提交联系方式，便于乐游工作人员联系发奖。 </p><ul class="role-list"><li class="role-item">一等奖：新加坡金沙酒店双飞三日游和iPhone 6一部。本奖包含广州、北京、上海到新加坡的往返机票，和新加坡金沙酒店两晚。玩家提供身份证信息，手机联系方式，联系地址，乐游ID以及游戏分数截图确认获奖身份。PK乐游团队将在一周内联系幸运朋友，送出机票与酒店预订券，并将iPhone 6寄出。未成年人在监护人的看护下领取。若自愿折现请联系我们的工作人员，折现金额为2500人民币。</li><li class="role-item">二等奖：小米4手机一部。玩家提供手机联系方式，乐游ID以及游戏分数截图，联系地址，奖品将在一周内寄出。</li><li class="role-item">三等奖：魅族手机MX 4一部。玩家提供手机联系方式，乐游ID以及游戏分数截图，联系地址，奖品将在一周内寄出。</li><li class="role-item">4-100名：玩家提供乐游ID，手机卡类型（移动、联通）以便工作人员确定充值类型，PK团队会在一周内电话联系发奖。</li></ul></div><div class="iknow-btn-wrap"><div class="iknow-btn" id="iknow-btn">我知道了</div></div></div>',
            type: 'detail',
            showCancelBtn: false,
            showOkBtn: false,
            showTitle: false,
            bindfunction: function () {
                this.find("#iknow-btn").bind("click", function () {
                    mquery(document.body).css('overflow', "auto");
                    mquery(".modal").remove();
                })
                this.find("#close-icon").bind("click", function () {
                    mquery(document.body).css('overflow', "auto");
                    mquery(".modal").remove();
                })

            }
        });
    });
    mquery("#btn2").bind("click",function(){
        utils.ajax("index.php?controller=api&action=getbasedata&pkid=100001", function (data) {
            alert(data);
            var ret = JSON.parse(data);
            console.log(ret);
        });
    });
</script>
</body>

</html>
