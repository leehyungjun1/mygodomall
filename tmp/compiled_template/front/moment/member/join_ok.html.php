<?php /* Template_ 2.2.7 2021/04/20 14:30:13 /www/unpobby1_godomall_com/data/skin/front/moment/member/join_ok.html 000001580 */ ?>
<?php $this->print_("header",$TPL_SCP,1);?>

<div class="content_box">
	<div class="member_wrap">
		<div class="member_tit">
			<h2><?php echo __('회원가입')?></h2>
		</div>
		<!-- //member_tit -->
		<div class="member_cont">
			<div class="join_ok_box">
				<div class="join_ok_tit">
					<p class="complete"><?php echo __('회원가입이 %s완료%s 되었습니다.','<strong>','</strong>')?></p>
					<p><?php echo __('%s님의 회원가입을 축하합니다. %s 알차고 실속있는 서비스로 찾아뵙겠습니다.','<span>'.$TPL_VAR["memNm"].'</span>','<br/>')?></p>
				</div>
				<!-- //join_ok_tit -->
				<div class="btn_member_sec">
					<ul>
						<li><button id="btnHome"><?php echo __('홈으로')?></button></li>
						<li><button class="btn_login"><?php echo __('로그인')?></button></li>
					</ul>
				</div>
				<!-- //btn_member_sec -->
			</div>
			<!-- //join_ok_box -->
		</div>
		<!-- //member_cont -->
	</div>
	<!-- //member_wrap -->
</div>
<!-- //content_box -->
<script type="text/javascript">
	$(document).ready(function () {
		$('#btnHome').click(function (e) {
			e.preventDefault();
			top.location.href = '../main/index.php';
		});
		$('.btn_login').click(function (e) {
			e.preventDefault();
			top.location.href = '../member/login.php';
		});
	});
</script>
<?php echo $TPL_VAR["fbCompleteRegistrationScript"]?>

<?php $this->print_("footer",$TPL_SCP,1);?>