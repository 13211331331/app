var BDBridge = window.BDBridge || (function(){

    var self;
    var CONFIG = {
        BD_BRIDGE_OPEN : 1,
        BD_BRIDGE_ROOT : "http://qiao.baidu.com/v3/"
    };

    document.cookie = 'VERSION=2,0,0,0';
    
    if ((CONFIG.BD_BRIDGE_OPEN == 1) && (typeof window["BD_BRIDGE_LOADED"] == "undefined")) {
        window["BD_BRIDGE_LOADED"] = 1;
        var script = document.createElement("script");
        script.type="text/javascript";
        script.charset = "UTF-8";
        script.src = CONFIG.BD_BRIDGE_ROOT + "asset/js/bw.js?v=20131213";
        document.getElementsByTagName("head")[0].appendChild(script);
    }
    
    
    return self = {
    
        BD_BRIDGE_OPEN : CONFIG.BD_BRIDGE_OPEN,
        BD_BRIDGE_ROOT : CONFIG.BD_BRIDGE_ROOT,
        BD_BRIDGE_RCV_ROOT : "http://r.qiao.baidu.com/",
        BD_BRIDGE_DATA : {mainid : "120193457", SITE_ID : "05adaf3d4aafab839c8c3a066b0e8486", siteid : "2882456", userName: '海能达'},
        OPEN_MODULAR : 11111,
                BD_BRIDGE_SPECIAL :  [] ,
        
                BD_BRIDGE_STYLE_ITEM : 
        [        {
            pageid : "0",
            
           
                        BD_BRIDGE_GROUP:  [ '0' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "0" - 0,
                background : {
                    color : "",
                    url   : "http://qiao.baidu.com/style/457/120193457/1/iconbg.jpg",
                    bgcolor : "#275f87"
                },
                head : {
                    url    : "",
                    width  : "150" - 0,
                    height : "77" - 0
                },
                button : {
                    color : "#f7bd84",
                    url   : "",
                    text  : "#bd4b13"
                },
                flow     : "1" - 0,
                position : "4" - 0,
                special : "0"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "1" - 0,
                show : {
                    pos : "0" - 0,
                    width : "320" - 0,
                    height : "150" - 0,
                    font : "宋体",
                    fontsize : "12",
                    fontcolor : "#000000",
                    type : "1" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "1" - 0,
                    size : "1" - 0,
                    url  : ""
                },
                text   : "欢迎您，有什么可以帮助您的么？",
                button : "#f87a1a",
                mode   : "0" - 0,
                special : "0" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "0" - 0,
                invitemanual : "1" - 0,
                invitetype   : "1" - 0,
                inviterepeat : "0" - 0,
                invitetime   : "30" - 0,
                invitedisaptype : "1" - 0,
                invitedisaptime : "10" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "0" - 0,
                webimbgcolor  : "#d5d5d5",
                floatposition : "0" - 0,
                floatChatName : "2" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "0" - 0,
                messType        : 1,
                messFloatType   : "0" - 0,
                language        : "0" - 0,
                position        : "1" - 0,
                backgroundColor : "",
                backgroundUrl       : "http://qiao.baidu.com/v3/res/messbg/02.png", 
                messItemName    : "1",
                messItemPhone   : "1",
                messItemAddress : "2",
                messItemEmail   : "0",
                extraMessItems  :  [] 
            }
        }        ]
        
    }
   


})();
