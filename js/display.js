window.onscroll = function() {scroll(),bar()};
            function scroll(){
                if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300){
                    document.getElementById('nav').style.top="0";
                    document.getElementById('slideshow').style.opacity="1";
                    document.getElementById('slideshow').style.animation="big 2s 1";
                    document.getElementById('scrolling').style.color="white";
                    document.getElementById('formbutton').style.opacity="1";
                    document.getElementById('nav').style.visibility="visible";
                    document.getElementById('display').style.visibility="visible";
                    document.getElementById('display1').style.visibility="visible";
                    document.getElementById('display2').style.visibility="visible";
                    document.getElementById('display3').style.visibility="visible";
                }
                else{
                    document.getElementById('nav').style.top="-100px";
                    document.getElementById('slideshow').style.opacity="0";
                    document.getElementById('slideshow').style.animation="big 2s 1";
                    document.getElementById('scrolling').style.color="black";
                    document.getElementById('formbutton').style.opacity="0";
                    document.getElementById('nav').style.visibility="hidden";
                    document.getElementById('display').style.visibility="hidden";
                    document.getElementById('display1').style.visibility="hidden";
                    document.getElementById('display2').style.visibility="hidden";
                    document.getElementById('display3').style.visibility="hidden";
                }
            }
            function bar(){
                if(document.body.scrollTop > 950 || document.documentElement.scrollTop > 950){
                    document.getElementById('villa').style.width="80%";
                    document.getElementById('hospitality').style.width="95%";
                    document.getElementById('apartment').style.width="90%";
                }
            }