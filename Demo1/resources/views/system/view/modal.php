

<form id="loginForm" name="form" action="/login_fn/login.php" method="post">
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      
      <div class="modal-content">
     	   <button type="button" class="close" data-dismiss="modal"><img src="images/closeBtn.png"></button>  
     	   <div class="col-xs-12 col-sm-6">
     	    <div class="modal-header">				
				<div class="modal-title first">
					<b>會員登入</b>
				</div>
			</div>
				<div class="modal-body pad3">
					<div class="modal-inner">
					  <input class="form-control" type="text" placeholder="請填入您註冊的E-mail">
					  <input class="form-control" type="password" placeholder="請填入您的密碼">
                       <div class="form-group">
                            <label for="password">驗證碼 <img src="images/captchaImg.png"/></label>
                            <div>
                              <input type="number" class="form-control" placeholder="請填入上方驗證碼正確數字">
                            </div>
                        </div>
					  <div class="msingle">
						<button type="submit" class="red_btn">登入</button>	
                        <div><a href="member_register.php">註冊</a></div>
                        <div><a href="#" data-toggle="modal" data-target="#forget_pw" data-dismiss="modal">忘記密碼?</a></div>
					  </div>
                      <div>
                        <img src="images/FB_login.jpg"/>
                      </div>
					  	
					</div>
				</div>
		  </div>
		  <div class="col-xs-12 col-sm-6 yellTop_l">
              
            <!--內容1-->
     	    <!--div class="modal-header">				
				<div class="modal-title">
					<b>直接購買</b>
				</div>
			</div>
			<div class="modal-body">
			  <div class="right_body">
				  您不需要加入會員也可直接購買<br>
                  於結帳頁面填入密碼直接加入會員<br>
                  方便更省時<br><br>
                  
                  <red>加入足好會員可享有會員優惠<br>
                  與第一手活動情報</red>
			  </div>
              <div class="msingle center buybtn">
                <button type="submit" class="yellow_w_btn">前往結帳</button>	
              </div>
			</div-->
            <!--//內容1-->
              
            <!--內容2-->
            <div class="modal-header">				
				<div class="modal-title m_top">
					<b>無須註冊 也可購買</b>
				</div>
			</div>
            <div class="modal-body">
			  <div class="right_body">
				 您不需要加入會員也可直接購買<br>
                  結帳一樣方便快速。<br>
                  也可於結帳過程中<br>
                  自由選擇是否加入會員。<br>
                  大大節省您的寶貴時間！
			  </div>
			</div>
            <!--//內容2--> 
              
		  </div>			
		   
			<div class="modal-footer"></div>      
    </div>
    
  </div>
</div>  
 </form>
 


 <!-- forget password Modal -->
  <form>
  <div class="modal fade" id="forget_pw" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal"><img src="images/closeBtn.png"></button>
        <div class="modal-header">
          
          <div class="modal-title">忘記密碼</div>
        </div>
        <div class="modal-body modal-inner">
          	<div class="col-xs-12">
			  <input class="form-control validate[required, custom[email]]" id="forgetaccount" name="account" type="text" placeholder="會員帳號 / 電子信箱">
			  <div class="msingle left">
                  <button type="submit" class="red_btn">重設密碼</button>
			  </div>
              <div><a data-toggle="modal" data-target="#login" data-dismiss="modal">回登入頁</a></div>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </form>



 <!-- rule Modal -->
  <div class="modal fade" id="rule_modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal"><img src="images/closeBtn.png"></button>
        <div class="modal-header">
          
          <div class="modal-title">	<b>足好「個人資料保護法」法定告知內容</b></div>
        </div>
        <div class="modal-body rule_modal pr">
         	<div class="mCustomScrollbar" data-mcs-theme="dark" style="position:absolute;top:20px;left:30px;width:90%;height:310px;">
         		足好 (以下簡稱本公司) 為保護您的個人資料，依據個人資料保護法規定，於下列事由與目的範圍內，說明本公司直接或間接蒐集、處理及利用您的個人資料，當您填表完成，表示您同意以下內容：蒐集之目的：本公司基於個人資料保護法及相關法令之規定，取得您的個人資料，目的在於提供良好服務及執行職務或業務之必要範圍內蒐集、處理及利用您的個人資料。您同意本公司以您所提供的個人資料確認您的身份、與您進行連絡、提供您相關係企業或合作夥伴之相關服務及資訊，包括但不限於進行獎項及贈品兌換活動、會員登錄及驗證、廣告行銷、服務訊息、特別活動、新服務、新產品之通知等用途，以及其他隱私權保護政策規範之使用方式。<br/>
您同意本公司利用您個人資料的期間、地區、對象及方式：<br/>
（一） 期間：本公司存續期間或依法令之資料保存期間。<br/>
（二） 地區：中華民國領域。<br/>
（三） 對象：本公司、本公司之分公司、本公司之關係企業其他與本公司有業務往來或合作之機構。<br/>
（四）	方式：以電話、簡訊、電子郵件、紙本或其他合於當時科技之適當方式作個人資料之利用，並於法令容許之範圍內，為行銷建檔。您對於本公司保有您的個人資料部分，您日後仍得享有下列權利： 你可向本公司請求停止蒐集、處理或利用及請求刪除您的個人資料。<br/>
本公司利用個人資料行銷，您表示拒絶接受行銷時，於法定合理期間本公司即不得以行銷之名義利用您的個人資料。 您的個人資料蒐集之目的消失或期限屆滿時，您同意本公司得繼續保存、處理或利用您的個人資料。除本公司因執行職務或業務所必須或為遵循其他法令之規定者外，您可隨時向本公司請求刪除、停止處理或利用您的個人資料。 您已清楚瞭解此一同意符合個人資料保護法及相關法規之要求，具有書面同意本公司蒐集、處理及利用您的個人資料之效果。 <br/>
         		
         	</div>          	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>