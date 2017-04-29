var register = (function (utils) {
    var exports = {};
    exports.showDetail = function () {
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
    }
    exports.showContract = function () {
        utils.dialog({
            msg: '<div class="role-html"><div class="close-icon" id="close-icont"><img src="images/b_close.png"/></div><h1>参赛条款及细则</h1><div class="role-section"><p>PK乐游旨在为用户提供欢乐小游戏， 本次竞赛须遵守下列条款及细则和竞赛详情（以下统称为“条款”），参赛者同意，本人已阅读并理解这些条款。参与本次竞赛即表明，参赛者确保将遵守这些条款。</p><p class="article">本次竞赛的主办方魔橙互联科技有限公司对本次竞赛的执行和管理全权负责。</p><p class="article">本次竞赛参加竞赛无需费用。竞赛会在竞赛详情中指明的时间范围内举行。</p><p class="article">竞赛详情中列出合法居民均能参加本次竞赛。</p></div><div class="role-section"><ul class="role-list"><li class="role-item">1. 以下几类人员不可参加本次竞赛：主办方及其相关部门的工作人员及亲属。</li><li class="role-item">2. 参赛者必须是PK乐游已注册用户，拥有第三方登陆账号。以游客身份登陆的用户不可参加本次比赛。</li><li class="role-item">3. 主办方有最终决定权，对主办方的决定不得有任何质疑。获奖者将收到电邮或电话通知（根据参赛者提交的联系方式），确定领取奖品的细节。活动结束后两个工作日内没有联系上或者没有提交任何联系方式的获奖者，视作放弃奖品处理。</li><li class="role-item">4. 若有充分根据认为最初选出的获奖者违反相关条款，主办方有权选取另一位获奖者。选择标准不变。主办方有权自行处理未被认领的奖品。</li><li class="role-item">5. 若奖品包括海外旅行：(a) 获奖者及其同行友人（如适用）在出发前必须持有有效旅游档和护照。若获奖者未能达到此要求，询问获奖者是否需要折现；(b) 在收到获奖通知后一（1）个月内，所有奖品必须在同一次行程中全部用完。</li></ul><p class="article">由于无法控制的情况，主办方无法提供所述奖品和或奖品的任何部分，主办方有权提供相等价值的现金。</p><p class="article">接受奖品即表示：获奖者方（包括其同行友人，视情况而定）同意主办方使用获奖者（及同行友人）的姓名、形象、视频录影、语音和/或者肖像，用于编辑、广告、市场和/或者其他目的，除非法律禁止，无需额外补偿。</p><p class="article">接受奖品即表示：主办方无需对任何获奖者（和/或者其同行友人）可能会产生的、无论当时是否知情、任何性质的债务、索赔、要求、行为原因和/或者损害，（产生于或者相关：竞赛；由于获奖者使用和/或者享受奖品而导致的个人伤害和/或者财产损失、失窃或者损失；有关竞赛、奖品和/或者使用或者享受奖品的税项负债）承担何法律责任。</p><p class="article">主办方对以下行为不负任何责任：由于无法控制的情况，主办方对获奖者及其客人在履行条款过程中有任何延误或部分或完全失败，包括但不限于由于战争、恐怖行动或处于危险境地的恐怖行动、罢工、敌对行动、民变、事故、火灾、水灾或自然灾害而导致的包括但不限于延误、变化、中断、取消、变更或代替由于或与参赛者参加或不能参加本次竞赛或使用、误用或不能使用奖品或奖品的任何部分而导致或与之相关的损失、财产损坏、受伤或死亡。然而，由于主办方的疏忽、欺骗或诈骗行为而造成的死亡或个人伤害，主办方应承担相关责任。</p><p class="article">排除或限制责任的每项条款应独立解释。即使其他条款不适用或不能执行，该条款依然适用并继续有效。尽管某些条款终止，排除或限制责任的每项条款依然有效。</p><p class="article">任何个人资讯，包括但不限于参赛者的姓名、年龄、地址（包括邮编）、电话号码和/或者Email地址仅限用于与本次竞赛相关的活动和参赛者自行决定之任何目的，不会透露给任何第三方，除了在适用情况下，履行奖品之目的和参赛者自行决定之任何目的。主办方持有的与竞赛相关的个人资讯将被保存一段时间，以收集个人资讯。如果参赛者经特别许可/选择性加入途径允许主办方将其个人资讯透露给第三方，第三方应遵守处理个人资讯的隐私条款。主办方对第三方处理参赛者个人资讯的行为将不再承担负责。参赛者有权查阅、更改并从主办方的资料库里删除个人资料。参赛者行使该权利，只需通过寄送一份书面要求到：魔橙互联（北京）科技有限公司广州分公司 广州天河区体育东路财富广场西塔1405/1406。</p></div><div class="iknow-btn-wrap"><div class="iknow-btn" id="iknow-btnt">我知道了</div></div></div>',
            type: 'detail',
            showCancelBtn: false,
            showOkBtn: false,
            showTitle: false,
            bindfunction: function () {
                this.find("#iknow-btnt").bind("click", function () {
                    mquery(document.body).css('overflow', "auto");
                    mquery(".modal").remove();
                })
                this.find("#close-icont").bind("click", function () {
                    mquery(document.body).css('overflow', "auto");
                    mquery(".modal").remove();
                })

            }
        });
    }
    exports.showShareRules = function(){
        utils.dialog({
            msg: '<div class="role-html"><div class="close-icon" id="close-iconr"><img src="images/b_close.png" /></div><h1>分享加分</h1><div class="role-section"><p>分享加分。比赛期间玩家分享比赛活动至朋友圈，QQ空间或者新浪微博，成功一次得一分，上限为十分，可分享给好友与群组但不加分。分享的成绩将在比赛最后一天累积于排行榜总分上面，平时不显示。</p></div><div class="iknow-btn-wrap"><div class="iknow-btn" id="iknow-btnr">我知道了</div></div></div>',
            type: 'detail',
            showCancelBtn: false,
            showOkBtn: false,
            showTitle: false,
            bindfunction: function () {
                this.find("#iknow-btnr").bind("click", function () {
                    mquery(document.body).css('overflow', "auto");
                    mquery(".modal").remove();
                })
                this.find("#close-iconr").bind("click", function () {
                    mquery(document.body).css('overflow', "auto");
                    mquery(".modal").remove();
                })

            }
        });
    }
    exports.share = function () {
        var data =  '{"title":"share 很好 title","content":"pk很好玩","url":"http://pkleyou.com","imageUrl":"http://pkleyou.com/images/funtion1/ic_game1.png"}';
        window.location = "pk://share/?c=" + encodeURIComponent(data);
    }
    exports.showLoading = function () {
        utils.dialog({
            msg: '<div class="loading-wrap"><img src="images/loadingx.gif" width="60px" height="60px;" /></div>',
            type: 'loading',
            showCancelBtn: false,
            showOkBtn: false,
            showTitle: false,
            bindfunction:function(){
                mquery(document.body).css('overflow', "auto");
            }
        });
    }

    exports.hideLoading = function(){
        mquery(".modal").remove();
        mquery(document.body).css('overflow', "auto");
    }
    return exports;
})(utils);