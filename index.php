<html lang="pt-BR" dir="ltr" class="W0dUmf zIKt9b">
   <head>
      <script src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.gapi.en.IK5OmUURd2E.O/m=gapi_iframes,googleapis_client/rt=j/sv=1/d=1/ed=1/rs=AHpOoo932JinkSJHK92WgVjIV-Jwwyu3Rw/cb=gapi.loaded_0" nonce="" async=""></script>
<!--      <base href="https://classroom.google.com/u/0/">-->
      <meta name="referrer" content="origin">
      <link rel="canonical" href="https://classroom.google.com/h">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="application-name" content="Google Classroom">
      <meta name="apple-mobile-web-app-title" content="Google Classroom">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="msapplication-tap-highlight" content="no">
      <link rel="manifest" crossorigin="use-credentials" href="_/ClassroomUi/manifest.json">
      <link rel="home" href="/?lfhs=2">
      <link rel="msapplication-starturl" href="/?lfhs=2">
      <link rel="apple-touch-icon-precomposed" href="//ssl.gstatic.com/classroom/ic_product_classroom_32.png" sizes="32x32">
      <link rel="msapplication-square32x32logo" href="//ssl.gstatic.com/classroom/ic_product_classroom_32.png" sizes="32x32">
      <link rel="apple-touch-icon-precomposed" href="//ssl.gstatic.com/classroom/ic_product_classroom_48.png" sizes="48x48">
      <link rel="msapplication-square48x48logo" href="//ssl.gstatic.com/classroom/ic_product_classroom_48.png" sizes="48x48">
      <link rel="apple-touch-icon-precomposed" href="//ssl.gstatic.com/classroom/ic_product_classroom_96.png" sizes="96x96">
      <link rel="msapplication-square96x96logo" href="//ssl.gstatic.com/classroom/ic_product_classroom_96.png" sizes="96x96">
      <link rel="apple-touch-icon-precomposed" href="//ssl.gstatic.com/classroom/ic_product_classroom_144.png" sizes="144x144">
      <link rel="msapplication-square144x144logo" href="//ssl.gstatic.com/classroom/ic_product_classroom_144.png" sizes="144x144">
      <?php
       include "include.php"; 
       ?>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
<!--    <link rel="stylesheet" href="style.css" type="text/css" />-->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = prompt("Qual teu vulgo?", "Por obséquio, insira seu vulgo.");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "COLOCA NOME BURRO";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	name = name + ": ";
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>
    <script type="text/javascript">
          function showMe(it, elem){
            var elems = document.getElementsByClassName("cb");
            var currentState = elem.checked;
            var elemsLength = elems.length;

            for(i=0; i<elemsLength; i++){
              if(elems[i].type === "checkbox"){
                elems[i].checked = false;   
              }
            }
            elem.checked = currentState;
            var elements = document.getElementsByClassName('ocult');            
            for(j=0; j < elements.length; j++){
              if(elements[j].id != it || currentState == false){
                elements[j].style.display = "none";
              }else{
                elements[j].style.display = "block";
              }
            }         
          }
        </script>
   </head>
   <body id="yDmH0d" jsmodel="elptZb;PuTOgd" jscontroller="pjICDe" jsaction="rcuQ6b:npT2md; click:FAbpgf; auxclick:FAbpgf;qako4e:.CLIENT;UjQMac:.CLIENT;GvneHb:.CLIENT;c0v8t:.CLIENT;keydown:.CLIENT;keyup:.CLIENT;keypress:.CLIENT;HO6t5b:.CLIENT;mlnRJb:.CLIENT;nHjqDd:.CLIENT" class="tQj5Y ghyPEc IqBfM ecJEib EWZcud LcUz9d EIlDfe cjGgHb d8Etdd kYtXye nk6WKe" data-has-header="true" data-no-view="true" style="min-height: 657px;" onload="setInterval('chat.update()', 1000)">
      <script aria-hidden="true" nonce="">window.wiz_progress&&window.wiz_progress();</script>
      <nav jscontroller="Lnriuf" jsaction="tLnfOb:spIfde;qako4e:.CLIENT" class="joJglb" id="kO001e" role="navigation">
        <div class="QRiHXd">
          <div class="FXKA9c">
            <div class="XIpEib QRiHXd">
              <div class="k43Owe mmOZjd" data-focus-id="JUeBdc">
                <div>
                  <div jscontroller="u6TIZe" jsaction="rcuQ6b:npT2md;JIbuQc:VJ10Y; keydown:I481le;B3adYc:wAhJT" jsmodel="WKE3nf" data-course-states="1" soy-skip="" ssk="5:FHFnz" id="ow4" __is_owner="true">
                    <span data-is-tooltip-wrapper="true">
                      <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc xSP5ic oxacD" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd;" data-idom-class="yHy1rc eT1oJ mN1ivc xSP5ic oxacD" jsname="LgbsSe" aria-label="Menu principal" data-tooltip-enabled="true" data-tooltip-id="tt-i1" style="--mdc-ripple-fg-size:28px; --mdc-ripple-fg-scale:1.71429; --mdc-ripple-left:10px; --mdc-ripple-top:10px;">
                        <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                        <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                        <span class="VfPpkd-kBDsod" aria-hidden="true">
                          <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class=" NMm5M">
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                          </svg>
                        </span>
                      </button>
                      <div class="EY8ABd-OWXEXe-TAWMXe" id="tt-i1" role="tooltip" aria-hidden="true">Menu principal</div>
                    </span>
                  </div>
                </div>
              </div>
              <h1 class="Hwv4mb">
                <div class="s7ovNb"><img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="Google" height="24px" width="74px" data-iml="39659.699999999255">&nbsp;<span class="IqJTee">Sala de Aula</span></div>
              </h1>
            </div>
          </div>
          <div class="Mtd4hb QRiHXd" soy-skip="" ssk="6:byE9zf">
            <div class="fB7J9c kWv2Xb QRiHXd">
              <div style="display: none;">
                <div jsaction="click:CTftRe" class="XGLVqf oT3cQd" jsowner="ow807" style="display: none;">
                  <span data-is-tooltip-wrapper="true">
                    <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD" jsname="KdmTJe" data-tooltip-enabled="true" data-tooltip-override-client-rect="ZAUrGc">
                      <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                      <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                      <span class="VfPpkd-kBDsod xSP5ic" aria-hidden="true">
                        <svg enable-background="new 0 0 24 24" focusable="false" height="24" viewBox="0 0 24 24" width="24" class=" NMm5M">
                          <rect fill="none" height="24" width="24"></rect>
                          <path d="M7,4L2,9v9c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-4.5l4,4v-11l-4,4V6c0-1.1-0.9-2-2-2H7z M16,18H4v-8l4-4h8V18z"></path>
                        </svg>
                      </span>
                      <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://meet.google.com/hfb-npro-qho?authuser=1&amp;hs=179" target="_blank" aria-label="Participar da videochamada do Meet" data-tooltip-enabled="true" data-tooltip-id="ZAUrGc"></a>
                    </div>
                    <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="ZAUrGc">Participar da videochamada do Meet</div>
                  </span>
                </div>
              </div>
              <div style="display: none;">
                <div jsaction="click:CTftRe" class="XGLVqf oT3cQd" jsowner="ow19" style="display: none;">
                  <span data-is-tooltip-wrapper="true">
                    <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD" jsname="KdmTJe" data-tooltip-enabled="true" data-tooltip-override-client-rect="ZAUrGc">
                      <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                      <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                      <span class="VfPpkd-kBDsod xSP5ic" aria-hidden="true">
                        <svg enable-background="new 0 0 24 24" focusable="false" height="24" viewBox="0 0 24 24" width="24" class=" NMm5M">
                          <rect fill="none" height="24" width="24"></rect>
                          <path d="M7,4L2,9v9c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-4.5l4,4v-11l-4,4V6c0-1.1-0.9-2-2-2H7z M16,18H4v-8l4-4h8V18z"></path>
                        </svg>
                      </span>
                      <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://meet.google.com/hfb-npro-qho?authuser=1&amp;hs=179" target="_blank" aria-label="Participar da videochamada do Meet" data-tooltip-enabled="true" data-tooltip-id="ZAUrGc"></a>
                    </div>
                    <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="ZAUrGc">Participar da videochamada do Meet</div>
                  </span>
                </div>
              </div>
              <div style="display: none;">
                <div class="XGLVqf Y5vSD CG2qQ" jsaction="JIbuQc:trigger.FT6KGc" jsowner="ow23">
                  <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD" jsname="dq27Te" aria-label="Configurações da turma" guidedhelpid="courseSettingsGH">
                    <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                    <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                    <span class="VfPpkd-kBDsod xSP5ic" aria-hidden="true">
                      <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z"></path>
                        <circle cx="12" cy="12" r="3.5"></circle>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
              <div style="display: none;">
                <div class="XGLVqf Y5vSD CG2qQ" jsaction="JIbuQc:trigger.FT6KGc" jsowner="ow777">
                  <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD" jsname="dq27Te" aria-label="Configurações da turma" guidedhelpid="courseSettingsGH">
                    <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                    <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                    <span class="VfPpkd-kBDsod xSP5ic" aria-hidden="true">
                      <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z"></path>
                        <circle cx="12" cy="12" r="3.5"></circle>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
              <div>
                <div jsaction="rcuQ6b:npT2md;JIbuQc:Ckgp2b(mSMdM);FzgWvd:j697N" class="XGLVqf" jscontroller="RFXpNd" jsowner="ow942">
                  <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                    <div jsname="WjL7X" jsslot="">
                      <span data-is-tooltip-wrapper="true">
                        <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc GR7QId oxacD" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc GR7QId oxacD" jsname="mSMdM" aria-label="Criar ou participar de uma turma" data-tooltip-enabled="true" data-tooltip-id="tt-c8">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 13h-7v7h-2v-7H4v-2h7V4h2v7h7v2z"></path>
                            </svg>
                          </span>
                        </button>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="tt-c8">Criar ou participar de uma turma</div>
                      </span>
                    </div>
                    <div jsname="U0exHf" jsslot="">
                      <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="true">
                        <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Adicionar curso&quot;" data-disable-idom="true">
                          <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                          <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="SLuNwd" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Participar da turma</span></li>
                          <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="svCv4e" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Criar turma</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <span data-is-tooltip-wrapper="true">
                    <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc sEZiv TYHMlb oxacD" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc sEZiv TYHMlb oxacD" jsname="mSMdM" aria-label="Participar da turma" data-tooltip-enabled="true" data-tooltip-id="tt-c9">
                      <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                      <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                      <span class="VfPpkd-kBDsod" aria-hidden="true">
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                          <path d="M20 13h-7v7h-2v-7H4v-2h7V4h2v7h7v2z"></path>
                        </svg>
                      </span>
                    </button>
                    <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="tt-c9">Participar da turma</div>
                  </span>
                </div>
                <!-- Inlcuir o ativador do chat por aqui -->
              </div>

            </div>

          </div>

          <input id="chkCamp1" checked="" type="checkbox" class="cb"  onclick="showMe('optCamp1', this)" />
        </div>
        <div class="meR3Qc TeZa2e" jsname="ADG7x">
          <div class="xHPsid" jsname="njTs3e" role="list"></div>
        </div>
        
        <div class="a6pJXc Q6ApZc aTtRxf">
          <div class="aP3ZPb kRqvHe bFjUmb-Ysl7Fe">
            <div class="bNpzdf kRqvHe bFjUmb-Wvd9Cc">&nbsp;</div>
            <div class="G1kKid kRqvHe bFjUmb-Wvd9Cc">&nbsp;</div>
          </div>
        </div>
      </nav>
      <div class="FJJygb A2eYae" aria-hidden="false">
         <div jscontroller="pqmHU" jsaction="rcuQ6b:npT2md;RaLK8d:ti6hGc" style="display: none" jsmodel="qXV53c" class="Z3WPhc">
            <div class="LhKRUe  ">
               <span class="dzWTB ">Atualize o navegador para atualizar a página</span>
               <div class="ar1wZ" jsaction="JIbuQc:qrlFte" ssk="9:Atualizar">
                  <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">
                     <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d qfvgSe eoooNd  U5B3me" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd;" data-idom-class="ksBjEc lKxP2d qfvgSe eoooNd  U5B3me">
                        <div class="VfPpkd-Jh9lGc"></div>
                        <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                        <div class="VfPpkd-RLmnJb"></div>
                        <span jsname="V67aGc" class="VfPpkd-vQzf8d">Atualizar</span>
                     </button>
                  </div>
               </div>
               <div class="ar1wZ" jsaction="JIbuQc:IYtByb" ssk="9:Dispensar">
                  <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">
                     <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d qfvgSe eoooNd  U5B3me" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd;" data-idom-class="ksBjEc lKxP2d qfvgSe eoooNd  U5B3me">
                        <div class="VfPpkd-Jh9lGc"></div>
                        <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                        <div class="VfPpkd-RLmnJb"></div>
                        <span jsname="V67aGc" class="VfPpkd-vQzf8d">Dispensar</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="Sslefe Z3WPhc" aria-live="assertive" aria-atomic="true"></div>
         <div class="RmhvCc Z3WPhc" aria-live="polite" aria-atomic="true"></div>
         <div class="w2ifj Z3WPhc" aria-live="polite" aria-atomic="true">
            <div>
               <div class="LhKRUe  " style="display: none;"><span class="dzWTB ">Salvando…</span></div>
            </div>
         </div>
         <div class="Ub9MKb Z3WPhc"></div>
      </div>
      <c-wiz jsrenderer="g1e71c" class="SSPGKf" jsdata="deferred-c2" data-p="%.@.[1,3],[1,2]]" jscontroller="gQQbc" jsaction="rcuQ6b:rcuQ6b;HO6t5b:PlQWd;gHPzkc:jsAJsc;QmtCl:.CLIENT;qVp5ue:.CLIENT;AE9bOd:.CLIENT;mlnRJb:.CLIENT;lHU8dd:.CLIENT" data-node-index="0;0" jsmodel="hc6Ubd PuTOgd;IaLzN;lgSpOb;WKE3nf;aMcbid;lkzLle;elptZb;" c-wiz="" data-ogpc="" data-view-id="ucj-1" data-primary-model="true" data-course-states="1,3" data-course-ready-states="1,2" data-include-abusive-courses="true">
         <div class="T4LgNb " jsname="a9kxte">
            <div jsname="qJTHM" class="kFwPee">
               <div class="xgkURe mhCMAe"></div>
               <div class="xgkURe ECPFEb"></div>
               <div jscontroller="FRimSc" jsaction="rcuQ6b:rcuQ6b;"></div>
               <div jscontroller="V8Zje" jsaction="rcuQ6b:rcuQ6b;JIbuQc:hskLsf(ZUkOIc); click:RByGDd(XTYNyb);" role="region" aria-label="Banner informativo" aria-hidden="true"></div>
               <div class="bg6sud" jscontroller="AthZQc" jsaction="rcuQ6b:rcuQ6b;lHU8dd:rcuQ6b;" jsmodel="WKE3nf" data-course-states="1">
                  <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">
                     <div class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 pOf0gc UJYYgf n42Gr" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="ksBjEc lKxP2d LQeN7 pOf0gc UJYYgf n42Gr">
                        <div class="VfPpkd-Jh9lGc"></div>
                        <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                        <span class="VfPpkd-kBDsod" aria-hidden="true">
                           <svg enable-background="new 0 0 24 24" focusable="false" height="18" viewBox="0 0 24 24" width="18" class=" NMm5M">
                              <g>
                                 <rect fill="none" height="24" width="24"></rect>
                              </g>
                              <g>
                                 <g>
                                    <path d="M20,3H4C2.9,3,2,3.9,2,5v14c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V5 C22,3.9,21.1,3,20,3z M20,19H4V5h16V19z" fill-rule="evenodd"></path>
                                    <polygon fill-rule="evenodd" points="19.41,10.42 17.99,9 14.82,12.17 13.41,10.75 12,12.16 14.82,15"></polygon>
                                    <rect fill-rule="evenodd" height="2" width="5" x="5" y="7"></rect>
                                    <rect fill-rule="evenodd" height="2" width="5" x="5" y="11"></rect>
                                    <rect fill-rule="evenodd" height="2" width="5" x="5" y="15"></rect>
                                 </g>
                              </g>
                           </svg>
                        </span>
                        <span jsname="V67aGc" class="VfPpkd-vQzf8d" aria-hidden="true">Pendentes</span><a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6 VfPpkd-RLmnJb" href="/u/0/a/not-turned-in/all" aria-label="Pendentes"></a>
                     </div>
                  </div>
                  <span data-is-tooltip-wrapper="true">
                     <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc nQaZq LgeCif xSP5ic" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc nQaZq LgeCif xSP5ic" data-tooltip-enabled="true" data-tooltip-override-client-rect="yfL0u">
                        <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                        <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                        <svg enable-background="new 0 0 24 24" focusable="false" height="24" viewBox="0 0 24 24" width="24" class=" NMm5M">
                           <g>
                              <rect fill="none" height="24" width="24"></rect>
                           </g>
                           <g>
                              <g>
                                 <path d="M20,3H4C2.9,3,2,3.9,2,5v14c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V5 C22,3.9,21.1,3,20,3z M20,19H4V5h16V19z" fill-rule="evenodd"></path>
                                 <polygon fill-rule="evenodd" points="19.41,10.42 17.99,9 14.82,12.17 13.41,10.75 12,12.16 14.82,15"></polygon>
                                 <rect fill-rule="evenodd" height="2" width="5" x="5" y="7"></rect>
                                 <rect fill-rule="evenodd" height="2" width="5" x="5" y="11"></rect>
                                 <rect fill-rule="evenodd" height="2" width="5" x="5" y="15"></rect>
                              </g>
                           </g>
                        </svg>
                        <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/0/a/not-turned-in/all" aria-label="Pendentes" data-tooltip-enabled="true" data-tooltip-id="yfL0u"></a>
                     </div>
                     <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="yfL0u">Pendentes</div>
                  </span>
                  <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">
                     <div class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 pOf0gc UJYYgf n42Gr" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="ksBjEc lKxP2d LQeN7 pOf0gc UJYYgf n42Gr">
                        <div class="VfPpkd-Jh9lGc"></div>
                        <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                        <span class="VfPpkd-kBDsod" aria-hidden="true">
                           <svg focusable="false" width="18" height="18" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
                           </svg>
                        </span>
                        <span jsname="V67aGc" class="VfPpkd-vQzf8d" aria-hidden="true">Agenda</span><a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6 VfPpkd-RLmnJb" href="/u/0/calendar/this-week/course/all" aria-label="Agenda"></a>
                     </div>
                  </div>
                  <span data-is-tooltip-wrapper="true">
                     <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc nQaZq LgeCif xSP5ic" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc nQaZq LgeCif xSP5ic" data-tooltip-enabled="true" data-tooltip-override-client-rect="g7hDSd">
                        <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                        <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                           <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
                        </svg>
                        <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/0/calendar/this-week/course/all" aria-label="Agenda" data-tooltip-enabled="true" data-tooltip-id="g7hDSd"></a>
                     </div>
                     <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="g7hDSd">Agenda</div>
                  </span>
               </div>
               <div jscontroller="aXmj4" jsaction="rcuQ6b:rcuQ6b;IKbv3d:rcuQ6b;wJx4ze:rcuQ6b;Vgg7gc:yMMCof;iZo7Zb:u2HSyd;yyauTb:.CLIENT;ymHzQd:.CLIENT" jsmodel="I8BbUd Nqd6Nc RH7Ihb ZrJsEc">
            <div jscontroller="CJc2td" jsname="CCJ0ld" data-drag-list-group-key="1" data-drag-direction-left-right="true">
              <ol jsname="bN97Pc" class="JwPp0e">
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="538102346569" data-user-id="228601553205" data-course-id="538102346569">
                  <div class="Tc9hUd CNpREd ee1HBc">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK" style="background-image: url(&quot;https://gstatic.com/classroom/themes/img_learnlanguage.jpg&quot;);"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTM4MTAyMzQ2NTY5"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NTM4MTAyMzQ2NTY5" data-focus-id="/u/1/c/NTM4MTAyMzQ2NTY5">
                          <div class="YVvGBb z3vRcc-ZoZQ1">FHP II Sistemas de Informação</div>
                          <div class="YVvGBb"></div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTM4MTAyMzQ2NTY5"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Debora de Sousa Postigo</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/default.png" data-iml="40606.60000000149">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb538102346569" data-focus-id="PMg5Xd-538102346569">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NTM4MTAyMzQ2NTY5/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;FHP II Sistemas de Informação&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb538102346569"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb538102346569">Abrir seu trabalho para "FHP II Sistemas de Informação"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe538102346569">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1PyO4lHWzVMDBhjTx_ZqmJn-DKdF1HxkpLLRHy8qYSuv_Agb2f0puhcjmef4emHVevIbBnIr4?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;FHP II Sistemas de Informação&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe538102346569"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe538102346569">Abrir a pasta de "FHP II Sistemas de Informação" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="488662770764" data-user-id="228601553205" data-course-id="488662770764">
                  <div class="Tc9hUd CNpREd ee1HBc">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK" style="background-image: url(&quot;https://gstatic.com/classroom/themes/Math.jpg&quot;);"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDg4NjYyNzcwNzY0"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NDg4NjYyNzcwNzY0" data-focus-id="/u/1/c/NDg4NjYyNzcwNzY0">
                          <div class="YVvGBb z3vRcc-ZoZQ1">Cálculo Aplicado</div>
                          <div class="YVvGBb"></div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDg4NjYyNzcwNzY0"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Ivan Jose Lautenschleguer</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/default.png" data-iml="40606.60000000149">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb488662770764" data-focus-id="PMg5Xd-488662770764">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NDg4NjYyNzcwNzY0/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;Cálculo Aplicado&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb488662770764"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb488662770764">Abrir seu trabalho para "Cálculo Aplicado"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe488662770764">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1cbIfgYSbQxaN0HTFvh-PBFtVpc0r7xLaBKbMkj8bQnNaqsTOS6DM8tJ_NemAOgaMOfK3MkIm?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;Cálculo Aplicado&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe488662770764"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe488662770764">Abrir a pasta de "Cálculo Aplicado" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="488747618473" data-user-id="228601553205" data-course-id="488747618473">
                  <div class="Tc9hUd CNpREd S3aLQd">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK" style="background-image: url(&quot;https://gstatic.com/classroom/themes/img_reachout.jpg&quot;);"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDg4NzQ3NjE4NDcz"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NDg4NzQ3NjE4NDcz" data-focus-id="/u/1/c/NDg4NzQ3NjE4NDcz">
                          <div class="YVvGBb z3vRcc-ZoZQ1">2022/2 - Práticas de Programação II</div>
                          <div class="YVvGBb">SIF092 - Práticas de Programação II</div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDg4NzQ3NjE4NDcz"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Flavio Rubens Massaro Júnior</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/junin.jpg" data-iml="40606.800000000745">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb488747618473" data-focus-id="PMg5Xd-488747618473">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NDg4NzQ3NjE4NDcz/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;2022/2 - Práticas de Programação II&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb488747618473"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb488747618473">Abrir seu trabalho para "2022/2 - Práticas de Programação II"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe488747618473">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/13emvQRxT3JEW_rrprKoTwYXfA5q1yT7cP5ujvGNXdgsTpYAVt4seRxKMW470Lwu1UFI6tW22?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;2022/2 - Práticas de Programação II SIF092 - Práticas de Programação II&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe488747618473"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe488747618473">Abrir a pasta de "2022/2 - Práticas de Programação II SIF092 - Práticas de Programação II" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="538107757375" data-user-id="228601553205" data-course-id="538107757375">
                  <div class="Tc9hUd CNpREd UvHKof">
                    <div class="OjOEXb" style="background-image: url(&quot;https://lh3.googleusercontent.com/hr_crs_themes/AIq9KHMMWVMYVLmfCzylk7tdSunYsZZVbI4DBznD5p_Tpo8q8uARYolcBaHiiBKHeT33Oi_tAI06wROGac6TqQsjsnPnT8zo7I6rKuddQTk-jOIdnJ1rt-84nA=s1280&quot;);"></div>
                    <div class="ZizeYd bFjUmb-Tvm9db"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTM4MTA3NzU3Mzc1"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NTM4MTA3NzU3Mzc1" data-focus-id="/u/1/c/NTM4MTA3NzU3Mzc1">
                          <div class="YVvGBb z3vRcc-ZoZQ1">Arquitetura e Organização de Computadores</div>
                          <div class="YVvGBb">2S/2022</div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTM4MTA3NzU3Mzc1"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Diego Henrique Negretto</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/diegao.jpg" data-iml="40606.900000002235">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb538107757375" data-focus-id="PMg5Xd-538107757375">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NTM4MTA3NzU3Mzc1/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;Arquitetura e Organização de Computadores&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb538107757375"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb538107757375">Abrir seu trabalho para "Arquitetura e Organização de Computadores"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe538107757375">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1OlIgWWb_fGx8W6HwaDJHxdCxlSvb_lzkosdGzegKjAhr1jASeE4a8Y55L69xnkeiCJs1g8UF?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;Arquitetura e Organização de Computadores 2S/2022&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe538107757375"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe538107757375">Abrir a pasta de "Arquitetura e Organização de Computadores 2S/2022" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="526244958852" data-user-id="228601553205" data-course-id="526244958852">
                  <div class="Tc9hUd CNpREd ee1HBc" style="z-index: !important;">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK" style="background-image: url(&quot;https://gstatic.com/classroom/themes/img_code.jpg&quot;);"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTI2MjQ0OTU4ODUy"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NTI2MjQ0OTU4ODUy" data-focus-id="/u/1/c/NTI2MjQ0OTU4ODUy">
                          <div class="YVvGBb z3vRcc-ZoZQ1">2022-2A - Linguagem de Programação I</div>
                          <div class="YVvGBb">Sistemas de Informação - 2A 2022</div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTI2MjQ0OTU4ODUy"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Sergio Luis Antonello</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc" style="overflow-y: scroll;">
                    <img class="PNzAWd" aria-hidden="true" src="images/antonello.jpg" data-iml="40606.900000002235" style="z-index: 99 !important; position: absolute; left: 65%;">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div id="optCamp1" class="ocult">

                        <?php
                        include "chat.php";
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb526244958852" data-focus-id="PMg5Xd-526244958852">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NTI2MjQ0OTU4ODUy/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;2022-2A - Linguagem de Programação I&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb526244958852"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb526244958852">Abrir seu trabalho para "2022-2A - Linguagem de Programação I"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe526244958852">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1IgK13PYuXi1shmd9ojMXiTFA97GswWAmUyeJcvk5zBkAe1-SLKLbFyUzV1GmrWJp4VJF-z1u?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;2022-2A - Linguagem de Programação I Sistemas de Informação - 2A 2022&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe526244958852"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe526244958852">Abrir a pasta de "2022-2A - Linguagem de Programação I Sistemas de Informação - 2A 2022" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="526309772484" data-user-id="228601553205" data-course-id="526309772484">
                  <div class="Tc9hUd CNpREd ee1HBc">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK" style="background-image: url(&quot;https://gstatic.com/classroom/themes/img_code.jpg&quot;);"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTI2MzA5NzcyNDg0"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NTI2MzA5NzcyNDg0" data-focus-id="/u/1/c/NTI2MzA5NzcyNDg0">
                          <div class="YVvGBb z3vRcc-ZoZQ1">Oficina de Leitura e Escrita</div>
                          <div class="YVvGBb">Sistemas das Informação - 2º período</div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NTI2MzA5NzcyNDg0"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Gesiel Prado Santos</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/random.jpg" data-iml="40606.699999999255">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb526309772484" data-focus-id="PMg5Xd-526309772484">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NTI2MzA5NzcyNDg0/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;Oficina de Leitura e Escrita&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb526309772484"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb526309772484">Abrir seu trabalho para "Oficina de Leitura e Escrita"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe526309772484">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1QipnlYHsf9sU7H1scZG7MW39zasfHcOS6q69lE034jb1uQnflbxnI9vW3nsDa3ggMdTo1zEX?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;Oficina de Leitura e Escrita Sistemas das Informação - 2º período&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe526309772484"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe526309772484">Abrir a pasta de "Oficina de Leitura e Escrita Sistemas das Informação - 2º período" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="476032982681" data-user-id="228601553205" data-course-id="476032982681">
                  <div class="Tc9hUd CNpREd ee1HBc">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK" style="background-image: url(&quot;https://gstatic.com/classroom/themes/img_code.jpg&quot;);"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDc2MDMyOTgyNjgx"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NDc2MDMyOTgyNjgx" data-focus-id="/u/1/c/NDc2MDMyOTgyNjgx">
                          <div class="YVvGBb z3vRcc-ZoZQ1">2022-1/A Formação Humana e Profissional</div>
                          <div class="YVvGBb">Prof. Camilo César Perucci e Profa. Débora de Sousa Postigo</div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDc2MDMyOTgyNjgx"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Camilo Cesar Perucci</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/camilo.jpg" data-iml="40606.300000000745">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb476032982681" data-focus-id="PMg5Xd-476032982681">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NDc2MDMyOTgyNjgx/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;2022-1/A Formação Humana e Profissional&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb476032982681"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb476032982681">Abrir seu trabalho para "2022-1/A Formação Humana e Profissional"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe476032982681">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1mOf3-hKoI1mdbRdaTe_ouXDgcLlahBN2vZQ1rdNLvzl1By5akuwnuSArQIKGc7fjdYjSs9ve?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;2022-1/A Formação Humana e Profissional Prof. Camilo César Perucci e Profa. Débora de Sousa Postigo&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe476032982681"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe476032982681">Abrir a pasta de "2022-1/A Formação Humana e Profissional Prof. Camilo César Perucci e Profa. Débora de Sousa Postigo" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
                <li jsmodel="hCpsVc bYzLLb AKq4rd" class="gHz6xd Aopndd rZXyy" data-draggable-item-id="471075365308" data-user-id="228601553205" data-course-id="471075365308">
                  <div class="Tc9hUd CNpREd UvHKof">
                    <div class="OjOEXb" style="background-image: url(&quot;https://lh3.googleusercontent.com/hr_crs_themes/AIq9KHP2TyH9QlqaA5zJ9n2pqhC6pTXqbWaKEivY2VGsqxSwv34qro1A4L5VXd-06kINUTV9jWEmehy0Rbykup8JH_W__2RC7Cggz9uGVHGGFM9Li9dmRTllyQ=s1280&quot;);"></div>
                    <div class="ZizeYd bFjUmb-Tvm9db"></div>
                    <div class="R4EiSb">
                      <a class="onkcGd ZmqAt Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDcxMDc1MzY1MzA4"></a>
                      <h2 class="prWPdf">
                        <a class="onkcGd eDfb1d YVvGBb Vx8Sxd" target="_self" href="/u/1/c/NDcxMDc1MzY1MzA4" data-focus-id="/u/1/c/NDcxMDc1MzY1MzA4">
                          <div class="YVvGBb z3vRcc-ZoZQ1">2022-1/A Fundamentos dos Sistemas de Informação</div>
                          <div class="YVvGBb">Sistemas de Informação</div>
                        </a>
                        <a class="onkcGd Nmpzvc Vx8Sxd" target="_self" aria-hidden="true" tabindex="-1" href="/u/1/c/NDcxMDc1MzY1MzA4"> </a>
                        <div jscontroller="gZb3ib" jsaction="FzgWvd:j697N" data-guided-help-id="courseCardActionMenuGH">
                          <div jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsshadow="" class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jsname="pzCKEc">
                            <div jsname="WjL7X" jsslot="">
                              <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc oxacD JRosVd" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc oxacD JRosVd" aria-label="Opções da turma">
                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                <span class="VfPpkd-kBDsod" aria-hidden="true">
                                  <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                  </svg>
                                </span>
                              </button>
                            </div>
                            <div jsname="U0exHf" jsslot="">
                              <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL VfPpkd-xl07Ob q6oraf P77izf" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)" data-is-hoisted="false" data-should-flip-corner-horizontally="false">
                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le" role="menu" tabindex="-1" aria-label="Menu &quot;Opções&quot; da turma" data-disable-idom="true">
                                  <span aria-hidden="true" class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="QEskHf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Mover</span></li>
                                  <li class=" VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud" role="menuitem" jsname="ytavkf" tabindex="-1" data-menu-item-skip-restore-focus="true"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c">Cancelar inscrição</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </h2>
                      <div class="QRiHXd">
                        <div class="Vx8Sxd YVvGBb jJIbcc">Camilo Cesar Perucci</div>
                        <div class="lJv9ke"></div>
                      </div>
                    </div>
                  </div>
                  <div class="TQYOZc">
                    <img class="PNzAWd" aria-hidden="true" src="images/camilo.jpg" data-iml="40606.5">
                    <div jscontroller="sxyRaf" jsaction="rcuQ6b:rcuQ6b;uwjiC:rcuQ6b;GjA5Zb:rcuQ6b">
                      <div class="lziZub sdDCme"><span class="Y5vSD">Nenhuma atividade para a próxima semana</span><span class="nforOe">Nenhuma atividade para a próxima semana!</span></div>
                    </div>
                  </div>
                  <div class="SZ0kZe">
                    <div data-guided-help-id="courseCardStudentProfileGH">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc" data-tooltip-enabled="true" data-tooltip-override-client-rect="zxtDBb471075365308" data-focus-id="PMg5Xd-471075365308">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7.55 0c.14-.15.33-.25.55-.25s.41.1.55.25c.12.13.2.31.2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.19.08-.37.2-.5zM19 5v10.79C16.52 14.37 13.23 14 12 14s-4.52.37-7 1.79V5h14zM5 19v-.77C6.74 16.66 10.32 16 12 16s5.26.66 7 2.23V19H5z"></path>
                              <path d="M12 13c1.94 0 3.5-1.56 3.5-3.5S13.94 6 12 6 8.5 7.56 8.5 9.5 10.06 13 12 13zm0-5c.83 0 1.5.67 1.5 1.5S12.83 11 12 11s-1.5-.67-1.5-1.5S11.17 8 12 8z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="/u/1/c/NDcxMDc1MzY1MzA4/sp/MjI4NjAxNTUzMjA1/all" aria-label="Abrir seu trabalho para &quot;2022-1/A Fundamentos dos Sistemas de Informação&quot;" data-tooltip-enabled="true" data-tooltip-id="zxtDBb471075365308"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="zxtDBb471075365308">Abrir seu trabalho para "2022-1/A Fundamentos dos Sistemas de Informação"</div>
                      </span>
                    </div>
                    <div jscontroller="N8q7Ze" jsaction="rcuQ6b:rcuQ6b;RwVyRc:rcuQ6b">
                      <span data-is-tooltip-wrapper="true">
                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc eaBpBc" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;JZCswc:fLiPzd" data-idom-class="yHy1rc eT1oJ mN1ivc eaBpBc" data-tooltip-enabled="true" data-tooltip-override-client-rect="pUkKFe471075365308">
                          <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                          <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                          <span class="VfPpkd-kBDsod" aria-hidden="true">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                              <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"></path>
                            </svg>
                          </span>
                          <a jsname="hSRGPd" class="WpHeLc VfPpkd-mRLv6" href="https://drive.google.com/drive/folders/1cigCBsKUEy74HRA_OHSv1QroJJGsbjJkpnFw231Tena4QaLMZRetOsLS74S7-rHsDQFVFyrL?authuser=1" target="_blank" aria-label="Abrir a pasta de &quot;2022-1/A Fundamentos dos Sistemas de Informação Sistemas de Informação&quot; no Google Drive" data-tooltip-enabled="true" data-tooltip-id="pUkKFe471075365308"></a>
                        </div>
                        <div class="EY8ABd-OWXEXe-TAWMXe" role="tooltip" aria-hidden="true" id="pUkKFe471075365308">Abrir a pasta de "2022-1/A Fundamentos dos Sistemas de Informação Sistemas de Informação" no Google Drive</div>
                      </span>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
          </div>
               <div jscontroller="cs6ocd" jsaction="rcuQ6b:npT2md;FttMgb:Qp7hp;qFdNBb:Pb2hxc;Cvbxce:N6n54b;mlnRJb:p5Uonb" data-wait-for="aXmj4" style="display: none;"></div>
               <div jscontroller="ISr1Vb" jsaction="qFdNBb:Pb2hxc;Cvbxce:ysXIce;lHU8dd:pcE7Z;rcuQ6b:npT2md;" jsmodel="WKE3nf" data-course-states="2"></div>
            </div>
         </div>
         <c-data id="c2"></c-data>
      </c-wiz>
      <script aria-hidden="true" nonce="">window.wiz_progress&&window.wiz_progress();window.wiz_tick&&window.wiz_tick('g1e71c');</script><script nonce="">(function(){'use strict';var c=window,d=[];c.aft_counter=d;var e=[],f=0;function _recordIsAboveFold(a){if(!c._isLazyImage(a)&&!a.hasAttribute("data-noaft")&&a.src){var b=(c._isVisible||function(){})(c.document,a);a.setAttribute("data-atf",b);b&&(-1===e.indexOf(a)&&-1===d.indexOf(a)&&d.push(a),a.hasAttribute("data-iml")&&(a=Number(a.getAttribute("data-iml")),a>f&&(f=a)))}}
         c.initAft=function(){f=0;e=Array.prototype.slice.call(document.getElementsByTagName("img")).filter(function(a){return!!a.getAttribute("data-iml")});[].forEach.call(document.getElementsByTagName("img"),function(a){try{_recordIsAboveFold(a)}catch(b){throw b.message=a.hasAttribute("data-iid")?b.message+"\nrecordIsAboveFold error for defer inlined image":b.message+("\nrecordIsAboveFold error for img element with <src: "+a.src+">"),b;}});if(0===d.length)c.onaft(f)};}).call(this);
         initAft()
      </script><script id="_ij" nonce="">window.IJ_values = [["109533321488450236085","109533321488450236085","0",false,null,null,true,false], false ,'0','https:\/\/classroom.google.com\/u\/0\/', null ,'boq_apps-edu-classroom-ui_20220921.04_p0','classroom.google.com', 0.0 ,'BR','woMPJHCiOR2kYywfbyvHlQ','IbWr7ze2A_aruXqQcQ8PBg','DEFAULT','\/u\/0', 2022.0 ,'https:\/\/classroom.google.com\/h', null ,'ltr',[], false , 0.0 ,'\/\/ssl.gstatic.com\/classroom\/favicon.png','https:\/\/accounts.google.com\/AccountChooser?continue\x3dhttps:\/\/classroom.google.com\/u\/0\/h\x26hl\x3dpt-BR','https:\/\/accounts.google.com\/ServiceLogin?service\x3dclassroom\x26hl\x3dpt-BR\x26authuser\x3d0\x26continue\x3dhttps:\/\/classroom.google.com\/u\/0\/h','https:\/\/accounts.google.com\/SignOutOptions?continue\x3dhttps:\/\/classroom.google.com\/u\/0\/h',["https://drive.google.com/picker",null,null,null,null,null,null,null,"AGX3xMaeQSMSAmRDhrjyf2aIm8W1:1664403510110",null,null,"109533321488450236085",[null,null,"CIfR7p_CuPoCFZkSNQcd1J4EVw",1664403510110352,[47987917,1714244,47941147,49365716,1787118,47987923,1763433,47881026,47879891,47790498,47856925,49617885,48410021,45814370,45771378,1729889,45775441,47948077,47809351,1757124,45826083,45686039,47987920,48467492,47807826,47835375,48467461,47977019,49611567,47987929,48462828,45754602,47987914,47928229,1772879,1773158,47987926,45758903,47844885,47860858,47857594,47906981,45758671,45826006,1706538,47809549,45774183,47941137,49365706,47879881,47790484,47856911,49617874,47948067,47809341,45826071,47807816,47835361,49611557,48462818,45754588,47844875,47857584,47906971,45825994,45774169],1],null,null,1000,"",null,null,[null,null,"p",1800000,null,null,null,10000,39000,120000,2,null,100,3100,null,"/punctual/prod/homeroom_prod"],null,null,null,null,null,null,[null,null,"https://gstatic.com/classroom/themes/img_backtoschool.jpg"],null,"r",null,null,null,"/u/0",0,null,null,null,null,null,null,null,10,null,null,5,null,null,null,null,null,null,null,null,null,null,null,true,null,null,null,null,10,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,true,null,null,null,null,null,null,null,null,null,null,20,null,null,null,null,null,null,null,null,1000,null,null,"{size}",20,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"https://calendar.google.com",null,null,null,[100,604800000,2,0.5],null,null,null,null,null,null,null,null,null,null,null,null,null,20,null,null,null,"AIzaSyAewGK8j9KoyT94rEj-weBpysMvzMQzGvk","https://www.googleapis.com/drive/v2internal",null,null,null,null,null,false,null,null,null,true,true,null,null,null,null,null,null,null,null,null,null,null,null,"https://docs.google.com","https://drive.google.com",null,100,null,null,null,null,true,null,"fho.edu.br","^video/|^application/(x-flash-video|vnd\\.google-apps\\.video|video)$|^application/vnd\\.google-apps\\.drive-sdk\\.",null,null,null,null,"https://lh3.googleusercontent.com/a/default-user\u003ds72-c-fbw\u003d1",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,15,null,null,false,null,null,null,null,null,null,false,null,null,null,null,null,null,null,null,null,null,null,null,null,300000,null,null,null,null,null,null,null,10,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"//ssl.gstatic.com/classroom/favicon.png",null,"228601553205","https://classroom.google.com/",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,true,null,null,null,4000,1.3,null,null,false,null,[3],null,true,null,null,null,null,null,null,null,null,null,true,null,null,null,null,true,false,null,null,null,null,null,true,null,null,null,null,null,[true,"96485","AIzaSyBqt2sx2fvfwP502G4u_Mu_kRmei_3A2OU",null,false],null,null,null,null,null,false,null,false,null,null,null,null,null,null,null,null,null,200,null,null,null,null,null,null,null,null,null,false,null,null,null,null,null,null,false,null,null,null,null,true,null,null,true,null,true,null,null,true,null,null,null,null,null,null,null,null,null,null,true,null,null,null,null,null,null,true,"BR",null,null,null,null,null,null,["https://workspace.google.com"],null,null,null,null,[false,true,null,true,null,true,false],null,null,null,null,null,false,null,null,1,null,null,null,false,null,null,null,null,false,null,null,null,null,null,false,null,false,null,1800000,null,true,false,null,null,null,[false,null,[null,null,null,"https://mathworkbook.google.com/create"]],730,true,false,false,false,false], null , false , false , false ,'pt','pt-BR',[],'pt_BR','https:\/\/goto2.corp.google.com\/mdtredirect?data_id_filter\x3dclassroom.google.com\x26system_name\x3dapps-edu-classroom-ui', null ,'AGX3xMaeQSMSAmRDhrjyf2aIm8W1:1664403510110',[["application/vnd.google-apps.document","application/vnd.google-apps.kix"],["application/vnd.google-apps.presentation","application/vnd.google-apps.punch"]], false , null ,'https:\/\/myaccount.google.com\/privacypolicy?hl\x3dpt-BR', false , false ,'https:\/\/myaccount.google.com\/termsofservice?hl\x3dpt-BR','prata@alunos.fho.edu.br', true ,'109533321488450236085',]; window.IJ_valuesCb && window.IJ_valuesCb();</script><script id="wiz_jd" nonce="">if (window['_wjdc']) {const wjd = {}; window['_wjdc'](wjd); delete window['_wjdc'];}</script><script aria-hidden="true" id="WIZ-footer" nonce="">window.wiz_progress&&window.wiz_progress(); window.stopScanForCss&&window.stopScanForCss(); ccTick('bl');</script><script nonce="">this.gbar_=this.gbar_||{};(function(_){var window=this;
         try{
         /*
         
          Copyright The Closure Library Authors.
          SPDX-License-Identifier: Apache-2.0
         */
         _.ke=function(a,b){return 0<=(0,_.tb)(a,b)};_.le=function(a){var b=typeof a;return"object"!=b?b:a?Array.isArray(a)?"array":b:"null"};_.me=function(a){var b=_.le(a);return"array"==b||"object"==b&&"number"==typeof a.length};_.ne=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var d=c.slice();d.push.apply(d,arguments);return a.apply(this,d)}};try{(new self.OffscreenCanvas(0,0)).getContext("2d")}catch(a){}_.oe=_.C||_.Fb;
         _.pe=function(a,b){this.width=a;this.height=b};_.k=_.pe.prototype;_.k.aspectRatio=function(){return this.width/this.height};_.k.hc=function(){return!(this.width*this.height)};_.k.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};_.k.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};_.k.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};
         var re,ue;_.qe=function(a,b){return(b||document).getElementsByTagName(String(a))};_.se=function(a,b){_.Pa(b,function(c,d){c&&"object"==typeof c&&c.Qb&&(c=c.wb());"style"==d?a.style.cssText=c:"class"==d?a.className=c:"for"==d?a.htmlFor=c:re.hasOwnProperty(d)?a.setAttribute(re[d],c):0==d.lastIndexOf("aria-",0)||0==d.lastIndexOf("data-",0)?a.setAttribute(d,c):a[d]=c})};
         re={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",nonce:"nonce",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"};_.ve=function(a,b){var c=b[1],d=_.te(a,String(b[0]));c&&("string"===typeof c?d.className=c:Array.isArray(c)?d.className=c.join(" "):_.se(d,c));2<b.length&&ue(a,d,b);return d};
         ue=function(a,b,c){function d(h){h&&b.appendChild("string"===typeof h?a.createTextNode(h):h)}for(var e=2;e<c.length;e++){var f=c[e];if(!_.me(f)||_.kb(f)&&0<f.nodeType)d(f);else{a:{if(f&&"number"==typeof f.length){if(_.kb(f)){var g="function"==typeof f.item||"string"==typeof f.item;break a}if("function"===typeof f){g="function"==typeof f.item;break a}}g=!1}_.ub(g?_.ma(f):f,d)}}};_.we=function(a){return _.te(document,a)};
         _.te=function(a,b){b=String(b);"application/xhtml+xml"===a.contentType&&(b=b.toLowerCase());return a.createElement(b)};_.xe=function(a){for(var b;b=a.firstChild;)a.removeChild(b)};_.ye=function(a){return _.kb(a)&&1==a.nodeType};_.ze=function(a){return 9==a.nodeType?a:a.ownerDocument||a.document};_.Ae=function(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null};
         
         }catch(e){_._DumpException(e)}
         try{
         /*
         
          Copyright The Closure Library Authors.
          SPDX-License-Identifier: Apache-2.0
         */
         _.Oe=function(a){_.G.call(this,a)};_.w(_.Oe,_.G);_.Pe=function(a){return _.yd(_.ud.j(),a)};
         
         }catch(e){_._DumpException(e)}
         try{
         _.Bj=function(a,b,c){return void 0!==_.nc(a,b,c,!1)};_.Cj=function(a){_.G.call(this,a)};_.w(_.Cj,_.G);
         
         }catch(e){_._DumpException(e)}
         try{
         _.Dj=function(a,b,c){a.rel=c;-1!=c.toLowerCase().indexOf("stylesheet")?(a.href=_.Nc(b),(b=_.ld(a.ownerDocument&&a.ownerDocument.defaultView))&&a.setAttribute("nonce",b)):a.href=b instanceof _.Lc?_.Nc(b):b instanceof _.Pc?_.Qc(b):_.Qc(_.Vc(b))};
         
         }catch(e){_._DumpException(e)}
         try{
         /*
         
          SPDX-License-Identifier: Apache-2.0
         */
         var Ej;try{new URL("s://g"),Ej=!0}catch(a){Ej=!1}_.Fj=Ej;
         
         }catch(e){_._DumpException(e)}
         try{
         _.Gj=function(a){var b,c,d=null==(c=(b=(a.ownerDocument&&a.ownerDocument.defaultView||window).document).querySelector)?void 0:c.call(b,"script[nonce]");(b=d?d.nonce||d.getAttribute("nonce")||"":"")&&a.setAttribute("nonce",b)};_.Hj=function(a){var b=_.Jc();a=b?b.createScriptURL(a):a;return new _.Lc(a,_.Kc)};
         /*
         
          SPDX-License-Identifier: Apache-2.0
         */
         
         }catch(e){_._DumpException(e)}
         try{
         var Ij=function(a,b,c){_.Wd.log(46,{att:a,max:b,url:c})},Kj=function(a,b,c){_.Wd.log(47,{att:a,max:b,url:c});a<b?Jj(a+1,b):_.J.log(Error("ka`"+a+"`"+b),{url:c})},Jj=function(a,b){if(Lj){var c=_.we("SCRIPT");c.async=!0;c.type="text/javascript";c.charset="UTF-8";c.src=_.Mc(Lj);_.Gj(c);c.onload=_.ne(Ij,a,b,c.src);c.onerror=_.ne(Kj,a,b,c.src);_.Wd.log(45,{att:a,max:b,url:c.src});_.qe("HEAD")[0].appendChild(c)}},Mj=function(a){_.G.call(this,a)};_.w(Mj,_.G);
         var Nj=_.F(_.Sd,Mj,17)||new Mj,Oj,Lj=(Oj=_.F(Nj,_.Cj,1))?_.Hj(_.D(Oj,4)||""):null,Pj,Qj=(Pj=_.F(Nj,_.Cj,2))?_.Hj(_.D(Pj,4)||""):null,Rj=function(){Jj(1,2);if(Qj){var a=_.we("LINK");a.setAttribute("type","text/css");_.Dj(a,Qj,"stylesheet");var b=_.ld();b&&a.setAttribute("nonce",b);_.qe("HEAD")[0].appendChild(a)}};
         (function(){var a=_.Td();if(_.E(a,18))Rj();else{var b=_.D(a,19)||0;window.addEventListener("load",function(){window.setTimeout(Rj,b)})}})();
         
         }catch(e){_._DumpException(e)}
         })(this.gbar_);
         // Google Inc.
      </script>
      <div ng-non-bindable=""></div>
      <div jscontroller="mdfgKd" jsaction="rcuQ6b:rcuQ6b;qako4e:rcuQ6b;aWRkAb:pwuS5c;qFdNBb:Pb2hxc;" jsmodel="Var0bb" aria-hidden="false" role="contentinfo" class="dkQQje" guidedhelpid="helpMenuGH" style="">
         <div role="button" class="U26fgb JRtysb WzwrXb I12f0b K2mXPb" jscontroller="iSvg6e" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;;keydown:I481le;" jsshadow="" jsname="LgbsSe" aria-label="Ajuda e comentários" aria-disabled="false" tabindex="0" data-tooltip="Ajuda e comentários" aria-haspopup="true" aria-expanded="false" data-dynamic="true" data-menu-corner="bottom-start" data-anchor-corner="top-start" data-tooltip-position="right" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="-12">
            <div class="NWlf3e MbhUzd" jsname="ksKsZd"></div>
            <span jsslot="" class="MhXXcc oJeWuf">
               <span class="Lw7GHd snByac">
                  <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class=" NMm5M hhikbc">
                     <path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"></path>
                  </svg>
               </span>
            </span>
         </div>
      </div>
      <div class="gb_Id">Google Apps</div>
      <div class="gb_be">
         <div class="gb_de">
            <div>Conta do Google</div>
            <div class="gb_rb">Gabriel Scabora Prata</div>
            <div>prata@alunos.fho.edu.br</div>
         </div>
      </div>
      <script nonce="">window['HqyC7b'] = window.performance && performance.timing.navigationStart + performance.now();</script>
      <div jsaction="rcuQ6b:rcuQ6b; click:okAHKe(GGAcbc),YdzvGf(ibnC6b); keydown:I481le;ZldWJd:FNFY6c;xrDiab:FNFY6c;lHU8dd:rcuQ6b;qako4e:rcuQ6b" class="vhK44c dgqqXe" jscontroller="pWaBX" jsowner="ow4">
         <div class="AxPfNe" jsname="GGAcbc"></div>
         <div class="ETRkCe" jsname="haAclf">
            <div class="OX4Vcb" role="menu">
               <a class="Xi8cpb cd29Sd qs41qe" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/h" aria-label="Turmas " role="menuitem" href="/u/0/h">
                  <div class="LlcfK bFjUmb-Ysl7Fe">
                     <div class="p1KYTc"></div>
                  </div>
                  <div class="JDxyrc xSP5ic">
                     <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path d="M12 3L4 9v12h16V9l-8-6zm6 16h-3v-6H9v6H6v-9l6-4.5 6 4.5v9z"></path>
                     </svg>
                  </div>
                  <div class="kXvNXe">
                     <div class="nhassd asQXV YVvGBb">Turmas</div>
                  </div>
               </a>
               <a class="Xi8cpb cd29Sd" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/calendar/this-week/course/all" aria-label="Agenda " role="menuitem" href="/u/0/calendar/this-week/course/all">
                  <div class="LlcfK">
                     <div class="p1KYTc"></div>
                  </div>
                  <div class="JDxyrc xSP5ic">
                     <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
                     </svg>
                  </div>
                  <div class="kXvNXe">
                     <div class="nhassd asQXV YVvGBb">Agenda</div>
                  </div>
               </a>
               <li role="separator" class="VfPpkd-rymPhb-clz4Ic e6pQl yCa5be"></li>
               <div role="section" aria-label="Inscrito">
                  <div class="pkktJb iLjzDc YVvGBb">Inscrito</div>
                  <a class="Xi8cpb cd29Sd" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/a/not-turned-in/all" aria-label="Pendentes " role="menuitem" href="/u/0/a/not-turned-in/all">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="JDxyrc xSP5ic">
                        <svg enable-background="new 0 0 24 24" focusable="false" height="24" viewBox="0 0 24 24" width="24" class=" NMm5M">
                           <g>
                              <rect fill="none" height="24" width="24"></rect>
                           </g>
                           <g>
                              <g>
                                 <path d="M20,3H4C2.9,3,2,3.9,2,5v14c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V5 C22,3.9,21.1,3,20,3z M20,19H4V5h16V19z" fill-rule="evenodd"></path>
                                 <polygon fill-rule="evenodd" points="19.41,10.42 17.99,9 14.82,12.17 13.41,10.75 12,12.16 14.82,15"></polygon>
                                 <rect fill-rule="evenodd" height="2" width="5" x="5" y="7"></rect>
                                 <rect fill-rule="evenodd" height="2" width="5" x="5" y="11"></rect>
                                 <rect fill-rule="evenodd" height="2" width="5" x="5" y="15"></rect>
                              </g>
                           </g>
                        </svg>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">Pendentes</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NTM4MTAyMzQ2NTY5" aria-label="FHP II Sistemas de Informação " role="menuitem" data-id="538102346569" href="/u/0/c/NTM4MTAyMzQ2NTY5">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  ee1HBc">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">F</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">FHP II Sistemas de Informação</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NDg4NjYyNzcwNzY0" aria-label="Cálculo Aplicado " role="menuitem" data-id="488662770764" href="/u/0/c/NDg4NjYyNzcwNzY0">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  ee1HBc">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">C</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">Cálculo Aplicado</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX vG1fDb" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NDg4NzQ3NjE4NDcz" aria-label="2022/2 - Práticas de Programação II SIF092 - Práticas de Programação II" role="menuitem" data-id="488747618473" href="/u/0/c/NDg4NzQ3NjE4NDcz">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  S3aLQd">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">2</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">2022/2 - Práticas de Programação II</div>
                        <div class="TajIHf dDKhVc YVvGBb">SIF092 - Práticas de Programação II</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX vG1fDb" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NTM4MTA3NzU3Mzc1" aria-label="Arquitetura e Organização de Computadores 2S/2022" role="menuitem" data-id="538107757375" href="/u/0/c/NTM4MTA3NzU3Mzc1">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  UvHKof">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">A</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">Arquitetura e Organização de Computadores</div>
                        <div class="TajIHf dDKhVc YVvGBb">2S/2022</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX vG1fDb" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NTI2MjQ0OTU4ODUy" aria-label="2022-2A - Linguagem de Programação I Sistemas de Informação - 2A 2022" role="menuitem" data-id="526244958852" href="/u/0/c/NTI2MjQ0OTU4ODUy">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  ee1HBc">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">2</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">2022-2A - Linguagem de Programação I</div>
                        <div class="TajIHf dDKhVc YVvGBb">Sistemas de Informação - 2A 2022</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX vG1fDb" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NTI2MzA5NzcyNDg0" aria-label="Oficina de Leitura e Escrita Sistemas das Informação - 2º período" role="menuitem" data-id="526309772484" href="/u/0/c/NTI2MzA5NzcyNDg0">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  ee1HBc">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">O</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">Oficina de Leitura e Escrita</div>
                        <div class="TajIHf dDKhVc YVvGBb">Sistemas das Informação - 2º período</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX vG1fDb" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NDc2MDMyOTgyNjgx" aria-label="2022-1/A Formação Humana e Profissional Prof. Camilo César Perucci e Profa. Débora de Sousa Postigo" role="menuitem" data-id="476032982681" href="/u/0/c/NDc2MDMyOTgyNjgx">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  ee1HBc">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">2</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">2022-1/A Formação Humana e Profissional</div>
                        <div class="TajIHf dDKhVc YVvGBb">Prof. Camilo César Perucci e Profa. Débora de Sousa Postigo</div>
                     </div>
                  </a>
                  <a class="Xi8cpb TMOcX vG1fDb" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/c/NDcxMDc1MzY1MzA4" aria-label="2022-1/A Fundamentos dos Sistemas de Informação Sistemas de Informação" role="menuitem" data-id="471075365308" href="/u/0/c/NDcxMDc1MzY1MzA4">
                     <div class="LlcfK">
                        <div class="p1KYTc"></div>
                     </div>
                     <div class="yXVLvd">
                        <div class="CNpREd  UvHKof">
                           <div aria-hidden="true" class="vUBwW TGnLfc A6dC2c UISY8d-Tvm9db bFjUmb-Tvm9db">2</div>
                        </div>
                     </div>
                     <div class="kXvNXe">
                        <div class="nhassd asQXV YVvGBb">2022-1/A Fundamentos dos Sistemas de Informação</div>
                        <div class="TajIHf dDKhVc YVvGBb">Sistemas de Informação</div>
                     </div>
                  </a>
               </div>
               <li role="separator" class="VfPpkd-rymPhb-clz4Ic e6pQl yCa5be"></li>
               <a class="Xi8cpb cd29Sd" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/h/archived" aria-label="Turmas arquivadas " role="menuitem" href="/u/0/h/archived">
                  <div class="LlcfK">
                     <div class="p1KYTc"></div>
                  </div>
                  <div class="JDxyrc xSP5ic">
                     <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.83 1H5.42l.82-1zM5 19V8h14v11H5zm11-5.5l-4 4-4-4 1.41-1.41L11 13.67V10h2v3.67l1.59-1.59L16 13.5z"></path>
                     </svg>
                  </div>
                  <div class="kXvNXe">
                     <div class="nhassd asQXV YVvGBb">Turmas arquivadas</div>
                  </div>
               </a>
               <a class="Xi8cpb cd29Sd" jsname="ibnC6b" tabindex="-1" data-focus-id="/u/0/s" aria-label="Configurações " role="menuitem" href="/u/0/s">
                  <div class="LlcfK">
                     <div class="p1KYTc"></div>
                  </div>
                  <div class="JDxyrc xSP5ic">
                     <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z"></path>
                        <circle cx="12" cy="12" r="3.5"></circle>
                     </svg>
                  </div>
                  <div class="kXvNXe">
                     <div class="nhassd asQXV YVvGBb">Configurações</div>
                  </div>
               </a>
            </div>
         </div>
      </div>
      <div id="goog-lr-47" aria-live="polite" aria-atomic="true" style="position: absolute; top: -1000px; height: 1px; overflow: hidden;"></div>
      <div jscontroller="HmEm0" jsaction="BfpAHf:TCTP9d;Nwyqre:DsZxZc; transitionend:e204de;O0KOhf:.CLIENT;SemCgb:.CLIENT" id="pUkKFe488662770764-visible-label" class="VfPpkd-suEOdc EY8ABd" aria-hidden="true">
         <div class="VfPpkd-z59Tgd VfPpkd-z59Tgd-OiiCO"><span class="VfPpkd-A3KfFd">Abrir a pasta de "Cálculo Aplicado" no Google Drive</span></div>
      </div>
   </body>
</html>