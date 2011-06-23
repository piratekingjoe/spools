<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
}
#GameSectionContainer {
	position:absolute;
	width:593px;
	height:100%;
	top:0px;
	left:0px;
	z-index:1;
	border:0px;
	color:white;
	font-size:16px;
	font-family: "Myriad Pro", Helvetica, Arial, sans-serif;
}
#GameSection {
	position:relative;
	width:593px;
	height:100%;
	z-index:1;
	border:0px;
}
#GameSectionBG {
	position:absolute;
	top:35px;
	width:593px;
	height:290px;
	z-index:0;
	border:0px;
	background-image:url(infowindow_bg.png);
	background-repeat:no-repeat;
}
#GameRowHeader {
	position:relative;
	width:593px;
	height:36px;
	z-index:2;
	border:0px;
	color:white;
	background-image:url(header_gr_bg.png);
	position:fixed;
	color:#DDD;
	font-size:16px;
	font-family:Arial, Helvetica, sans-serif;
	text-shadow: rgba(0,0,0,1) 1px 1px 3px;
	font-weight:bold;
}
#GRNFL {
	position:relative;
	width:593px;
	height:72px;
	z-index:1;
	border:0px;
	background-image:url(nfl_gr_bg.png);
	color:white;
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
	text-shadow: rgba(0,0,0,0.5) 1px 1px 3px;
	font-weight:bold;
}
#GRSportNFL {
	position:relative;
	width:156px;
	height:72px;
	z-index:1;
	border:0px;
	float:left;
	background-image:url(nfl_gr_image.png);
	background-repeat:no-repeat;
	background-position:top;
}
#GRMLB {
	position:relative;
	width:593px;
	height:72px;
	z-index:1;
	border:0px;
	background-image:url(mlb_gr_bg.png);
	color:white;
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
	text-shadow: rgba(0,0,0,0.5) 1px 1px 3px;
	font-weight:bold;
}
#GRSportMLB {
	position:relative;
	width:156px;
	height:72px;
	z-index:1;
	border:0px;
	float:left;
	background-image:url(mlb_gr_image.png);
	background-repeat:no-repeat;
	background-position:top;
}
#GRGame {
	width:156px;
	height:60px;
	position:absolute;
	top:6px;
	z-index:1;
	border:0px;
	text-align:center;
	color:white;
	font-size:16px;
	font-family:Arial, Helvetica, sans-serif;
	text-shadow: rgba(0,0,0,1) 1px 1px 3px;
	font-weight:bold;
}
#GRBgChange {
	width:436px;
	height:72px;
	position:absolute;
	left:157px;
	z-index:0;
	border:0px;
	background-image:url(gr_data_bg.png);
	
}
#GRDateSection {
	width:82px;
	height:72px;
	position:absolute;
	left:157px;
	z-index:1;
	border:0px;
	text-align:center;
	background-image:url(gr_seperator.png);
	background-repeat:no-repeat;
}
#GRFinalSection {
	width:112px;
	height:72px;
	position:absolute;
	left:240px;
	z-index:1;
	border:0px;
	text-align:center;
	background-image:url(gr_seperator.png);
	background-repeat:no-repeat;
}
#GRMyPicksSection {
	width:136px;
	height:72px;
	position:absolute;
	left:353px;
	z-index:1;
	border:0px;
	text-align:center;
	background-image:url(gr_seperator.png);
	background-repeat:no-repeat;
}
#GRResultsSection {
	width:103px;
	height:72px;
	position:absolute;
	left:490px;
	z-index:1;
	border:0px;
	text-align:center;
	background-image:url(gr_seperator.png);
	background-repeat:no-repeat;
}
#GRTopRow {
	position:absolute;
	width:100%;
	height:20px;
	z-index:1;
	top: 10px;
	border:0px;
	text-align:center;
}
#GRBottomRow {
	position:absolute;
	width:100%;
	height:20px;
	z-index:1;
	top: 46px;
	border:0px;
	text-align:center;
}
</style>
</head>
<body leftmargin="0px" topmargin="0px" marginwidth="0px" marginheight="0px">
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.tmpl.js" type="text/javascript"></script>
<script type="text/javascript"></script>
<div id="GameSectionContainer">
<div id="GameSectionBG">
</div>
<div id="GameSection">
</div>
</div>
<script id="gameFieldGenerator" type="text/x-jquery-tmpl">
<div id="${sportbg}">
<div id="${sportimg}">
<div id="GRGame">
${teamh}<br>vs<br>${teama}
</div>
</div>
<div id="GRBgChange"></div>
<div id="GRDateSection">
<div id="GRTopRow">${month}/${date}/${year}</div>
<div id="GRBottomRow">${time}</div>
</div>
<div id="GRFinalSection">
<div id="GRTopRow">${scoreh} - ${scorea}</div>
<div id="GRBottomRow">${victor}</div>
</div>
<div id="GRMyPicksSection">
<div id="GRTopRow">SPools: ${spools}</div>
<div id="GRBottomRow">Pick: ${mypick}</div>
</div>
<div id="GRResultsSection">
<div id="GRTopRow">Tokens: ${winnings}</div>
<div id="GRBottomRow">EXP: +${experience}</div>
</div>
</div>
</script>
<script type="text/javascript">
var GameRows = [
        { sportbg: "GRMLB", sportimg: "GRSportMLB", teamh: "Cubs", teama: "Cardinals", scoreh: "2", scorea: "3", month:"1", date:"25", year:"11", time:"7:15 pm", mypick:"Cardinals", spools:"3", winnings:"+25", experience:"50", victor:"Cardinals" },
		{ sportbg: "GRNFL", sportimg: "GRSportNFL", teamh: "Packers", teama: "Vikings", scoreh: "42", scorea: "35", month:"1", date:"25", year:"11", time:"7:15pm", mypick:"Packers", spools:"3", winnings:"+25", experience:"50", victor:"Packers" },
		{ sportbg: "GRMLB", sportimg: "GRSportMLB", teamh: "Cubs", teama: "Cardinals", scoreh: "42", scorea: "35", month:"1", date:"25", year:"11", time:"7:15pm", mypick:"Cardinals", spools:"3", winnings:"+25", experience:"50", victor:"Cardinals" },
		{ sportbg: "GRMLB", sportimg: "GRSportMLB", teamh: "Cubs", teama: "Cardinals", scoreh: "42", scorea: "35", month:"1", date:"25", year:"11", time:"7:15pm", mypick:"Cardinals", spools:"3", winnings:"+25", experience:"50", victor:"Cardinals" },
		{ sportbg: "GRMLB", sportimg: "GRSportMLB", teamh: "Cubs", teama: "Cardinals", scoreh: "42", scorea: "35", month:"1", date:"25", year:"11", time:"7:15pm", mypick:"Cardinals", spools:"3", winnings:"+25", experience:"50", victor:"Cardinals" },
		{ sportbg: "GRMLB", sportimg: "GRSportMLB", teamh: "Cubs", teama: "Cardinals", scoreh: "42", scorea: "35", month:"1", date:"25", year:"11", time:"7:15pm", mypick:"Cardinals", spools:"3", winnings:"+25", experience:"50", victor:"Cardinals" }
        
    ];
var sports = [
		{ sport: "NFL", teams: [{ 1:"Patriots", 2:"Broncos" }]},
		{ sport: "MLB", teams: [ ]}
	];
	
$( "#gameFieldGenerator" ).tmpl( GameRows )
        .appendTo( "#GameSection" );
</script> 
</body>
</html>