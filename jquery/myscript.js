function big_para(){
    var scrn_res = screen.width;
    if (scrn_res<480) {
        document.getElementById('big-para').style.position = "relative";
    } else {
        document.getElementById('big-para').style.position = "absolute";
    }
    //alert("screen resolution is "+screen.width);
    }
