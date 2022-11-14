<?php /* Template_ 2.2.7 2021/04/20 14:30:13 /www/unpobby1_godomall_com/data/skin/front/moment/member/join_wait.html 000002418 */ ?>
<?php $this->print_("header",$TPL_SCP,1);?>

<div class="content_box">
	<div class="member_wrap">
		<div class="member_tit">
			<h2><?php echo __('회원승인대기')?></h2>
		</div>
		<!-- //member_tit -->
		<div class="member_cont">
			<div class="join_wait_box">
				<div class="join_wait_tit">
					<p class="complete"><?php echo __('회원가입 승인이 %s대기%s 되었습니다.','<strong>','</strong>')?></p>
					<p><span><?php echo $TPL_VAR["mallNm"]?></span> <?php echo __('은 회원가입 승인이 필요합니다.')?><br><?php echo __('빠른 시일 내에 처리 될 수 있도록 노력 하겠습니다.')?></p>
				</div>
				<!-- //join_wait_tit -->
				<!-- <?php if($TPL_VAR["join"]["under14Fl"]!='n'&&$TPL_VAR["join"]["limitAge"]=='14'&&$TPL_VAR["join"]["appUseFl"]!='company'){?> -->
				<div class="join_wait_14under">
					<dl>
						<dt><strong><?php echo __('14세 미만 회원가입 안내')?></strong></dt>
						<dd><?php echo __('정보통신망법 제 31조 제 1항에 따라 만 14세 미만의 아동은 법정대리인의 %s동의를 확인 후 회원가입 할 수 있습니다.','<br/>')?>

							<a href="#" class="link_blank">[<?php echo __('관련법규 전문보기')?>]</a>
							<span class="btn_gray_list"><a href="../member/member_ps.php?mode=under14Download" id="btnUnder14Download" class="btn_gray_small"><em class="icon_download">14세 미만 회원가입 동의서 다운받기</em></a></span>
						</dd>
					</dl>
				</div>
				<!-- //join_wait_14under -->
				<!-- <?php }?> -->
				<div class="btn_center_box">
					<button id="btnConfirm" class="btn_member_ok"><?php echo __('확인')?></button>
				</div>
				<!-- //btn_member_sec -->
			</div>
			<!-- //join_wait_box -->
		</div>
		<!-- //member_cont -->
	</div>
	<!-- //member_wrap -->
</div>
<!-- //content_box -->
<script type="text/javascript">
	$(document).ready(function () {
		$('#btnConfirm').click(function (e) {
			e.preventDefault();
			top.location.href = '../main/index.php';
		});
		$('.link_blank', '.join_wait_14under').click(function (e) {
			e.preventDefault();
			window.open('http://www.law.go.kr/lsInfoP.do?lsiSeq=111970#0000');
		});
	});
</script>
<?php $this->print_("footer",$TPL_SCP,1);?>