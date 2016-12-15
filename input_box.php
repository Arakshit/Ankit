<input  type="text" name="shekhar" id="ankit" value="shibu" class="demo_test"><br>
<input type="button" name="submit" id="champ" value="Show">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script>
	$("#champ").click(function(){
		//var name= $('.demo_test').attr('id')+' '+$('.demo_test').attr('name')+' '+$('.demo_test').attr('value')+' '+$('.demo_test').attr('class');
		var rrr =$('.demo_test').attr();
		str = JSON.stringify(rrr);
		
		alert(str);
	});
</script>