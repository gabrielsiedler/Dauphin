$(window).load(function(){
    var mapUrl = "https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pelotas+-+Rio+Grande+do+Sul&amp;aq=0&amp;oq=pelotas&amp;sll=-31.764452,-52.342712&amp;sspn=0.060204,0.111494&amp;t=h&amp;g=centro&amp;ie=UTF8&amp;hq=&amp;hnear=Pelotas+-+Rio+Grande+do+Sul&amp;ll=-31.769697,-52.342901&amp;spn=0.02554,0.036478&amp;z=14&amp;output=embed",
    onLoadWebSite = false,
    googleMapHolder = $(".google_map"),
    backgroundColor = googleMapHolder.css("backgroundColor"),
    mapWidth=googleMapHolder.css("width"),
    mapHeight=googleMapHolder.css("height"),
    borderTopLeftRadius = googleMapHolder.css("borderTopLeftRadius"),
    borderTopRightRadius = googleMapHolder.css("borderTopLeftRadius"),
    borderBottomLeftRadius = googleMapHolder.css("borderTopLeftRadius"),
    borderBottomRightRadius = googleMapHolder.css("borderTopLeftRadius"),
    addMap=false,
    idPage,
    intervalCall;
	    
    if(backgroundColor == "rgba(0, 0, 0, 0)"){
        backgroundColor= "#ffffff";
    }
    verificationPageHandler();
    if(onLoadWebSite == false){
        $(window).bind("hashchange", verificationPageHandler);
    }
    function verificationPageHandler(){
        if(onLoadWebSite == false){
            idPage = "#"+window.location.hash.substring(3, window.location.hash.length);
            if(idPage != "#"){
                if(googleMapHolder.parents(idPage).length != 0){
                    addGoogleMapHandler();
	                
                }	
            }
        }else{
            addGoogleMapHandler();
        }
    }
    function addGoogleMapHandler(){
        if(!addMap){
            addMap = true;
            $(window).unbind("hashchange", verificationPageHandler);
            googleMapHolder.css({
                "overflow":"hidden"
            });
            googleMapHolder.append("<div id='loaderPart' style='position:absolute; z-index:1; width:"+mapWidth+"; height:"+mapHeight+"; background:"+backgroundColor+" url(images/googleMapLoader.gif) no-repeat 50%; border-top-left-radius:"+borderTopLeftRadius+"; border-top-right-radius:"+borderTopRightRadius+"; border-bottom-right-radius:"+borderBottomLeftRadius+"; border-bottom-left-radius:"+borderBottomRightRadius+";'></div>");
            intervalCall = setInterval(addIframe, 200)
        }
        function addIframe(){
            if($(idPage).css("display")!="none"){
        		
                clearInterval(intervalCall);
                googleMapHolder.append("<iframe width='"+mapWidth+"' height='"+mapHeight+"' frameborder='0' src='"+mapUrl+"' style='position:absolute; z-index:0; border-top-left-radius:"+borderTopLeftRadius+"; border-top-right-radius:"+borderTopRightRadius+"; border-bottom-right-radius:"+borderBottomLeftRadius+"; border-bottom-left-radius:"+borderBottomRightRadius+";'></iframe>");
                googleMapHolder.find("iframe").load(googleMapLoadCompleteHandler);
            }
        }
    }
    function googleMapLoadCompleteHandler(){
        var loaderPart = googleMapHolder.find("#loaderPart");
        loaderPart.delay(100).fadeOut(500, function(){
            loaderPart.css({
                "display":"none"
            });
        });
    }
})