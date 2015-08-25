<?php

class Chat {
	
	private $strPage = "";
	private $about = "do";
	
	function execute(){
                
            clsAddScript::addJs('chat');
					
            $this->strPage = <<<HTML

<h3 class="h3">Chat application using PHP Websockets</h3>
<div class="row">			
    <div class="col-sm-8">
                    
        <div class="chat_wrapper">
            <div class="message_box" id="message_box"></div>
            <div class="panel">
                <input type="text" name="name" id="name" placeholder="Your Name" maxlength="10" style="width:20%"  />
                <input type="text" name="message" id="message" placeholder="Message" maxlength="80" style="width:60%" />
                <button class="btn btn-success" id="send-btn">Send</button>
            </div>
        </div>
   
   </div>

    <div class="col-sm-4"></div>
</div><!-- end row -->
HTML;
		 
	}
	
        
	function renderBody() { 
		return $this->strPage;
	}
        
}
?>
