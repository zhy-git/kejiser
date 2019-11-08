<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>摇一摇排行榜</title>
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/img10/result.css">
    <!-- <script src="../addons/hm_newdpm/img10/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <style>
    html { width: 100%; height: 100%; }
    body { margin: 0; padding: 0; height: 100%; width: 100%; background-repeat: no-repeat; background-size: cover; overflow: hidden; font-family: Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif; }
    </style>
</head>

<body>
    <ul class="rotate-tab clearfix">
        <?php  if(is_array($newPici)) { foreach($newPici as $index => $row) { ?>
        <li <?php  if(empty($pici) && $index == 0 ) { ?>class="active" <?php  } else { ?><?php  if($pici == $row['pici']) { ?>class="active"<?php  } ?><?php  } ?>><a href="<?php  echo $this->createMobileUrl('yyyResult',array('rid'=>$rid,'pici'=>$row['pici']))?>">第<?php  echo $row['pici'];?>轮</a></li>
        <?php  } } ?>
    </ul>
    <div class="phbbiaoge phbbiaogek">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="phbbiaogek">
            <thead>
                <tr>
                    <th width="120" align="center">排名</th>
                    <th width="120" align="center">头像</th>
                    <th align="left">昵称</th>
                    <th width="250" align="center">进度/用时</th>
                </tr>
            </thead>
            <tbody>
            <?php  if(is_array($data)) { foreach($data as $index => $row) { ?>
                <tr>
                    <td align="center"><span class="paimin"><?php  echo $index+1?></span></td>
                    <td align="center"><img class="touxiang" src="<?php  echo tomedia($row['avatar'])?>"></td>
                    <td align="left"><span class="nicheng"><?php  echo $row['nickname'];?></span></td>
                    <td align="center">
                    <span class="phone">
                    <?php  echo sprintf("%.2f", $row['point'] / $row['realname'] * 100)?>%/
                    <?php  echo date("i分s秒",$row['endtime']-$row['createtime'])?>
                    </span>
                    </td>
                </tr>
            <?php  } } ?>
            </tbody>
        </table>
    </div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>

</html>
