<?php
include "head.php" ?>
		<div class="sui-layout">
		  <div class="sidebar">
<?php include "leftmenu.php" ?>
		  </div>
		  <div class="content">
			<p class="sui-text-xxlarge my-padd label-success">欢迎访问学生管理系统！</p>
			<div class="userinfo">欢迎<span><?php echo $_SESSION['usname']; ?></span>登录&nbsp;&nbsp;<a href="login.php">退出</a></div>
		  </div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">

</script>
<?php include "foot.php"; ?>