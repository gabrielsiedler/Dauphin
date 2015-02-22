jQuery(document).ready(function() { 
    //opacity IE ----------------------------------------------------------------------------------------------------          
    $('.bordaMenu').css({
        opacity:0.64
    });
}); 
$(window).load(function(){  
    if($.browser.msie && $.browser.version<9){
        $('#menu > li > a').css({
            'padding-top':'8px'
        });
        ie = true;
    }
    //ieCheck ----------------------------------------------------------------------------------------------------     
    var ie = false;
    var aniButtonDuration = 350;
    
    if($.browser.msie && $.browser.version<9)
    {
        aniButtonDuration = 0;
        ie = true;
    }  
    //fundo ----------------------------------------------------------------------------------------------------   
    $('#fundo')
    .fundo({
        align:'leftTop'
    })

    $('.menu > a').find('b').stop().animate({
        opacity:0
    }, 0,'easeOutCubic')
     
    $('.menu > a').hover(function()
    {
        $(this).find('b').stop().animate({
            opacity:1
        }, aniButtonDuration,'easeOutCubic')					   
    }, function(){
        $(this).find('b').stop().animate({
            opacity:0
        }, aniButtonDuration,'easeOutCubic')						   
    })   
    
    //Button read more-----------------------------------------------------------------------------------
    $('.botoes').sprites({
        method:'gStretch',
        hover:'navs'
    })
    //Content switch----------------------------------------------------------------------------------------------
    var conteudo=$('#conteudo'),
    nav=$('.menu');
    var firstSpl=true;
    conteudo.tabs({
        actFu:function(_)
        {
            if(_.curr){
                if(_.n > 0){
                    _.curr.css({
                        left:'1500px'
                    }).stop(true).delay(400).animate({
                        left:"0px"
                    },800,'easeOutExpo');
                }
            }
            if(_.prev){
                if(_.n > 0 && firstSpl == false){
                    _.prev
                    .stop(true).animate({
                        left:"-1750px"
                    },550,'easeInCubic', function(){})
                    firstSpl = true;
                }
            }
            if(_.n > 0 && firstSpl == true){
                $('header').stop(true).delay(5).animate({
                    top:'-269px', 
                    left:'0px'
                }, 450, 'easeOutCubic');
                $('.bordaMenu').stop(true).animate({
                    height:'143px', 
                    top:'24px'
                }, 450, 'easeOutCubic');
                $('.fundoMenu').stop(true).animate({
                    height:'127px', 
                    top:'30px'
                }, 450, 'easeOutCubic');
                $('.social').stop(true).hide();
                $('.idioma').stop(true).hide();
                firstSpl = false;
                conteudo.stop().css({
                    display:'block'
                });
            }
            if(_.n == 0 && firstSpl == false){
                $('header').stop(true).delay(255).animate({
                    top:'20px', 
                    left:'0px'
                }, 350, 'easeOutSine').animate({
                    top:'0px', 
                    left:'0px'
                }, 450, 'easeOutSine');
                $('.bordaMenu').stop(true).delay(250).animate({
                    height:'161px', 
                    top:'290px'
                }, 500, 'easeOutBack');
                $('.fundoMenu').stop(true).delay(250).animate({
                    top:'294px'
                }, 500, 'easeOutBack');
                $('.social').stop(true).show();
                $('.idioma').stop(true).show();
                $('.social').css({
                    top:'314px', 
                    opacity:0
                }).stop(true).delay(500).animate({
                    top:'420px', 
                    opacity:1
                }, 350, 'easeOutSine').animate({
                    top:'414px', 
                    opacity:1
                }, 300, 'easeOutSine');
                _.prev.stop().animate({
                    left:"1500px"
                },250,'easeInSine');
                conteudo.stop().css({
                    display:'block'
                });
                $('.idioma').css({
                    top:'314px', 
                    opacity:0
                }).stop(true).delay(500).animate({
                    top:'420px', 
                    opacity:1
                }, 350, 'easeOutSine').animate({
                    top:'410px', 
                    opacity:1
                }, 300, 'easeOutSine');
                _.prev.stop().animate({
                    left:"1500px"
                },250,'easeInSine');
                conteudo.stop().css({
                    display:'block'
                });
                firstSpl = true;
            }  
        },
        preFu:function(_)
        {
            $('.menu').css({
                right:'-1500px'
            }).delay(950).animate({
                right:'15px'
            }, 500, 'easeOutExpo').animate({
                right:'0px'
            }, 500, 'easeOutSine');
            $('.bordaMenu').css({
                height:'0px', 
                top:'367px'
            }).stop(true).delay(700).animate({
                height:'161px', 
                top:'290px'
            }, 500, 'easeOutBack');
            $('.fundoMenu').css({
                height:0, 
                top:'280px'
            }).stop(true).delay(900).animate({
                height:120, 
                top:'300px'
            }, 425, 'easeOutSine').animate({
                height:127, 
                top:'294px'
            }, 425, 'easeOutSine');
            $('#logo').css({
                left:'-1500px'
            }).delay(950).animate({
                left:'15px'
            }, 500, 'easeOutExpo').animate({
                left:'0px'
            }, 400, 'easeOutSine');
            $('.social').css({
                top:'314px', 
                opacity:0
            }).stop(true).delay(1200).animate({
                top:'420px', 
                opacity:1
            }, 350, 'easeOutSine').animate({
                top:'414px', 
                opacity:1
            }, 300, 'easeOutSine');
            conteudo.css({
                display:'block'
            });	
            $('.idioma').css({
                top:'314px', 
                opacity:0
            }).stop(true).delay(1200).animate({
                top:'420px', 
                opacity:1
            }, 350, 'easeOutSine').animate({
                top:'410px', 
                opacity:1
            }, 300, 'easeOutSine');
            conteudo.css({
                display:'block'
            });	
            _.li.css({
                left:"2000px"
            })			
        }
    })
    //Main menu---------------------------------------------------------------------------------------------------    
    nav.navs({
        useHash:true,
        hover:'sprites',
        defHash:'#!/inicio',
        hoverIn:function(li){
            $(".mBotoes", li).stop().animate({
                color:"#fff"
            },750,'easeOutExpo');
        },
        hoverOut:function(li){
            if ((!li.hasClass('with_ul')) || (!li.hasClass('sfHover'))) {
                $(".mBotoes", li).stop().animate({
                    color:"#302f2f"
                },500,'easeOutExpo'); 
            } 
        }				
    })	  
    nav.navs(function(n, _){
        conteudo.tabs(n);
    })	     
})