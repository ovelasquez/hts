<!-- BY EZEKKKIEL -->
<!DOCTYPE html>
<html>
 <head>
  <title><?php echo $_COOKIE['titulo'] ?></title>
  <link rel="icon" type="image/x-icon" href="../public_html/favicon.ico" />
  <script>
	 function frame(){
	 	var n = Math.floor((Math.random()*1000)-1);
		var Obj = {
			folder: "../sistema",
			id:	"frame",
			element: "iframe",
			width: "100%",
			height: "100%",
			scroll: "hidden",
			unit: "px",
			margin: "0",
			padding: "0",
			frameborder: "0",
			separator: "/"
		}		
		var NameAttribute = {
			location: "src",
			identification: "id",
			border: "frameborder"			
		}
		var iframe=document.createElement(Obj.element);
		iframe.setAttribute(NameAttribute.location,Obj.folder+Obj.separator+n);
		iframe.setAttribute(NameAttribute.identification,Obj.id);
		iframe.setAttribute(NameAttribute.border,Obj.frameborder);
		document.body.appendChild(iframe);
		document.body.style.padding=Obj.padding;
		document.body.style.margin=Obj.margin;
		document.body.style.height=screen.height+Obj.unit;		
		var element=document.getElementById(Obj.id);
		document.body.style.overflowY=Obj.scroll;
		element.width=Obj.width;
		element.height=Obj.height;
	}
  </script>
 </head>
 <body onload="frame()">
 </body>
</html>