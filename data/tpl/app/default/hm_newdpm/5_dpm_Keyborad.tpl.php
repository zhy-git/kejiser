<?php defined('IN_IA') or exit('Access Denied');?><script src="../addons/haoman_base/base/jquery.vedio.js"></script>
<script type="text/javascript">
    $(document).keydown(function(e){
        if(e.which == 81) {
            if($('.isfull', window.parent.document).is(":hidden")){
                parent.window.h();
                $('.isfull', window.parent.document).show();
                $('.nofull', window.parent.document).hide();
            }else{
                parent.window.b();
                $('.isfull', window.parent.document).hide();
                $('.nofull', window.parent.document).show();
            }
        }

        if(e.which == 69) {
            if($('.introBox', window.parent.document).is(":hidden")){
                $('.mark-ewm', window.parent.document).show();
                $('.introBox', window.parent.document).show();
            }else{
                $('.mark-ewm', window.parent.document).hide();
                $('.introBox', window.parent.document).hide();
            }
        }
        if(e.which == 65) {
            $('#shipingplay', window.parent.document).show();
            $('.mark-ewm', window.parent.document).show();
            document.getElementById('media').pause();
        }
//        if(e.which == 78) {
//            location.href="<?php  echo $this->createMobileUrl('dpm_dsindex',array('rid'=>$rid))?>"
//        }
//        if(e.which == 79) {
//            location.href="<?php  echo $this->createMobileUrl('dpm_znlindex',array('rid'=>$rid))?>"
//        }
        if(e.which == 86) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_new_index2',array('rid'=>$rid))?>");
        }
        if(e.which == 85) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_shouqian',array('rid'=>$rid))?>");
        }
        if(e.which == 80) {
            location.href="<?php  echo $this->createMobileUrl('dpm_bp',array('rid'=>$rid))?>"
        }
        if(e.which == 87) {
            location.href="<?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid))?>"
        }
        
        if(e.which == 82) {
            location.href="<?php  echo $this->createMobileUrl('dpm_messages',array('rid'=>$rid))?>"
        }
        if(e.which == 84) {
            location.href="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid))?>"
        }
        if(e.which == 89) {
            location.href="<?php  echo $this->createMobileUrl('dpm_choujiang',array('rid'=>$rid))?>"
        }
        if(e.which == 83) {
            location.href="<?php  echo $this->createMobileUrl('dpm_qianghongbao',array('rid'=>$rid))?>"
        }
        if(e.which == 71) {
            location.href="<?php  echo $this->createMobileUrl('dpm_jiabing',array('rid'=>$rid))?>"
        }
        if(e.which == 68) {
            location.href="<?php  echo $this->createMobileUrl('dpm_vote',array('rid'=>$rid))?>"
        }
        if(e.which == 90) {
            location.href="<?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid,'themes'=>1))?>"
        }
        
        if(e.which == 67) {
            location.href="<?php  echo $this->createMobileUrl('dpm_wedding',array('rid'=>$rid))?>"
        }
        if(e.which == 66) {
            location.href="<?php  echo $this->createMobileUrl('dpm_tanmu',array('rid'=>$rid))?>"
        }
        if(e.which == 70) {
            location.href="<?php  echo $this->createMobileUrl('dpm_yyy',array('rid'=>$rid))?>"
        }
    
    });
</script>