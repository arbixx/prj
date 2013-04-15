/**
 * Class: CUserAgent
 * 
 * Implements the handling of user agent
 * 
 */
function CUserAgent() {
    
    var szUserAgent = null;
    
    
    this.isAndroid = function(){
        if ( szUserAgent !== null && typeof(szUserAgent) != 'undefined'){
            if (szUserAgent.indexOf("android") > -1)
                return true;
        }
        else{
            //TODO: handle this case
        }
        return false;
    }
    
    this.isIphone = function(){
        if ( szUserAgent !== null && typeof(szUserAgent) != 'undefined'){
            if (szUserAgent.indexOf("iphone") > -1)
                return true;
        }
        else{
            //TODO: handle this case
        }
        return false;
    }
    
    this.isIpad = function(){
        if ( szUserAgent !== null && typeof(szUserAgent) != 'undefined'){
            if (szUserAgent.indexOf("ipad") > -1)
                return true;
        }
        else{
            //TODO: handle this case
        }
        return false;
    }
    
    
    /** Getters and Setters */
    this.getUserAgent = function(){
        return szUserAgent;
    }
    
    this.setUserAgent = function(szUA){
        szUserAgent = szUA.toLowerCase();
    }
    
}