
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="Language" content="<?php echo $GLOBALS["language"]; ?>" >
<script type="text/javascript" src="<?php echo $GLOBALS["baseURL"]; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS["baseURL"]; ?>js/form.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS["baseURL"]; ?>js/sha1.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS["baseURL"]; ?>js/validations.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS["baseURL"]; ?>js/canis.js"></script>
<?php
  if(isset($_REQUEST['view'])){
          if(isset($styles[$_REQUEST['view']]))
          echo '<link href="'.$GLOBALS["baseURL"].'css/'.$styles[$_REQUEST['view']].'" rel="stylesheet" type="text/css" media="screen" />';
  }else if(isset($_REQUEST['panel'])){
          if(isset($styles[$_REQUEST['panel']]))
          echo '<link href="'.$GLOBALS["baseURL"].'css/'.$styles[$_REQUEST['panel']].'" rel="stylesheet" type="text/css" media="screen" />';
  }
?>