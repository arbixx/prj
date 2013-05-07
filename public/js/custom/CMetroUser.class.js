/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function CMetroUser() {
 
 /** object field names */
 var FIELD_ID               = "id";
 var FIELD_LOGIN            = "login";
 var FIELD_PWD              = "pwd";
 var FIELD_EMAIL            = "email";
 var FIELD_DESC             = "desc";
 var FIELD_AGE              = "age";
 var FIELD_PHOTOID          = "photoid";
 var FIELD_SEXE             = "sexe";
 var FIELD_CHERCHEFEMME     = "cherchefemme";
 var FIELD_CHERCHEHOMME     = "cherchehomme";
 var FIELD_BLACKLIST        = "blacklist";
 var FIELD_ALLOWNOTIFONLINE = "allownotifonline";
 var FIELD_CONTACTFIRST     = "contactfirst";
 var FIELD_LASTONLINE       = "lastonline";
 var FIELD_TIMESTAMP        = "timestamp";
 
 var iId                = null;
 var szLogin            = null;
 var szPwd              = null;
 var szEmail            = null;
 var szDesc             = null;
 var iAge               = null;
 var iPhotoId           = null;
 var szSexe             = null;
 var bCherchefemme      = null;
 var bCherchehomme      = null;
 var szBlacklist        = null;
 var bAllownotifonline  = null;
 var bContactfirst      = null;
 var dLastonline        = null;
 var dTimestamp         = null;
 
 
 /** Getter and setter */
 this.setId = function(id){ iId = id; }
 this.getId = function(){ return iId; }
 this.setLogin = function(login){ szLogin = login; }
 this.getLogin = function(){ return szLogin; }
 this.setPwd = function(pwd){ szPwd = pwd; }
 this.getPwd = function(){ return szPwd; }
 this.setEmail = function(email){ szEmail = email; }
 this.getEmail = function(){ return szEmail; }
 this.setDesc = function(d){ szDesc = d; }
 this.getDesc = function(){ return szDesc; }
 this.setAge = function(a){ iAge = a; }
 this.getAge = function(){ return iAge; }
 this.setPhotoId = function(pid){ iPhotoiId = pid; }
 this.getPhotoId = function(){ return iPhotoId; }
 this.setSexe = function(s){ szSexe = s; }
 this.getSexe = function(){ return szSexe; }
 this.setCherchefemme = function(cf){ bCherchefemme = cf; }
 this.getCherchefemme = function(){ return bCherchefemme; }
 this.setCherchehomme = function(ch){ bCherchehomme = ch; }
 this.getCherchehomme = function(){ return bCherchehomme; }
 this.setBlacklist = function(bl){ szBlacklist = bl; }
 this.getBlacklist = function(){ return szBlacklist; }
 this.setAllownotifonline = function(ano){ bAllownotifonline = ano; }
 this.getAllownotifonline = function(){ return bAllownotifonline; }
 this.setContactfirst = function(cf){ bContactfirst = cf; }
 this.getContactfirst = function(){ return bContactfirst; }
 this.setlastonline = function(lo){ dLastonline = lo; }
 this.getLastonline = function(){ return dLastonline; }
 this.setTimestamp = function(ts){ dTimestamp = ts; }
 this.getTimestamp = function(){ return dTimestamp; }
 
 /** utility methods */
 this.setUserFromJSON = function( jsonObj ){
     for( var key in jsonObj ){
         oLogger.info("Key: "+key);
         switch(key){
             case FIELD_AGE: this.setAge(jsonObj[key]); break;
             case FIELD_ALLOWNOTIFONLINE: this.setAllownotifonline(jsonObj[key]); break;
             case FIELD_BLACKLIST: this.setBlacklist(jsonObj[key]); break;
             case FIELD_CHERCHEFEMME: this.setCherchefemme(jsonObj[key]); break;
             case FIELD_CHERCHEHOMME: this.setCherchehomme(jsonObj[key]); break;
             case FIELD_CONTACTFIRST: this.setContactfirst(jsonObj[key]); break;
             case FIELD_DESC: this.setDesc(jsonObj[key]); break;
             case FIELD_EMAIL: this.setEmail(jsonObj[key]); break;
             case FIELD_ID: this.setId(jsonObj[key]); break;
             case FIELD_LASTONLINE: this.setlastonline(jsonObj[key]); break;
             case FIELD_LOGIN: this.setLogin(jsonObj[key]); break;
             case FIELD_PHOTOID: this.setPhotoId(jsonObj[key]); break;
             case FIELD_PWD: this.setPwd(jsonObj[key]); break;
             case FIELD_SEXE: this.setSexe(jsonObj[key]); break;
             case FIELD_TIMESTAMP: this.setTimestamp(jsonObj[key]); break;
             default:
                 oLogger.info("Unknown key:"+key+"... Proceeding.");
         }
     }
 }
 
 this.getHTML = function(){
    return '<li><a href="#">'+szLogin+'</a></li>';
 }
}

