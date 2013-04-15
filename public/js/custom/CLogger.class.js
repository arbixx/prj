/**
 * Class: CLogger
 * 
 * Implements a simple logger class based upon console.log and alert (if console.log not available). Dummy mod.
 * 
 * 
 */
function CLogger(){
    
    this.debug(msg){
        this.write('DEBUG',msg);
    }
    
    this.info(msg){
        this.write('INFO',msg);
    }
    
    this.warn(msg){
        this.write('WARN',msg);
    }
        
    this.error(msg){
        this.write('ERROR',msg);
    }
        
    this.write(level,msg){
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