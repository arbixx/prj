/**
 * Class: CLogger
 * 
 * Implements a simple logger class based upon console.log and alert (if console.log not available). Dummy mod.
 * 
 * 
 */
function CLogger(){
    
    this.debug = function(msg){
        this.write('DEBUG',msg);
    }
    
    this.info = function(msg){
        this.write('INFO',msg);
    }
    
    this.warn = function(msg){
        this.write('WARN',msg);
    }
        
    this.error = function(msg){
        this.write('ERROR',msg);
    }
        
    this.write = function(level,msg){
        write('['+level+'] '+msg);
    }
    
    function write(msg){
        if ( typeof console !== 'undefined' ){
            console.log(msg);
        }
        else
            alert(msg);
    }
    
}