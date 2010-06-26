<?PHP //$Id: block_gramota.php,v 1.10.2.3 2005/11/17 02:30:17 mjollnir_ Exp $

class block_gramota extends block_base {
    function init() {
        $this->title = 'Словари на Грамота.Ру';
        $this->version = 2006060200;
    }

    function get_content () {
        if ($this->content !== NULL) {
            return $this->content;
        }

		$this->content = new stdClass;
		$this->content->text = '<center>
		
		<script language="JavaScript">
			var win=[\'%E0\',\'%E1\',\'%E2\',\'%E3\',\'%E4\',\'%E5\',\'%B8\',\'%E6\',\'%E7\',\'%E8\',\'%E9\',\'%EA\',\'%EB\',\'%EC\',\'%ED\',\'%EE\',\'%EF\',\'%F0\',\'%F1\',\'%F2\',\'%F3\',\'%F4\',\'%F5\',\'%F6\',\'%F7\',\'%F8\',\'%F9\',\'%FA\',\'%FB\',\'%FC\',\'%FD\',\'%FE\',\'%FF\',\'%C0\',\'%C1\',\'%C2\',\'%C3\',\'%C4\',\'%C5\',\'%A8\',\'%C6\',\'%C7\',\'%C8\',\'%C9\',\'%CA\',\'%CB\',\'%CC\',\'%CD\',\'%CE\',\'%CF\',\'%D0\',\'%D1\',\'%D2\',\'%D3\',\'%D4\',\'%D5\',\'%D6\',\'%D7\',\'%D8\',\'%D9\',\'%DA\',\'%DB\',\'%DC\',\'%DD\',\'%DE\',\'%DF\']
			var utf8=\'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ\'.split(\'\') 

			function dcTmp(X){
				for(var i=0;i<utf8.length;i++){
					if(X==utf8[i])return win[i]
					}
				return X
			}

			function OpenSearchWord() {
				var F=document.getElementsByName("rt2003")[0]
				var tmp=F.word.value
				var wordold=F.word.value
			
				if(\'\'!=tmp){
					tmp=tmp.split(\'\')
					for(var i=0;i<tmp.length;i++){
						tmp[i]=dcTmp(tmp[i])
					}
					tmp=tmp.join(\'\')
			
					F.word.value=tmp
				}

				open("", "d2003","width=700,height=500,status=yes,toolbar=no,menubar=no,scrollbars=yes");
			    F.submit(); 
				F.word.value=wordold
		  }
		</script>
	  <form name="rt2003" action="http://www.gramota.ru/slovari/dic/" method=get target="d2003">
      <input class="Edits" name="word" size="23">
      <input id="searchw" type="button" value="Проверить слово" onClick="javascript:OpenSearchWord();" class="Buttons" onmouseover="ButtonOnMouseOver(searchw)" onmouseout="ButtonOnMouseOut(searchw)">
      <input name="all" type="hidden" value="x"></form>
	  </center>';
		$this->content->footer = '';
	
		return $this->content;
	}
}

?>
