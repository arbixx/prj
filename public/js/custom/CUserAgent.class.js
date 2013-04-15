/**
 * Class: CUserAgent
 * 
 * Implements the handling of user agent
 * 
 */
function CUserAgent() {
    
    var szUserAgent = null;
    
    
    
    /** Getters and Setters */
    this.getUserAgent = function(){
        return szUserAgent;
    }
    
    this.setUserAgent = function(szUA){
        szUserAgent = szUA;
    }
    
}