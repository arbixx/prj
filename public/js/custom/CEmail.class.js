/**
 * Class: CEmail
 * 
 * Implements an eùail class that holds email validation logic (and more to come)
 * 
 */
function CEmail() {
 
 var szEmail = null;
 
 /**
  * Email validation
  */
 this.isValid = function(){
     if (szEmail !== null && typeof szEmail != 'undefined'){
        var emailRegExp = /\S+@\S+\.\S+/;
        return emailRegExp.test(szEmail);
     }
     else{
        oLogger.error("Trying to validate email '"+szEmail+"' while not defined. Returning false and proceeding...");     
     }
     return false;
 } 
 
 /** Getter and setter */
 this.setEmail = function(email){
     szEmail = email;
 }
 
 this.getEmail = function(){
     return szEmail;
 }
    
    
}
