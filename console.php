<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/12 下午2:49
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require "platform/algorithm/src/TrieTree.php";
$str = file_get_contents("platform/config/dict.txt");
$words_arr = explode("\n", $str);
$tree = new \AbelZhou\Tree\TrieTree();
foreach ($words_arr as $str) {
    $tree->append($str);
}
$str = <<<EOF
EOF新华社北京7月28日电;
新华社北京7月28日电 题：“善心汇”涉嫌特大传销案调查：揭开“假慈善”“真敛财”的面具
新华社记者
高呼“扶贫济困、均富共生”，名为精准扶贫，实为非法传销，涉案金额高达数百亿元……
高收益为诱饵，通过网络虚假宣传，采取“拉人头”方式大肆发展会员，一年时间裹挟群众逾500万人……
慈善光环之下，十余亿元悄然进入张天明个人腰包，“善心汇”究竟隐藏着怎样的黑幕？
近日，公安部组织侦办了“善心汇”涉嫌特大传销案，依法对深圳市善心汇文化传播有限公司法人代表张天明等人涉嫌组织、领导传销活动等犯罪问题进行查处。新华社记者日前通过深入采访，揭露了张天明等人打着“善”的旗号违法行“恶”的本质。
“共富神话”背后的“庞氏骗局”
办案民警介绍，发展会员时，“善心汇”以慈善的名义讲述一个“共富神话”：会员只要按一定标准投资，可以很快收回本金，并获取高额回报。同时，通过不断发展下线，随着会员层级提高，还有源源不断的获利。
“慈善事业是不求回报的，做慈善的公司怎么可能获得高额的返利呢？”办案民警一针见血地指出了“善心汇”公司自相矛盾的行骗逻辑。张天明等人编织的“共富神话”是一个通过拆东墙补西墙来瞒天过海的“庞氏骗局”。
“他们说这是扶贫，交3000元，20天以内返3900元给我。”64岁的李某是湖南某县的一个农民。今年6月底，他被一个朋友诱导加入“善心汇”，把这几年靠种田、打工攒下的3000元交了上去，不料现在血本无归。
从2016年5月开始，张天明等人宣扬“扶贫济困、均富共生”，策划、操纵并发展人员加入“善心汇”。截至目前，“善心汇”注册会员500余万人，会员遍布全国。
事实真的如“善心汇”所宣传那完美时空样吗？办案民警通过p2p平台注册资本剖析其模式，揭穿了其传销本质。参与人向推荐人以每颗300元宜信p2p平台app图标价格购买一颗“善种子”，即可激活一个会员账号。会员账户激活后，可通过投入资金和发展下线获得高额静态、动态收益。
静态收益是指会员按照平台指令，向陌生会员汇款，称为“布施”。这一环节完成一段时间后，平台会安排其他会员向此人汇款，称为“感恩受助”。会员可以选择“特困”“贫困”“小康”“富人”“德善”“大德” 六个档次，“布施”金额从1000元至1000万元不等，收益率从5%至50%不等。动态收益则指的是会员发展下线后，可以拿到下线“布施”金额2%－6%的提成。
据警方调查，张天明所宣传的2000亩黄花梨基地，实际只有几百亩且还只是树苗；所谓的三亚槟榔谷260亩房地产开发用地，根本没有办理过用地手续；注册的公司中，大量只是空壳公司，没有实际业务。
按照其说法，系统内每个会员都能获取超过本金的收益，但是，“善心汇”以及会员没有能支撑这种高额收益的实体产业和正常的盈利模式，投入的资金没有产生增值，那么收益来自于哪里？
如今被警方抓获的张天明向记者揭晓了答案：“\"善心汇\"要维持运转就是靠不断发展新会员，用后面加入的人的钱补给前面的人。”“善心乱武天下汇”公司通过搭建网络平台，用传销等手段吸纳资金，系统内用来支付回报和奖励的是源源不断补充进来的参与人的本金。
“这就是击鼓传花的骗局，一旦下线发展慢了，资金流入量小于支付量，资金链就会断裂，系统就会崩盘。”办案民警告诉记者。今年5月前后，“善心汇”被湖南省公安、工商部门调查，系统运转受影响，张天明担心系统崩盘，煽动了大量会员前往湖南省政府非法聚集，甚至在大雨天把残疾人和老人安排在人群的最前面，严重扰乱了当地社会秩序。
“幸亏查处及时，否则受损的人更多。”不少参与人这样表示。截至今年6月1日，会员资金缺口达92亿余元，涉及会员230余万名。
扶贫幌子背后的敛财阴谋
“扶贫济困”“互助共生”，这是“善心汇”在发展会员时的口号，宣称所有的钱都用于扶贫和慈善。但实际上，除了“旧人吃新人”的资金循环，“善心汇”会员的大量资金以类似抽头的方式进入了张天明等人的私人腰包。
据负责技术维护的骨干成员黄某回忆，张天明诱导自己加入时，反复地说你有理想有抱负，要投入到扶贫中，说既能扶贫又能赚钱。在“善心汇”互助网络上，很多细节都有意跟扶贫慈善挂钩，比如把传销中的层级命名为“特困社区”“贫困社区”等等，还有诸如“功德主”“布施”“善心币”等各种命名。
实际上是怎么回事呢？几名骨干成员都表示，加入一供应链金融p2p平台段时间后，发现扶贫只是假象，实际还是通过传销来敛财，只是利用扶贫来包装、隐蔽。
办案民警向记者列举了一些类似例子。比如组织慰问贫困户，花费不多，却声势浩大，在发展新会员时大肆宣传。甚至还以帮扶的名义，把部分贫困户发展成会员。
办案民警介绍，“假扶贫”背后是张天国务院明等人的“真敛财”，“善种子”“善心币”“解冻费”等所有涉案费用，绝大部分由会员直接打款至张天明的多个个人账户，一年下来张天明获利十余亿元，其他骨干成员也都有不同程度的非法所得。
张天明表示，他的非法所得投入到捐助、扶贫的钱只占极少数。用他自己的话说，掏这些钱也是为了给会员们呈现一个慈善家的形象，引诱更多人加入。
“捐助别人，应该是拿合法的钱，但这些都是非法所得，意味着有更多普通群众损失。”办案民警说。
“天师”外衣藏着的贪婪之徒
受害人员告诉记者，在部分“善心汇”成员的眼中，张天明就像圣人，部分会员甚至称他为“张天师”。
据警方调查和“善心汇”部分骨干成员介绍，“张天师”的形象是张天明对自己极力包装的结果。
张天明，生于1975年，黑龙江省哈尔滨市人，初中肄业，近年常驻广东省深圳市宝安区，是整个“善心汇”传销活动的组织者、策划者、管理者。先后做过服装、净水器等生意，2013年到了深圳发展，前后开过几家公司。
据负责宣传的骨干成员刘某表示，“张大连p2p理财公司/平台天明特别会说，张口就能来一大段，跟人打交道也永远是一副笑脸。”但是，他认为张天明不踏实，喜欢吹嘘，比如要做一百万元的事情，就跟别人说做五百万元。经常宣传自己有39项专利，其实很多都是虚假的。有个什么想法，自己不去做，而是画一张大饼，召集别人去做。
在“善心汇”内部，张天明每周周一到周五，晚上八点半都会在会员微信群里进行语音直播，大讲要实现人生价值，要互助共生。“通过不断的演讲，强化会员们对他的印象，认定了他是慈善家，相信\"善心汇\"是慈善事业，发展更多人进来。”刘某说。
人前跟会员宣传要做好事，以慈善家包装自己的张天明，背后却在大肆敛财。综合张天明自己供述联国和公安部门调查，张天明把非法所得的十余亿元，用于给自己和家人购置大量资产，如在昆明以自己控股公司的名义花费2.2亿元购买了一座大厦。办案民警介绍说，张天明的妻子在逃跑时，随身携带了140多万元现金、29张银行卡，仅抽查的8张卡中的资金就有1100多万元。
“我愿意现身说法，\"善心汇\"成立之初就是为了取得个人利益，我个人深深地感到悔恨和愧疚，\"善心汇\"如今变成了\"恶心汇\"。”在接受记者采访时，张天明说道，“不劳而获是走不通的。希望大家不要在错误道路上越走越远，能够真正意识到，这种模式的危害。”"
EOF;
$t1 = microtime(true);
var_dump($tree->search($str));
$t2 = microtime(true);
echo 'SearchTime{' . ($t2 - $t1) . '}s'.PHP_EOL;
$del_res = $tree->delete("现金");
$t3 = microtime(true);
echo 'DELETE RES:'.$del_res.PHP_EOL;
var_dump($tree->search($str));
$t1 = microtime(true);
var_dump($tree->getTreeWord("a"));
$t2 = microtime(true);
echo 'getTreeWord{' . ($t2 - $t1) . '}s'.PHP_EOL;
//拼音检测
$tree->append("zhangsan","",true,"张三");
$tree->append("zhangsan","",true,"张伞");
$t1 = microtime(true);
var_dump($tree->getTreeWord("zh"));
$t2 = microtime(true);
echo 'getTreeWordPinyin{' . ($t2 - $t1) . '}s'.PHP_EOL;
//replace & delete
$tree->append("z","",true,"在");
$tree->append("z","",true,"走");
$tree->append("z","",true,"做");
var_dump($tree->getTreeWord("z",4));
//覆盖
$tree->append("z",array("1"=>1),true,"做");
var_dump($tree->getTreeWord("z",4));
//删除
$tree->delete("z",false,true,"在");
var_dump($tree->getTreeWord("z",4));
$tree->delete("z",false,true,"走");
$tree->delete("z",false,true,"做");
var_dump($tree->getTreeWord("z", 4));