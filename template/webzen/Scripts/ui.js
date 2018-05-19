// GNB 
function newGnbMenu() {
    $("#GlobalNav > ul > li").click(function () {

        for (var i = 1; i <= $("#GlobalNav > ul > li").length; i++) {
            if ($(this).find("div:first").attr("id") == ("pulldownNavWrap0" + i)) {
                if ($("#pulldownNavWrap0" + i).css("display") == "none") {
                    $("#pulldownNavWrap0" + i).show();
                } else {
                    $("#pulldownNavWrap0" + i).hide();
                }
            }
            else {
                $("#pulldownNavWrap0" + i).hide();
            }
        }
    });
}

function newJoinMenu() {
    $("#GlobalJoin > ul > li").click(function () {
        if ($("#myPulldownNavWrap01").css("display") == "none") {
            $("#myPulldownNavWrap01").show();
        } else {
            $("#myPulldownNavWrap01").hide();
        }

    });
}
// GNB flag none, block
function flagList_more() {
    $("#flaglistMore").click(function () {
        $("#flaglistMore").hide();
        $("#flaglistLess").show();
        $("#flaglist").show();
    });
}
function flagList_less() {
    $("#flaglistLess").click(function () {
        $("#flaglist").hide();
        $("#flaglistLess").hide();
        $("#flaglistMore").show();
    });
}
// basic rollover - jquery-1.6.1.min.js 
$(function () {
    $('a.BasicOver img').hover(
		function () {
		    this.src = this.src.replace(/_off\.gif$/, '_over.gif');
		},
			function () {
			    this.src = this.src.replace(/_over\.gif$/, '_off.gif');
			}
	);
});
// basic contents none, block
function hide_con(id) {
    var id_obj = document.getElementById(id);
    id_obj.style.display = 'none';
}
function show_con(id) {
    var id_obj = document.getElementById(id);
    id_obj.style.display = 'block';
}
// basic list none, block
function list_more() {
    $("#importNewsMore").click(function () {
        $("#importNewsMore").hide();
        $("#importNews").show();
    });
}
function list_less() {
    $("#importNewsLess").click(function () {
        $("#importNews").hide();
        $("#importNewsMore").show();
    });
}

// press list game none, block
function gNumList_more(num) {
    $(".gNumListMore" + num).click(function () {
        $(".gNumListMore" + num).hide();
        $(".gNumList" + num).show();
    });
}
function gNumList_less(num) {
    $(".gNumListLess" + num).click(function () {
        $(".gNumList" + num).hide();
        $(".gNumListMore" + num).show();
    });
}

// calrendar open
function fnCalShow() {
    var objLayer = document.getElementById("CalWrap");
    objLayer.style.display = "block";
}

// layer popup
var fm_all = null;
var div = null;
var imgdiv = null;
var fm = null;

function coverScreen(strDivSrc) {
    var h = parseInt(document.documentElement.scrollHeight) + "px";
    var w = parseInt(document.body.offsetWidth) + "px";

    div = document.createElement("iframe");
    div.className = "dvclass";
    div.style.top = "0px";
    div.style.left = "0px";
    div.style.width = w;
    div.style.height = h;
    div.style.position = "absolute";
    div.style.zIndex = 9990;
    div.style.display = "none";
    div.frameBorder = "0";
    div.style.margin = "0";
    div.src = strDivSrc;

    document.body.appendChild(div);

    document.body.onresize = document.body.onresizestart = document.body.onresizeend = document.body.onscroll = function () {
        div.style.top = "0px";
        div.style.left = "0px";
        div.style.width = parseInt(document.body.offsetWidth) + 'px';
        div.style.height = parseInt(document.documentElement.scrollHeight) + "px";
        imgdiv.style.left = (parseInt(document.documentElement.clientWidth) / 2) - (parseInt(imgdiv.style.width) / 2) + 'px';
        //imgdiv.style.top = ( parseInt( document.body.scrollHeight ) / 2 ) - ( parseInt( imgdiv.style.height ) / 2 ) + 'px';
        //imgdiv.style.top = ( parseInt( document.documentElement.clientHeight ) / 2 ) - ( parseInt( imgdiv.style.height ) / 2 ) + 'px';
    }

    imgdiv = document.createElement("div");
    imgdiv.style.width = 400;
    imgdiv.style.height = 400;
    imgdiv.style.left = (parseInt(div.style.width) / 2) - (parseInt(imgdiv.style.width) / 2) + 'px';
    //imgdiv.style.top = ( parseInt( document.body.scrollHeight ) / 2 ) - ( parseInt( imgdiv.style.height ) / 2 ) + 'px';
    imgdiv.style.top = (parseInt(document.documentElement.clientHeight) / 2) - (parseInt(imgdiv.style.height) / 2) + 'px';
    imgdiv.style.position = "absolute";
    imgdiv.style.zIndex = 9999;
    imgdiv.style.display = "none";
    imgdiv.style.backgroundColor = "transparent";
    imgdiv.style.color = "#FFFFFF";
    document.body.appendChild(imgdiv);

    fm = document.createElement("iframe");
    fm.id = "iframe_pop";
    fm.style.width = "100%";
    fm.style.height = "100%";
    fm.allowTransparency = "true";
    fm.style.backgroundColor = "transparent";
    fm.frameBorder = "0";
    fm.style.margin = "0";
    imgdiv.appendChild(fm);

}

function showImg(_w, _h, _src) {
    if (div == null) {
        coverScreen(gp.Http.Member+"/Scripts/back.html");
    }
    imgdiv.style.width = _w + 'px';
    imgdiv.style.height = _h + 'px';
    //imgdiv.style.left = ( parseInt( document.documentElement.clientWidth ) / 2 ) - ( parseInt( imgdiv.style.width ) / 2 ) + 'px';
    imgdiv.style.left = (parseInt(document.documentElement.clientWidth) / 2) - (parseInt(imgdiv.style.width) / 2) + 'px';
    imgdiv.style.top = ((parseInt(document.documentElement.clientHeight) / 2) + (parseInt(document.body.scrollTop + document.documentElement.scrollTop))) - (parseInt(_h) / 2) + 'px';
    //imgdiv.style.top = ( parseInt( div.style.height ) / 2 ) - ( parseInt( imgdiv.style.height ) / 2 ) + ( parseInt( document.documentElement.scrollTop ) / 2 )  + 'px';
    fm.src = _src;
    div.style.display = "block";
    imgdiv.style.display = "block";
    //	div.document.body.onclick = function(){
    //		hideImg();
    //	}

}

function hideImg() {
    div.style.display = "none";
    imgdiv.style.display = "none";
    fm.src = "";
}

// w coin buy coin
function toggleWcoinBuy(target) {
    var sTarget = target.href.split("#");
    var aTarget = document.getElementById(sTarget[sTarget.length - 1]);
    if (aTarget.style.display == "none") aTarget.style.display = "block";
    else aTarget.style.display = "none";
}

//document.domain = gp.strTopDomain;